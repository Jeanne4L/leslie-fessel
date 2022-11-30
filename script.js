let main = document.querySelector('main')
let burgerBtn = document.querySelector('#burger')
let menu = document.querySelector('#menu')
let upBtn = document.querySelector('#up')

// display dropdown
function displayMenu() {
    menu.classList.add('open')
    main.classList.add('down')
    burgerBtn.addEventListener('click', () => {
        menu.classList.remove('open')
        main.classList.remove('down')
        reduceMenu()
    })
}
function reduceMenu() {
    menu.classList.add('closed')
    main.classList.add('top')
    burgerBtn.addEventListener('click', () => {
        menu.classList.remove('closed')
        main.classList.remove('top')
        displayMenu()
    })
}
burgerBtn.addEventListener('click', () => {
    if(displayMenu()) {
        reduceMenu()
    } else {
        menu.classList.remove('closed')
        displayMenu()
    }
})

window.addEventListener('scroll', () => {
    if (window.pageYOffset === 0) {
        upBtn.style.display = 'none'
    } else {
        upBtn.style.display = 'inline-block'
    }
})