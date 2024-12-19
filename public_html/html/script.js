const gridButton = document.getElementById('grid-button');
const listButton = document.getElementById('list-button');
const grid = document.querySelector('.grid');

gridButton.addEventListener('click', () => {
  grid.classList.remove('list');
  grid.classList.add('grid');
});

listButton.addEventListener('click', () => {
  grid.classList.remove('grid');
  grid.classList.add('list');
});