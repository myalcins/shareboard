<?php

class Shares extends Controller{
    protected function Index(){
        $viewModel = new ShareModel();
        $this->returnView($viewModel->Index(), true);
    }
}
