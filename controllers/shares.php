<?php

class Shares extends Controller{
    protected function Index(){
        $viewModel = new ShareModel();
        $this->returnView($viewModel->Index(), true);
    }

    protected function add(){
        if(isset($_SESSION['is_logged_in'])):
            $viewModel = new ShareModel();
            $this->returnView($viewModel->add(), true);
        else:
            header("Location: ". ROOT_URL."users/login");
        endif;
    }
}
