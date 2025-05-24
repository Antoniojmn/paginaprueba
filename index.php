<?php
// Asegurar HTTPS (Opcional, pero recomendado para seguridad)
if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
    // En un servidor real, podrías usar:
   header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit();
    // Para este ejemplo, simplemente mostraremos una advertencia.
   //  echo '<script>console.warn("La conexión no es HTTPS. La página podría no ser segura.");</script>';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dirección de Investigación y Extensión - UABJB</title>
    <meta name="description" content="Página de inicio de la Dirección de Investigación y Extensión de la Universidad Autónoma del Beni José Ballivián.">
    <meta name="keywords" content="investigación, extensión, universidad, Beni, UABJB, revistas científicas">
    <meta name="author" content="Dirección de Investigación y Extensión UABJB">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery (necesario para el script que abre el modal automáticamente) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap JS (requiere Popper también) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/logodie.png" type="image/jpeg">
    <!-- Favicon -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/estilo.css" rel="stylesheet">
</head>
<body oncontextmenu="return false" onkeydown="return false">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./assets/img/LOGOUABcopia.png" alt="Logo UABJB"width="70" height="auto"><A:link>DIE-PREGRADO</A:link>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Acerca</a>
                    </li>
                    <!--li class="nav-item">
                        <a class="nav-link" href="#departamentos">Departamentos</a>
                    </li>
                    <div class="dropdown">
                    <button classe="nav-link" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                     Departamentos
                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Investigación</a></li>
                    <li><a class="dropdown-item" href="#">Extensión</a></li>
                    <li><a class="dropdown-item" href="#">Link 3</a></li>
                    </ul>
                    </div-->
                    <li class="nav-item">
                        <a class="nav-link" href="#documentos-consulta">Documentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#oferta-cursos">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#formulario-registro">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <header class="jumbotron">
    <div class="container">
        <div class="row align-items-center">
            <!-- Columna para la imagen (izquierda) -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="assets/img/logodieweb.png" alt="Imagen DIE UABJB" class="img-fluid rounded shadow">
            </div>
            <!-- Columna para el texto (derecha) -->
            <div class="col-md-6">
                <h1>Dirección de Investigación y Extensión</h1>
                <p class="lead">Universidad Autónoma del Beni "José Ballivián"</p>
                <a href="https://www.investigaciones.uabjb.edu.bo/revistas/" class="btn btn-primary btn-lg mt-3">Revistas Científicas</a>  
                <!-- Botón opcional para video -->
                <button class="btn btn-outline-light btn-lg mt-3 ms-2">
                    <i class="fas fa-play me-2"></i>Watch Video
                </button>
            </div>
        </div>
    </div>
</header>
    <!-- Main Content -->
    <main>
        <!-- Carousel Section -->
        <section id="carrusel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carrusel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carrusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carrusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/modal/CAR1.jpg" class="d-block w-100" alt="Imagen 1 Carrusel">
                    <div class="carousel-caption">
                        <h3>Investigación de vanguardia</h3>
                        <p>Descubre nuestros proyectos más innovadores.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/modal/CAR2.jpg" class="d-block w-100" alt="Imagen 2 Carrusel">
                    <div class="carousel-caption">
                        <h3>Extensión Universitaria</h3>
                        <p>Conectando la universidad con la comunidad.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/modal/CAR3.jpg" class="d-block w-100" alt="Imagen 3 Carrusel">
                    <div class="carousel-caption">
                        <h3>Publicaciones Científicas</h3>
                        <p>Accede a nuestras revistas y artículos.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </section>
        <!-- Info General Section -->
        <section id="info-general">
            <div class="container">
                <div class="info-general">
                    <h2>Información General</h2>
                    <p class="lead">
                        La Dirección de Investigación y Extensión (DIE) es una unidad académica de la Universidad Autónoma del Beni "José Ballivián" (UABJB) que tiene como objetivo principal promover, coordinar y gestionar las actividades de investigación científica, tecnológica y humanística.
                    </p>
                    <p>
                        La DIE busca fortalecer la vinculación de la universidad con la sociedad, fomentando la generación y transferencia de conocimiento, la innovación, el emprendimiento y el desarrollo social, cultural y productivo.
                    </p>
                </div>
            </div>
        </section>
  <section id="about" class="about section" aria-label="Sección sobre gestión y coordinación">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>GESTIÓN Y COORDINACIÓN</h2>
  </div><!-- End Section Title -->
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p id="about-text">
          La Dirección de Investigación y Extensión de la UAB-JB cumple con la misión de impulsar la ciencia y la tecnología, en concordancia con el Artículo 103 de la Constitución...
        </p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo</span></li>
        </ul>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <p>
          Construimos puentes entre las diferentes Unidades Académicas y la sociedad en general...
        </p>
        <a href="#" class="read-more" target="_blank" rel="noopener noreferrer">
          <span>Más...</span><i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>
