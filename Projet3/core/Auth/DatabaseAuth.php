<?php

namespace Core\Auth;

use Core\Database\Database;

class DatabaseAuth
{
  private $db;


  public function __construct(Database $db)
  {
    $this->db = $db;
  }

  public function getUserId()
  {
    if ($this->logged())//true
    {
      return $_SESSION['auth'];
    }
  }


  public function login($username, $password) //retourne boolean
  {
    $user = $this->db->prepare('SELECT * FROM users WHERE pseudo = ?', [$username], null, true);
    if ($user) //si pseudo trouvé en bdd
    {
      if($user->mdp === sha1($password))
      {
        $_SESSION['auth'] = $user->id;
        return true;
      }//return true si le mot de passe correspond au pseudo envoyé
      else
      {
        return false;
      }
    }
    else {
      return false;
    }

  }

  public function logged()//reourne boolean si loggé ou non
  {
    return isset($_SESSION['auth']);
  }
}


 ?>
