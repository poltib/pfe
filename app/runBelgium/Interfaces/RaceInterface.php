<?php

interface RaceInterface {
  public function findById($id);
  public function findAll();
  public function paginate($limit = null);
  public function store($data);
  public function storeSponsor($data);
  public function storeImage($data);
  public function storeComment($data);
  public function update($id, $data);
  public function destroy($id);
  public function destroyComment($id);
  public function validate($data);
  public function instance();
}