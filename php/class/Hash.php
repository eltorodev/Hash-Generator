<?php

class Hash
{
  public static function create($password)
  {
    return password_hash($password, PASSWORD_BCRYPT);
  }

  public static function validate($password, $dbPassword)
  {
    if (password_verify($password, $dbPassword)) {
      return true;
    } else {
      return false;
    }
  }
}
