let foods = ['Pasta', 'Verdura', 'Carne', 'Frutta', 'Latticini'];

let container = document.querySelector('#cont1');

let ul = document.createElement('ul')

 ul.classList.add('list-group')

    foods.forEach((valore) => {

        ul.innerHTML += `<li class="list-group-item">${valore}</li>`
        
    });

    container.appendChild(ul);