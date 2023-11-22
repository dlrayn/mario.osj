// deklarasi variabel
const io = document.getElementById('io');
let posx = parseInt(getComputedStyle(io).right, 10);
let posy = parseInt(getComputedStyle(io).top, 10);


// fungsi kegiatan
function kekanan() {
  io.style.right = (posx - 100) + "px";
  posx = parseInt(getComputedStyle(io).right, 10);
}

function kekiri() {
  io.style.right= (posx + 100) + "px";
  posx = parseInt(getComputedStyle(io).right, 10);
}

function kebawah() {
  io.style.top = (posy - 100) + "px";
  posy = parseInt(getComputedStyle(io).top, 10);
}

function keatas() {
  io.style.top = (posx + 100) + "px";
  posy= parseInt(getComputedStyle(io).top, 10);
}

function loncat() {
    io.style.top = '-220px'
    setTimeout(() => {
        io.style.top = '0px' 
    },900)
}

// fungsi penggerak gim
document.addEventListener("keydown", function(event) {
  event.preventDefault();
  const key = event.key;
  switch (key) {
    case "ArrowLeft":
      kekiri();

      break;
    case "ArrowRight":
      kekanan();

      break;
    case "ArrowUp":
      keatas();

      break;
    case "ArrowDown":
      kebawah();

      break;
    case " ":
      loncat();

      break;

    case 'a':
      kekiri();
      break;

    case 'd':
      kekanan();
      break;

    case 'w':
      keatas();

      break;
    case 's':
      kebawah();

    break;
}
});
