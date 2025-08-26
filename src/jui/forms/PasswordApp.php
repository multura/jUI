<?php
namespace jui\forms;

use std, gui, framework, jui;


class PasswordApp extends AbstractForm
{

    /**
     * @event button4.click 
     */
    function doButton4Click(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button3.click 
     */
    function doButton3Click(UXMouseEvent $e = null)
    {    
        
// Импортируем класс str если нужно
// use php\lib\str; или use std;

// Сгенерировать текст из 8 символов и букв A, B, C, D, E и F.
$this->edit->text = str::random(8, "QWERTYUIOPASDFGHJKLZXCVBNM[]\;',./`1234567890-=~!@#$%^&*()_+/789456123'");
    
    }

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
        // Импортируем класс str если нужно
// use php\lib\str; или use std;

// Сгенерировать текст из 16 символов и букв A, B, C, D, E и F.
$this->edit->text = str::random(16, "QWERTYUIOPASDFGHJKLZXCVBNM[]\;',./`1234567890-=~!@#$%^&*()_+/789456123'");
    }

    /**
     * @event buttonAlt.click 
     */
    function doButtonAltClick(UXMouseEvent $e = null)
    {    
        // Импортируем класс str если нужно
// use php\lib\str; или use std;

// Сгенерировать текст из 32 символов и букв A, B, C, D, E и F.
$this->edit->text = str::random(32, "QWERTYUIOPASDFGHJKLZXCVBNM[]\;',./`1234567890-=~!@#$%^&*()_+/789456123'");
    }

}
