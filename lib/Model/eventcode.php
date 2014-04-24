<?php
class Model_eventcode extends Model_Table {
    public $table="event_code";
    function init(){
        parent::init();
        
        $this->hasOne('eventcodetype');
        $this->addField('name');
        $this->addField('description');
        $this->hasMany('dogevent');
    }
}