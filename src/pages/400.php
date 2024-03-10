<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col w-full min-h-screen">
    <?php include('../common/navbar.php'); ?>
    <div class="flex justify-center flex-grow">
      <div class="flex w-full max-w-6xl">
        <div class="flex flex-col prose max-w-none text-tgray p-6">
          <h1>Error 400</h1>
          <p>Error: Bad Request. You have made an invalid request, please try again.</p>
        </div>
      </div>
    </div>
    <?php include('../common/footer.php'); ?>
  </div>
</body>
</html>