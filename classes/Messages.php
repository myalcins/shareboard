<?php

class Messages{
    public static function setMsg($text, $type){
        if($type == 'error'):
            $_SESSION['errorMessage'] = $text;
        else:
            $_SESSION['successMessage'] = $text;
        endif;
    }

    public static function display(){
        if(isset($_SESSION['errorMessage'])):
            echo '<div class="alert alert-danger m-5 d-flex justify-content-center">'. $_SESSION['errorMessage'] .'</div> ';
            unset($_SESSION['errorMessage']);
        endif;
        if(isset($_SESSION['successMessage'])):
            echo '<div class="alert alert-success m-5 d-flex justify-content-center">'. $_SESSION['successMessage'] .'</div> ';
            unset($_SESSION['successMessage']);
        endif;
    }
}