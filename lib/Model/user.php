<?php
class Model_user extends Model_Table {
    public $table="user";
    function init(){
        parent::init();
        
        $this->addField('email')->mandatory('Email is a required field');
        $this->addField('password')->mandatory('Please enter a password')->display('password');
        $this->addField('firstName')->mandatory('First Name is a required field');
        $this->addField('lastName')->mandatory('Last Name is a required field');
        $this->addField('is_admin')->type('boolean');    
    }
}