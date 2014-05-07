<?php
class Model_dogdetail extends Model_Table {
    public $table="dog";
    public $title_field="dog_name";
    function init(){
        parent::init();
        
        //$this->hasOne('dog');
        $this->addField('dog_name');
        $this->addField('dog_home_name');
        $this->addField('intake_date')->type('date');
        $this->addField('intake_source')
            ->defaultValue('Owner')
            ->listData(array('Owner'=>'Owner','Shelter'=>'Shelter','Stray'=>'Stray','Vet'=>'Vet'));
        $this->addField('age');
        $this->addField('dob');
        $this->addField('sex')
            ->defaultValue('TBD')
            ->listData(array('Female'=>'Female','Male'=>'Male','TBD'=>'TBD'));
        $this->addField('size')
            ->defaultValue('Small')
            ->listData(array('Small'=>'Small','Medium'=>'Medium','Large'=>'Large'));        
        $this->addField('weight');
        $this->addField('is_altered')->type('boolean');
        $this->addField('is_housebroken')->type('boolean');
        $this->addField('is_puppy_mill_dog')->type('boolean');
        $this->addField('is_fence_jumper')->type('boolean');
        $this->addField("energy_level")
            ->defaultValue('Low')
            ->listData(array('Low'=>'Low','Medium'=>'Medium','High'=>'High'));
        $this->addField('petfinder_id');
        $this->addField('chip_number');
        $this->addField('current_location');
        $this->addField('adoption_fee')->type('Money');
        $this->addField('notes')->type('text');
        $this->addField('is_adopted')->type('boolean');
    }
}