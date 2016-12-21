<?php
/*
#########################################################
PHP class for Typesetter CMS - 'colorzoom' plugin
Author: Florin Cătălin
Date: 20-12-2016
Version 1.0
based on PHP class for Typesetter CMS - 'Replace Colorbox' plugin
Author: J. Krausz
Date: 2016-12-11
Version 1.0
#########################################################
*/

defined('is_running') or die('Not an entry point...');

class colorzoom{

  public static function GetHead(){
    global $page, $addonRelativeCode;
    /*$page->css_user[] = $addonRelativeCode . '/thirdparty/colorzoom/colorbox.css';*/
    $page->head_js[] =  $addonRelativeCode . '/thirdparty/colorzoom/jquery.zoom.min.js';
    
    common::AddColorBox();
    
    $page->jQueryCode .=  "\n" . 
    "//Colorbox with zoom  (using grab)
       $(document).ready(function(){
       $('.galerie').colorbox({        
        rel:'galerie',     
        'onComplete': function(){        
    $('#cboxLoadedContent img').parent().zoom({ on:'grab' });
    }
});        
});" 
    . "\n";
  }

}
