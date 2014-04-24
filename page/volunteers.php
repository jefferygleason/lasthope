<?php
class page_volunteers extends Page {
    function init(){
        parent::init();
       $this->add('CRUD')->setModel('volunteer');
    }
}