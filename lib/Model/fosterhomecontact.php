<?php
class Model_fosterhomecontact extends Model_Table {
    public $table="fosterhomecontact";
    function init(){
        parent::init();

        $this->addField('lname');
        $this->addField('fname');
        $this->addField('primaryContactYN');
        $this->hasOne('fosterhome');

    }
}