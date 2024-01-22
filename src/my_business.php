<!DOCTYPE html>
<html lang="en">
<?php include('common/head.php'); ?>
<body>
    <div class="flex flex-col justify-center w-full h-screen ">
        <?php include('common/navbar.html'); ?> <!--Use prose for tailwind on content -->
        <div class="flex justify-center bg-main-page bg-center w-full h-full items-center">
            <div class="flex p-8 m-4 bg-tblue1 rounded-2xl border-4 border-tblue3 max-w-2xl font-semibold">
                Quote of the Day: “Before you marry a person, you should first make them use a computer with slow Internet to see who they really are.” —Will Ferrell
            </div>
        </div>    
    </div>
    <div class="flex flex-wrap m-auto justify-center w-full max-w-6xl p-6 text-tgray">
        <div class="flex flex-col p-6 max-w-1/3 w-1/3">
            <img class="w-full" src="images/SNES.jpg" alt="SNES Console">
            <h4 class="py-4 font-bold">Nintendo</h4>
            <span>Come check out our vast selection of retro Nintendo Consoles! Our stock ranges from the gamecube all the way back to the NES!</span>
        </div>
        <div class="flex flex-col p-6 max-w-1/3 w-1/3">
            <img class="w-full" src="images/Playstation.jpg" alt="Playstation Console">
            <h3 class="py-4 font-bold">Sony</h3>
            <span>Relive your favourite classic sony exclusives with our vast selection of Playstation Consoles! Ranging from the PS1 to PS3 as well as handhelds such as the PSP!</span>
        </div>
        <div class="flex flex-col p-6 max-w-1/3 w-1/3">
            <img class="w-full" src="images/Dreamcast.jpg" alt="Dreamcast Console">
            <h4 class="py-4 font-bold">SEGA</h4>
            <span>Find some hidden gems within our array of SEGA Consoles! A whole range of games you might have never heard of can be played on these unique consoles, ranging from the Master System to the Dreamcast!</span>
        </div>
    </div>
</body>
</html>