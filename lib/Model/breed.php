<?php
class Model_breed extends Model_Table {
    public $table="breed";
    public $title_field="breedName";
    function init(){
        parent::init();

        $this->addField('breedName');
        $this->addField('description');
        $this->addField('akcAddress');

    }
}