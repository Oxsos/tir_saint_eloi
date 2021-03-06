
<?php require_once"inc/header.php" ?>

<?php require_once "inc/header.php";

require_once "../inc/connect.php";
if (!$_SESSION['admin']) {
  header('location:login.php');
}





if (!empty($_POST)) {
  $errors = array();

  //verification pseudo
  if (!empty($_POST['pseudo'])) {
    $req = $bdd->prepare('SELECT id FROM admin WHERE pseudo = ?');
    $req->execute([$_POST['pseudo']]);
    $user = $req->fetch();
    if($user){
      $errors['pseudo'] = 'Ce pseudo est déjà pris';
    }
  }
  //verification email
  if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Votre email n'est pas valide !";
  }

  //verification mot de passe
  if (empty($_POST['pass']) || $_POST['pass'] != $_POST['password_confirm']) {
    $errors['pass'] = "Mot de passe invalide !";
  }

  //insertion dans la BDD
  if (empty($errors)) {
    $req = $bdd->prepare("INSERT INTO admin SET pseudo = ?, pass = ?, email = ?");
    $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
    $req->execute([$_POST['pseudo'], $pass, $_POST['email']]);
    header('location:admin.php');
  }





}
?>

<!--registration form-->

<div class="form-admin">

  <h1>Ajouter un administrateur</h1>

  <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
      <p>Vous n'avez pas rempli le formulaire correctement</p>
      <ul>
        <?php foreach($errors as $error): ?>
          <li><?php echo $error; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>




  <form action="" method="POST">

    <div class="form-group">
      <label for="">Pseudo</label>
      <input class="form-control" type="text" name="pseudo" required>
    </div>

    <div class="form-group">
      <label for="">Email</label>
      <input class="form-control" type="text" name="email" required>
    </div>

    <div class="form-group">
      <label for="">Mot de passe</label>
      <input class="form-control" type="password" name="pass" required>
    </div>

    <div class="form-group">
      <label for="">Confirmer le mot de passe</label>
      <input class="form-control" type="password" name="password_confirm" required>
    </div>

    <button type="submit"  class="button"> Ajouter </button>
  </form>

</div>


<//----------------------------------------------------footer------------------------------------------------------->

<?php require_once"inc/footer.php" ?>
