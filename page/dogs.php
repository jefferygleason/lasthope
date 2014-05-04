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
        $grid->addColumn('expander', 'details');
        
        if($_GET['events']){
            
            $grid->js()->univ()
                ->dialogURL('Dog Events', $this->api->url('./events', array('dog_id'=>$_GET['events'])))
                ->execute();
        }
        
        if($_GET['events']){
            
            $grid->js()->univ()
                ->dialogURL('Dog Details', $this->api->url('./details', array('dog_id'=>$_GET['events'])))
                ->execute();
        }
        
    }
    
}
