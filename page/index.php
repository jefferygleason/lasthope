<?php
class page_index extends cms\Page_CmsCore {
    function init(){
        parent::init();
        
        $api=new Frontend('lasthope','jui');
        
        if($this->api->auth->isLoggedIn()){
            $this->add('View_Info')->set('Hello, ' . $this->api->auth->model['firstName']);
        }
    }
}