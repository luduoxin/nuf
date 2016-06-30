<?php

class Model{
    public static function first()
    {
        $db = new mysqli("localhost","root","");
        if (!$db) {
            die('Could not connect: ' . mysqli_error());
        }
        $db->select_db("mffc");


        //$result = $db->query("delete from articles where id=1");



        //print_r($result);

    }
}