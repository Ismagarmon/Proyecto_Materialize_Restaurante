import { nav_cookies, nav_no_cookies } from './components.js'

window.onload = () => {
    btn()
    changeMenu()
}

const btn = () => {
    let btn = document.getElementById('logout')
    btn.addEventListener('click', () => {
        destroycookie('ID_USUARIO')
    })
}

function destroycookie(nombre) {
    document.cookie = nombre + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}


const changeMenu = () => {
    let pp1 = document.getElementById('one')
    let pp2 = document.getElementById('two')


    let passp = document.getElementById('passp')
    let passp2 = document.getElementById('passp2')

    passp.addEventListener('click',() => {
        pp1.classList.add('none')
        pp2.classList.remove('none')
    })

    passp2.addEventListener('click',() => {
        pp1.classList.add('none')
        pp2.classList.remove('none')
    })

    let passp3 = document.getElementById('passp3')
    let passp4 = document.getElementById('passp4')

    passp3.addEventListener('click',() => {
        pp1.classList.remove('none')
        pp2.classList.add('none')
    })

    passp4.addEventListener('click',() => {
        pp1.classList.remove('none')
        pp2.classList.add('none')
    })
    

    let pp3 = document.getElementById('three')
    let pp4 = document.getElementById('four')


    let passp5 = document.getElementById('passp5')
    let passp6 = document.getElementById('passp6')

    passp5.addEventListener('click',() => {
        pp3.classList.add('none')
        pp4.classList.remove('none')
    })

    passp6.addEventListener('click',() => {
        pp3.classList.add('none')
        pp4.classList.remove('none')
    })

    let passp7 = document.getElementById('passp7')
    let passp8 = document.getElementById('passp8')

    passp7.addEventListener('click',() => {
        pp3.classList.remove('none')
        pp4.classList.add('none')
    })

    passp8.addEventListener('click',() => {
        pp3.classList.remove('none')
        pp4.classList.add('none')
    })

}