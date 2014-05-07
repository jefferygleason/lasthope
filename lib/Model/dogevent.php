<?php
class Model_dogevent extends Model_Table {
    public $table="dogevent";
    public $caption="Event";
    function init(){
        parent::init();

        $this->hasOne('dog', 'dog_id', 'dog_name', 'dog');
        $this->hasOne('eventcode', null, 'name', 'eventcode');
        $this->hasOne('volunteer', 'recorded_by', 'last_name');
        $this->hasOne('volunteer', 'performed_by', 'last_name');      
        $this->addField('dog_event_date')->type('date');
        $this->addField('dog_event_notes')->type('text');

    }
}