<?php
/**
 * Created by JetBrains PhpStorm.
 * User: anke
 * Date: 19/02/12
 * Time: 3:10
 * To change this template use File | Settings | File Templates.
 */
 
class page_expenses extends Page {
    function init(){
        parent::init();
        $page=$this;

        $this->add('H1')->set('Expenses');
        $crud = $page->add('CRUD');
        $crud->setModel('Expense');
         if($crud->grid){
            $crud->grid->addPaginator(20);
        }

    }
}