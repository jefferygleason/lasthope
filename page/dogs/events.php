<?php
class page_dogs_events extends Page {
    function init(){
        parent::init();
        $this->api->stickyGET('dog_id');
        
        $dog = $this->add('Model_dog')->load($_GET['dog_id']);
        $grid=$this->add('Grid');
        $grid->addButton('Add Event')->js('click')->univ()->frameURL('Add an Event', $this->api->url('./add', array('dog_id'=>$_GET['dog_id'])));

        $grid->setModel($dog->ref('dogevent'));
        
       // $grid=$this->add('Grid')->setModel($dog->ref('dogevent'));
        $grid->addColumn('button', 'edit');
 
    }
}