<?php
/**
 * Consult documentation on http://agiletoolkit.org/learn 
 */
class Frontend extends ApiFrontend {
    function init(){
        parent::init();
        // Keep this if you are going to use database on all pages
        $this->dbConnect();
        $this->requires('atk','4.2.0');
        // A lot of the functionality in Agile Toolkit requires jUI
        $this->add('jUI');
        
        $this->add('Auth')->setModel('User');
        $this->auth->allowPage('register');
        
        
        if($this->auth->isLoggedIn()){
        
            $menu = $this->add('Menu',null,'Menu')
                ->addMenuItem('index','Welcome')
                ->addMenuItem('dogs')
                ;
        
            $isAdmin = $this->api->auth->model['is_admin'];
            
            if ($isAdmin){
                $menu->addMenuItem('admin');
            }
            
            $menu
            ->addMenuItem('Logout')
            ;
        }
        else {
            $menu=$this->add('Menu',null,'Menu')
                ->addMenuItem('index', 'Welcome')
                ->addMenuItem('register')
                ;
        }
        
        $this->auth->check();

    }
}
