<?php namespace SportFun\Repositories;

use SportFun\Interfaces\RepositoriesInterface;

interface MessageInterface extends RepositoriesInterface
{
  public function findConv($id, $from);
  public function send($data);
}