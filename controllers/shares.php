<?php

class Shares extends Controller{
    protected function Index(){
        $viewModel = new ShareModel();
        $this->returnView($viewModel->Index(), true);
    }

    protected function add(){
        $viewModel = new ShareModel();
        $this->returnView($viewModel->add(), true);
    }
}
