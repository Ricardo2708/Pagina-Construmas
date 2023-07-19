document.addEventListener('DOMContentLoaded',function(){
    startApp()
})

function startApp(){
    title();
    loading();
    AOS.init();
    consultarEmpleoDestacado();
    consultarEmpleoNoDestacado();
    clickOferta();
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

const consultarEmpleoDestacado = async () => {
    const contenedor = document.querySelector('.empleo-destacado')
    const contenedor2 = document.querySelector('.list-element-empleo')
    const url = server+'empleos?populate=imagen'
    const respuesta = await fetch(url,{ cache: "force-cache" })
    const resultado = await respuesta.json()
    let array = resultado.data.map(function(element){
        const imagen = element.attributes.imagen.data.attributes.url
        let converter = new showdown.Converter()
        let text      = element.attributes.descripcion
        let html      = converter.makeHtml(text)

        if(element.attributes.destacado === true){
            contenedor.insertAdjacentHTML("beforeend",`
            <section class="contenido-empleo-article">
                <figure>
                    <div class="position-destacado">
                        <img src="${imagen}" alt="empleo">
                        <p class="destacado">Destacado</p>
                    </div>
                </figure>

                <div class="descripcion-empleo-article">
                    <div class="titulo-descripcion">
                        <h2>${element.attributes.title}</h2>
                        <h4>${element.attributes.subtitle}</h4>
                    </div>
                    <div class="cantidad-empleo-article">
                        <p>
                            Salario: <span>$${element.attributes.salario}.00</span>
                        </p>
                        
                    </div>
                </div>

                <div class="informacion-empleo-article">
                    <ul>
                        <li>
                            <div class="icono-informacion">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <p>Estabilidad Laboral</p>
                        </li>



                        <li>
                            <div class="icono-informacion">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <p>Prestaciones De Ley</p>
                        </li>

                        <li>
                            <div class="icono-informacion">
                                <i class="bi bi-clock"></i>
                            </div>
                            <p>Tiempo Completo</p>
                        </li>

                        <li>
                            <div class="icono-informacion">
                                <i class="bi bi-person-workspace"></i>  
                            </div>
                            
                            <p>Trabajo Presencial</p>
                        </li>
                    </ul>
                </div>

                <article class="descripcionplaza-empleo-article">
                    <div class="texto-descripcion">
                        <h1>Funciones & Requisitos</h1>
                        <p>
                            ${html}
                        </p>
                    </div>  
                    <figure class="descripcion-imagen">
                            <img src="${imagen}" alt="empleo">
                    </figure>
                </article>
                

            </section>
            `)
        }


        

    })
}

const consultarEmpleoNoDestacado = async () => {
    const contenedor = document.querySelector('.list-element-empleo')

    const url = server+'empleos?populate=imagen'
    const respuesta = await fetch(url,{ cache: "force-cache" })
    const resultado = await respuesta.json()
    let array = resultado.data.map(function(element){
        const imagen = element.attributes.imagen.data.attributes.formats.small.url
        contenedor.insertAdjacentHTML("beforeend",`
            <article class="element-list" id="${element.id}">
                <div class="image-element-list">
                    <img src="${imagen}" alt="alert">
                    <div class="text-element-list">
                        <h4>${element.attributes.title}</h4>
                        <p>${element.attributes.subtitle}</p>
                        <p>${formatearFecha(element.attributes.createdAt)}</p>
                    </div>
                </div>
                <div class="descripcion-element-list">
                    <p>
                        ${element.attributes.descripcion}
                    </p>
                </div>
                <a href="" id="${element.id}" class="astro-WWVULD7A myBtn ">    
                    Mas Info...
                </a>
            </article>
        `)
    })


    const modal = document.getElementById("myModal");
    const body = document.body
    let span = document.getElementsByClassName("close")[0];
    const btn = document.querySelectorAll(".myBtn");
    let numBtn = btn.length;

    for (var i = 0; i < numBtn; i++) {
        btn[i].addEventListener('click', function(e){
            e.preventDefault()
            const id = e.target.getAttribute("id");
            modal.style.display = "block";
            modal.style.opacity = 1;
            body.style.overflow = "hidden";
            const busqueda_New = async () =>{
                const url = server+`empleos/${id}?populate=imagen`
                const respuesta = await fetch(url,{ cache: "force-cache" })
                const resultado = await respuesta.json()
                const {data} = resultado
                

                let converter = new showdown.Converter()
                let text      = data.attributes.descripcion
                let html      = converter.makeHtml(text)

                const imagen_modal = data.attributes.imagen.data.attributes.formats.small.url
                const imagen_modal_principal = server_image+imagen_modal
                const modal_itemNews = document.getElementById('modal_itemNews')
                modal_itemNews.innerHTML = `
                        <div class="contenido_modal_api  empleo-contenido_modal_api">
                            <h1>${data.attributes.title}</h1>
                            <h4 class="subtitle">${data.attributes.subtitle}</h4>
                            <h4 class="salario">
                                Salario:
                                <span>
                                    $${data.attributes.salario}.00
                                </span>
                            </h4>
                            <div class="informacion-empleo-article informacion-empleo-article-modal iconos-modal-nodestacado">
                                <ul>
                                    <li>
                                        <div class="icono-informacion">
                                            <i class="bi bi-check-circle"></i>
                                        </div>
                                        <p>Estabilidad</p>
                                    </li>
            
            
            
                                    <li>
                                        <div class="icono-informacion">
                                            <i class="bi bi-shield-check"></i>
                                        </div>
                                        <p>Prestaciones</p>
                                    </li>
            
                                    <li>
                                        <div class="icono-informacion">
                                            <i class="bi bi-person-workspace"></i>  
                                        </div>
                                        
                                        <p>Presencial</p>
                                    </li>
                                </ul>
                            </div>
                            <p class="descripcion">
                                ${html}
                            </p>


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

const clickOferta = () =>{
    const btn2 = document.querySelector(".empleo-destacado");
    const modal2 = document.getElementById("myModal2");
    const body2 = document.body
    let span2 = document.getElementsByClassName("close2")[0];

    btn2.addEventListener('click', function(e){
        e.preventDefault()
        modal2.style.display = "block";
        modal2.style.opacity = 1;
        body2.style.overflow = "hidden";
    })
    span2.onclick = function() {
        body2.style.overflow = "auto";
        modal2.style.opacity = 0;
        setTimeout(() => {
            modal2.style.display = "none"; 
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

