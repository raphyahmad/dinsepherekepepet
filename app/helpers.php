<?php

use App\Models\beverage;
use App\Models\dessert;
use App\Models\food;
use App\Models\partner;
use App\Models\section;
use App\Models\Setting;

function get_setting_value($key){
    $data = Setting::where('key', $key)->first();
    return $data->value ?? 'empty';
}

function get_section_data($key){
    $data = section::where('post_as', $key)->first();
    if(isset($data)){
        return $data;
}}


function get_foods()
{
    $data = food::all();
    return $data;
}

function get_drinks()
{
    $data = beverage::all();
    return $data;
}

function get_desserts()
{
    $data = dessert::all();
    return $data;
}