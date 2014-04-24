<?php
class page_dogs extends Page {
    function initMainPage(){
        
        $grid=$this->add('Grid');
        $grid->setModel('dog');
        $grid->addPaginator(10);
        $grid->getColumn('dogName')->makeSortable();
        $grid->getColumn('breedName')->makeSortable();
        $grid->getColumn('intakeDate')->makeSortable();
        $grid->getColumn('age')->makeSortable();
        $grid->getColumn('weight')->makeSortable();
        $grid->addQuickSearch(array('dogName', 'breedName', 'sex', 'intakeDate'));
        $grid->addColumn('button', 'events');
       // $grid->addColumn('expander', 'events');
        $grid->addColumn('expander', 'details');
        
        if($_GET['events']){
            
            $grid->js()->univ()
                ->dialogURL('Dog Events', $this->api->url('./events', array('dog_id'=>$_GET['events'])))
                ->execute();
        }
        
    }
    
    function events() {
    
        $this->api->stickyGET($_GET['dog_id']);
        /*
        $dog=$this->add('Model_dog')->load($_GET['dog_id']);
        $cr=$this->add('CRUD');
        $cr->setModel($dog->ref('dogevent'));
        */
        
        
    }
    
    function details() {
    
        $this->api->stickyGET($_GET['dog_id']);
        $dog=$this->add('Model_dog')->load($_GET['dog_id']);
        $cr=$this->add('CRUD');
        $cr->setModel($dog->ref('dogdetail'));
    
    }
}
