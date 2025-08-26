<?php
namespace exampleapp\forms;

use std, gui, framework, exampleapp;


class MainForm extends AbstractForm
{

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->loadForm('HomeMenu', false, true);

        
    }

}
