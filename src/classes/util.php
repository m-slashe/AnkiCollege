<?php

function includeComponent($component, $params=null){
    include(ABSPATH . 'src' . DS . 'components' . DS . $component . DS . $component . '.php');
}