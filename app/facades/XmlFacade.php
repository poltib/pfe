<?php namespace App\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class XmlFacade extends Facade {
 
    protected static function getFacadeAccessor()
    {
        return new \App\Services\Xml;
    }
 
}