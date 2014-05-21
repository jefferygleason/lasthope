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
            
        $this->pathfinder->addLocation('.',array(
                    'addons'=>array('ambient-addons'),
                    'CSS'=>'ambient_addons/cms/templates/default/css',
                    'template'=>'ambient-addons/cms/templates/default',
                    )
                );
                
        $this->add("cms/Controller_Cms");
        $this->add('Auth')->setModel('User');
        $this->auth->allowPage('register');
        

        
        if($this->auth->isLoggedIn()){
        
            $menu = $this->add('Menu',null,'Menu')
                ->addMenuItem('index','Welcome')
                ->addMenuItem('dogs')
                ->addMenuItem('breeds')
                ->addMenuItem('fosterhome', 'Foster Homes')
                ->addMenuItem('contacts')
                ->addMenuItem('userprofile', 'User Profile')
                ;
        
            $isAdmin = $this->api->auth->model['is_admin'];
            
            if ($isAdmin){
                $menu
                    ->addMenuItem('admin')
                    ->addMenuItem("cmsadmin", "Manage CMS");
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
