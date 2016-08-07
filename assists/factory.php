<?php
use Predis\Client;

class Factory{

    public static function redis(){

        return new Client(require BASE_PATH.'/config/redis.php');

    }

    public static function mail(){

        return new \Nette\Mail\SmtpMailer(require BASE_PATH.'/config/mail.php');

    }
}