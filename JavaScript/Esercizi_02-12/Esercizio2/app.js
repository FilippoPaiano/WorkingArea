let contacts = ['Nicola', 'Fabio', 'Luca', 'Giulia'];

let container = document.querySelector('#cont1')

let buttonAZ = document.querySelector('.lbtn1')

let buttonZA = document.querySelector('.lbtn2')

let ul = document.createElement('ul');

contacts.forEach ((valore) => {
    
    ul.innerHTML += `<li>${valore}</li>`
    
});

container.appendChild(ul);

buttonAZ.addEventListener('click',() =>{
    
    
    contacts.sort();
    
    ul.innerHTML = ""
    
    contacts.forEach((valore) => {
        
        ul.innerHTML += `<li>${valore}</li>`
        
    })
})

    buttonZA.addEventListener('click',() =>{
        
        
        contacts.sort();
        
        contacts.reverse();
        
        ul.innerHTML = ""
        
        contacts.forEach((valore) => {
            
            ul.innerHTML += `<li>${valore}</li>`
            
        })
    })
    
    console.log(contacts)