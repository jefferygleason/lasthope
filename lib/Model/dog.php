<?php
class Model_dog extends Model_Table {
    public $table="dog";
    public $title_field="dogName";
    function init(){
        parent::init();
        

        $this->addField('dog_name');
        $this->hasOne('breed','breed_id', 'breedName', 'breedName');
        $this->addField('dog_home_name');
        $this->addField('intake_date')->type('date');
        $this->addField('intake_source');
        $this->addField('age');
        $this->addField('dob')->type('date');
        $this->addField('sex');
        $this->addField('size');
        $this->addField('weight');
        $this->hasOne('vet')->caption('Primary Vet');
        $this->addField('is_adopted')->type('boolean');
        $this->hasMany('restriction');
        $this->hasMany('dogevent');
    }
}