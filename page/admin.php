<?php
class page_admin extends Page {
    function init(){
        parent::init();

        $tabs=$this->add('Tabs');
        $userTab=$tabs->addTab('Users');
        $fileTab=$tabs->addTab('Files');
        $userCrud=$userTab->add('CRUD');
        //$crud=$this->add('CRUD');
        $userCrud->setModel('user');
        
        if ($userCrud->isEditing('edit')) {
            $userCrud->form->addField('password', 'confirm_password');
             $userCrud->form->add('Order')
                ->move('confirm_password', 'after', 'password')
                ->now();

                 if($userCrud->form->isSubmitted()){
                
                    if($userCrud->form->get('password') != $userCrud->form->get('confirm_password')){
                        echo('this is the password:  ' . $userCrud->form->get('confirm_password'));
                        $userCrud->form->displayError('confirm_password', 'Passwords do not match');
                    }
                    
                    $userCrud->form->update();
                    
                    $userCrud->form->js()->univ()->successMessage('Saved')->execute();
                }
        }
        
        


		$v=$fileTab->add('View_Columns');
		$g=$v->addColumn(6);
        
		$g->add('H3')->set('Storage Location');
        $g->add('CRUD')->setModel('filestore/Volume',null,array('name','dirname','stored_files_cnt','enabled'));

		$g=$v->addColumn(6);

		$g->add('H3')->set('Allowed Filetypes');
        $g->add('CRUD')->setModel('filestore/Type',null,array('name','mime_type'));
        if(isset($g->grid))$g->grid->addPaginator(100);

        $g=$fileTab->add('CRUD');$g->setModel('filestore/File',
            array('original_filename','filename','filesize','deleted','dirname','url','filestore_type_id')
        )->setOrder('id desc');
        if($g->grid)$g->grid->addPaginator(50);
        
        $f=$fileTab->add('Form');
        $f->addField('upload', 'Upload', 'Upload')->setModel('filestore/File');
        
  }
}