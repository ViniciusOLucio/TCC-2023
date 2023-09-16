const summary = document.querySelectorAll('.summary');
summary.forEach(function (item) {
  item.addEventListener('click',() => {
    item.parentElement.classList.toggle('active');
  } )
});