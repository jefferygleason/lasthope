<?php
class Model_vet extends Model_Table {
    public $table="vet";

    function init(){
        parent::init();
        $this->addField('first_name');
        $this->addField('last_name');
        $this->addField('address_1');
        $this->addField('address_2');
        $this->addField('city');
        $this->addField('state');
        $this->addField('zip');
        $this->addField('phone');
        $this->hasMany('dog');

    }
}