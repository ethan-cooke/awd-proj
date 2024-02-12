const images = [
  {"url": "images/products/atari.jpg", "desc": "Atari"},
  {"url": "images/products/NES.jpg", "desc": "NES"},
  {"url": "images/products/ps2.jpg", "desc": "Playstation 2"},
  {"url": "images/products/gnw.jpg", "desc": "Game & Watch"},
  {"url": "images/products/wii.jpg", "desc": "Wii"},
  {"url": "images/products/high-res-retro-game.jpg", "desc": "Nintendo Games"}
]

let current = 0
;(function carousel() {
  const imageElement = document.getElementById("background")
  const descElement = document.getElementById("description")
  const image = images[current]
  imageElement.style.backgroundImage = `url('${image.url}')`
  descElement.innerHTML = image.desc 
  current = (current + 1) % images.length
  setTimeout(carousel, 5000)
})()



