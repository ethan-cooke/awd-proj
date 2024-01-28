<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col w-full min-h-screen">
    <?php include('../common/navbar.php'); ?>
    <div class="flex justify-center flex-grow">
      <div class="flex flex-col w-full max-w-6xl gap-6 text-tgray p-6">
        <div class="prose max-w-none">
          <h1>Our Locations</h1>
        </div>
        <div class="flex justify-between w-full bg-tblue1 rounded-md oveflow-hidden">
          <img class="object-contain" width="300" src="images/location1.png" alt="location 1">
        </div>
      </div>
    </div>
    <?php include('../common/footer.html'); ?>
  </div>
</body>
</html>