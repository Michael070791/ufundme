<?php

namespace App\Controllers;

use App\Models\FundraiserModel;

class Home extends BaseController
{
    public function index()
    {
        $data = [];
        $model = new FundraiserModel();
        $data['fundraisers'] = $model->where('active', 1)->findAll();
        return view('layout/default', $data);
    }
}
