window.onload = () => {
    changemp()
    logout()
}

const changemp = () => {
    let l1 = document.querySelector('#pd')
    let l2 = document.querySelector('#ean')

    let loader = document.querySelector('#loader')

    let div_pd = document.getElementById('divpd')
    let div_ean = document.getElementById('ean')

    l1.addEventListener('click', () => {
        loader.classList.remove('none')

        setInterval(() => {
            div_pd.classList.remove('none')
            div_ean.classList.add('none')
            loader.classList.add('none')
        }, 1500)
    })

    l2.addEventListener('click', () => {
        loader.classList.remove('none')

        setInterval(() => {
            div_ean.classList.remove('none')
            div_pd.classList.add('none')
            loader.classList.add('none')
        }, 1500)
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