<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col justify-center w-full h-screen">
    <?php include('../common/navbar.php'); ?>
    <div class="flex flex-col prose max-w-none h-full text-black">
      <h1>Site Map</h1>
      <div class="columns-xs flex max-w-6xl w-full p-6 gap-6">
        <div class="flex flex-col break-inside-avoid mb-3 bg-stone-300 rounded-md overflow-hidden">
          <a class="p-4 text-2xl font-bold" href="my_business.php">Home</a>
        </div>
        <div class="flex flex-col break-inside-avoid mb-3 bg-stone-300 rounded-md overflow-hidden">
          <div class="p-4 text-2xl font-bold">Store</div>
        </div>
      </div>
    </div>
    <?php include('../common/footer.html'); ?>
  </div>
</body>
</html>