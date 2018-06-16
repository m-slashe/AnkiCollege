<?php

class AppCtrl {

    function child(){
        $menuCtrl = new MenuCtrl();
        $menuCtrl->main();
    }

}