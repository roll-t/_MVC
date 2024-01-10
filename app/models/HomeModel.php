<?php
class HomeModel extends Model{
    private $__table='account';
    private $__primarykey="id";
    // phuong thức trù tượng
    function tableFill(){
        return $this->__table;
    }
    function fiedFill(){
        return '*';
    }
    function primaryKey(){
        return $this->__primarykey;
    }
}