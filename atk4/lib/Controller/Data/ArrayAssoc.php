<?php // vim:ts=4:sw=4:et:fdm=marker
/*
 * Undocumented
 *
 * @link http://agiletoolkit.org/
*//*
==ATK4===================================================
   This file is part of Agile Toolkit 4
    http://agiletoolkit.org/

   (c) 2008-2013 Agile Toolkit Limited <info@agiletoolkit.org>
   Distributed under Affero General Public License v3 and
   commercial license.

   See LICENSE or LICENSE_COM for more information
 =====================================================ATK4=*/
class Controller_Data_ArrayAssoc extends Controller_Data_Array {

    function setSource($m,$s){
        $d=array();
        foreach($s as $key=>$val){
            $d[$key]=array('name'=>$val,'id'=>$key);
        }
        return parent::setSource($m,$d);
    }
}
