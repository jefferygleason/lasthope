<?php
class page_userprofile extends Page {
    function init(){
        parent::init();

        $form = $this->add('Form');

        $form->setModel($this->api->auth->model, 
            array('firstName','lastName', 'email', 'password'));
        
        $form->addField('password', 'confirm_password');
        
        $form->addSubmit();
        
        if ($form->isSubmitted()){
            if($form->get('password') != $form->get('confirm_password')){
                $form->displayError('confirm_password', 'Passwords do not match');
            }
            $form->update();
            $form->js()->univ()->successMessage('Saved')->execute();
        }
    }
}