<section id="why-us" class="section why-us light-background" data-builder="section">
<div class="container-fluid">
  <div class="row gy-4">
    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
      <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
        <h3 class="lead"><strong>Plan Estratégico Institucional Universitario</strong></h3>
        <p class="text-justify">El Sistema de Planificación del Sistema de la Universidad Boliviana...</p>
      </div>
      <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
          <div class="faq-item">
            <h3 id="faq-title"><span>01</span> Área Estratégica N° 1: Gestión de formación profesional de grado</h3>
            <div class="faq-content" style="display: none;">
              <p>Desarrollar la gestión curricular diversificada para una formación integral y
									flexible con calidad y pertinencia social vinculados con el desarrollo
								roductivo, en el marco del modelo académico universitario.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <!-- End Faq item-->
          <div class="faq-item">
            <h3 id="faq-title"><span>02</span> Área Estratégica N° 2: Gestión de formación profesional de posgrado</h3>
            <div class="faq-content" style="display: none;">
              <p>Desarrollar programas de formación posgradual de excelencia, respondiendo
              con calidad y pertinencia a las demandas y necesidades de la sociedad</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <!-- End Faq item-->
          <div class="faq-item">
            <h3 id="faq-title"><span>03</span> Área Estratégica N° 3: Gestión de Investigación, ciencia, tecnología e
            innovación</h3>
            <div class="faq-content" style="display: none;">
              <p>Desarrollar proyectos de investigación estratégicos de alto impacto a partir
									de las demandas regionales y nacionales que contribuyan al desarrollo
									económico y social sustentable</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <!-- End Faq item-->
          <div class="faq-item">
            <h3 id="faq-title"><span>04</span> Área Estratégica N° 4: Gestión de interacción social y extensión universitaria</h3>
            <div class="faq-content" style="display: none;">
              <p>Desarrollar eventos, convenios y proyectos de interacción social
									5.4.2 Fortalecer la difusión y transferencia de conocimientos hacia los sectores
									urbanos y rurales para mejorar su calidad de vida</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <!-- End Faq item-->
          <div class="faq-item">
            <h3 id="faq-title"><span>05</span> Área Estratégica N° 5: Gestión Institucional de calidad</h3>
            <div class="faq-content" style="display: none;">
              <p>Implementar los sistemas de gestión por resultados, calidad, transparencia y
              rendición de cuentas para la mejora continua de la universidad</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <!-- End Faq item-->
          <button class="btn btn-danger" id="btnDescargar" type="submit">Descargar</button>
          <script>
          document.getElementById('btnDescargar').addEventListener('click', function() {
            window.open('../nuevapaginaweb/assets/Documents/PEIU.pdf', '_blank');
          });
          
          // Script para manejar el clic en los títulos
          document.querySelectorAll('.faq-item h3').forEach(title => {
            title.addEventListener('click', function() {
              const item = this.parentElement;
              const content = item.querySelector('.faq-content');
              const isActive = content.style.display === 'block';
              
              // Cerrar todos los demás contenidos
              document.querySelectorAll('.faq-content').forEach(c => {
                c.style.display = 'none';
                c.parentElement.querySelector('.faq-toggle').className = 'faq-toggle bi bi-chevron-right';
              });
              
              // Abrir el contenido actual si estaba cerrado
              if (!isActive) {
                content.style.display = 'block';
                item.querySelector('.faq-toggle').className = 'faq-toggle bi bi-chevron-down';
              }
            });
          });
          </script>   
      </div>
    </div>
    <div class="col-lg-5 order-1 order-lg-2 why-us-img">
      <img src="assets/img/equipodie.jpg" class="img-fluid" alt="Equipo de trabajo" data-aos="zoom-in" data-aos-delay="100">
    </div>
  </div>
