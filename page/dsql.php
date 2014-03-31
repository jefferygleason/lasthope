<?php
class page_dsql extends Page {
    function init(){
        parent::init();
        
        $q=$this->api->db->dsql();
        
        //$q->table('dog')->join('breed.breedName', 'breedName');
        //$q->where('breed.breedName', "Pug");
        $q->table('dog');
//        $q->table('breed');
        $q->join('breed.breedName', 'dog.breedName');
        $q->where('dog.breedName', "Pug");
        $q->debug();
        
        foreach($q as $row){
            echo $row['id'].
            ' ' . $row['dogName'] .
            ' ' . $row['breedName'] .
            ' ' . $row['description'].
            '<br/>';
        }
        
        
        }
        
    }
