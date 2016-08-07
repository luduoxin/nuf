<?php

class HomeController extends BaseController{
    public function home(){
        $rs = Book::all();
        $data = $rs->toArray();
        echo View::getView()->make('home', array('data'=>$data))->render();
    }
}