</div>
</section>
<section id="skills" class="skills section">
<div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row">  
    <div class="col-lg-6 d-flex align-items-center">
      <img src="assets/img/portada_Plan_ciencia.png" class="img-fluid" alt="">
    </div>
    <div class="col-lg-6 pt-4 pt-lg-0 content">
      <h3>Plan de Ciencia, Tecnología e Innovación UAB JB</h3>
        <p class="fst-italic">
        Primer instrumento de planificación que establece las políticas, 
        objetivos estratégicos, programas y proyectos de investigación científica. 
        Cuenta con 10 Áreas de Investigación.
        </p>
      <div class="skills-content skills-animation">
        <div class="progress">
          <span class="skill"><span>Educación, gestión del conocimiento y formación de talentos.</span> <i class="val">100%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->
        <div class="progress">
          <span class="skill"><span>Salud y Ciencias de la Vida</span> <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->
        <div class="progress">
          <span class="skill"><span>Agropecuaria y Forestal</span> <i class="val">75%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->
        <div class="progress">
          <span class="skill"><span>Recursos Naturales, Medio Ambiente y Biodiversidad.</span> <i class="val">55%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->
        <div class="progress">
            <span class="skill"><span>Gestión Integral de Recursos Hídricos.</span> <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress">
            <span class="skill"><span>Mitigación y Adaptación al Cambio Climático.</span> <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress">
            <span class="skill"><span>Economía, Desarrollo Social, Derecho, Estado y Sociedad.</span> <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress">
            <span class="skill"><span>Transporte, vialidad y comunicación.</span> <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress">
            <span class="skill"><span>Desarrollo industrial, tecnología e innovación.</span> <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress">
            <span class="skill"><span>Saberes Locales y Conocimiento ancestrales.</span> <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->
      </div>
      <button class="btn btn-danger" id="btnDescargar1" type="submit">Descargar</button>
        <script>
          // Este código se ejecuta cuando el DOM está completamente cargado
  document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
      item.addEventListener("click", () => {
        // Cierra todos los demás
        faqItems.forEach((el) => {
          if (el !== item) {
            el.classList.remove("faq-active");
          }
        });
        // Alterna el clic actual
        item.classList.toggle("faq-active");
      });
    });
  });
        </script>      
  </a>
    </div>
  </div>
