<?php
class page_dogs extends Page {
    //function initMainPage(){
    function init(){
        parent::init();        
        $grid=$this->add('Grid');
        $grid->setModel('dog');
        $grid->addPaginator(10);
        $grid->getColumn('dog_name')->makeSortable();
        $grid->getColumn('breedName')->makeSortable();
        $grid->getColumn('intake_date')->makeSortable();
        $grid->getColumn('age')->makeSortable();
        $grid->getColumn('weight')->makeSortable();
        $grid->addQuickSearch(array('dogName', 'breedName', 'sex', 'intakeDate'));
        $grid->addColumn('button', 'events');
        $grid->addColumn('button', 'details');
        $grid->addButton('Add New Dog')->js('click')->univ()->dialogURL('New Dog', $this->api->url('./add'));

        if($_GET['events']){
            
            $grid->js()->univ()
                ->dialogURL('Dog Events', $this->api->url('./events', array('dog_id'=>$_GET['events'])))
                ->execute();
        }
        
        if($_GET['details']){
            
            $grid->js()->univ()
                ->dialogURL('Dog Details', $this->api->url('./details', array('dog_id'=>$_GET['details'])))
                ->execute();
        }
        
    }
    
}
