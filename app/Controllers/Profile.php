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

                // Stroing session values
                $this->setUserSession($user);
                // Redirecting to dashboard after login
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

    public function register()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [
                'first_name' => 'required|min_length[3]|max_length[20]',
                'last_name' => 'required|min_length[3]|max_length[20]',
                'phone_number' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
            ];

            if (!$this->validate($rules)) {

                return view('profile/register', [
                    "validation" => $this->validator,
                ]);
            } else {
                $model = new UserModel();

                $newData = [
                    'first_name' => $this->request->getVar('first_name'),
                    'last_name' => $this->request->getVar('last_name'),
                    'phone_number' => $this->request->getVar('phone_number'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to(base_url('login'));
            }
        }
        return view('profile/register');
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

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }



}