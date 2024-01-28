<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col w-full min-h-screen">
    <?php include('../common/navbar.php'); ?>

    <div class="flex justify-center flex-grow">
      <div class="flex max-w-6xl">
        <div class="flex flex-col prose max-w-none text-tgray p-6">
          <h1>Store Options</h1>
          <p>Welcome to our e-store. Thanks for checking out what we have to offer!</p>
          <p>Here we sell all kinds of retro game consoles, controllers, games and more! <br>
          We've added a few links to help you get started. Please choose one of the following:</p>
          <div class="flex flex-col gap-2">
            <span>To browse our entire product catalog <a title="Not Yet Implemented" href="pages/sorry.php">click here</a>.</span>
            <span>Do you already have an account with us? Login <a title="Not Yet Implemented" href="pages/sorry.php">here</a> to our e-store and begin browsing right away!</span>
            <span>Don't have an account with us yet? You can <a title="Not Yet Implemented" href="pages/sorry.php">click here</a> to register an account to use in the future.</span>
          </div>
        </div>
      </div>
    </div>
    <?php include('../common/footer.html'); ?>
  </div>
</body>
</html>