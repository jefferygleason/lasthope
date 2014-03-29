<?php
class page_admin extends Page {
    function init(){
        parent::init();


/*        $tabs = $this->add('Tabs');
        
        $tab = $tabs->addTab('User Admin');
        $tab->add('CRUD')->setModel('user');
        
        $tab = $tabs->addTab('Dogs');
        $tab->add('CRUD')->setModel('dog');
*/
        $this->add('CRUD')->setModel('user');

  }
}