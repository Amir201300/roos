<?php

namespace App\Reposatries;

use App\Http\Resources\UserResource;
use App\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Validator, Auth, Artisan, Hash, File, Crypt;

class UserReposatry implements UserInterface
{
    use \App\Traits\ApiResponseTrait;

    /**
     * @param $request
     * @return User|mixed
     */
    public function register($request)
    {
        $lang = $request->header('lang');
        $user = new User();
        $user->firstName = $request->firstName;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->lastName = $request->lastName;
        $user->country_id = $request->country_id;
        $user->status = 0;
        $user->active_code = 12345;
        $user->lang = $lang;
        $user->password = Hash::make($request->password);
        $user->save();
        $token = $user->createToken('TutsForWeb')->accessToken;
        $user['user_token'] = $token;
        // send_email_with_code($user,1,'verification_email');
        return $user;
    }

    /***
     * @param $request
     * @param $user_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function validate_user($request, $user_id)
    {
        $lang = Auth::check() ? get_user_lang() : $request->header('lang');
        $input = $request->all();
        $validationMessages = [
            'firstName.required' => $lang == 'ar' ? 'من فضلك ادخل الاسم' : "first name is required",
            'lastName.required' => $lang == 'ar' ? 'من فضلك ادخل الاسم' : "last name is required",
            'password.required' => $lang == 'ar' ? 'من فضلك ادخل كلمة السر' : "password is required",
            'email.required' => $lang == 'ar' ? 'من فضلك ادخل البريد الالكتروني' : "email is required",
            'email.unique' => $lang == 'ar' ? 'هذا البريد الالكتروني موجود لدينا بالفعل' : "email is already taken",
            'username.unique' => $lang == 'ar' ? 'اسم المستخدم موجود لدينا بالفعل' : "username is already taken",
            'email.regex' => $lang == 'ar' ? 'من فضلك ادخل بريد الكتروني صالح' : 'The email must be a valid email address',
            'phone.required' => $lang == 'ar' ? 'من فضلك ادخل  رقم الهاتف' : "phone is required",
            'phone.unique' => $lang == 'ar' ? 'رقم الهاتف موجود لدينا بالفعل' : "phone is already teken",
            'phone.min' => $lang == 'ar' ? 'رقم الهاتف يجب ان لا يقل عن 7 ارقام' : "The phone must be at least 7 numbers",
            'phone.numeric' => $lang == 'ar' ? 'رقم الهاتف يجب ان يكون رقما' : "The phone must be a number",
            'username.required' => $lang == 'ar' ? 'من فضلك ادخل اسم المستخدم' : "username is required",
        ];

        $validator = Validator::make($input, [
            'lastName' => 'required',
            'firstName' => 'required',
            'country_id' => 'required|exists:countries,id',
            'phone' => $user_id == 0 ? 'required|unique:users' : 'required|unique:users,phone,' . $user_id,
            'email' => $user_id == 0 ? 'required|unique:users|regex:/(.+)@(.+)\.(.+)/i' : 'required|unique:users,email,' . $user_id . '|regex:/(.+)@(.+)\.(.+)/i',
            'password' => $user_id != 0 ? '' : 'required',
        ], $validationMessages);

        if ($validator->fails()) {
            return $this->apiResponseMessage(0, $validator->messages()->first(), 2500);
        }
    }


    /***
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response|mixed
     */
    public function login($request)
    {
        $lang = $request->header('lang');
        $user = User::where('country_id',$request->country_id)->where(function ($q) use ($request) {
            $q->where('phone', $request->phone);
        })->first();
        if (is_null($user)) {
            $msg = $lang == 'ar' ? 'البيانات المدخلة غير موجودة لدينا ' : 'user does not exist';
            return $this->apiResponseMessage(0, $msg, 200);
        }
        $password = Hash::check($request->password, $user->password);
        if ($password == false) {
            $msg = $lang == 'ar' ? 'كلمة السر غير صحيحة' : 'Password is not correct';
            return $this->apiResponseMessage(0, $msg, 200);
        }
        if ($request->fire_base) {
            $user->fire_base = $request->fire_base;
            $user->save();
        }
        $token = $user->createToken('TutsForWeb')->accessToken;
        $user['user_token'] = $token;

        $msg = $lang == 'ar' ? 'تم تسجيل الدخول بنجاح' : 'login success';
        return $this->apiResponseData(new UserResource($user), $msg, 200);
    }

    /***
     * @param $request
     * @param $user
     * @return mixed
     */
    public function edit_profile($request, $user)
    {
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->country_id = $request->country_id;
        $user->save();
        return $user;
    }
}
