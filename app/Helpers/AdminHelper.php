<?php
/**
 * @return string
 */
function getLogo(){
    return '/Admin/logo.png';
}

/**
 * @param $image
 * @return mixed|string
 */
function getAdminImage($image){
    if($image)
        return get_user_lang('Admin',$image);
    return defaultImages(2);
}


function getCurrency(){
    return 'LE';
}

function getNameInIndexPage(){
    return 'متجر النخبة';
}


function getMoneyModelType($type){
    if($type == 1)
        $name='يومية';
    if($type == 5)
        $name='فواتير';
    if($type == 4)
        $name='موظفين';

    return $name;
}

/**
 * @return array
 */
function getMoneyModelTypes(){
    return [
      [
          'يومية',
          1
      ],
        [
            'عملاء',
            2
        ],
        [
            'موردون',
            3
        ],
        [
            'موظفين',
            4
        ],
        [
            'فواتير',
            5
        ],
        [
            'بنوك',
            7
        ],
    ];
}

function getCounts($model){
    return $model->count();
}


