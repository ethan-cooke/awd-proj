<!DOCTYPE html>
<html lang="en">
<?php include('common/head.php'); ?>
<body>
  <div class="flex flex-col justify-center w-full h-screen ">
    <?php include('common/navbar.php'); ?>
    <div class="flex justify-center bg-cover bg-center w-full h-full items-center" id="background">
      <div class="flex p-8 bg-tblue1 rounded-2xl border-4 border-tblue3 max-w-2xl font-semibold">
        <?php include('common/quote.php'); ?>
      </div>
      <div class="absolute bottom-3 left-4 desc-text" id="description"></div>
    </div>    
  </div>
  <div class="flex justify-center">
    <div class="columns-xs max-w-6xl p-6 text-tgray w-full gap-6">
      <div class="flex flex-col break-inside-avoid mb-6 bg-stone-300 rounded-md overflow-hidden">
        <img class="w-full object-cover aspect-square" src="images/SNES.jpg" alt="SNES Console">
        <div class="p-4">
          <h4 class="font-bold">Nintendo</h4>
          <span>Come check out our vast selection of retro Nintendo Consoles! Our stock ranges from the gamecube all the way back to the NES!</span>
        </div>
      </div>
      <div class="flex flex-col break-inside-avoid mb-6 bg-stone-300 rounded-md overflow-hidden">
        <img class="w-full object-cover aspect-square" src="images/Playstation.jpg" alt="Playstation Console">
        <div class="p-4">
          <h3 class="font-bold">Sony</h3>
          <span>Relive your favourite classic sony exclusives with our vast selection of Playstation Consoles! Ranging from the PS1 to PS3 as well as handhelds such as the PSP!</span>
        </div>
      </div>
      <div class="flex flex-col break-inside-avoid mb-6 bg-stone-300 rounded-md overflow-hidden">
        <img class="w-full object-cover aspect-square" src="images/Dreamcast.jpg" alt="Dreamcast Console">
        <div class="p-4">
          <h4 class="font-bold">SEGA</h4>
          <span>Find some hidden gems within our array of SEGA Consoles! A whole range of games you might have never heard of can be played on these unique consoles, ranging from the Master System to the Dreamcast!</span>
        </div>
      </div>
      <div class="flex flex-col break-inside-avoid mb-6 bg-stone-300 rounded-md overflow-hidden">
        <img class="w-full object-cover aspect-square bg-white" src="images/GameCube_controller.png" alt="Gamecube Controller">
        <div class="p-4">
          <h4 class="font-bold">Controllers</h4>
          <span>Any peripheral you can imagine we have in our stock! From playstation controllers to atari guns we have it all!</span>
        </div>
      </div>
      <div class="flex flex-col break-inside-avoid mb-6 bg-stone-300 rounded-md overflow-hidden">
        <img class="w-full object-cover aspect-square bg-white" src="images/games_retro.png" alt="Retro Games">
        <div class="p-4">
          <h4 class="font-bold">Games</h4>
          <span>All your favourite classic games can be bought here at TimeWarp Consoles! We offer various prices depending on the condition of the copy, even some unused ones for all you collectors out there!</span>
        </div>
      </div>
      <div class="flex flex-col break-inside-avoid mb-6 bg-stone-300 rounded-md overflow-hidden">
        <img class="w-full object-cover aspect-square bg-white" src="images/parts_image.jpg" alt="Inside of SNES">
        <div class="p-4">
          <h4 class="font-bold">Parts</h4>
          <span>We also sell all the spare parts you could ever need! Check out the parts section of our e-store if your looking to make some home repairs!</span>
        </div>
      </div>
    </div>
  </div>
  <?php include('common/footer.php'); ?>
</body>
<script src="scripts/carousel.js"></script>
</html>