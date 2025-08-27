<?php
namespace jui\forms;

use std, gui, framework, jui;
use php\io\Stream;use php\io\IOException;


class SettingsApp extends AbstractForm
{

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event linkAlt.click 
     */
    function doLinkAltClick(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event link.click 
     */
    function doLinkClick(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button3.click 
     */
    function doButton3Click(UXMouseEvent $e = null)
    {    
      try {   $content = Stream::getContents('http://mt.uzbekistation.serv00.net/jui/version');} catch (IOException $e) { $this->panel->hide();    }
    }

    /**
     * @event showing 
     */
    function doShowing(UXWindowEvent $e = null)
    {    
        
    }

    /**
     * @event buttonAlt.click 
     */
    function doButtonAltClick(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event label6.mouseEnter 
     */
    function doLabel6MouseEnter(UXMouseEvent $e = null)
    {    
        
    }






}
