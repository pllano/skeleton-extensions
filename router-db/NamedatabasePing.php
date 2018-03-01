<?php
 
namespace YourPackage\Namedatabase;
 
use Pllano\RouterDb\Ex;
 
class NamedatabasePing
{
 
    private $config;
 
    public function __construct(array $config = [])
    {
        if (count($config) >= 1){
            $this->config = $config;
        }
    }
 
    public function ping($resource = null)
    {
        if ($resource != null) {
            try {
                // Здесь должен быть код для проверки доступности таблицы (ресурса) в базе данных
                // Должен возвращать название базы namedatabase или null если база недоступна
                
                // Этот код работает без проверки доступности базы
                $response = $resource;
 
                return $response;
 
            } catch (Ex $ex) {
                return null;
            }
        } else {
            return null;
        }
    }
 
}
