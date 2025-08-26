<?php
namespace jui\forms;

use std, gui, framework, jui;


class ClockApp extends AbstractForm
{



    /**
     * @event button3.click 
     */
    function doButton3Click(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event label3.mouseEnter 
     */
    function doLabel3MouseEnter(UXMouseEvent $e = null)
    {    
        
// Импортируем класс str если нужно
// use php\lib\str; или use std;

// Сгенерировать текст из 8 символов и букв A, B, C, D, E и F.
$this->label3->text = str::random(16, "QWERTYUIOP[]\ASDFGHJKL;'ZXCVBNM,./`1234567890-=74123698520/*-+'!@#$%^&*()_+");
    
    }




}
