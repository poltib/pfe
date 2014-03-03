<?php namespace SportFun\Repositories\Happening;

use SportFun\Interfaces\RepositoriesInterface;

interface HappeningInterface extends RepositoriesInterface
{
    public function storeImage($data);
    public function storeSponsor($data);
}