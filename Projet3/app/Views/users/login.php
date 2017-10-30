

<?php if ($errors):  ?>


  <div class="alert alert-danger">
   Pseudo et/ou mot de passe incorrect
  </div>


<?php endif; ?>




<form method="post">
<?= $form->input('username', 'Pseudo');  ?>
<?= $form->input('password', 'Mot de Passe', ['type' => 'password']);  ?>
<button class="btn btn-primary">Connection</button>


</form>
