 <div class="container">
    <h1 class="text-center mt-3">Test</h1>
    <?php if(isset($_SESSION['user'])) { ?>
      <a href="/change_password.php" class="btn btn-primary bnt-lg">Change password</a>
    <?php }?>
  </div>