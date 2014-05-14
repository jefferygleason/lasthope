<?php
class page_dogform extends Page {
    function init(){
       parent::init();
    
        //$grid=$this->add('Grid');   
        $f=$this->add('Form');
        $m=$f->add('Model_dogdetail');
        $f->setModel($m, false);
        $f->setFormClass('stacked');
        $f->controller->importFields($m, array('dog_name'));
        $f->addSeparator('noborder atk-row'); 
        $f->controller->importFields($m,array('breedName', 'intake_date', 'intake_source')); 
        
        $f->getElement('intake_date')->template->set('row_class','span6');   $f->getElement('intake_source')->template->set('row_class','span6');
       // $left_column->add($f->getElement('dog_name'));
        
        
        /*
        
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
        
        if($_GET['delete']){
            $grid->model->delete($_GET['delete']);
            $grid->js()->reload()->execute();
          //  $grid->reload();
        }
        */
    }
    
}
