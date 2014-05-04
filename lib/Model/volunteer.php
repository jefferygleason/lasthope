<?php
class Model_volunteer extends Model_Table {
    public $table="volunteer";
    function init(){
        parent::init();
        
        $this->addField('last_name');
        $this->addField('first_name');
        $name = $this->addField('name');
        $name = 'last_name' . ', ' . 'first_name';
        $this->addField('address1');
        $this->addField('address2');
        $this->addField('city');
        $this->addField('state');
        $this->addField('zip');
        $this->addField('home_phone');
        $this->addField('cell_phone');
        $this->addField('work_phone');
        $this->addField('email1');
        $this->addField('email2');
        $this->addField('facebook');
        $this->addField('twitter');
        $this->addField('create_date')->type('date');
        
    }
}