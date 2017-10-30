<?php
namespace App\Controller;

use Core\HTML\BootstrapForm;
use \App;


class UsersController extends AppController
{
   public function login()
   {
     $errors = false;
     if (!empty($_POST))
     {
       $auth = new \Core\Auth\DatabaseAuth(App::getInstance()->getDatabase());
       if($auth->login($_POST['username'], $_POST['password'])) //si renvoi true
       {
         header('Location: index.php?p=admin.index');
       }
       else
       {
         $errors = true;
       }
     }
     $form = new \Core\HTML\BootstrapForm($_POST);
     $this->render('users.login', compact('form', 'errors'));
   }

  


}


 ?>
