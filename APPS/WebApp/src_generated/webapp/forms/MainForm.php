<?php
namespace webapp\forms;

use std, gui, framework, webapp;


class MainForm extends AbstractForm
{

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->loadForm('HomeMenu', true, true);

        
    }

}
