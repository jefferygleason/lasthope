<?php
class page_dogs_details extends Page {
    function init(){
        parent::init();

        $this->api->stickyGet('dog_id');
        $dog=$this->add('Model_dog')->load($_GET['dog_id']);
        $crud=$this->add('CRUD');
        $crud->setModel($dog->ref('dogdetail'));

    }
}