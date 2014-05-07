<?php
class page_dogs_details extends Page {
    function init(){
        parent::init();

        $this->api->stickyGet('dog_id');
        $dog=$this->add('Model_dogdetail')->load($_GET['dog_id']);
        $form=$this->add('Form');
        $form->setModel($dog);
//        $form->setModel($dog->ref('dogdetail'));
    
//        $crud=$this->add('CRUD');
//        $crud->setModel('dogdetail');
        
      //  $crud=$this->add('CRUD');
      //  $crud->setModel($dog->ref('dogdetail'));

        if($form->isSubmitted()){

            $form->update();
            $form->js()->univ()->alert('Changes have been saved.')->execute();
        
        }
      
    }
}