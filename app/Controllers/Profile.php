<?php


namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\FundraiserModel;

class Profile extends BaseController
{
    public function index()
    {
        return view('profile/dashboard');
    }

    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password don't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('login', [
                    "validation" => $this->validator,
                ]);

            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();
                switch ($user['admin']) {
                    case '1':
                        $this->setUserSession($user);
                        return redirect()->to(base_url('admin'));
                        break;
                    
                    default:
                        $this->setUserSession($user);
                        return redirect()->to(base_url('/'));
                        break;
                }

                return redirect()->to(base_url('/'));

            }
        }
        return view('profile/login');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'phone_number' => $user['phone_number'],
            'image' => $user['image'],
            'email' => $user['email'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function funds()
    {
        $data = [];
        $model = new UserModel();
        $fundraiseModel = new FundraiserModel();

        $data['userFunds'] = $fundraiseModel->where('email', session()->get('email'))->findAll();
        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('profile/dashboard', $data);
    }
    public function settings($id = null)
    {
        $data = [];

        $model = new UserModel();

        $user = $model->where('id', $id)->first();

        if(isset($_POST['updateDetails'])){

            $editData = [
                'first_name' => $this->request->getVar('first_name'),
                'last_name' => $this->request->getVar('last_name'),
                'email' => $this->request->getVar('email'),
                'phone_number' => $this->request->getVar('phone_number')
            ];
            if($model->update($id, $editData)){
                $user = $model->where('id', $id)->first();
                $this->setUserSession($user);
                session()->setFlashdata('message', 'details updated successfully');
                redirect()->to('/');
            }else{
                //TODO:: What hapens when error occurs
            }
        }
        if(isset($_POST['updatePassword'])){
           
            $oldPassword = $this->request->getVar('oldPassword');
            $newPassword = $this->request->getVar('newPassword');
            $rules = [
                'oldPassword' => 'required|min_length[8]|max_length[255]',
                'newPassword' => 'required |min_length[8]|max_length[255]',
                'repeatNewPassword' => 'required |min_length[8]|max_length[255]|match'
            ];
            $editData = [
                'password' => $newPassword
            ];
            $model->update($id, $editData);

            return redirect()->to('/');
        }
        if(isset($_POST['uploadUserImage'])){
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
            if($img = $this->request->getVar('file')){

            //if file is not empty
            if (!$img->hasMoved()){

                session()->setFlashdata('error', 'Image not saved');

            }
                $img->move('writable/uploads');
                $data = [
                'img_name' => $img->getClientName(),
                'file'  => $img->getClientMimeType()
                ];

                if(!empty($data['img_name'])){

                    $editData = [
                        'image' => "writable/uploads/".$data['img_name']
                    ];

                    $model->update($id, $editData);

                    session()->setFlashdata('message', 'Image uploaded successfully');

                    return redirect()->to('/');
                }
            
        }

        }
        if(!is_null($user)){
            $data['user'] = $user;
            return view('profile/settings', $data);
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }

}