<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function register()
    {
        return view('register');
    }

    public function create()
    {
        $userModel = new UserModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'role_id' => 2 // Role untuk calon siswa
        ];

        $userModel->save($data);
        return redirect()->to('/login');
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'user_id' => $user['id'],
                'name' => $user['name'],
                'role_id' => $user['role_id'],
                'isLoggedIn' => true
            ]);
            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('error', 'Email atau password salah');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
