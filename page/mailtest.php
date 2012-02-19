<?php
/**
 * Created by JetBrains PhpStorm.
 * User: anke
 * Date: 18/02/12
 * Time: 16:25
 * To change this template use File | Settings | File Templates.
 */
class page_mailtest extends Page {
    function init(){
        parent::init();
        $t=$this->add('TMail');
        $t->addTransport('Echo');//->setModel('ATK_MailLog');
        $t->setTemplate('test');
        $t->set('subject','A Test message');
        $t->set('same','John Smith');
        $t->set('sign','Anke Herrmann');
        $t->send('herrmann.anke@gmail.com','info@guiaserviciosalbaicin.com');
        // $this->add('MVCGrid')->setModel('ATK_MailLog');
        exit;    }
}
 
