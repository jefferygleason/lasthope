<?php
class Model_reference extends Model_Table {
    public $table="reference";
    function init(){
        parent::init();
        
        $this->addField('name');
        $this->addField('address1');
        $this->addField('address2');
        $this->addField('city');
        $this->addField('state');
        $this->addField('zip');
        $this->addField('home_phone');
        $this->addField('mobile_phone');
        $this->addField('email');
        $this->addField('facebook');
        $this->addField('twitter');
        $this->addField('notes')->type('text');
        $this->hasOne('applicant', null, 'name');
        //$this->hasMany('referencecheck');
        
    }
}