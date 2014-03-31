<?php
class Model_breed extends Model_Table {
    public $table="breed";
   // public $id_field = "breed_id";
    function init(){
        parent::init();

        $this->addField('breedName');
        $this->addField('description');
        $this->addField('akcAddress');

    }
}