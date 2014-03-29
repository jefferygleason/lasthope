<?php
class Model_dog extends Model_Table {
    public $table="dog";
    function init(){
        parent::init();
        
        $this->addField('dogName');
        $this->addField('dogHomeName');
        $this->addField('breedName');
        $this->addField('intakeDate');
        $this->addField('intakeSource');
        $this->addField('age');
        $this->addField('dob');
        $this->addField('sex');
        $this->addField('size');
        $this->addField('weight');
    }
}