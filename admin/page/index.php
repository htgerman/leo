<?php
class page_index extends Page {
    function init(){
        parent::init();
        $page=$this;

        $this->api->auth->check();

        $this->add('H1')->set('System Configuration');

        $tabs = $this->add('Tabs');
        $tab1 = $tabs->addTab('Lookups')->add('CRUD');
        $tab1->setModel('Lookup',array('name','cat'));
        if($tab1->grid){
            $tab1->grid->addPaginator(20);
            $tab1->grid->getColumn('name')->makeSortable();
            $tab1->grid->getColumn('cat')->makeSortable();
        }

        $tab2 = $tabs->addTab('Materials')->add('CRUD');
        $tab2->setModel('Material');
        if($tab2->grid){
            $tab2->grid->addPaginator(20);
        }
        $tab3 = $tabs->addTab('Garment Models');
    }
}
