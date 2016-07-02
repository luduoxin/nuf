<?php

class HomeController extends BaseController{
    public function home(){
        $book = new \Book();
        $rs = $book->all();

        $this->view = View::make('home')->with('book',Book::all());
    }
}