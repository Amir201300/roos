<?php

namespace App\Http\Controllers\Api;

use App\Interfaces\UserInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Auth,Artisan,Hash,File,Crypt;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Controllers\Manage\EmailsController;

class UserController extends Controller
{
    use \App\Traits\ApiResponseTrait;

    /**
     * @param Request $request
     * @param UserInterface $userFunction
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function register(Request $request,UserInterface $userFunction)
    {
        $lang = $request->header('lang');
        $validate_user=$userFunction->validate_user($request,0);
        if(isset($validate_user)){
            return  $validate_user;
        }
        $user=$userFunction->register($request);
        $msg=$lang == 'ar' ? 'تم التسجيل بنجاح' : 'register success';
        return $this->apiResponseData(new UserResource($user),$msg,200);
    }


    /**
     * @param Request $request
     * @param UserInterface $user
     * @return mixed
     */
    public function login(Request $request,UserInterface $user)
    {
        return $user->login($request);
    }

    /***
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function change_password(Request $request)
    {
        $lang = get_user_lang();
        $user = Auth::user();
        if(!$request->newPassword){
            $msg=$lang=='ar' ? 'يجب ادخال كلمة السر الجديدة' : 'new password is required';
            return $this->apiResponseMessage(0,$msg,200);
        }
        $password=Hash::check($request->oldPassword,$user->password);
        if($password==true){
            $user->password=Hash::make($request->newPassword);
            $user->save();
            $msg=$lang=='ar' ? 'تم تغيير كلمة السر بنجاح' : 'password changed successfully';
            return $this->apiResponseMessage( 1,$msg, 200);

        }else{
            $msg=$lang=='ar' ? 'كلمة السر القديمة غير صحيحة' : 'invalid old password';
            return $this->apiResponseMessage(0,$msg, 401);
        }
    }

    /***
     * @param Request $request
     * @param UserInterface $userFunction
     * @return \Illuminate\Http\JsonResponse|mixed
     */

    public function edit_profile(Request $request,UserInterface $userFunction)
    {
        $user = Auth::user();
        $lang = get_user_lang();
        $validate_user=$userFunction->validate_user($request,$user->id);
        if(isset($validate_user)){
            return  $validate_user;
        }
        $user=$userFunction->edit_profile($request,$user);
        $msg=$lang=='ar' ?  'تم التعديل بنجاح' :'Edited successfully' ;
        return $this->apiResponseData(  new UserResource($user),  $msg);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function my_info(Request $request)
    {
        $lang = get_user_lang();
        $user=Auth::user();
        $msg=$lang=='ar' ?  'تمت العملية بنجاح' :'success' ;
        return $this->apiResponseData(new UserResource($user),$msg);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */

    public function forget_password(Request $request){
        $user=User::where('email',$request->email)->first();
        if(is_null($user)){
            $lang=$request->header('lang');
            $msg=$lang=='en' ? 'email not found' : 'البريد الالكتروني غير موجود لدينا';
            return $this->apiResponseMessage(0,$msg,200);
        }
        $code=mt_rand(999,9999);
        $user->password_code=$code;
        $user->save();
        $lang=$user->lang;
        send_email_with_code($user,2,'forget_password');
        $token = $user->createToken('TutsForWeb')->accessToken;
        $user['user_token']=$token;
        $msg=$lang=='en' ? 'code sent to your email' : 'تم ارسال كود اعادة كلمة السر الي بريدك الالكتروني';
        return $this->apiResponseData(new UserResource($user),$msg,200);
    }

    /****
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function reset_password(Request $request)
    {
        $user=Auth::user();
        $lang=$user->lang;
        if(!$request->password){
            $msg=$lang =='en'? 'please enter new password'  : 'من فضلك ادخل كلمة السر الجديدة' ;
            return $this->apiResponseMessage(0,$msg,200);
        }
        if($request->password != $request->password_confirm){
            $msg= $lang =='en' ? 'The password confirmation does not match' :  'كلمتا السر غير متطابقتان'  ;
            return $this->apiResponseMessage(0,$msg,200);
        }
        $user->password=Hash::make($request->password);
        $user->save();
        $msg=$lang=='en' ? 'password updated successfully' : 'تم تغيير كلمة السر بنجاح' ;
        return $this->apiResponseMessage(1,$msg,200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function check_password_code(Request  $request)
    {
        $user=Auth::user();
        $lang=$user->lang;
        if($request->code != $user->password_code)
        {
            $msg=$lang =='en' ? 'code not correct' :'الكود غير صحيح' ;
            return $this->apiResponseMessage(0,$msg,200);
        }
        $user->password_code=null;
        $user->save();
        $msg=$lang=='en'  ? 'code correct' : 'الكود صحيح' ;
        return $this->apiResponseMessage(1,$msg,200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function check_active_code(Request  $request)
    {
        $user=Auth::user();
        $lang=$user->lang;
        if($request->code != $user->active_code)
        {
            $msg=$lang =='en' ? 'code not correct' :'الكود غير صحيح' ;
            return $this->apiResponseMessage(0,$msg,200);
        }
        $user->active_code=null;
        $user->status=1;
        $user->save();
        $msg=$lang=='en'  ? 'code correct' : 'الكود صحيح' ;
        return $this->apiResponseMessage(1,$msg,200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function change_lang(Request $request){
        $user=Auth::user();
        $user->lang=$request->lang;
        $user->save();
        $msg=get_user_lang()=='en' ? 'language updated successfully' : 'تم تغيير اللغة بنجاح';
        return $this->apiResponseData(new UserResource($user),$msg,200);
    }

    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function logout()
    {
        $user = Auth::user();
        $lang = get_user_lang();
        $user->fire_base = null;
        $user->save();
        $user->tokens->each(function ($token, $key) {
            $token->delete();
        });
        $msg = $lang == 'ar' ? 'تم تسجيل الخروج بنجاح' : 'logout successfully';
        return $this->apiResponseMessage(1, $msg, 200);
    }
}
