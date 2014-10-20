<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testController
 *
 * @author Administrator
 */
class testController {
    function show(){
        $testModel = M('test');
        $data = $testModel->get();
        $testView = V('test');
        $testView->display($data);
    }
}
