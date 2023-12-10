window.onload = () => {
    changemp()
    logout()
    checkinput()
}

const changemp = () => {
    let l1 = document.querySelector('#pd')
    let l2 = document.querySelector('#ean')

    let loader = document.querySelector('#loader')

    let div_pd = document.getElementById('divpd')
    let div_ean = document.getElementById('divean')

    l1.addEventListener('click', () => {
        loader.classList.remove('none')
        div_ean.classList.add('none')
        div_pd.classList.add('none')

        setTimeout(() => {
            loader.classList.add('none')
            div_pd.classList.remove('none')
        }, 2000)
    })

    l2.addEventListener('click', () => {
        loader.classList.remove('none')
        div_ean.classList.add('none')
        div_pd.classList.add('none')

        setTimeout(() => {
            div_ean.classList.remove('none')
            loader.classList.add('none')
        }, 2000)
    })
}

const logout = () => {
    let logout = document.getElementById('logout')

    logout.addEventListener('click', () => {
        eliminarCookie('ID_USUARIO')
        eliminarCookie('Correo')
        window.location.assign('../index.php')
    })
}

function eliminarCookie(nombre) {
    document.cookie = nombre + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

const checkinput = () => {
    let im = document.getElementById('money')
    let rechar = document.getElementById('recharge')

    im.addEventListener('input', () => {
        if(im.value == ''){
            alert('Add some numbers')
            rechar.hidden = true
        }
        else {
            rechar.hidden = false
        }
    })

}