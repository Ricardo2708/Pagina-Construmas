document.addEventListener('DOMContentLoaded',function(){
    startApp()
})

function startApp(){
    navFixed();
    numberCount();
    title();
    loading();
    AOS.init();
    scrolling();
    consultarNews();
}
const server = `https://construmas-backend.onrender.com/api/`
const server_image = `https://construmas-backend.onrender.com`

const formatearFecha = fecha => {
    const opciones = {
        year: 'numeric',
        month: 'long',
        day: '2-digit'
    }
    return new Date(fecha).toLocaleDateString('es-ES', opciones)
}


const consultarNews = async () => {
    const contenedor = document.getElementById('ElementosNews')

    const url = server+'news?populate=imagen'
    const respuesta = await fetch(url,{ cache: "force-cache" })    
    const resultado = await respuesta.json()
    
    let array = resultado.data.map(function(element){
        const imagen = element.attributes.imagen.data.attributes.formats.small.url
        contenedor.insertAdjacentHTML("beforeend",`
            <div class="news-elemento astro-N6TK7VAF">
                <img src=${imagen} alt="news" class="astro-N6TK7VAF" loading="lazy">
                <div class="contenido contenido-ultimate astro-N6TK7VAF">
                    <h1 class="astro-N6TK7VAF ">${element.attributes.about}</h1>
                    <h4 class="astro-N6TK7VAF">${formatearFecha(element.attributes.createdAt)}</h4>
                    <p class="astro-N6TK7VAF">
                        ${element.attributes.descripcion}
                    </p>
                    <a href="" id="${element.id}" class="astro-WWVULD7A myBtn">    
                        Mas Info...
                    </a>
                </div>
            </div>
        `)
    })

    const modal = document.getElementById("myModal");
    const btn = document.querySelectorAll(".myBtn");
    const body = document.body
    let span = document.getElementsByClassName("close")[0];
    let numBtn = btn.length;

    for (var i = 0; i < numBtn; i++) {
        btn[i].addEventListener('click', function(e){
            e.preventDefault()
            const id = e.target.getAttribute("id");
            modal.style.display = "block";
            modal.style.opacity = 1;
            body.style.overflow = "hidden";

            const busqueda_New = async () =>{
                const url = server+`news/${id}?populate=imagen`
                const respuesta = await fetch(url,{ cache: "force-cache" })
                const resultado = await respuesta.json()
                const {data} = resultado
                const imagen_modal = data.attributes.imagen.data.attributes.formats.small.url
                const modal_itemNews = document.getElementById('modal_itemNews')
                modal_itemNews.innerHTML = `
                    <div class="modal_api">
                        <div class="modal_imagenes">  
                            <img src='${imagen_modal}' alt="news" class="" loading="lazy">
                        </div>   
                        <div class="contenido_modal_api">
                            <h1>${data.attributes.about}</h1>
                            <h4>${formatearFecha(data.attributes.createdAt)}</h4>
                            <p>
                                ${data.attributes.descripcion}
                            </p>
                        </div>
                    </div>
                `
            }
            busqueda_New()
        });
    }
    span.onclick = function() {
        body.style.overflow = "auto";
        modal.style.opacity = 0;
        setTimeout(() => {
            modal.style.display = "none"; 
        }, 300);
    }

}

function loading(){
    window.onload = function(){
        const contenedor = document.getElementById('contenedor_carga')
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = 0;
    }    
}

function title(){
    let previousTitle = document.title
    window.addEventListener('blur', () => {
        previousTitle = document.title
        document.title = 'Construmás S.A DE C.V'
    })

    window.addEventListener('focus',() => {
        document.title = previousTitle
    })  
}

function navFixed(){
    // const btnTop = document.querySelector('.gotop-btn')
    const barra = document.querySelector('.color-barra');
    const donacion = document.querySelector('.formulario .contenido-footer');
    

    window.addEventListener('scroll',function(){
        if(donacion.getBoundingClientRect().top < 0){
            barra.classList.add('fijo')
            // btnTop.classList.add('btn-active')
        }else{
            barra.classList.remove('fijo')
            // btnTop.classList.remove('btn-active')
        }
    })
}

function numberPlus(){
    const contador2 = document.getElementById("number2");
    let numero2 = 0
    setInterval(() => {
        if(numero2 < 1000){
            numero2++
            contador2.innerHTML = "+"+numero2
        }
    }, 1);
}

function numberCount(){
    let active = true
    const cause = document.querySelector('.mision');
    window.addEventListener('scroll',function(){
        if(cause.getBoundingClientRect().top < 0){
            if(active){
                numberPlus();
                active = false;
            }
        }
    })
}

//* Scroll
function scrolling(){
    const item = document.getElementById("news-contenido");
    const left = document.getElementById("left-news");
    left.addEventListener('click', function(e){
        item.scrollLeft +=300
    })
    const right = document.getElementById("right-news");
    right.addEventListener('click', function(e){
        item.scrollLeft -=300
    })
}


//* Seccion Formulario
// const validateEmail = (email) => {
//     return String(email)
//     .toLowerCase()
//     .match(
//         /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
//     );
// };
// function limpiarFormulario() {
//     document.getElementById("miForm").reset();
// }
// const formulario = document.querySelector('.formulario-mision')
// formulario.addEventListener('submit', function(e){
//     e.preventDefault()
//     const name = document.getElementById('name').value
//     const email = document.getElementById('email').value
//     const message = document.getElementById('message').value

//     const data = {
//         name: name.toLowerCase(),
//         email: email.toLowerCase(),
//         message: message.toLowerCase()
//     }
//     if(Object.values(data).includes('')){
//         return Astro.redirect(404)
//     }
//     if(typeof email !== "string" || !validateEmail(email)){
//         return Astro.redirect(404)
//     }
//     else{
//         console.log(data);
//         Swal.fire(
//             'Good job!',
//             'You clicked the button!',
//             'success'
//         )
//         limpiarFormulario()
//     }
// })