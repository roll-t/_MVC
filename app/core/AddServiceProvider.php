<?php
class AddServiceProvider extends ServiceProvider{
    public function boot(){
        $value=$this->db->table('account')->select('account_name')->where('id','=',1)->first();
        $data_2['user_login']=$value;
        View::share($data_2);
    }
}