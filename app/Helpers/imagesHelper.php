<?php

/**
 * @param string $folder
 * @param $image
 * @return string
 */
function getImageUrl(string $folder, $image)
{
    if ($image)
        return get_baseUrl() . '/images/' . $folder . '/' . $image;
    return get_baseUrl() . '/images/1.png';
}

/**
 * @param $folder
 * @param $file
 * @return string
 */
function saveImage($folder, $file)
{
    $image = $file;
    $input['image'] = mt_rand() . time() . '.' . $image->getClientOriginalExtension();
    $dist = public_path('/images/' . $folder . '/');
    $image->move($dist, $input['image']);
    return $input['image'];
}

/**
 * @param $folder
 * @param $file
 * @return int
 */
function deleteFile($folder,$file)
{
    $file = public_path('/images/'.$folder.'/'.$file);
    if(file_exists($file))
    {
        File::delete($file);
    }
    return 1;
}


function defaultImages($type){
    if($type== 1)
        return get_baseUrl() . '/images/helpers/1.png';
    if($type== 2)
        return get_baseUrl() . '/images/helpers/admin.png';
}