</div>
</section>
<section id="departamentos" class="departamentos section py-5" style="background-color: #f8f9fa;">
    <!-- Section Title -->
    <div class="container section-title text-center mb-5" data-aos="fade-up">
        <h2 class="mb-3" style="color: #003049;">DEPARTAMENTOS</h2>
        <p class="lead" style="max-width: 800px; margin: 0 auto;">
            Promover, coordinar actividades de investigación y extensión que conectan la labor 
            académica con la comunidad y el entorno social. Estos departamentos se encargan de 
            impulsar la generación de conocimiento mediante la investigación científica y académica, 
            así como de difundir ese conocimiento y ponerlo al servicio de la sociedad.
        </p>
    </div><!-- End Section Title -->
    <div class="container">
        <div class="row gy-4">
            <!-- Departamento 1: Artículos Publicados -->
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon mb-3" style="color:rgb(0, 89, 125); font-size: 2rem;">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <h4 class="card-title mb-3" style="color: #003049;">
                            <?php if (isset($_SESSION['id_usuario'])): ?>
                                <a href="invitados/indexArticulos.php" class="stretched-link text-decoration-none">Publicación de Artículos</a>
                            <?php else: ?>
                                <a href="sistema/login.php" class="btn-lg">Iniciar Sesión para Publicar</a>
                            <?php endif; ?>
                        </h4>
                        <p class="card-text">
                            Comparte tus investigaciones y publicaciones con nuestra comunidad. Publica artículos que contribuyan al conocimiento y al progreso académico.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Departamento 1 -->
            <!-- Departamento 2: Investigación Científica -->
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon mb-3" style="color:rgb(0, 89, 125); font-size: 2rem;">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h4 class="card-title mb-3" style="color: #003049;">
                            <a href="noticias/indexNoticia.php?id_usuario=<?= $id_usuario ?>" class="stretched-link text-decoration-none">Investigación Científica</a>
                        </h4>
                        <p class="card-text">
                            Proyectos y actividades de investigación científica que generan resultados y conclusiones que contribuyen al avance del conocimiento en áreas específicas.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Departamento 2 -->
            <!-- Departamento 3: Biblioteca Central -->
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon mb-3" style="color:rgb(0, 89, 125); font-size: 2rem;">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4 class="card-title mb-3" style="color: #003049;">
                            <a href="biblioteca.php" class="stretched-link text-decoration-none" title="Accede a la Biblioteca Central">Biblioteca Central</a>
                        </h4>
                        <p class="card-text">
                            Amplia variedad de libros en diferentes géneros y temas, desde literatura clásica hasta publicaciones de escritores locales. Disponemos de un repositorio de trabajos de grado.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Departamento 3 -->
            <!-- Departamento 4: Extensión e Interacción -->
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon mb-3" style="color:rgb(0, 89, 125); font-size: 2rem;">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4 class="card-title mb-3" style="color: #003049;">
                            <a href="extension.php" class="stretched-link text-decoration-none" title="Más información sobre Extensión e Interacción">Extensión e Interacción</a>
                        </h4>
                        <p class="card-text">
                            Actividades diseñadas para llevar el conocimiento, la experiencia y los recursos de la universidad a la comunidad y sociedad en general.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Departamento 4 -->
        </div>
    </div>
</section>
<section id="team" class="team section">
<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
<h2>Equipo</h2>
<p>Nuestro equipo de profesionales en investigación y extensión se destaca por su gestión eficiente
  y efectiva de acompañamiento a proyectos de investigación interdisciplinarios, impulsor de  programas
  y proyectos que promueven el acceso y la aplicación práctica del conocimiento.
  A través de una estrecha colaboración con diferentes grupos de interés.</p>
