let firstButton = document.querySelector(".button1")
let secondButton = document.querySelector(".button2")
let thirdButton = document.querySelector(".buttn3")
let paragrafi = document.querySelectorAll("p")

firstButton.addEventListener("click", () => {
    paragrafi.forEach(paragrafo => {
        paragrafo.classList.toggle("d-none")
    })
})

/* Math.floor(Math.random()*16777215).toString(16) */

secondButton.addEventListener("click", () => {
    paragrafi.forEach(ciao => {
        let colore = Math.floor(Math.random()*16777215).toString(16) 
        ciao.style.color = "#" + colore
    })
})

thirdButton.addEventListener("click", () => {
    paragrafi.forEach(paragrafo => {
        paragrafo.classList.toggle("fw-bold")
    })
})
