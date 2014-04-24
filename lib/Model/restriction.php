<?php
class Model_restriction extends Model_Table {
    public $table="restrictions";

    function init(){
        parent::init();
        
        $this->hasOne('dog');
        $this->addField('restriction');
        $this->addField('notes')-type('Text');
    }
}