<?php


namespace App\Http\Controllers\Admin;

use App\Models\AdminType;
use App\Models\InvoiceSale;
use App\Models\MoneyDaily;
use App\Models\role;
use App\Models\Store;
use App\Reposatries\MoneyRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Yajra\DataTables\DataTables;
use Auth, File ,Hash;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    use \App\Traits\ApiResponseTrait;

    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function allData(Request $request)
    {
        $data = Admin::orderBy('id','desc')->where('id','!=',1);
        $data=$data->get();
        return $this->mainFunction($data);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $roles=role::where('id','!=',1)->get();
        return view('Admin.Admin.index',compact('roles'));
    }

    /**
     * @param Request $request
     * @return int
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create (Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|unique:admin|min:3',
            ],
            [
                'name.required' => 'من فضلك ادخل اسم المستخدم',
                'name.unique' => 'هذا الاسم مسجل لدينا لمستخدم اخر',
                'name.min' => 'يجب ان لا يقل عدد حروف اسم المستخدم عن ثلاثة احرف'
            ]

        );
        $Admin = new Admin;
        $Admin->name = $request->name;
        $Admin->phone = $request->phone;
        $Admin->email = $request->email;
        $Admin->password = Hash::make($request->password);
        $Admin->jop = $request->jop;
        $Admin->save();
        $this->save_role($Admin,$request->roles);
        return $this->apiResponseMessage(1,'تم اضافة الموظف بنجاح',200);
    }

    /**
     * @param $Admin
     * @param $roles
     */
    private function save_role($Admin,$roles){
        $Admin->roles()->detach();
        $Admin->roles()->attach(1);
        if($roles) {
            foreach ($roles as $row) {
                $Admin->roles()->attach($row);
            }
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $Admin = Admin::find($id);
        $Admin['roles_ids']=adminsRoleArray($Admin);
        return $Admin;
    }

    /**
     * @param Request $request
     * @return int
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|unique:admin,name,'.$request->id.'|min:3',
            ],
            [
                'name.required' => 'من فضلك ادخل اسم المستخدم',
                'name.unique' => 'هذا الاسم مسجل لدينا لمستخدم اخر',
                'name.min' => 'يجب ان لا يقل عدد حروف اسم المستخدم عن ثلاثة احرف'
            ]

        );
        $Admin = Admin::find($request->id);
        $Admin->name = $request->name;
        $Admin->phone = $request->phone;
        $Admin->email = $request->email;
        if($request->password)
            $Admin->password = Hash::make($request->password);
        $Admin->jop = $request->jop;
        $Admin->save();
            $this->save_role($Admin,$request->roles);
        return $this->apiResponseMessage(1,'تم تعديل الموظف بنجاح',200);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|int
     */
    public function destroy($id,Request $request)
    {
        if ($request->type == 2) {
            $ids = explode(',', $id);
            $Categories = Admin::whereIn('id', $ids)->where('id','!=',1)->get();
            foreach($Categories as $row){
                $row->delete();
            }
        } else {
            $Admin = Admin::find($id);
            if (is_null($Admin)) {
                return 5;
            }
            $Admin->delete();
        }
        return response()->json(['errors' => false]);
    }

    /**
     * @param $admin_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showProfile ($admin_id){
        $admin=Admin::find($admin_id);
        return view('Admin.Admin.AdminProfile.profile',compact('admin'));
    }


    /**
     * @param $data
     * @return mixed
     * @throws \Exception
     */
    private function mainFunction($data)
    {
        return Datatables::of($data)->addColumn('action', function ($data) {
            $options = '<td class="sorting_1"><button  class="btn btn-info waves-effect btn-circle waves-light" onclick="editFunction(' . $data->id . ')" type="button" ><i class="fa fa-spinner fa-spin" id="loadEdit_' . $data->id . '" style="display:none"></i><i class="sl-icon-wrench"></i></button>';
           if($data->id != 1)
               $options .= ' <button type="button" onclick="deleteFunction(' . $data->id . ',1)" class="btn btn-dribbble waves-effect btn-circle waves-light"><i class="sl-icon-trash"></i> </button></td>';
            return $options;
        })->addColumn('checkBox', function ($data) {
            $checkBox = '<td class="sorting_1">' .
                '<div class="custom-control custom-checkbox">' .
                '<input type="checkbox" class="mybox" id="checkBox_' . $data->id . '" onclick="check(' . $data->id . ')">' .
                '</div></td>';
            return $checkBox;
        })->rawColumns(['action' => 'action', 'type_id' => 'type_id','checkBox'=>'checkBox','image'=>'image'])->make(true);
    }
}
