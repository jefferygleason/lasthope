<?php
class page_dogs extends Page {
    function init(){
        parent::init();
        $this->add('CRUD')->setModel('dog');

        /*
        $model = $this->add('Model_dog');
        $grid = $this->add('Grid');
        $grid->setModel($model);
        $grid->addPaginator(10);

        $g=$this->add('Grid');
        $g->addColumn('text', 'dogName');
        $g->addColumn('text', 'breedName');
        $g->setSource('dog');
        $g->addPaginator(10);
*/

        
        
    }
}