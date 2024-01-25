<div class="flex justify-center bg-tblue2 text-white border-b-4 border-tblue3 w-full">
  <div class="flex justify-center flex-col w-full">
    <div class="flex justify-between w-full p-4 pb-0">
      <div class="flex items-center">
        <img src="images/logo.png" alt="logo" class="w-20 h-20" />
        <span class="font-bold md:text-2xl text-lg">TimeWarp<br />Consoles</span>
      </div>
      <div class="flex flex-col items-center justify-center gap-2 text-center">
        <span class="font-semibold">Welcome!</span>
        <button class="bg-tblue3 py-1 px-3 rounded-full">Log in</button>
      </div>
    </div>
    <div class="md:hidden block text-center pb-4">
      <i id="arrow" class="ph ph-caret-down text-xl"></i>
    </div>
    <div id="nav-menu" class="md:flex justify-center hidden p-4 pt-0">
      <div class="flex w-full max-w-2xl items-center md:items-end flex-col justify-between gap-4 md:flex-row">
        <?php include('navlinks.html'); ?>
      </div>
    </div>
  </div>
</div>
<script>
  document.getElementById('arrow').addEventListener('click', function() {
        var navMenu = document.getElementById('nav-menu');
        navMenu.style.display = (navMenu.style.display === 'flex') ? 'none' : 'flex';
    });
</script>
