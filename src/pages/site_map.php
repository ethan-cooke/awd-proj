<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col w-full min-h-screen">
    <?php include('../common/navbar.php'); ?>
    <div class="flex justify-center flex-grow">
      <div class="flex flex-col prose max-w-6xl w-full text-black">
        <h1 class="p-6 pb-0">Site Map</h1>        
        <div class="columns-xs justify-center w-full p-6 gap-6">
          <div class="flex flex-col p-4 gap-4 break-inside-avoid mb-3 bg-stone-300 rounded-md min-w-fit text-center">
            <a class="text-2xl font-bold" href="index.php">Home</a>
            <a class="text-2xl font-bold" href="pages/site_map.php">Site Map</a>
            <a class="text-2xl font-bold" href="pages/giveaways.php">Giveaways</a>
          </div>
          <div class="flex flex-col p-4 gap-4 break-inside-avoid mb-3 bg-stone-300 rounded-md text-center">
            <div class="text-2xl font-bold">Store</div>
            <a class="text-xl font-bold" href="pages/store_options.php">Store Options</a>
            <a class="text-xl font-bold" href="pages/register.php">Register</a>
            <a class="text-xl font-bold" href="pages/catalog.php">Catalog</a>
            <a class="text-xl font-bold" href="pages/login.php">Log In</a>
            <a class="text-xl font-bold" href="pages/shopping_cart.php">Shopping Cart</a>
          </div>
          <div class="flex flex-col p-4 gap-4 break-inside-avoid mb-3 bg-stone-300 rounded-md text-center">
            <div class="text-2xl font-bold">About Us</div>
            <a class="text-xl font-bold" href="pages/vision.php">Vision and Mission</a>
            <a class="text-xl font-bold" href="pages/locations.php">Locations</a>
            <a class="text-xl font-bold" href="pages/feedback.php">Feedback Form</a>
          </div>
        </div>        
      </div>
    </div>
    <?php include('../common/footer.php'); ?>
  </div>
</body>
</html>