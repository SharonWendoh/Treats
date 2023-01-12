<?php

namespace App\Controllers;
use App\Models\UserModel;

class Users extends BaseController
{
	public function index()
	{
		$data = [];
        helper(['form']);

        // if ($this->request->getMethod() == 'post'){
        //     //we do the validation here
        //     $rules = [
        //         'email' => 'required|min_length[3]|max_length[50]|valid_email',
        //         'password' => 'required|min_length[5]|max_length[255]|validateUser[email,password]',
        //     ];

        //     $errors = [
        //         'password' => [
        //             'validateUser'=>'Dear dripper,Email or Password doesn\'t match'
        //         ]
        //     ];

        //     if(! $this->validate($rules)){
        //         $data['validation'] = $this->validator;
        //     }else{
        //         //store the user in our database
        //         $model = new UserModel();

        //         // $newData = [
        //         //     'firstname' =>$this->request->getVar('firstname'),
        //         //     'lastname' =>$this->request->getVar('lastname'),
        //         //     'gender' =>$this->request->getVar('gender'),
        //         //     'email' =>$this->request->getVar('email'),
        //         //     'password' =>$this->request->getVar('password'),
        //         // ];
        //         // $model->save($newData);
        //         // $session = session();
        //         // $session->setFlashdata('success','Successful Registration');
        //         // return redirect()->to('/');
        //     }
        // }


        // echo view('templates/header', $data);
        // echo view('pages/login', $data);
        // echo view('templates/footer', $data);
	}
    public function registration()
	{
		$data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post'){
            //we do the validation here
            $rules = [
                'firstname' => 'required|min_length[3]|max_length[20]',
                'lastname' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[3]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[5]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                //store the user in our database
                $model = new UserModel();

                $newData = [
                    'firstname' =>$this->request->getVar('firstname'),
                    'lastname' =>$this->request->getVar('lastname'),
                    'gender' =>$this->request->getVar('gender'),
                    'email' =>$this->request->getVar('email'),
                    'password' =>$this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success','Successful Registration');
                return redirect()->to('/');
            }
        }

        echo view('templates/header', $data);
        echo view('pages/registration', $data);
        echo view('templates/footer', $data);
	}
    function validate_form(){
        $this->load->view('registration');
    }
}