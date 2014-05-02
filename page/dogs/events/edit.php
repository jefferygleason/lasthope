<?php
class page_dogs_events_add extends Page {
    function init(){
        parent::init();
        $this->api->stickyGET('dog_id');

        $form = $this->add('Form');
//        $dog=$form->add('Model_dog')->load($_GET['dog_id']);
//        $event=$form->add($dog->ref('dogevent'));
        $form->addField('dropdown', 'event_type');
        $form->getElement('event_type')->setCaption('Select an Event Type');
        $form->getElement('event_type')->setModel('eventcodetype');
        $form->setModel('dogevent');
       
        $dog_field = $form->getElement('dog_id');
        $dog_field->model->addCondition('id', $_GET['dog_id']);

        $event_type_field = $form->getElement('event_type');

        $event_field=$form->getElement('event_code_id');
        if($_GET['event_code_type_id']){
            $event_field->model->addCondition('event_code_type_id', $_GET['event_code_type_id']);
        }
        
        
        $event_type_field->js('change',
            $form->js()->atk4_form('reloadField', 'event_code_id',
            array($this->api->url(), 'event_code_type_id'=>$event_type_field->js()->val())
            )
            );
        

        $form->addSubmit();
        
        
        if($form->isSubmitted()){
           // var_dump($_POST);
           $form->update();

            $form->js()->univ()->alert('Success')->execute();
                       $form->close();
           // $form->js()->univ()->alert("Dog:  " . $_GET['dog_id'] . " Event Type:  " . $_POST['event_type'])->execute();
        //$event = $form->model->ref('event_code_id');
        
        }
//        var_dump(array_keys($form->elements));
        
 

        
    }
}