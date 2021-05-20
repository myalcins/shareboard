<?php

class Users extends Controller{
    protected function register(){
        $viewModel = new UserModel();
        $this->returnView($viewModel->register(), true);
    }

    protected function login(){
        $viewModel = new UserModel();
        $this->returnView($viewModel->login(), true);
    }

    protected function logout(){
        session_destroy();
        header("Location: ". ROOT_URL);
    }
}
