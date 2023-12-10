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

    let span_fp = document.getElementById('fpc_span')
    let span_sp = document.getElementById('spc_span')
    let span_dessert = document.getElementById('dessertc_span')
    let span_amount = document.getElementById('amount_span')

    let co = document.getElementById('completeorder')

    passp.addEventListener('click', () => {
        pp1.classList.add('none')
        pp2.classList.remove('none')
    })

    passp2.addEventListener('click', () => {
        pp1.classList.add('none')
        pp2.classList.remove('none')
    })

    let passp3 = document.getElementById('passp3')
    let passp4 = document.getElementById('passp4')

    passp3.addEventListener('click', () => {
        pp1.classList.remove('none')
        pp2.classList.add('none')
    })

    passp4.addEventListener('click', () => {
        pp1.classList.remove('none')
        pp2.classList.add('none')
    })


    let pp3 = document.getElementById('three')
    let pp4 = document.getElementById('four')


    let passp5 = document.getElementById('passp5')
    let passp6 = document.getElementById('passp6')

    passp5.addEventListener('click', () => {
        pp3.classList.add('none')
        pp4.classList.remove('none')
    })

    passp6.addEventListener('click', () => {
        pp3.classList.add('none')
        pp4.classList.remove('none')
    })

    let passp7 = document.getElementById('passp7')
    let passp8 = document.getElementById('passp8')

    passp7.addEventListener('click', () => {
        pp3.classList.remove('none')
        pp4.classList.add('none')
    })

    passp8.addEventListener('click', () => {
        pp3.classList.remove('none')
        pp4.classList.add('none')
    })

    let arrayfood = []
    let arrayprice = []

    let btn_1 = document.getElementById('c1')
    let btn_2 = document.getElementById('c2')
    let btn_3 = document.getElementById('c3')
    let btn_4 = document.getElementById('c4')
    let btn_5 = document.getElementById('c5')
    let btn_6 = document.getElementById('c6')
    let btn_7 = document.getElementById('c7')
    let btn_8 = document.getElementById('c8')
    let btn_9 = document.getElementById('c9')
    let btn_10 = document.getElementById('c10')

    let fp = document.getElementById('firstplate')
    let sp = document.getElementById('secondplate')
    let dessert = document.getElementById('dessert')
    let corder = document.getElementById('corder')

    btn_1.addEventListener('click', () => {
        arrayfood.push(cards.c1)
        arrayprice.push(prices.c1)
        fp.classList.add('none')
        sp.classList.remove('none')
        crearCookie('FP', cards.c1, 99)
        console.log(arrayfood)
        console.log(arrayprice)
        span_fp.textContent = arrayfood[0]
    })

    btn_2.addEventListener('click', () => {
        arrayfood.push(cards.c2)
        arrayprice.push(prices.c2)
        fp.classList.add('none')
        sp.classList.remove('none')
        crearCookie('FP', cards.c2, 99)
        span_fp.textContent = arrayfood[0]
    })

    btn_3.addEventListener('click', () => {
        arrayfood.push(cards.c3)
        arrayprice.push(prices.c3)
        fp.classList.add('none')
        sp.classList.remove('none')
        crearCookie('FP', cards.c3, 99)
        span_fp.textContent = arrayfood[0]
    })

    btn_4.addEventListener('click', () => {
        arrayfood.push(cards.c4)
        arrayprice.push(prices.c4)
        fp.classList.add('none')
        sp.classList.remove('none')
        crearCookie('FP', cards.c4, 99)
        span_fp.textContent = arrayfood[0]
    })





    btn_5.addEventListener('click', () => {
        arrayfood.push(cards.c5)
        arrayprice.push(prices.c5)
        sp.classList.add('none')
        dessert.classList.remove('none')
        crearCookie('SP', cards.c5, 99)
        console.log(arrayfood)
        console.log(arrayprice)
        span_sp.textContent = arrayfood[1]
    })

    btn_6.addEventListener('click', () => {
        arrayfood.push(cards.c6)
        arrayprice.push(prices.c6)
        sp.classList.add('none')
        dessert.classList.remove('none')
        crearCookie('SP', cards.c6, 99)
        span_sp.textContent = arrayfood[1]
    })

    btn_7.addEventListener('click', () => {
        arrayfood.push(cards.c7)
        arrayprice.push(prices.c7)
        sp.classList.add('none')
        dessert.classList.remove('none')
        crearCookie('SP', cards.c7, 99)
        span_sp.textContent = arrayfood[1]
    })

    btn_8.addEventListener('click', () => {
        arrayfood.push(cards.c8)
        arrayprice.push(prices.c8)
        sp.classList.add('none')
        dessert.classList.remove('none')
        crearCookie('SP', cards.c8, 99)
        span_sp.textContent = arrayfood[1]
    })




    btn_9.addEventListener('click', () => {
        arrayfood.push(cards.c9)
        arrayprice.push(prices.c9)
        dessert.classList.add('none')
        corder.classList.remove('none')
        crearCookie('Dessert', cards.c9, 99)
        console.log(arrayfood)
        console.log(arrayprice)
        span_dessert.textContent = arrayfood[2]

        let totalprice = 0

        for (let i = 0; i < arrayprice.length; i++) {
            totalprice += arrayprice[i];
        }



        span_amount.textContent = totalprice

        crearCookie('Total', totalprice, 99)
    })

    btn_10.addEventListener('click', () => {
        arrayfood.push(cards.c10)
        arrayprice.push(prices.c10)
        dessert.classList.add('none')
        corder.classList.remove('none')
        crearCookie('Dessert', cards.c10, 99)
        span_dessert.textContent = arrayfood[2]

        let totalprice = 0

        for (let i = 0; i < arrayprice.length; i++) {
            totalprice += arrayprice[i];
        }



        span_amount.textContent = totalprice
    })



    


    co.addEventListener('click', () => {
        arrayfood = []
        arrayprice = []
        dessert.classList.add('none')
        sp.classList.add('none')
        corder.classList.add('none')
        fp.classList.remove('none')
    })

    let deleteorder = document.getElementById('deleteorder')

    deleteorder.addEventListener('click', () => {
        arrayfood = []
        arrayprice = []
        dessert.classList.add('none')
        sp.classList.add('none')
        corder.classList.add('none')
        fp.classList.remove('none')
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

function crearCookie(nombre, valor, expiracionEnDias) {
    let fechaExpiracion = new Date();
    fechaExpiracion.setDate(fechaExpiracion.getDate() + expiracionEnDias);

    const cookieString = `${nombre}=${valor}; expires=${fechaExpiracion.toUTCString()}; path=/`;

    document.cookie = cookieString;
}
