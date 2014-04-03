<?php
class Model_fosterhome extends Model_Table {
    public $table="fosterhome";
    function init(){
        parent::init();
        
        $this->addField('fosterhomeName');
        $this->addField('addr1');
        $this->addField('addr2');
        $this->addField('city');
        $this->addField('state');
        $this->addField('zip');

        $this->hasMany('fosterhomecontact');
  
    }
}