<?php
class Model_document extends Model_Table {
    public $table="filestore_file";
    function init(){
        parent::init();
        
        //$this->addField('filename');
        //$this->add('filestore/Field_File', 'filename');
        //$this->addField('original_filename');

    }
    
}