<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;
use App\Models\FundraiserModel;

class AdminController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        //
        return view('admin/layout/index');
    }

    //return list of users
    public function users(){

        $data = [];
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('created_at','DESC')->findAll();

        return view('admin/users/index', $data);
    }

    public function funds(){

        $data =  [];
        $model = new FundraiserModel();
        $data['funds'] = $model->orderBy('created_at', 'DESC')->findAll();

        return view('admin/fundraiser/index', $data);
    }

    //activate fundraiser
    public function toggleActivateFundRaiser($id = null){
        $data = [];
        $model = new FundraiserModel();
        $fundRaiser = $model->where('id', $id)->first();
        switch ($fundRaiser['active']) {
            case 1:
               $editData = ['active' => 0];
               $model->update($fundRaiser['id'],$editData);
               $data['funds'] = $model->orderBy('created_at', 'DESC')->findAll();
            return view('admin/fundraiser/index', $data);
                break;
            case 0:
                $editData = ['active' => 1];
                $model->update($fundRaiser['id'],$editData);
                $data['funds'] = $model->orderBy('created_at', 'DESC')->findAll();
             return view('admin/fundraiser/index', $data);
                break;
            default:
                # code...
                break;
        }

    }
    //delete fund
    public function deleteFundRaider($id = null){
        $data = [];
        $model = new FundraiserModel();
       if( $model->delete($id)){
        $data = ['funds' => $model->orderBy('created_at', 'DESC')->findAll()];
        return view('admin/fundraiser/index', $data);
       }
    }

    /**
     * delete user
     *
     * 
     */
    public function deleteUser($id = null)
    {
        $data = [];
        $model = new UserModel();
        if($model->delete($id)){
            $data = ['users' => $model->orderBy('created_at', 'DESC')->findAll()];
            return view('admin/users/index', $data);
            
        }
        //
    }

    /**
     * Enable and disable admin
     *
     */
    public function enableAdmin($id = null)
    {
        $data = [];
        $model = new UserModel();
        $user = $model->where('id', $id)->first();
        switch ($user['admin']) {
            case 1:
                $editData = ['admin' => 0];
                $model->update($id, $editData);
                $data = ['users' => $model->orderBy('created_at', 'DESC')->findAll()];
                return view('admin/users/index', $data);
                break;
            default:
                $editData = ['admin' => 1];
                $model->update($id, $editData);
                $data = ['users' => $model->orderBy('created_at', 'DESC')->findAll()];
                return view('admin/users/index', $data);
                break;
        }
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
