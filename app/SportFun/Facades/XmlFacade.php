<?php namespace App\SportFun\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class XmlFacade extends Facade
{
 
    protected static function getFacadeAccessor()
    {
        return new \SportFun\Services\Xml;
    }
 
}