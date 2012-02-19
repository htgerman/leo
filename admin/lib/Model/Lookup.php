<?php
/**
 * Created by JetBrains PhpStorm.
 * User: anke
 * Date: 18/02/12
 * Time: 20:51
 * To change this template use File | Settings | File Templates.
 */

class Model_Lookup extends Model_Table {
    public $entity_code='lookups';

    function init(){
        parent::init();

        $this->addField('name')
            ->mandatory(true);
        $this->addField('cat')
            ->datatype('list')
            ->listData(array('GarmentType'=>'Garment Type','ExpenseType'=>'ExpenseType', 'ClientSource'=>'Client Source', 'MaterialCategory'=>'Material Category'));
    }
}

class Model_GarmentType extends Model_Lookup{
    function init(){
            parent::init();
            $this->addCondition('cat','GarmentType');
    }

}

class Model_ExpenseType extends Model_Lookup{
    function init(){
            parent::init();
            $this->addCondition('cat','ExpenseType');
    }

}

class Model_ClientSource extends Model_Lookup{
    function init(){
            parent::init();
            $this->addCondition('cat','ClientSource');
    }

}

class Model_MaterialCategory extends Model_Lookup{
    function init(){
            parent::init();
            $this->addCondition('cat','MaterialCategory');
    }

}

 
