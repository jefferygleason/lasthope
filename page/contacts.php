<?php
class page_contacts extends Page {
    function init(){
        parent::init();
       $this->add('CRUD')->setModel('fosterhomecontact');
 //       $model = $this->add('Model_dog');
 //       $grid = $this->add('Grid');
 //       $grid->setModel($model);
 //       $grid->addPaginator(10);
        /*
        $g=$this->add('Grid');
        $g->addColumn('text', 'dogName');
        $g->addColumn('text', 'breedName');
        $g->setSource('dog');
        $g->addPaginator(10);
*/

        
        
    }
}