import { cards, prices } from './components.js'

window.onload = () => {
    changeMenu()
    logout()
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

const logout = () => {
    let logout = document.getElementById('logout')

    logout.addEventListener('click', () => {
        eliminarCookie('ID_USUARIO')
        eliminarCookie('Correo')
        window.location.assign('index.php')
        window.location.reload()
    })
}

function eliminarCookie(nombre) {
    document.cookie = nombre + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}
