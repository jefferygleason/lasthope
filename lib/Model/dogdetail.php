<?php
class Model_dogdetail extends Model_Table {
    public $table="dogdetail";
    public $title_field="dogDetail";
    function init(){
        parent::init();
        
        $this->hasOne('dog');
        $this->addField('altered')->type('Boolean');
        $this->addField('housebroken')->type('Boolean');
        $this->addField('puppy_mill_dog')->type('Boolean');
        $this->addField('fence_jumper')->type('Boolean');
        $this->addField('energy_level')->display('dropdown')->enum(array('low','medium','high'));
        $this->addField('petfinder_id');
        $this->addField('chip_number');
        $this->addField('current_location');
        $this->addField('adoption_fee')->type('Money');
        $this->addField('notes')->type('text');
    }
}