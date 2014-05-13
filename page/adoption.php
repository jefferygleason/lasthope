<?php
class page_adoption extends Page {
   function init() {
    parent::init();
   
   }
   
   function initMainPage(){
   
    $this->api->redirect('./step1');
    
   }
   
   function page_step1(){
   
    echo('Welcome to step1');
   }
        
}
