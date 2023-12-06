import { nav_cookies, nav_no_cookies } from './components.js'

window.onload = () => {
    comprobaciones()
}

 const comprobaciones = () => {
    let arraycookies = document.cookie.split(';')

    let main = document.getElementById('logged')


    arraycookies.forEach(cookie => {
        console.log(cookie)
    })
 }

function createcookie(){
    let cookie_date = new Date()
    cookie_date.setTime(cookie_date.getTime() + 365 * 24 * 60 * 60 * 10)
    // let nombrecookie = 
}
