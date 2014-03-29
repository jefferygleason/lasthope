<?php
class page_register extends Page {
    function init(){
        parent::init();
        
        $form=$this->add('Form');
        $form->setModel('user');
        $form->addSubmit('Register');
        
        if($form->isSubmitted()){
            $form->update();
            $form->js()->univ()->successMessage('Registration successful.')->execute();
        }
    }
}