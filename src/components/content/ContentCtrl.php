<?php

class ContentCtrl {

    function index(){
        include_once ABSPATH . 'src' . DS . 'classes' . DS . 'Util.php';
        includeComponent('menu');
    }

}