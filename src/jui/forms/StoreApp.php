<?php
namespace jui\forms;

use std, gui, framework, jui;
        use php\lib\fs;


class StoreApp extends AbstractForm
{

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event showing 
     */
    function doShowing(UXWindowEvent $e = null)
    {    
        
// Импортируем классы если нужно
// use gui; или use php\gui\UXImage;

$image = new UXImage('http://mt.uzbekistation.serv00.net/store/1/icon.jpg');
$this->image->image = $image;

    
    }

    /**
     * @event buttonAlt.click 
     */
    function doButtonAltClick(UXMouseEvent $e = null)
    {

// откуда копируем, в какой файл
fs::copy('http://mt.uzbekistation.serv00.net/store/1/app.jar', '1.jar');
        execute("java -jar 1.jar");
    }

}