</div><!-- End Section Title -->
<div class="container">
  <div class="row gy-4">
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="assets/img/team/IngA.png" class="img-fluid" alt=""></div>
        <div class="member-info">
        <h4>Alfonso Salas</h4>
        <!---<span>Ingeniero</span>-->
        <span>Director (Direccion de Investigacion y Extensión)</span>
        <p>El Director de la Dirección de Investigación y Extensión es la persona encargada en el ámbito académico y comunitario,
          responsable de impulsar y coordinar actividades de investigación innovadoras que contribuyan al avance del conocimiento y al desarrollo social.
          Su labor incluye la planificación y supervisión de proyectos de investigación, fomentando la colaboración entre diferentes departamentos
          y con instituciones externas.</p>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-linkedin"></i> </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Team Member -->
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="assets/img/team/LicenVannuza.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
        <h4>kenia vanuzza Rivero Suarez</h4>
        <!---<span>Lic. en Administracion de Empresas</span>---->
        <span>Jefe de Departamento Extensión</span>
        <p>El Jefe del Departamento de Extensión desempeña una labor fundamental en la promoción
          y difusión del conocimiento a través de diversas iniciativas educativas.
          Su labor abarca la planificación y ejecución de cursos y talleres dirigidos tanto al público general como a estudiantes universitarios,
          fomentando el aprendizaje continuo y el desarrollo de habilidades prácticas.</p>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-linkedin"></i> </a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="assets/img/team/IngP.png" class="img-fluid" alt=""></div>
        <div class="member-info">
        <h4>José Luís Rodriguéz Barbery</h4>
        <!---<span>Lic. en Administracion de Empresas</span>---->
        <span>Jefe de Departamento de Investigación</span>
        <p>El Jefe del Departamento de Investigación desempeña una labor fundamental en la promoción
          y difusión del conocimiento a través de diversas iniciativas educativas.
          Su labor abarca la planificación y ejecución de cursos y talleres dirigidos tanto al público general como a estudiantes universitarios,
          fomentando el aprendizaje continuo y el desarrollo de habilidades prácticas.</p>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-linkedin"></i> </a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="assets/img/team/Lic_callau.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
        <h4>José Antonio Callau Guardia</h4>
        <span>Lic.Ciencias Jurídicas y Políticas y Sociales </span>
        <span>Técnico Profesional</span>
        <p>Capacitado para comprender y explicar los fenómenos sociales,políticos y administrativos.</p>
        <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""> <i class="bi bi-linkedin"></i> </a>
        </div>
        </div>
      </div>
    </div><!-- End Team Member -->
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="team-member d-flex align-items-start">
      <div class="pic"><img src="assets/img/team/Navarro.jpeg" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Adolfo Navarro Cayo</h4>
        <span>Lic. en Matemáticas</span>
        <span>Tecnico Profesional</span>
        <p>Capacitado para comprender y explicar los fenómenos sociales,políticos y administrativos.</p>
        <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""> <i class="bi bi-linkedin"></i> </a>
        </div>
      </div>
    </div>
  </div><!-- End Team Member -->
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="team-member d-flex align-items-start">
      <div class="pic"><img src="assets/img/team/LicMealla.jpeg" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Gonzalo Mealla Moron</h4>
        <span>Lic. en Ciencias de la Educación</span>
        <span>Técnico Profesional</span>
        <p>Capacitado para comprender y explicar los fenómenos sociales,políticos y administrativos.</p>
        <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""> <i class="bi bi-linkedin"></i> </a>
        </div>
      </div>
    </div>
  </div><!-- End Team Member -->
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="team-member d-flex align-items-start">
      <div class="pic"><img src="assets/img/team/Dr_Denisse.jpg" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Denise Salvatierra Malele</h4>
        <span>Lic. en Ciencias Jurídicas Políticas y Sociales</span>
        <span>Tecnico Profesional</span>
        <p>Capacitado para comprender y explicar los fenómenos sociales,políticos y administrativos.</p>
        <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""> <i class="bi bi-linkedin"></i> </a>
        </div>
      </div>
    </div>
  </div><!-- End Team Member -->
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="team-member d-flex align-items-start">
      <div class="pic"><img src="assets/img/team/Pay.png" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Jhonael Juan Romaña Rodriguéz</h4>
        <span>Lic. en Economía</span>
        <span>Tecnico Profesional</span>
        <p>Capacitado para comprender y explicar los fenómenos sociales,políticos y administrativos.</p>
        <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""> <i class="bi bi-linkedin"></i> </a>
        </div>
      </div>
    </div>
  </div><!-- End Team Member -->
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="team-member d-flex align-items-start">
      <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Paula Zelada Ojopi</h4>
        <!---<span>Lic. en Economía</span>--->
        <span>Tecnico Profesional</span>
        <p>Capacitado para comprender y explicar los fenómenos sociales,políticos y administrativos.</p>
        <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""> <i class="bi bi-linkedin"></i> </a>
        </div>
      </div>
    </div>
  </div><!-- End Team Member -->
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="team-member d-flex align-items-start">
      <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Carlos Eduardo Balderrama Montero</h4>
        <span>Lic. en Administración de Empresa</span>
        <span>Tecnico Profesional</span>
        <p>Capacitado para comprender y explicar los fenómenos sociales,políticos y administrativos.</p>
        <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""> <i class="bi bi-linkedin"></i> </a>
        </div>
      </div>
    </div>
  </div><!-- End Team Member -->
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="team-member d-flex align-items-start">
      <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Carmen Roldan Vaca</h4>
        <span>Contadora</span>
        <span>Tecnico Profesional</span>
        <p>Capacitado para comprender y explicar los fenómenos sociales,políticos y administrativos.</p>
        <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""> <i class="bi bi-linkedin"></i> </a>
        </div>
      </div>
    </div>
  </div><!-- End Team Member -->
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="team-member d-flex align-items-start">
      <div class="pic"><img src="assets/img/team/fritz.jpg" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Fritz Tuno Chuquisa</h4>
        <span>Ing. de Sistemas</span>
        <span>Tecnico Profesional</span>
        <p>Capacitado para comprender y explicar los fenómenos sociales,políticos y administrativos.</p>
        <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""> <i class="bi bi-linkedin"></i> </a>
        </div>
      </div>
    </div>
  </div><!-- End Team Member -->
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
    <div class="team-member d-flex align-items-start">
      <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Salomon Melgar Vaca</h4>
        <span>Personal de Mensajería</span>
        <p>Capacitado para comprender y explicar los fenómenos sociales,políticos y administrativos.</p>
        <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""> <i class="bi bi-linkedin"></i> </a>
        </div>
      </div>
    </div>
  </div><!-- End Team Member -->
  </div>
