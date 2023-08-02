<?php 

require("mail.php");

function validate($name, $email, $message, $form){
    return !empty($name) && !empty($email) && !empty($message);
}

$status = "";

if (isset($_POST["form"])){
    if(validate(...$_POST)){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $body = "$name <$email> send you the next message:<br><br> $message";

        //Mandar el correo
        emailSust($body, $email, $name, true);

        $status =  "success";
    }else{
        $status = "danger";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Portafolio CV - Francisco Gabriel Montenegro</title>
    <meta name="description" content="Hola bienvenid@ a mi Portafolio Profesional, soy Francisco Montenegro, Desarrollador Web">
    <link rel="canonical" href="#">
    <link rel="favicon" href="#">
    <link rel="apple-touch-icon" href="#">
    <meta name="theme-color" content="#d9006">
    <meta name="twitter:card" content="summary">
    <meta property="og:type" content="website">
    <meta property="og:title" name="twitter:title">
    <meta property="og:description" name="twitter:description">
    <meta property="og:image" name="twitter:image">
    <meta property="og:url" name="twitter:url">
</head>

<body>
    <header class="header">
        <section class="container">
            <div class="logo">
                <a href="https://www.linkedin.com/in/francisco-montenegro97/" target="_blank" rel="noopener">Francisco Gabriel Montenegro</a>
            </div>
            <button class="menu-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z" />
                </svg>
                <svg class="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                </svg>
            </button>
            <nav class="menu">
                <a href="#inicio">Inicio</a>
                <a href="#acerca">Acerca</a>
                <a href="#servicios">Servicios</a>
                <a href="#portafolio">Portafolio</a>
                <a href="#contacto">Contacto</a>
            </nav>
        </section>
    </header>
    <section id="inicio" class="home">
        <article class="hero-image" style="--hero-image: url('assets/nuevofondo.jpg'); --hero-attachment: fixed;">
            <aside class="hero-image-opacity" style="--hero-opacity-color: var(--black-alpha-color);">
                <div class="hero-image-content">
                    <h2 class="hero-image-title" style="--hero-text-color: var(--white-color);">
                        Bienvenid@s<br>a mi sitio
                    </h2>
                    <a href="#contacto" class="btn">CONTÁCTAME</a>
                </div>
            </aside>
        </article>
    </section>
    <section id="acerca" class="about section container full-lg-screen">
        <article class="text-lg-right">
            <aside class="text-center text-lg-right">
                <h1>Francisco Gabriel Montenegro</h1>
                <h5><i>Jr. Software Developer</i></h5>
            </aside>
            <p>Soy programador Frontend con conocimientos en Backend, adquirí mis cualidades como programador desarrollando sitios web con diseños sofisticados que a la vez cuentan con interacción directa hacia una base de datos realizada con MySQL.</p>
            <p>Me gusta realizar la maquetación e interactividad de interfaces web, así como la optimización, para el buen posicionamiento y el rendimiento de carga de sitios y aplicaciones web.</p>
            <div class="text-center text-lg-left">
                <a class="btn" href="CV-Montenegro.pdf" download="Curriculum.pdf" target="_blank" rel="noopener">DESCARGA MI CV</a>
            </div>
        </article>
        <article>
            <img class="gray-scale" src="assets/Francisco.jpg" alt="FranciscoImagen">
        </article>
        <article>
            <h2 class="text-center text-lg-left">Mis Habilidades</h2>
            <div class="progress">
                <p>
                <b><i>HTML5</i></b>
                <b>50%</b>
                </p>
                <progress value="50" min="0" max="100"></progress>
            </div>
            <div class="progress">
                <p>
                <b><i>CSS3/SCSS</i></b>
                <b>50%</b>
                </p>
                <progress value="50" min="0" max="100"></progress>
            </div>
            <div class="progress">
                <p>
                <b><i>PHP</i></b>
                <b>45%</b>
                </p>
                <progress value="45" min="0" max="100"></progress>
            </div>
            <div class="progress">
                <p>
                <b><i>MySQL</i></b>
                <b>45%</b>
                </p>
                <progress value="45" min="0" max="100"></progress>
            </div>
            <div class="progress">
                <p>
                <b><i>JS</i></b>
                <b>40%</b>
                </p>
                <progress value="40" min="0" max="100"></progress>
            </div>
        </article>
    </section>
    <section id="servicios" class="services section bg-gray-light">
        <div class="container full-lg-screen">
            <h2 class="section-title">¿Qué conocimientos poseo?</h2>
            <article class="service-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M20,3H4C2.897,3,2,3.897,2,5v14c0,1.103,0.897,2,2,2h16c1.103,0,2-0.897,2-2V5C22,3.897,21.103,3,20,3z M4,19V7h16 l0.002,12H4z" />
                    <path d="M9.293 9.293L5.586 13 9.293 16.707 10.707 15.293 8.414 13 10.707 10.707zM14.707 9.293L13.293 10.707 15.586 13 13.293 15.293 14.707 16.707 18.414 13z" />
                </svg>
                <h3>Programación Web</h3>
                <p> Desarrollo sitios Web. Realizo proyectos de principio a fin: Frontend, Backend y Base de Datos.</p>
            </article>
            <article class="service-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M20,3H7C5.897,3,5,3.897,5,5v2H4C2.897,7,2,7.897,2,9v10c0,1.103,0.897,2,2,2h6c1.103,0,2-0.897,2-2h8c1.103,0,2-0.897,2-2 V5C22,3.897,21.103,3,20,3z M6,9h4l-0.003,9H4V9H6z M12,17V9c0-1.103-0.897-2-2-2H7V5h11v12H12z" />
                </svg>
                <h3>Diseño Web</h3>
                <p>Prototipo y maqueto de diseños estáticos y los trasnformo en exelentes sitios y aplicaciones webresponsivas, óptimas y accesibles.</p>
            </article>
            <article class="service-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" d="M4 15v4h16.002L20 15H4zM16 18h-2v-2h2V18zM19 18h-2v-2h2V18zM4 5v4h16.002L20 5H4zM16 8h-2V6h2V8zM19 8h-2V6h2V8z" />
                    <path d="M20 3H4C2.897 3 2 3.897 2 5v4c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5C22 3.897 21.103 3 20 3zM4 9V5h16l.002 4H4zM20 13H4c-1.103 0-2 .897-2 2v4c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-4C22 13.897 21.103 13 20 13zM4 19v-4h16l.002 4H4z" />
                    <path d="M17 6H19V8H17zM14 6H16V8H14zM17 16H19V18H17zM14 16H16V18H14z" />
                </svg>
                <h3><i>Web Hosting</i></h3>
                <p> ¿No tenes dominio y hospedaje web para tu proyecto? No te preocupes de esas cosas técnicas me encargo yo.</p>
            </article>
        </div>
    </section>
    <section id="portafolio" class="portfolio section">
        <div class="container">
            <h2 class="section-title">Mis Trabajos</h2>
            <a href="#trabajo-1" class="portfolio-card">
                <img src="assets/lualuna.png" alt="Trabajo 1">
                <aside class="portfolio-card-info">
                    <div>
                        <h3>Lua Luna</h3>
                        <p>Lua Luna es una tienda de accesorios destinada a mujeres de diversas edades.</p>
                        <p>Se realizao un prototipo de Ecomerce utilizando HTML5/CSS3 y acompañado de una base de datos con PHP y MySQL, este fue mi primer proyecto realizado.</p>
                    </div>
                </aside>
            </a>
            <a href="#trabajo-2" class="portfolio-card">
                <img src="assets/surfmedia.png" alt="Trabajo 2">
                <aside class="portfolio-card-info">
                    <div>
                        <h3>Surfmedia Laravel9 Ecommerce</h3>
                        <p>Surfmedia es una tienda de ropa online, donde se puede manipular en stock, las ofertas y resaltar diversos productos con una cuenta de administrador, todo esto desde el sitio sin necesidad de ingresar de forma directa a la DB.</p>
                        <p>Realice el sitio utilizando Laravel9 siendo este el primero de muchos proyectos que planeo seguir realizando a futuro.</p>
                    </div>
                </aside>
            </a>
            <a href="#trabajo-3" class="portfolio-card">
                <img src="assets/react-php.jpg" alt="Trabajo 3">
                <aside class="portfolio-card-info">
                    <div>
                        <h3>API Rest con React</h3>
                        <p>Este sitio es un crud de un panel de adminitrador de productos.</p>
                        <p>Esta realizado con una API Rest y con React.</p>
                    </div>
                </aside>
            </a>
            <a href="#trabajo-4" class="portfolio-card">
                <img src="assets/react-laravel.png" alt="Trabajo 4" style="height: 359px;">
                <aside class="portfolio-card-info">
                    <div>
                        <h3>Todo List con React y Laravel</h3>
                        <p>Este es un mini proyecto donde utilice una API Rest creada con Laravel y para el front React, esta en una etapa beta.</p>
                        <p>Esta realizado con una API Rest con Laravel y con React.</p>
                    </div>
                </aside>
            </a>
        </div>
    </section>
    <article class="modal" id="trabajo-1">
        <div class="modal-content">
        <a href="#cerrar" class="modal-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10s10-4.486,10-10S17.514,2,12,2z M16.207,14.793l-1.414,1.414L12,13.414 l-2.793,2.793l-1.414-1.414L10.586,12L7.793,9.207l1.414-1.414L12,10.586l2.793-2.793l1.414,1.414L13.414,12L16.207,14.793z" />
            </svg>
        </a>
        <article class="portfolio-modal">
            <img src="assets/lualuna.png" alt="Trabajo 1">
            <div class="portfolio-info">
            <h3>Luan Luna Ecommerce</h3>
            <p>Lua Luna fue mi primer sitio, fue creado con HTML5, CSS3, PHP y MySql. Es un sitio que muestra productos, fue enfocado principalmente para la interaccion con la base de datos creando usuarios y corroborando el ingreso de estos mediando codigos en PHP.</p>
            <aside class="portfolio-details">
                <small><b>CLIENTE:</b></small>
                <small>Cliente: Nowosad Nadia</small>
                <small><b>FECHA:</b></small>
                <small>Fecha: 28/06/2021</small>
                <small><b>TIPO:</b></small>
                <small>Tipo: Ecommerce</small>
                <small><b>ENLACE:</b></small>
                <small><a href="sites/lualuna/index.php" target="_blank" rel="noopener">Presione aqui para visualizar el sitio.</a></small>
            </aside>
            </div>
        </article>
        </div>
    </article>
    <article class="modal" id="trabajo-2">
        <div class="modal-content">
        <a href="#cerrar" class="modal-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10s10-4.486,10-10S17.514,2,12,2z M16.207,14.793l-1.414,1.414L12,13.414 l-2.793,2.793l-1.414-1.414L10.586,12L7.793,9.207l1.414-1.414L12,10.586l2.793-2.793l1.414,1.414L13.414,12L16.207,14.793z" />
            </svg>
        </a>
        <article class="portfolio-modal">
            <img src="assets/surfmedia-minilogo.png" alt="Trabajo 2">
            <div class="portfolio-info">
            <h3>Surfmedia Ecommerce Laravel9</h3>
            <p>Surfmedia es un ecommerce realizado con Laravel9.</p>
            <aside class="portfolio-details">
                <small><b>CLIENTE:</b></small>
                <small>Cliente: Poryecto Personal</small>
                <small><b>FECHA:</b></small>
                <small>Fecha: 16/02/2023</small>
                <small><b>TIPO:</b></small>
                <small>Tipo: Ecommerce</small>
                <small><b>ENLACE:</b></small>
                <small><a href="https://surf-media-lv9ecommerce.fgm97.online/" target="_blank" rel="noopener">Presione aqui para visualizar el sitio.</a></small>
            </aside>
            </div>
        </article>
        </div>
    </article>
    <article class="modal" id="trabajo-3">
        <div class="modal-content">
        <a href="#cerrar" class="modal-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10s10-4.486,10-10S17.514,2,12,2z M16.207,14.793l-1.414,1.414L12,13.414 l-2.793,2.793l-1.414-1.414L10.586,12L7.793,9.207l1.414-1.414L12,10.586l2.793-2.793l1.414,1.414L13.414,12L16.207,14.793z" />
            </svg>
        </a>
        <article class="portfolio-modal">
            <img src="assets/react-php.jpg" alt="Trabajo 3">
            <div class="portfolio-info">
            <h3>API Rest con React</h3>
            <p>Este proyecto realizamos un crud con un amigo siendo este uno de los primeros poyectos que realice en conjutno con otra persona, yo realice la API con PHP y MySQL, por otro lado mi compañero realizo el frontend con React.</p>
            <aside class="portfolio-details">
                <small><b>CLIENTE:</b></small>
                <small>Cliente: Proyecto compartido</small>
                <small><b>FECHA:</b></small>
                <small>Fecha: 10/11/2022</small>
                <small><b>TIPO:</b></small>
                <small>Tipo: Crud panel de administrador</small>
                <small><b>ENLACE:</b></small>
                <small><a href="https://leopold-app.herokuapp.com/" target="_blank" rel="noopener">Presione aqui para visualizar el sitio.</a></small>
            </aside>
            </div>
        </article>
        </div>
    </article>
    <article class="modal" id="trabajo-4">
        <div class="modal-content">
        <a href="#cerrar" class="modal-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10s10-4.486,10-10S17.514,2,12,2z M16.207,14.793l-1.414,1.414L12,13.414 l-2.793,2.793l-1.414-1.414L10.586,12L7.793,9.207l1.414-1.414L12,10.586l2.793-2.793l1.414,1.414L13.414,12L16.207,14.793z" />
            </svg>
        </a>
        <article class="portfolio-modal">
            <img src="assets/react-laravel.png" alt="Trabajo 4">
            <div class="portfolio-info">
            <h3>Todo List con Laravel y React</h3>
            <p>Este es un mini proyecto donde utilice una API Rest creada con Laravel y para el front React, esta en una etapa beta.</p>
            <aside class="portfolio-details">
                <small><b>CLIENTE:</b></small>
                <small>Cliente: Proyecto de practica.</small>
                <small><b>FECHA:</b></small>
                <small>Fecha: 16/06/2023</small>
                <small><b>TIPO:</b></small>
                <small>Tipo: Lista de tareas.</small>
                <small><b>ENLACE:</b></small>
                <small><a href="https://leopold-app.herokuapp.com/" target="_blank" rel="noopener">Presione aqui para visualizar el sitio.</a></small>
            </aside>
            </div>
        </article>
        </div>
    </article>
    <section id="contacto" class="contact section">
        <div class="container">
        <h2 class="section-title">¿Interesado?</h2>
        <article class="contact-cards">
            <aside class="contact-card box-shadow-1">
                <svg width="37" height="28" viewBox="0 0 37 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                    d="M18.5 7.3125L7 16.8125V27C7 27.5625 7.4375 28 8 28H15C15.5 28 15.9375 27.5625 15.9375 27V21C15.9375 20.5 16.4375 20 16.9375 20H20.9375C21.5 20 21.9375 20.5 21.9375 21V27C21.9375 27.5625 22.4375 28 22.9375 28H30C30.5 28 31 27.5625 31 27V16.75L19.4375 7.3125C19.3125 7.1875 19.125 7.125 19 7.125C18.8125 7.125 18.625 7.1875 18.5 7.3125ZM36.6875 13.75L31.5 9.4375V0.8125C31.5 0.375 31.125 0.0625 30.75 0.0625H27.25C26.8125 0.0625 26.5 0.375 26.5 0.8125V5.3125L20.875 0.6875C20.375 0.3125 19.6875 0.0625 19 0.0625C18.25 0.0625 17.5625 0.3125 17.0625 0.6875L1.25 13.75C1.0625 13.875 0.9375 14.125 0.9375 14.3125C0.9375 14.5 1.0625 14.6875 1.125 14.8125L2.75 16.75C2.875 16.9375 3.0625 17 3.3125 17C3.5 17 3.6875 16.9375 3.8125 16.8125L18.5 4.75C18.625 4.625 18.8125 4.5625 19 4.5625C19.125 4.5625 19.3125 4.625 19.4375 4.75L34.125 16.8125C34.25 16.9375 34.4375 17 34.625 17C34.875 17 35.0625 16.9375 35.1875 16.75L36.8125 14.8125C36.9375 14.6875 37 14.5 37 14.3125C37 14.125 36.875 13.875 36.6875 13.75Z"
                    fill="#7f5af0" />
                </svg>
                <h5>UBICACIÓN</h5>
                <small>Argentina, Santa Fe, Villa Gobernador Galvez</small>
            </aside>
            <aside class="contact-card box-shadow-1">
                <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                    d="M31.8125 1.5625L25.3125 0.0625C24.625 -0.125 23.875 0.25 23.5625 0.9375L20.5625 7.9375C20.3125 8.5625 20.5 9.25 21 9.6875L24.8125 12.8125C22.5625 17.5625 18.625 21.5625 13.75 23.875L10.625 20.0625C10.1875 19.5625 9.5 19.375 8.875 19.625L1.875 22.625C1.1875 22.9375 0.875 23.6875 1 24.375L2.5 30.875C2.6875 31.5625 3.25 32 4 32C20 32 33 19.0625 33 3C33 2.3125 32.5 1.75 31.8125 1.5625Z"
                    fill="#7f5af0" />
                </svg>
                <h5>TELÉFONO</h5>
                <small><a href="tel:543415032946">(+54) 341-503946</a></small>
            </aside>
            <aside class="contact-card box-shadow-1">
                <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                    d="M31.375 7.9375C29.9375 9.0625 28.125 10.4375 21.75 15.0625C20.5 16 18.1875 18.0625 16 18.0625C13.75 18.0625 11.5 16 10.1875 15.0625C3.8125 10.4375 2 9.0625 0.5625 7.9375C0.3125 7.75 0 7.9375 0 8.25V21C0 22.6875 1.3125 24 3 24H29C30.625 24 32 22.6875 32 21V8.25C32 7.9375 31.625 7.75 31.375 7.9375ZM16 16C17.4375 16.0625 19.5 14.1875 20.5625 13.4375C28.875 7.4375 29.5 6.875 31.375 5.375C31.75 5.125 32 4.6875 32 4.1875V3C32 1.375 30.625 0 29 0H3C1.3125 0 0 1.375 0 3V4.1875C0 4.6875 0.1875 5.125 0.5625 5.375C2.4375 6.875 3.0625 7.4375 11.375 13.4375C12.4375 14.1875 14.5 16.0625 16 16Z"
                    fill="#7f5af0" />
                </svg>
                <h5>EMAIL</h5>
                <small><a href="mailto:francisco.gm97@hotmail.com">francisco.gm97@hotmail.com</a></small>
            </aside>
            <aside class="contact-card box-shadow-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path
                    d="M16.018,3.815L15.232,8h-4.966l0.716-3.815L9.018,3.815L8.232,8H4v2h3.857l-0.751,4H3v2h3.731l-0.714,3.805l1.965,0.369 L8.766,16h4.966l-0.714,3.805l1.965,0.369L15.766,16H20v-2h-3.859l0.751-4H21V8h-3.733l0.716-3.815L16.018,3.815z M14.106,14H9.141 l0.751-4h4.966L14.106,14z" />
                </svg>
                <h5>SOCIAL MEDIA</h5>
                <small class="social-media">
                    <a href="https://twitter.com/Issco97?t=0j85JrltvYYfYBHZzhVjwQ&s=09" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                        d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z" />
                    </svg>
                    </a>
                    <a href="https://github.com/FranciscoMontenegro97" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465	c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338	c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028	c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93	c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021	c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021	c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922	c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479	C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z" />
                    </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/francisco-montenegro97/" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                        d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h16c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z M8.339,18.337H5.667	v-8.59h2.672V18.337z M7.003,8.574c-0.856,0-1.548-0.694-1.548-1.548s0.691-1.548,1.548-1.548c0.854,0,1.548,0.693,1.548,1.548	S7.857,8.574,7.003,8.574z M18.338,18.337h-2.669V14.16c0-0.996-0.018-2.277-1.388-2.277c-1.39,0-1.601,1.086-1.601,2.207v4.248	h-2.667v-8.59h2.56v1.174h0.037c0.355-0.675,1.227-1.387,2.524-1.387c2.704,0,3.203,1.778,3.203,4.092V18.337z" />
                    </svg>
                    </a>
                    <a href="https://instagram.com/issco97" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                        d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624	C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003	c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z" />
                        <circle cx="16.806" cy="7.207" r="1.078" />
                        <path
                        d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42	c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111	c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71	c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45	c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633	c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311	c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311	c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654	c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712	c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055	c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669	c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z" />
                    </svg>
                    </a>
                </small>
            </aside>
        </article>
        <?php if($status == "danger"): ?>
            <div class="alert danger">
                <script>
                    alert("Error al enviar mensaje!");
                </script>
            </div>
        <?php endif; ?>
        <?php if($status == "success"): ?>
            <div class="alert succes">
                <script>
                    alert("Mensaje enviado con exito!");
                </script>
            </div>
        <?php endif; ?>
        <form action="./" method="post" class="contact-form box-shadow-1">
            <input type="text" name="name" placeholder="Ingresa tu nombre *" required>
            <input type="email" name="email" placeholder="Ingresa tu correo *" required>
            <textarea name="message" cols="50" rows="10" placeholder="Déjame tus comentarios *" required></textarea>
            <input type="submit" class="btn" name="form" value="ENVIAR MENSAJE">
        </form>
        </div>
    </section>
    <footer class="footer">
        <small>Sitio diseñado por <a href="https://www.linkedin.com/in/francisco-montenegro97/" target="_blank" rel="noopener">Francisco Gabriel Montenegro</a></small>
    </footer>
</body>

</html>
