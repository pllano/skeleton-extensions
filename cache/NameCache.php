<?php
 
namespace Vendor\Caching\Cache;
 
class NameCache {
 
    private $data;
 
    public function __construct($data)
    {
        $this->$data = $data;
    }
 
    public function getItem($key)
    {
 
    }
 
    public function get()
    {
        if(isset($this->content)) {
            return $this->content;
        } else {
            return null;
        }
    }
 
    public function set($content)
    {
        $this->content = $content;
    }
 
    public function save()
    {
 
    }
 
    public function expiresAfter($cache_lifetime = null)
    {
        return true;
    }
 
}
