<?php
class page_dogs_events_add extends Page {
    function init(){
        parent::init();
        $this->api->stickyGET('dog_id');
  //      var_dump($_GET);
        $form = $this->add('Form');
//        $dog=$form->add('Model_dog')->load($_GET['dog_id']);
//        $event=$form->add($dog->ref('dogevent'));
        $form->addField('dropdown', 'event_type');
        $form->getElement('event_type')->setCaption('Select an Event Type');
        $form->getElement('event_type')->setModel('eventcodetype');
        $form->setModel('dogevent');
       
        $dog_field = $form->getElement('dog_id');
        
        if($_GET['dog_id']){
                
        }
        
        $dog_field->model->addCondition('id', $_GET['dog_id']);
        $event_field = $form->getElement('event_type');
        var_Dump($_GET);
        $event_field->js('change',
            $form->js()->atk4_form('reloadField', 'event_code_id',
            array($this->api->url(), 'event_code_type_id'=>$event_field->js()->val())
            )
            )->debug();
        

        $form->addSubmit();

        
 
//var_dump(array_keys($form->elements));
        
    }
}