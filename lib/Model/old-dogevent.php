<?php
class Model_dogevent_by_type extends Model_dogevent {
    public $table="dogevent";
    function init(){
        parent::init();

        $eventByType = $this;
        $eventByType->join('eventcodetype');
 /* //      $this->hasOne('dog', 'dog_id', null, 'dog');
        $this->hasOne('dog', 'dog_id', 'dogName', 'dog');
  //      $this->getElement('dog')->caption('Dog Name');
        $this->hasOne('eventcode', 'event_code_id', null, 'eventcode');
        $this->hasOne('volunteer', 'recorded_by', 'last_name');
        $this->hasOne('volunteer', 'performed_by', 'last_name');        
        $this->addField('dog_event_date')->type('date');
        $this->addField('dog_event_notes')->type('text');
*/

    }
}