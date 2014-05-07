<?php
class Model_dogdetail extends Model_Table {
    public $table="dogdetail";
    public $title_field="dogdetail";
    function init(){
        parent::init();
        
        $this->hasOne('dog');
        $this->addField('is_altered')->type('boolean');
        $this->addField('is_housebroken')->type('boolean');
        $this->addField('is_puppy_mill_dog')->type('boolean');
        $this->addField('is_fence_jumper')->type('boolean');
        $this->addField("energy_level")
            ->defaultValue(0)
            ->listData(array('low'=>'low','medium'=>'medium','high'=>'high'));
        $this->addField('petfinder_id');
        $this->addField('chip_number');
        $this->addField('current_location');
        $this->addField('adoption_fee')->type('Money');
        $this->addField('notes')->type('text');
    }
}