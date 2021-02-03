<?php

if (!function_exists('view')) {
    function view (string $path, array $data = []) : string {
        // Включение буферизации вывода
        ob_start();

        // Импортирует переменные из массива в текущую таблицу символов
        extract($data);

        require TPL_PATH . $path . '.php';

        // Возвращает содержимое буфера вывода
        $result = ob_get_contents();

        // Очистить (стереть) буфер вывода и отключить буферизацию вывода
        ob_end_clean();

        return $result;
    }
}

if(!function_exists('writeLog')) {
    function writeLog(string $message, string $fileName = 'errors') : bool {
        $fileName = DOCROOT . '/data/logs/' . $fileName . date('_Y_m_d') . '.log';
        $handle = fopen($fileName, 'a');
        $log = $message . PHP_EOL;

        if(!fwrite($handle, $log)) {
            return false;
        }

        return true;
    }
}

if(!function_exists('abort')) {
    function abort(int $code) {
        http_response_code($code);
        require(TPL_PATH . 'errors' . DIRECTORY_SEPARATOR . $code . '.php');
        exit;
    }
}