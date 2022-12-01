let main = document.querySelector('main')
let burgerBtn = document.querySelector('#burger')
let menu = document.querySelector('#menu')
let upBtn = document.querySelector('#up')
let header = document.querySelector('header')
let headerLi = document.querySelectorAll('header a')

// fold/unfold the menu
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

// display the menu with click
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

// display the button top of page with scroll
window.addEventListener('scroll', () => {
    if (window.pageYOffset === 0) {
        upBtn.style.display = 'none'
    } else {
        upBtn.style.display = 'inline-block'
    }
})

// change header color with scroll
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

// check input value
let nameInput = document.querySelector('#name')
let nameError = document.querySelector('#name__error')
let emailInput = document.querySelector('#email')
let emailError = document.querySelector('#email__error')
let emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/


nameInput.addEventListener('input', (e) => {
    if(/[^A-Za-z\s]/.test(e.target.value)) {
        nameInput.style.borderColor = '#B80900'
        nameError.style.display = 'block'
    } else {
        nameInput.style.borderColor= 'rgba(141,147,59, 0.8)'
        nameError.style.display = 'none'
    }
})
emailInput.addEventListener('change', (e) => {
    if(emailRegex.test(e.target.value)) {
        emailInput.style.borderColor= 'rgba(141,147,59, 0.8)'
        emailError.style.display = 'none'
    } else {
        emailInput.style.borderColor = '#B80900'
        emailError.style.display = 'block'
    }
})