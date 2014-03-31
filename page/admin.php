<?php
class page_admin extends Page {
    function init(){
        parent::init();

        $this->add('CRUD')->setModel('user');

  }
}