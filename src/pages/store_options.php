<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col w-full min-h-screen">
    <?php include('../common/navbar.php'); ?>

    <div class="flex justify-center flex-grow">
      <div class="flex w-full max-w-6xl">
        <div class="flex flex-col prose max-w-none text-tgray p-6">
          <h1>Store Options</h1>
          <p>Welcome to our e-store. Thanks for checking out what we have to offer!</p>
          <p>Here we sell all kinds of retro game consoles, controllers, games and more! <br>
          We've added a few links to help you get started. Please choose one of the following:</p>
          <div class="flex flex-col gap-2">
            <span>To browse our entire product catalog <a href="pages/catalog.php">click here</a>.</span>
            <span>Do you already have an account with us? Login <a href="pages/login.php">here</a> to our e-store and begin browsing right away!</span>
            <span>Don't have an account with us yet? You can <a href="pages/register.php">click here</a> to register an account to use in the future.</span>
          </div>
        </div>
      </div>
    </div>
    <?php include('../common/footer.php'); ?>
  </div>
</body>
</html>