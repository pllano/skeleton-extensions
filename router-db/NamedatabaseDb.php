<?php
 
// VendorPackage - производитель пакета
// Namedatabase - название подключаемого вами пакета
 
namespace VendorPackage\Namedatabase;
 
class NamedatabaseDb
{
 
    private $config;
 
    public function __construct(array $config = array())
    {
        // Получить и установить конфигурацию
        if (count($config) >= 1){
            $this->config = $config;
        }
    }
    
    public function get($resource = null, array $arr = array(), $id = null)
    {
        if (isset($resource)) {
            try {
 
                    // Здесь должен быть код проверки доступности ресурса и обработки запроса
                    // Должен возвращать count для пагинации в параметре ["response"]["total"]
 
            } catch(Exception $e) {
                // Такого ресурса не существует
                $resp["headers"]["status"] = '404 Not Found';
                $resp["headers"]["code"] = 404;
                $resp["headers"]["message"] = 'Resource Not Found';
                $resp["headers"]["message_id"] = $this->config[db][http_codes]."".$resp["headers"]["code"].".md";
                $resp["response"]["total"] = 0;
                $resp["request"]["query"] = "GET";
                $resp["request"]["resource"] = null;
            }  
        } else {
            // Плохой, неверный запрос. Не указано название ресурса.
            $resp["headers"]["status"] = '400 Bad Request';
            $resp["headers"]["code"] = 400;
            $resp["headers"]["message"] = 'Missing resource name';
            $resp["headers"]["message_id"] = $this->config[db][http_codes]."".$resp["headers"]["code"].".md";
            $resp["response"]["total"] = 0;
            $resp["request"]["query"] = "GET";
            $resp["request"]["resource"] = null;
        }
    }
 
    public function post($resource = null, array $arr = array())
    {
        // Создание одной записи
        // Должен возвращать id новой записи в параметре ["response"]["id"]
    }
 
    public function put($resource = null, array $arr = array(), $id = null)
    {
        // Обновление одной или нескольких записей
        // Должен возвращать колличество измененных записей в параметре ["response"]["total"]
    }
 
    public function delete($resource = null, array $arr = array(), $id = null)
    {
        // Удаление одной или нескольких записей
        // Должен возвращать колличество удаленных записей в параметре ["response"]["total"]
    }
 
    public function search($resource = null, array $arr = array(), $keyword = null)
    {
        // Новый запрос, аналог get рассчитан на полнотекстовый поиск
        // Должен возвращать count для пагинации в параметре ["response"]["total"]
    }
 
    public function last_id($resource)
    {
        // Должен возвращать последний идентификатор без параметров
    }
 
}
 
