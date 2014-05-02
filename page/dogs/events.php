<?php
class page_dogs_events extends Page {
    function init(){
        parent::init();
        $this->api->stickyGET('dog_id');
        
       /* $dog = $this->add('Model_dog')->load($_GET['dog_id']);
        $grid=$this->add('Grid');
        //$grid->addButton('Add Event')->js('click')->univ()->frameURL('Add an Event', $this->api->url('./add', array('dog_id'=>$_GET['dog_id'])));
        $grid->addButton('Add Event')->js('click')->univ()->dialogURL('Add an Event', $this->api->url('./add', array('dog_id'=>$_GET['dog_id'])));
        $grid->setModel($dog->ref('dogevent'));
        
        $grid->addColumn('button', 'edit');
        $grid->addColumn('button', 'delete');
        */
        
        $dog=$this->add('Model_dog')->load($_GET['dog_id']);
        $crud=$this->add('CRUD');
        $crud->setModel($dog->ref('dogevent'));
        
        if ($crud->isEditing('add')){
            var_dump(array_keys($crud->form->elements));

            $crud->form->addField('Dropdown', 'event_type');
            $typeField=$crud->form->getElement('event_type');
            $typeField->setModel('eventcodetype');
            
            if($_GET['event_code_type_id']){
                $crud->form->getElement('event_code_id')->model->addCondition('event_code_type_id', $_GET['event_code_type_id']);
            }
            
            $typeField->js('change',
            $crud->form->js()->atk4_form('reloadField', 'event_code_id',
            array($this->api->url(), 'event_code_type_id'=>$typeField->js()->val())
            )
            );
           
        }
    }
}