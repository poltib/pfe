<?php namespace SportFun\Repositories\User;

use SportFun\Interfaces\RepositoriesInterface;

interface UserSportInterface extends RepositoriesInterface
{
  public function connection($data);
  public function raceParticip($data);
  public function raceDontParticip($data);
}