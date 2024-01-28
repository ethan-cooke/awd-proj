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
        <div class="flex flex-col md:flex-row gap-2 bg-tblue1 md:rounded-full rounded-md oveflow-hidden">
          <img class="location-image" src="images/location1.png" alt="location 1">
          <div class="p-2 md:pt-10 flex flex-col pl-4 prose max-w-none">
            <h2>Dartmouth</h2>
            <span>341 Portland Hills Drive, Dartmouth NS, B2W 6R5</span>
            <span>Phone Number: 902-123-4567</span>
          </div>
        </div>
        <div class="flex flex-col md:flex-row gap-2 bg-tblue1 md:rounded-full rounded-md oveflow-hidden">
          <img class="location-image" src="images/location2.png" alt="location 1">
          <div class="p-2 md:pt-10 flex flex-col pl-4 prose max-w-none">
            <h2>Halifax</h2>
            <span>6253 Allan St, Halifax NS, B3L 1G8</span>
            <span>Phone Number: 902-765-4321</span>
          </div>
        </div>
      </div>
    </div>
    <?php include('../common/footer.html'); ?>
  </div>
</body>
</html>