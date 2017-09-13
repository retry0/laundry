<?php
class Tentang extends CI_Controller{
    
    
    function index(){
        chek_session();
        $this->home->load('home','tentang');
    }
}