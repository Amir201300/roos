<?php

namespace App\Reposatries;

use App\Interfaces\HandleDataInterface;

class HandleDataReposatry implements HandleDataInterface{
    use \App\Traits\ApiResponseTrait;

    /**
     * @param $model
     * @param $request
     * @param $resource
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|mixed
     */
    public function getAllData($model, $request,$resource)
    {
        $page=$request->page * 20;
        $lang=$request->header('lang');
        $is_paginate=$model->count()  - ( $page + 20)> 0 ? true : false;
        $data=$model->skip($page)->take(20)->get();
        $msg=$lang=='en' ? 'success' : 'تمت العملية بنجاح';
        return $this->apiResponseData($resource::collection($data),$msg,200,$is_paginate);
    }

    /**
     * @param $model
     * @param $request
     * @param $resource
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|mixed
     */
    public function getAllDataDashboard($model, $request,$resource)
    {
        $lang=$request->header('lang');
        $data=$model->get();
        $msg=$lang=='en' ? 'success' : 'تمت العملية بنجاح';
        return $this->apiResponseData($resource::collection($data),$msg,200);
    }

    /**
     * @param $model
     * @param $model_id
     * @param $request
     * @param $resource
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function getSingleDsta($model, $model_id, $request, $resource)
    {
        $lang=$request->header('lang');
        $data=$model::find($model_id);
        if(is_null($data))
        {
            return $this->not_found_v2($lang);
        }
        $msg=$lang=='en' ? 'success' : 'تمت العملية بنجاح';
        return $this->apiResponseData(new $resource($data),$msg,200);
    }

    /**
     * @param $model
     * @param $model_id
     * @param $request
     * @param $fileName
     * @param $folderName
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response|mixed
     */
    public function deleteData($model, $model_id, $request,$folderName=null)
    {
        $lang=$request->header('lang');
        $data=$model::find($model_id);
        if(is_null($data))
        {
            return $this->not_found_v2($lang);
        }
        $folderName != null ? deleteFile($folderName,$model->image) : '';
        $data->delete();
        $msg=$lang=='en' ? 'deleted successfully' :'تم الحذف بنجاح'  ;
        return $this->apiResponseMessage(0,$msg,200);
    }
}