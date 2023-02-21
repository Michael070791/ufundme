<?php


namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\FundraiserModel;
use Ramsey\Uuid\Uuid;
use App\Models\DonateModel;
class Fundraiser extends BaseController
{
    public function create(){
        
        $model = new FundraiserModel();
        if($this->request->getMethod() == 'post'){
           $uid = Uuid::uuid4();
           $id = str_replace('-', '', $uid);

             $fundraiseData = [
                'uid' => $id,
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
                'title' => $this->request->getVar('title'),
                'active' => 0,
            ];

            $result = $model->save($fundraiseData);
            if(!is_null($result)){
                session()->setFlashdata('message', 'Fundraiser successfuly created');
            }
        }
        return view('fundraiser/create');
    }

    //edit fund
    public function edit($id){
        $data = [];
        $model = new FundraiserModel();
        $data['fund'] = $model->where('id', $id)->first();
        $item = $model->where('id', $id)->first();
        //post image
        if(isset($_POST['upload'])){
            $validateImage = $this->validate([
                'file' => [
                    'uploaded[file]',
                    'mime_in[file, image/png, image/jpg,image/jpeg, image/gif]',
                    'max_size[file, 4096]'
                ],
            ]);
            if(!$validateImage){
               session()->setFlashdata('error', 'Validation error');
            }
            if($img = $this->request->getFile('file'))
            {
                if (!$img->hasMoved()){

                    session()->setFlashdata('error', 'Image not saved');
                }
                    $img->move('funds');
                    $data = [
                    'img_name' => $img->getClientName(),
                    'file'  => $img->getClientMimeType()
                    ];

                    if(!empty($data['img_name'])){

                        $editedData = [
                            'image' => "/funds/".$data['img_name']
                        ];
                        $model->update($item['id'],$editedData);

                        session()->setFlashdata('message', 'Image uploaded successfully');

                        return redirect()->to('user-funds');
                    }
                
            }else{
                session()->setFlashdata('error', 'Image not  uploaded Try again');
                
            }
        }
        else if(isset($_POST['updateDetails'])){

            $editedData = [
                'organisation' => $this->request->getVar('organisation'),
                'cause' => $this->request->getVar('cause'),
                'email' => session()->get('email'),
                'country' => $this->request->getVar('country'),
                'city' => $this->request->getVar('city'),
                'address_one' => $this->request->getVar('address1'),
                'address_two' => $this->request->getVar('address2'),
                'phone_number' => session()->get('phone_number'),
                'title' => $this->request->getVar('title')
            ];

            $model->update($item['id'],$editedData);

            return redirect()->to('user-funds');
        }

        return view('fundraiser/edit', $data);
    }

    //fund details
    public function detail($id){
        $model = new FundraiserModel();
        $donatModel = new DonateModel();
        $userModel = new UserModel();

        $item = $model->where('id', $id)->where('active', 1)->first();
        if(!is_null($item)){

            $data['fund'] = $item;
            $data['donations'] = $donatModel->where('fund_id', $item['id'])->findAll();
            $data['organiser'] = $userModel->where('id', $item['user_id'])->first();
            return view('fundraiser/detail', $data);
        }
        session()->setFlashdata('error', 'Oops record broken or not found');
    }

     //delete fund
     public function deleteFund($id = null){
        $data = [];
        $model = new FundraiserModel();
        if($model->delete($id)){
            $data['userFunds'] = $model->where('email', session()->get('email'))->findAll();
            
            return view('profile/dashboard', $data);
        }
    }

    public function fundraisers(){
        $data = [];
        $model = new FundraiserModel();
        $data['fundraisers'] = $model->where('active', 1)->findAll();

        return view('fundraiser/fundraisers', $data);
    }

    public function donate($id = null){

        $data = [];
        $model = new FundraiserModel();
        $userModel = new UserModel();
        $fundraise = $model->where('id', $id)->first();
        $data['fundraise'] = $fundraise;
        $data['author'] = $userModel->where('id', $fundraise['user_id'])->first();
        if(is_null($fundraise)){
            session()->setFlashdata('error', 'opps something went wrong try again..');
            return redirect()->to('/');
        }
        
        if(isset($_POST['pay'])){
            //TODO::payment logic here
            
        }
        return view('fundraiser/donate', $data);
    }


}