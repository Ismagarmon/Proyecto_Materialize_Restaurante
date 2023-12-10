window.onload = () => {
    logout()
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