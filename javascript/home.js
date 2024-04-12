var container = document.querySelector(".container-actu")
var cards = document.querySelector(".cards-actu")


/* keep track of user's mouse down and up */
let isPressedDown = false;
/* x horizontal space of cursor from inner container */
let cursorXSpace;



container.addEventListener('mouseup',()=>{
  container.style.cursor = "grab";
});

container.addEventListener("mousedown", (e) => {
  isPressedDown = true;
  cursorXSpace = e.offsetX - cards.offsetLeft;
  container.style.cursor = "grabbing";
});

window.addEventListener("mouseup", () => {
  isPressedDown = false;
});

container.addEventListener("mousemove", (e) => {
  if (!isPressedDown) return;
  e.preventDefault();
  cards.style.left = `${e.offsetX - cursorXSpace}px`;
  boundCards();
});

function boundCards() {
  var container_rect = container.getBoundingClientRect();
  var cards_rect = cards.getBoundingClientRect();

  if (parseInt(cards.style.left) > 0) {
    cards.style.left = 0;
  } else if (cards_rect.right < container_rect.right) {
    cards.style.left = `-${cards_rect.width - container_rect.width}px`;
  }
}

window.addEventListener('scroll', function() {
  var scrolled = window.scrollY;
  var logo = document.querySelector('.logo-header');
  var txt = document.querySelector('.welcome-text');
  var name = document.querySelector('.nom-du-maire');

  logo.style.transform = "translate(0px," + scrolled/1.1 +"%)";
  txt.style.transform = "translate(0px," + scrolled/0.67  +"%)";
  name.style.transform = "translate(0px," + scrolled/0.232 +"%)";

});
