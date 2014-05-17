<?php

class View_DogDisplay extends AbstractView{

    function defaultTemplate(){
    
        return array('view/DogDisplay', 'Dog');
                
    }
    
    function init() {
    
       // $this->api->stickyGet('dog_id');
        $m=$this->add('Model_dogdetail')->load($_GET[312]);
        $this->add('Button',null,'MoreInfo')
            ->setLabel('More Info')
            ->js('click')
                ->univ()
                ->frameURL('Full Dog Text', $this->api->getDestinationURL('dog/moreinfo'));
        $this->template->trySet('dog_name', $m['dog_name']);

    }

}
