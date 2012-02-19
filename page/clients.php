<?php
/**
 * Created by JetBrains PhpStorm.
 * User: anke
 * Date: 19/02/12
 * Time: 2:58
 * To change this template use File | Settings | File Templates.
 */
 
class page_clients extends Page {
    function init(){
        parent::init();
        $page=$this;

        $this->add('H1')->set('Clients');

       
    }
}