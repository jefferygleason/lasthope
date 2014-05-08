<?php
class page_dogmanager extends Page {
    function initMainPage(){
    //function init(){
    //    parent::init();        
        $p=$this;
        $dogs=$this->add('MVCGrid');
        $dogs->setModel('dog', array('dog_name', 'dog_home_name', 'age', 'sex'));
        $dogs->addQuickSearch(array('dog_name', 'dog_home_name'));
        $dogs->addButton('New Dog');
        $dogs->getColumn('dog_name')->setTemplate('dog_details');
         $dogs->addFormatter('dog_name', 'link');

        /*if($_GET['events']){
            
            $grid->js()->univ()
                ->dialogURL('Dog Events', $this->api->url('./events', array('dog_id'=>$_GET['events'])))
                ->execute();
        }
        
        if($_GET['details']){
            
            $grid->js()->univ()
                ->dialogURL('Dog Details', $this->api->url('./details', array('dog_id'=>$_GET['details'])))
                ->execute();
        }*/
        
        function defaultTemplate(){
            return array('page/dogmanager');
        }
        
        function page_details(){
            $v=$this->add('View', null, null, array('view/dog_details'));
            $m=$v->setModel('dog')->loadData($_GET['id']);
            $v->template->del('has_logo');
            $v->add('Button', null, 'Buttons')->setLabel('Back')->js('click')->univ()->location($this->api->getDestinationURL('..'));
            $v->add('Button', null, 'Buttons')->setLabel('Edit');
        }
        
    }
    
}
