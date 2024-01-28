<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col justify-center w-full h-screen">
    <?php include('../common/navbar.php'); ?>
    <div class="flex flex-col prose max-w-none h-full text-black">
      <h1 class="p-6 pb-0">Site Map</h1>
      <div class="flex justify-center">
        <div class="columns-xs justify-center max-w-6xl w-full p-6 gap-6">
          <div class="flex flex-col p-4 gap-4 break-inside-avoid mb-3 bg-stone-300 rounded-md min-w-fit text-center">
            <a class="text-2xl font-bold" href="my_business.php">Home</a>
            <a class="text-2xl font-bold" href="pages/site_map.php">Site Map</a>
            <a class="text-2xl font-bold" href="pages/sorry.php">Giveaways</a>
          </div>
          <div class="flex flex-col p-4 gap-4 break-inside-avoid mb-3 bg-stone-300 rounded-md text-center">
            <div class="text-2xl font-bold">Store</div>
            <a class="text-xl font-bold" href="pages/store_options.php">Store Options</a>
            <a class="text-xl font-bold" title="Not Yet Implemented" href="pages/sorry.php">Register</a>
            <a class="text-xl font-bold" title="Not Yet Implemented" href="pages/sorry.php">Catalog</a>
            <a class="text-xl font-bold" title="Not Yet Implemented" href="pages/sorry.php">Log In</a>
            <a class="text-xl font-bold" title="Not Yet Implemented" href="pages/sorry.php">Shopping Cart</a>
            <a class="text-xl font-bold" title="Not Yet Implemented" href="pages/sorry.php">Checkout</a>
            <a class="text-xl font-bold" title="Not Yet Implemented" href="pages/sorry.php">Log Out</a>
          </div>
          <div class="flex flex-col p-4 gap-4 break-inside-avoid mb-3 bg-stone-300 rounded-md text-center">
            <div class="text-2xl font-bold">About Us</div>
            <a class="text-xl font-bold" href="pages/vision.php">Vision and Mission</a>
            <a class="text-xl font-bold" href="pages/locations.php">Locations</a>
            <a class="text-xl font-bold" title="Not Yet Implemented" href="pages/sorry.php">Feedback Form</a>
          </div>
        </div>
      </div>
    </div>
    <?php include('../common/footer.html'); ?>
  </div>
</body>
</html>