<?php
class Model_dog extends Model_Table {
    public $table="dog";
    public $title_field="dogName";
    function init(){
        parent::init();
        
        
        $this->addField('dogName');

        $this->hasOne('breed','breed_id', 'breedName', 'breedName');
        $this->addField('dogHomeName');
        $this->addField('intakeDate')->type('date');
        $this->addField('intakeSource');
        $this->addField('age');
        $this->addField('dob')->type('date');
        $this->addField('sex');
        $this->addField('size');
        $this->addField('weight');
        $this->hasOne('vet')->caption('Primary Vet');
        $this->hasMany('dogdetail');
        $this->hasMany('restriction');
        $this->hasMany('dogevent');
    }
}