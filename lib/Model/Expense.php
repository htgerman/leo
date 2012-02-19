<?php
/**
 * Created by JetBrains PhpStorm.
 * User: anke
 * Date: 19/02/12
 * Time: 3:05
 * To change this template use File | Settings | File Templates.
 */
 
class Model_Expense extends Model_Table {
    public $entity_code='expenses';

    function init(){
        parent::init();

        $this->addField('name')
            ->mandatory(true)
            ->Caption('Description');
        $this->addField('expense_date')
            ->type(date)
            ->mandatory(true)
            ->defaultValue(date('y-m-d'));
        $this->addField('category_id')
            ->refModel('Model_ExpenseType')
            ->mandatory(true)
            ->Caption('Expense Type');
        $this->addField('amount')
            ->datatype('money');
    }
}