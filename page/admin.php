<?php
class page_admin extends Page {
    function init(){
        parent::init();

        $crud=$this->add('CRUD');
        $crud->setModel('user');
        
        if ($crud->isEditing('edit')) {
            $crud->form->addField('password', 'confirm_password');
             $crud->form->add('Order')
                ->move('confirm_password', 'after', 'password')
                ->now();

                 if($crud->form->isSubmitted()){
                
                    if($crud->form->get('password') != $crud->form->get('confirm_password')){
                        echo('this is the password:  ' . $crud->form->get('confirm_password'));
                        $crud->form->displayError('confirm_password', 'Passwords do not match');
                    }
                    
                    $crud->form->update();
                    
                    $crud->form->js()->univ()->successMessage('Saved')->execute();
                }
        }
  }
}