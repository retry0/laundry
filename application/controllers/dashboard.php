<?php
class Dashboard extends CI_Controller{
    
    
    function index(){
        chek_session();
        $this->home->load('home','v_dashboard');
    }
}