</div>
</section>
<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action py-5" style="background: linear-gradient(90deg, #003049 0%, #d62828 100%); color: white;">
    <div class="container">
        <div class="row align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-8 text-center text-lg-start mb-4 mb-lg-0">
                <h3 class="mb-3">Modelo de Extensión e Interacción Universitaria</h3>
                <p class="mb-0">
                    Documento base para la elaboración de proyectos de Extensión e 
                    Interacción Universitaria financiados con recursos propios e IDH.
                </p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <a class="btn btn-light btn-lg" href="Documentos/POA2024.pdf" target="_blank" rel="noopener noreferrer" title="Ver documento sobre Extensión e Interacción">
                    Revisa la documentación <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>
        <!-- Documentos Section -->
        <section id="documentos-consulta" class="bg-light">
            <div class="container">
                <h2>Documentos de Consulta</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <i class="fas fa-file-alt fa-3x mb-3" style="color: var(--primary-blue);"></i>
                                <h3 class="card-title">Reglamento de Investigación</h3>
                                <p class="card-text">Normativas y procedimientos para la investigación en la UABJB.</p>
                                <a href="#" class="btn btn-primary">Descargar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <i class="fas fa-bullhorn fa-3x mb-3" style="color: var(--primary-blue);"></i>
                                <h3 class="card-title">Convocatorias</h3>
                                <p class="card-text">Últimas convocatorias de Proyectos de Investigación.</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <i class="fas fa-edit fa-3x mb-3" style="color: var(--primary-blue);"></i>
                                <h3 class="card-title">Formatos</h3>
                                <p class="card-text">Formatos para presentación de proyectos de investigación.</p>
                                <a href="#" class="btn btn-primary">Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Aliados Section -->
        <section id="aliados">
            <div class="container">
                <h2>Nuestros Aliados</h2>
                <p class="text-center mb-5">
                    La DIE trabaja en colaboración con diversas instituciones y organizaciones para fortalecer el impacto de sus actividades.
                </p>
                <div class="logos-aliados">
                <img src="assets/img/logo UABJB.jpg" alt="Logo UABJB">
                    <img src="assets/img/Logo AGCI.jpg" alt="Logo AGCI">
                    <img src="assets/img/Logo Estado de Bolivia.jpg" alt="Logo Estado de Bolivia">
                    <img src="assets/img/Logo Ministerio de Educación.jpg" alt="Logo Ministerio de Educación">
                </div>
            </div>
        </section>
        <!-- Cursos Section -->
        <section id="oferta-cursos" class="bg-light">
            <div class="container">
                <h2>Oferta de Cursos</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-flask fa-3x mb-3" style="color: var(--primary-blue);"></i>
                                <h3 class="card-title">Taller de Metodología de la Investigación</h3>
                                <p class="card-text">
                                    Curso intensivo sobre los fundamentos de la investigación científica.
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary">Próximo: 15 Mayo</span>
                                    <a href="#" class="btn btn-primary">Inscribirse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-pen-fancy fa-3x mb-3" style="color: var(--primary-blue);"></i>
                                <h3 class="card-title">Redacción de Artículos Científicos</h3>
                                <p class="card-text">
                                    Aprende a comunicar tus resultados de investigación de manera efectiva.
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary">Próximo: 22 Mayo</span>
                                    <a href="#" class="btn btn-primary">Inscribirse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-project-diagram fa-3x mb-3" style="color: var(--primary-blue);"></i>
                                <h3 class="card-title">Gestión de Proyectos de Extensión</h3>
                                <p class="card-text">
                                    Desarrolla habilidades para diseñar y ejecutar proyectos de vinculación con la comunidad.
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary">Próximo: 29 Mayo</span>
                                    <a href="#" class="btn btn-primary">Inscribirse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Formulario Section -->
        <section id="formulario-registro">
            <div class="container text-center">
                <h2>Registro para Boletín Informativo</h2>
                <p class="lead mb-4">
                    Suscríbete a nuestro boletín para recibir las últimas noticias sobre nuestras actividades, eventos y convocatorias.
                </p>
                <a href="sistema/login.php" class="btn btn-primary btn-lg">
                    <i class="fas fa-envelope me-2"></i>Registrarse
                </a>
            </div>
        </section>
        <!-- Mapa Section -->
        <section id="mapa">
            <div class="container">
                <h2>Ubicación</h2>
                <p class="text-center mb-4">
                    Visítanos en nuestras oficinas en el Campus Universitario de la UABJB.
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d378.00511460692707!2d-64.9124822!3d-14.8334576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93dd702cb520303b%3A0x62b8b347b8b546b8!2sCAMPUS%20REN%C3%89%20IBA%C3%91EZ%20CARRANZA%20-%20UAB%20%22JB%22!5e0!3m2!1ses!2sbo!4v1694533042029!5m2!1ses!2sbo" 
        frameborder="0" 
        style="border:0; width: 100%; height: 270px;" 
        allowfullscreen=""></iframe>
            </div>
        </section>
    </main>   
    <!-- Footer -->
    <footer class="footer">
        <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3>Contacto</h3>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Av. 27 de Mayo, Campus Universitario</p>
                    <p><i class="fas fa-phone me-2"></i> +591 12345678</p>
                    <p><i class="fas fa-envelope me-2"></i> investigacion@uabjb.edu.bo</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3>Horario de Atención</h3>
                    <p>Lunes a Viernes: 8:00 Am - 15:00 Pm</p>
                </div>
                <div class="col-md-4">
                    <h3>Síguenos</h3>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=61553582383981" class="text-white me-3"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <p class="mb-0 text-center">&copy; <?php echo date("Y"); ?> Dirección de Investigación y Extensión, UABJB. Todos los derechos reservados.</p>
        </div>
                </section>
    </footer>
    <!-- Back to Top Button -->
    <button id="btn-up"><i class="fas fa-arrow-up"></i></button>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>

    <!-- Modal -->
<div class="modal fade" id="miestilo">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Cabecera -->
      <div class="modal-header">
        <h4 class="modal-title">Últimos eventos</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Cuerpo -->
      <div class="modal-body">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../nuevapaginaweb/assets/img/modal/CAR4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../nuevapaginaweb/assets/img/modal/CAR3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../nuevapaginaweb/assets/img/modal/CAR2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../nuevapaginaweb/assets/img/modal/CAR1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../nuevapaginaweb/assets/img/modal/CAR4.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- Pie -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>

<!-- Script para mostrar el modal automáticamente -->
<script>
  $(document).ready(function(){
    $('#miestilo').modal('show');
  });
</script>

</body>

</html>