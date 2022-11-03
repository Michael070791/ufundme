<?php


namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;

class Fundraiser extends BaseController
{
    public function create(){
        return view('fundraiser/create');
    }

}