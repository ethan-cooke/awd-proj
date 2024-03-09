<footer class="flex w-full bg-tblue2 justify-center border-t-4 border-tblue3 bottom-0 text-twhite font-semibold p-2">
  <div class="flex flex-col md:flex-row text-center md:text-left justify-between max-w-6xl w-full px-6">
    <div>TimeWarp Consoles v4 &copy; 2024 Ethan Cooke</div>
    <span id="time"></span>
  </div>
</footer>

<script>
  setInterval(async ()=> {
    const data = await (await fetch('scripts/time.php')).json()
    document.getElementById('time').innerHTML = `It's ${data.date}. The time is ${data.time}.`  
  }, 1000)
</script>