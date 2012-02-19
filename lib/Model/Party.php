<?php
/**
 * Created by JetBrains PhpStorm.
 * User: anke
 * Date: 18/02/12
 * Time: 23:46
 * To change this template use File | Settings | File Templates.
 */
 
class Model_Party extends Model_Table {
    public $entity_code='parties';

    function init(){
        parent::init();

        $this->addField('name')
            ->mandatory(true);
        $this->addField('first_name');
        $this->addField('tel');
        $this->addField('email');
        $this->addField('address')
            ->type('text');
        $this->addField('notes')
            ->type('text');
    }
}