<?php
class page_contacts extends Page {
    function init(){
        parent::init();
       $this->add('CRUD')->setModel('fosterhomecontact');
    }
}