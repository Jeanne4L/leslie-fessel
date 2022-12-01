let main = document.querySelector('main')
let burgerBtn = document.querySelector('#burger')
let menu = document.querySelector('#menu')
let upBtn = document.querySelector('#up')
let header = document.querySelector('header')
let headerLi = document.querySelectorAll('header a')

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

// change header color
function changeColorHeaderLi(color) {
    for (let i=0; i<headerLi.length; i++) {
        headerLi[i].style.color = color
    }
}

if(self.innerWidth < 1000) {
    burgerBtn.addEventListener('click', () => {
        if(displayMenu()) {
            reduceMenu()
        } else {
            menu.classList.remove('closed')
            displayMenu()
        }
    })
} else {
    menu.classList.remove('closed')
}

window.addEventListener('scroll', () => {
    if (window.pageYOffset === 0) {
        upBtn.style.display = 'none'
    } else {
        upBtn.style.display = 'inline-block'
    }
})

if(self.innerWidth > 1000) {
    window.addEventListener('scroll', () => {
        if (window.pageYOffset === 0) {
            header.style.backgroundColor = 'transparent'
            changeColorHeaderLi('white')
            header.style.boxShadow = 'none'
        } else {
            header.style.backgroundColor = 'white'
            changeColorHeaderLi('rgba(64,69,56, 0.9)')
            header.style.boxShadow = '0px 4px 18px 3px rgba(67,67,67,0.4)'
        }
    })
}
