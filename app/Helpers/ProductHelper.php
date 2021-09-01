<?php
/**
 * @param $level
 * @return mixed
 */
function getCats($level){
    $cats=\App\Models\Category::where('level',$level)->get();
    return $cats;
}

function getColors(){
    return \App\Models\Color::get();
}