<?php
class Home extends Controller{
    function index(){
        $data['content']='home/home';
        $this->view('layouts/client_layout',$data);
    }
}