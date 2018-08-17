const yoda = document.querySelector('.card__pic[alt="Yoda"]');

const seagulls = () => {
  console.log('Let the fun begin!')
  window.open('https://www.youtube.com/watch?v=U9t-slLl30E');
}

yoda.addEventListener('click', seagulls);

window.onbeforeunload = () => {
  console.log('Bye, now!');
  yoda.removeEventListener('click', seagulls);
}
