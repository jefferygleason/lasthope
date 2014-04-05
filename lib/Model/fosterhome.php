<?php
class Model_fosterhome extends Model_Table {
    public $table="fosterhome";
    function init(){
        parent::init();
        
        $this->addField('fosterhome_name');
        $this->addField('address_1');
        $this->addField('address_2');
        $this->addField('city');
        $this->addField('state');
        $this->addField('zip');

        $this->hasMany('fosterhomecontact');
  
    }
}