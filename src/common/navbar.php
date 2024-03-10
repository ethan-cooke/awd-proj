<?php
$loggedIn = isset($_SESSION["customer_id"]);
if ($loggedIn) {
  $name = $_SESSION["first_name"];
}
?> 
<div class="flex justify-center bg-tblue2 text-white border-b-4 border-tblue3 w-full">
  <div class="flex justify-center flex-col w-full">
    <div class="flex justify-between w-full p-4 pb-0">
      <div class="flex items-center">
        <a href="my_business.php"><img src="images/logo.png" alt="logo" class="w-20 h-20" /></a>
        <span class="font-bold md:text-2xl text-lg">TimeWarp<br />Consoles</span>
      </div>
      <div class="flex flex-col items-center justify-center gap-2 text-center">
      <?php if ($loggedIn): ?>
        <span class="font-semibold">Welcome, <?php echo $name ?>!</span>
        <a href="scripts/logout.php">
          <button class="bg-tblue3 py-1 px-3 rounded-full">Log Out</button>
        </a>
      <?php else: ?>
        <span class="font-semibold">Welcome!</span>
        <a href="pages/login.php">
          <button class="bg-tblue3 py-1 px-3 rounded-full">Log In</button>
        </a>
      <?php endif; ?>
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
  document.addEventListener('click', (event) => {
    const dropdownButton = event.target.closest('.dropdown-button')
    document.querySelectorAll('.dropdown-button').forEach((button) => {
        button.classList.remove('dropdown-open')
      })
    if (dropdownButton) {
      dropdownButton.classList.toggle('dropdown-open')
      event.stopPropagation()
    }})

  document.getElementById('arrow').addEventListener('click', () => {
    document.getElementById('nav-menu').classList.toggle('nav-open');
  });
</script>
