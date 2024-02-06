<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col w-full min-h-screen">
    <?php include('../common/navbar.php'); ?>
    <div class="flex justify-center flex-grow">
      <div class="flex flex-col prose w-full max-w-6xl text-tgray p-6">
        <h1>Giveaways</h1>
        <div class="flex flex-col md:flex-row items-center w-full gap-4 p-4 rounded-md overflow-hidden bg-tblue3">
          <img class="max-w-xl rounded-lg w-full m-0" src="images/glover.png" alt="glover">
          <div class="flex flex-col h-full flex-grow p-4 rounded-lg bg-slate-200 prose gap-4">
            <h2>Glover (N64)</h2>
            <span>Embark on a whimsical adventure with Glover, the enchanting and magical glove on a
               quest to save the Crystal Kingdom! We're thrilled to offer you the chance to win a 
               nostalgic copy of Glover for the Nintendo 64 in our exciting giveaway.</span>
          </div>  
        </div>
        <div class="columns-xs justify-center w-full p-6 gap-6">
            <div class="giveaway-step">
              <img class="w-72 aspect-square rounded-full border-4 border-black" src="images/n64.jpg" alt="n64">
              <h1>Step 1</h1>
              <span>Buy a product from any of our locations. It can be anything over the price of $20.</span>
            </div>
            <div class="giveaway-step">
              <img class="w-72 aspect-square rounded-full border-4 border-black" src="images/guy-n64.jpg" alt="guy playing n64">
              <h1>Step 2</h1>
              <span>Take a photo of you enjoying your new purchase!</span>
            </div>
            <div class="giveaway-step">
              <img class="w-72 aspect-square rounded-full border-4 border-black" src="images/instagram.png" alt="instagram logo">
              <h1>Step 3</h1>
              <span>Upload your photo to instagram. Make sure to tag our account @TimeWarpConsoles and add the tag #GloverGiveaway. Then your all set!</span>
            </div>
          </div>
      </div>
    </div>
    <?php include('../common/footer.php'); ?>
  </div>
</body>
</html>