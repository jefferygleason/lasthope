<?php
class page_fileshare extends filestore\Page_FileAdmin {

    function initMainPage(){
        //$g=$this->add('CRUD');
        $g=$this->add('CRUD', array('allow_add'=>false, 'allow_edit'=>false));
        $g->setModel('filestore/File',
       //     array('original_filename','filename','filesize','deleted','dirname','url','filestore_type_id')
            array('url', 'original_filename')
       )->setOrder('id desc');
        $g->grid->addColumn('link','url')->setTemplate('<a href='."<?url?><?/url?>"."><?original_filename?><?/original_filename?>".'</a>');
        
        if($g->grid)$g->grid->addPaginator(50);
    
    	$f=$this->add('Form');
		$f->addField('upload','Upload_test','Upload Test')->setModel($this->model);
        
        
    }
 
}