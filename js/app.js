import { nav_cookies, nav_no_cookies } from './components.js'

window.onload = () => {
    btn()
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
