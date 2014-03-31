<?php
class Model_dog extends Model_Table {
    public $table="dog";
    function init(){
        parent::init();
        
        $this->hasOne('breed','breed_id', 'breedName', 'breedName');
        $this->addField('dogName');
        $this->addField('dogHomeName');
        $this->addField('intakeDate');
        $this->addField('intakeSource');
        $this->addField('age');
        $this->addField('dob');
        $this->addField('sex');
        $this->addField('size');
        $this->addField('weight');
    }
}