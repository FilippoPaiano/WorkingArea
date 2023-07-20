let articles = [
  {
    "id": 1,
    "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
    "body": "breve descrizione 1",
    "image": "https://picsum.photos/288"
  },
  {
    "id": 2,
    "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
    "body": "breve descrizione 2",
    "image": "https://picsum.photos/289"
  },
  {
    "id": 3,
    "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
    "body": "breve descrizione 3",
    "image": "https://picsum.photos/290"
  },
  {
    "id": 4,
    "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
    "body": "breve descrizione 4",
    "image": "https://picsum.photos/291"
  },
  {
    "id": 5,
    "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
    "body": "breve descrizione 5",
    "image": "https://picsum.photos/292"
  }
]

let containter = document.querySelector('#cont1');
let row = document.querySelector('#wrapper');
const copiaDati = JSON.parse(JSON.stringify(articles));

copiaDati.forEach(element => {
  let column = document.createElement('div');
  column.classList.add('col-12','col-md-2', 'mx-auto');
  column.innerHTML = `
  <div class="card mx-auto" style="width: 18rem;">
      <img src="${element.image}" class="card-img-top" alt="...">
      <div class="card-body">
          <h4 class="card-title text-center">${element.id}</h4>
          <h5 class="card-title">${element.title}</h5>
          <p class="card-text">${element.body}</p>
      </div>
  </div>
  `
  row.appendChild(column)
})
