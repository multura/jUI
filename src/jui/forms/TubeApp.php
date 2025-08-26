<?php
namespace jui\forms;

use std, gui, framework, jui;
use UXMouseEvent;
use UXWindowEvent;

class TubeApp extends AbstractForm
{

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
        // Используем engine и метод для загрузки контента.
        $history = $this->browser->engine->history;

        // Получаем массив истории посещений
        $entries = $history->getEntries();

        // Выводим результат ...
        pre($entries);

        // Пример использования cURL с подменой User-Agent
        $url = "http://m.youtube.com/"; // Замените на нужный вам URL
        $response = $this->fetchUrlWithUserAgent($url, "Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26.17 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25");

        // Выводим ответ сервера
        pre($response);
    }

    /**
     * Функция для выполнения HTTP-запроса с подменой User-Agent
     */
    private function fetchUrlWithUserAgent($url, $userAgent)
    {
        // Инициализация cURL
        $ch = curl_init();

        // Установка URL
        curl_setopt($ch, CURLOPT_URL, $url);

        // Установка User-Agent
        curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);

        // Возврат результата как строки
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Выполнение запроса
        $response = curl_exec($ch);

        // Проверка на ошибки
        if ($response === false) {
            return 'Curl error: ' . curl_error($ch);
        }

        // Закрытие cURL сессии
        curl_close($ch);

        return $response;
    }

    /**
     * @event showing 
     */
    function doShowing(UXWindowEvent $e = null)
    {    
        
    }

}
