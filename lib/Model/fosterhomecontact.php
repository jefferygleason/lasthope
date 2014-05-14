<?php
class Model_fosterhomecontact extends Model_Table {
    public $table="fosterhomecontact";
    function init(){
        parent::init();

        $this->addField('name');
        $this->addField('is_primary_contact')->type('boolean');
        $this->hasOne('fosterhome', null, 'fosterhome_name');
    }
}