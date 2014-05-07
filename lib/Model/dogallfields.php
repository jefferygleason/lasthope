<?php
class Model_dogallfields extends Model_Dog {
    
    function init(){
        parent::init();

        $this->join('dogdetail');

    }
}