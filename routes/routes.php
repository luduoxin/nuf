<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('test',function(){
    echo "<pre>";
    print_r($_SERVER);
});

Macaw::get('/home','HomeController@home');


Macaw::get('(:all)',function($fu){
    echo '未匹配到路由<br/>'.$fu;
});

Macaw::dispatch();