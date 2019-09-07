<?php
require 'connection.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM people WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['username'])  && isset($_POST['phone']) && isset($_POST['email']) ) {
  $username = $_POST['username'];
  $phone =$_POSt['phone'];
  $email = $_POST['email'];
  $sql = 'UPDATE users SET username=:username, phone=:phone ,email=:email WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':username' => $name, ':email' => $email, ':id' => $id])) {
    header("Location: gb.php");
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">username</label>
          <input value="<?= $person->username; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">phone</label>
          <input value="<?= $person->phone; ?>" type="number" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>

