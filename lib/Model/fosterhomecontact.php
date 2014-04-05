<?php
class Model_fosterhomecontact extends Model_Table {
    public $table="fosterhomecontact";
    function init(){
        parent::init();

        $this->addField('first_name');
        $this->addField('last_name');
        $this->addField('is_primary_contact')->type('boolean');
        //$this->hasOne('fosterhome', null, 'Foster Home');
        $this->hasOne('fosterhome', null, 'fosterhome_name');
    }
}