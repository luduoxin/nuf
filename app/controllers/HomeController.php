<?php

class HomeController extends BaseController{
    public function home(){
        $book = new \Book();
        $rs = $book->all();
        print_r($rs);
    }
}