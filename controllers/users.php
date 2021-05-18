<?php

class Users extends Controller{
    protected function Index(){
        $viewModel = new UserModel();
        $this->returnView($viewModel->Index(), true);
    }
}
