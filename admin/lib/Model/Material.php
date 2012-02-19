<?php
/**
 * Created by JetBrains PhpStorm.
 * User: anke
 * Date: 18/02/12
 * Time: 21:14
 * To change this template use File | Settings | File Templates.
 */
 
class Model_Material extends Model_Table {
    public $entity_code='materials';

    function init(){
        parent::init();

        $this->addField('name')
            ->mandatory(true);
        $this->addField('category_id')
            ->refModel('Model_MaterialCategory')
            ->mandatory(true);
        $this->addField('unit')
            ->mandatory(true)
            ->defaultValue('m');
        $this->addField('price_wholesale')
            ->datatype('money');
        $this->addField('price_retail')
            ->datatype('money');
        $this->addfield('profit_percent')
            ->type('money')
            ->calculated(true);
    }

    function calculate_profit_percent(){
        return '((price_retail * 100)/price_wholesale) - 100';
    }
}