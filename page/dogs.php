<?php
class page_dogs extends Page {
    function initMainPage(){
    
        $grid=$this->add('Grid');
        $grid->setModel('dog');
        $grid->addPaginator(10);
        $grid->getColumn('dog_name')->makeSortable();
        $grid->getColumn('breedName')->makeSortable();
        $grid->getColumn('intake_date')->makeSortable();
        $grid->getColumn('age')->makeSortable();
        $grid->getColumn('weight')->makeSortable();
        $grid->addQuickSearch(array('dog_name', 'breedName', 'sex', 'intake_date'));
        $grid->addColumn('button', 'events');
        //$grid->addColumn('button', 'details');
        $grid->addButton('Add New Dog')->js('click')->univ()->frameURL('New Dog', $this->api->url('./add'));
        $grid->addColumn('button', 'details');
        $grid->addColumn('button', 'delete');
        
        $grid->js(true)->addClass('myreload');
        $grid->js('myreload')->reload();
        
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
        
    }
    
    function page_details(){
       
        $this->api->stickyGet('dog_id');
        $dog=$this->add('Model_dogdetail')->load($_GET['dog_id']);
        $form=$this->add('Form');
        $form->setModel($dog);

        if($form->isSubmitted()){
            $form->update();

            $this->js(null,
                $this->js()
                    ->_selector('.myreload')
                    ->trigger('myreload'))
                    ->univ()
                    ->closeDialog()
                    ->successMessage('Changes have been saved.')
                    ->execute();                
        }
    }
    
    function page_add(){
    
        $form=$this->add('Form');
        $form->setModel('dogdetail');
        $form->addSubmit();
        
        if($form->isSubmitted()){
            $form->update();//inserts new record into db.
            //$new_id=$m->get('id');//gets id of new record
            //$this->api->memorize('new_id',$new_id);//carries id across pages
            //$this->js()->atk4_load($this->api->url('./Step2'))->execute();
            
//var_dump($form->elements);

/*            $m['dog_name']=$form->getElement('dog_name')->js()->val();
            $m['dog_home_name']=$form->getElement('dog_home_name')->js()->val();
            $m['breed_id']=$form->getElement('breed_id')->js()->val();
            $m->save();
  */        $this->js()
                ->_selector('.myreload')
                ->trigger('myreload')
                ->univ()
                ->closeDialog()
                ->successMessage('Changes have been saved.')
                ->execute();                
            
        }
    }
        
}
