<?php
class Model_dog extends Model_Table {
    public $table="dog";
    function init(){
        parent::init();
        
        
        $this->addField('Dog Name', 'dogName');

        $this->hasOne('breed','breed_id', 'breedName', 'breedName');
        $this->addField('Dog Home Name', 'dogHomeName');
        $this->addField('Intake Date', 'intakeDate')->type('Date');
        $this->addField('Intake Source', 'intakeSource');
        $this->addField('age');
        $this->addField('dob');
        $this->addField('sex');
        $this->addField('size');
        $this->addField('weight');
    }
}