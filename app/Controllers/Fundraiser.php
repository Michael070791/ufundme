<?php


namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\FundraiserModel;

class Fundraiser extends BaseController
{
    public function create(){

        $model = new FundraiserModel();
        if($this->request->getMethod() == 'post'){

            $fundraiseData = [

                'user_id' => session()->get('id'),
                'organisation' => $this->request->getVar('organisation'),
                'cause' => $this->request->getVar('cause'),
                'email' => session()->get('email'),
                'country' => $this->request->getVar('country'),
                'city' => $this->request->getVar('city'),
                'address_one' => $this->request->getVar('address1'),
                'address_two' => $this->request->getVar('address2'),
                'phone_number' => session()->get('phone_number'),
                'target_amount' => $this->request->getVar('amount'),
                'active' => 0,
            ];
            session()->setFlashdata('message', 'Fundraiser succesffuly created');
            $model->save($fundraiseData);

        }
        return view('fundraiser/create');
    }
    public function edit($id){
        $data = [];
        $model = new FundraiserModel();
        $data['fund'] = $model->where('id', $id)->first();



        return view('fundraiser/edit', $data);
    }

    public function fundraisers(){
        $data = [];
        $model = new FundraiserModel();
        $data['fundraisers'] = $model->where('active', 1)->findAll();

        return view('fundraiser/fundraisers', $data);
    }


}