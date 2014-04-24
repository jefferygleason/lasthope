<?php
class Model_eventcodetype extends Model_Table {
    public $table="event_code_type";
    function init(){
        parent::init();
        
        $this->addField('name');
        $this->addField('description');
        $this->hasMany('event_code');

    }
}