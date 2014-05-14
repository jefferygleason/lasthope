<?php
class Model_referencecheck extends Model_Table {
    public $table="referencecheck";
    function init(){
        parent::init();
        
        $this->hasOne('applicant', null, 'name');
        $this->hasOne('reference', null, 'name');
        $this->addField('contact_date')->type('date');
        $this->addField('notes')->type('text');
        
    }
}