<?php
class page_dogsdisplay extends Page {
    function initMainPage(){    
        
       // $this->api->stickyGet('dog_id');
        $m=$this->add('Model_dogdetail')->load(318);
        /*$this->add('Button',null,'MoreInfo')
            ->setLabel('More Info')
            ->js('click')
                ->univ()
                ->frameURL('Full Dog Text', $this->api->getDestinationURL('dog/moreinfo'));*/

        $this->template->set('dog_id', $m['id']);
        //$this->template->set('dog_name', $m['dog_name']);
        $this->template->set('name', $m['dog_name']);
        $this->template->set('breed', $m['breedName']);
        $this->template->set('intakeDate', $m['intake_date']);
        $this->template->set('intakeSource', $m['intake_source']);
        
        
        
       // $result=$this->template->render();
        $result=$this->template->render();
    }
    
    function defaultTemplate(){
        return array('view/DogDisplay');
    }
}
