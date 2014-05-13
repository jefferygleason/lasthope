<?php
class Model_referencecheck extends Model_Table {
    public $table="referencecheck";
    function init(){
        parent::init();
        
        $this->hasOne('applicant');
        $this->hasOne('reference');
        $this->addField('contact_date')->type('date');
        $this->hasMany('notes')->type('text');
        
    }
}