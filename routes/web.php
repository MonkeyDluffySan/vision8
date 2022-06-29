<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function (){
    return 'homePage';
});

route::get("about/{name}/age/{age}",function($name, $age){
    return 'About '. $name .'and ur age is '.$age;
})->whereAlpha('name')->whereNumber('age');

route::get('news/{id?}',function($id=null){
    return 'news '. $id;

});