<?php

use Nette\Mail\Message;

class Mail extends Message{

    public $config;

    protected $from;

    protected $to;

    protected $title;

    protected $body;

    function __construct($to){

        $this->config = require BASE_PATH.'/config/mail.php';

        $this->setFrom($this->config['username']);

        if ( is_array($to) ) {

            foreach ($to as $email) {

                $this->addTo($email);

            }

        } else {

            $this->addTo($to);

        }

    }

    public function from($from=null){

        if ( !$from ) {

            throw new InvalidArgumentException("send email address required！");

        }

        $this->setFrom($from);

        return $this;

    }

    public static function to($to=null){

        if ( !$to ) {

            throw new InvalidArgumentException("receive email address required！");

        }

        return new self($to);

    }

    public function title($title=null){

        if ( !$title ) {

            throw new InvalidArgumentException("email title required！");

        }

        $this->setSubject($title);

        return $this;

    }

    public function content($content=null){

        if ( !$content ) {

            throw new InvalidArgumentException("email content required！");

        }

        $this->setHTMLBody($content);

        return $this;

    }
}