let titolo = document.querySelector('#titolo');

let descrizione = document.querySelector('#descrizione');

let bottone = document.querySelector('.fbtn');

let row = document.querySelector('#wrapper');

// let articles = [
//     {
//         titolo :"Articolo1",

//         descrizione : "Questo è articolo 1"
//     },

//     {
//         titolo : "Articolo2",

//         descrizione : "Questo è articolo 2"
//     }
// ];


// Al click del bottone mi deve creare un articolo con quello che ho inserito nei due form (titolo e descrizione)


bottone.addEventListener('click',() => {
    let div = document.createElement('div')
    div.classList.add('col-12', 'col-md-6')
    div.innerHTML = `
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">${titolo.value}</h5>
      <p class="card-text">${descrizione.value}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>`

  row.appendChild(div);


});


