<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<?php
if (isset($_SESSION["customer_id"])) {
  header("Location: ../my_business.php");
  exit;
}
$retry = isset($_GET["retry"]);
?>
<body>
  <div class="flex flex-col w-full min-h-screen">
    <?php include('../common/navbar.php'); ?>
    <div class="flex justify-center flex-grow">
      <div class="flex flex-col w-full max-w-6xl gap-6 text-tgray p-6">
        <div class="prose max-w-none">
          <h1>Log In</h1>
          <div class="flex flex-col md:flex-row gap-6">
            <div class="flex flex-col gap-6">
              <p>
                In order to make purchases on TimeWarp Consoles, you must first have an account. Fill out the form below to log in.
              </p>
              <form class="form-control flex flex-col w-full bg-slate-200 rounded-lg p-4 gap-4" action="scripts/formLogin.php" method="post" novalidate>
                <span class="text-center">Don't have an account? Click <a href="pages/register.php">here</a></span>
                <div class="flex flex-col">
                  <input class="form-field w-full" type="text" name="userName" required pattern="^[a-zA-Z0-9_]+$" placeholder="Username">
                  <span class="form-error">Please input a valid Username</span>
                </div>
                <div class="flex flex-col">
                  <input class="form-field w-full" type="password" name="password" required pattern="^.+$" placeholder="Password">
                  <span class="form-error">Please input a valid Password</span>
                </div>
                <input class="form-field w-full bg-tblue2 text-twhite py-1 px-3" type="submit" value="Log In">
                <?php if($retry): ?>
                <span class="text-red-600 text-center">Invalid username or password</span>
                <?php endif; ?>
              </form>
              <script src="scripts/form_control.js"></script>
            </div>
            <img class="w-full" src="images/BlackMage.png" alt="Black Mage">
          </div>
        </div>
      </div>
    </div>
    <?php include('../common/footer.php'); ?>
  </div>
</body>
</html>