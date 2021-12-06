<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido a la Web del Instituto Arturo Sabroso Montoya</title>
        <!--aqui llamamos a nuestro archivo css-->
        <link rel="stylesheet" href="style.css">
        <!--kit de fontawesome, aqui conectamos con css para llamar a los iconos necesarios-->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <!--herramientas para trabajar con js-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    </head>
    <body>
        <!--cod PHP-->


        <!--scroll-->
        <div class="scroll-up-btn">
            <i class="fas fa-angle-up"></i>
        </div>
        <!--menu de navegacion-->
        <nav class="navbar">
            <div class="max-width">
                <img src="images/logoasm.png" alt="TecniTech Logo" class="logoasm">
                <div class="logo"><a href="#">Arturo <span>Sabroso Montoya</span></a></div>
                <ul class="menu">
                    <li><a href="#home" class="menu-btn">Inicio</a></li>
                    <li><a href="#about" class="menu-btn">Conócenos</a></li>
                    <li><a href="#services" class="menu-btn">Carrera</a></li>
                    <?php if(!empty($user)): ?>
                    <li><?= $user['email']; ?></li>
                    <?php else: ?>
                        <?php header("Location: index.php"); ?>
                    <?php endif; ?>
                    <li><a href="logout.php" class="menu-btn">Cerrar Sesión</a></li>
                </ul>
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

        <!--seccion INICIO-->
        <section class="home" id="home">
            <div class="max-width">
                <div class="home-content">
                    <div class="text-1">Únete con nosotros y</div>
                    <div class="text-2">Estudia</div>
                    <div class="text-3"><span class="typing"></span></div>
                    <a href="#form">Matricúlate</a>
                </div>
            </div>
        </section>

        <!--seccion NOSOTROS-->
        <section class="about" id="about">
            <div class="max-width">
                <h2 class="title">Conócenos</h2>
                <div class="about-content">
                    <div class="column left">
                        <img src="images/instituto.jpg" alt="Foto del Instituto Arturo Sabroso Montoya">
                    </div>
                    <div class="column right">
                        <div class="text">Nuestro Instituto busca brindarte <span class="typing-2"></span></spana></div>
                        <p>En febrero del año 2013 a mérito de la R.D N" O00722-2013-DRELM, asume la Dirección al Mg. Víctor M. Gómez Castillo, con ei compromiso de impulsar al desarrollo de la institución y elevar la calidad de la ida académica. El 19 de marzo del 2014, la DRELM designo a la Lic. Zoila Villagaray Maguilla como Directora General, con RDR N" 00701 2014- DRELM, iniciando su trabajo con el compromiso de elevar la cantidad educativa, dentro de un dima de cordialidad y camaradería. Mediante R.D.R N 0011403-2015-DRELM, de fecha 27 de febrero del 2015, la DRELM encarga internamente el puesto y las funciones de Directora General a la Lic. María del Pilar Arias Sedano. El 16 de abril del 2015 e C.D. César Manuel Manco Jara. a mérito de la RD.R. N 003344-2015 DRELM. asume la Dirección con el compromiso de continuar con el crecimiento de la Institución.</p>
                        <a href="#contact">Visítanos</a>
                    </div>
                </div>
            </div>
        </section>

        <!--seccion SERVICIOS-->
        <section class="services" id="services">
            <div class="max-width">
                <h2 class="title">Nuestras Carreras Profesionales Técnicas</h2>
                <div class="serv-content">
                    <div class="card1">
                        <div class="box">
                            <i class="fas fa-user-nurse"></i>
                                <div class="text">Enfermería Técnica</div>
                                <p>Obtendrás capacidades académicas similares a las de Licenciada de Enfermeria como la estimulación temprana. Podrás planificar, organizar y realizar servicios técnicos de enfermería. </p>
                        </div>
                    </div>

                    <div class="card1">
                        <div class="box">
                            <i class="fas fa-address-book"></i>
                                <div class="text">Secretariado Ejecutivo</div>
                                <p>La secretaria ejecutiva es un puesto de trabajo o profesión que sirve para brindar el máximo apoyo a los empleados de alto rango en una empresa u organización utilizando herramientas ofimáticas.</p>
                        </div>
                    </div>

                    <div class="card1">
                        <div class="box">
                            <i class="fas fa-calculator"></i>
                                <div class="text">Contabilidad</div>
                                <p>El Técnico en Contabilidad se caracteriza por registrar, elaborar y analizar las operaciones económicas y financieras de las entidades públicas y privadas en función de su actividad.</p>
                        </div>
                    </div>
                    <div class="card2">
                        <div class="box">
                            <i class="fas fa-code"></i>
                                <div class="text">Computación e Informática</div>
                                <p>El Técnico en Computación se caracteriza por desarrollar soluciones de software sobre diversas plataformas utilizando herramientas tecnológicas adecuadas y contribuyendo con los criterios de calidad, seguridad y ética profesional.</p>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="box">
                            <i class="fas fa-tooth"></i>
                                <div class="text">Prótesis Dental</div>
                                <p>El protésico dental extiende su capacidad y responsabilidad tanto a la prótesis que elabore o suministre, como a los centros, instalaciones o laboratorios donde desarrolla su actividad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--seccion OBJETIVOS-->
        <section class="numbers" id="numbers">
            <div class="max-width">
                <h2 class="title">Nuestros objetivos del día a día</h2>
                <div class="numbers-content">
                    <div class="column left">
                        <div class="text">VISIÓN INSTITUCIONAL.</div>
                            <p>Ser líder en Formación Tecnológica en nuestra jurisdicción para el año 2021, por la calidad de formación académica, infraestructura, equipamiento y por sus egresados con mentalidad empresarial e innovadora que respondan a las exigencias laborales del mercado globalizado.</p><br>
                        <div class="text">MISIÓN INSTITUCIONAL.</div>
                            <p>Formar profesionales técnicos competentes de alto nivel académico, para desarrollar su profesión con eficiencia, capaces de promover y crear puestos de trabajo, manifestando un alto nivel ético, basado en principios y valores sociales de una cultura de paz y progreso.</p><br>
                        <div class="text">OBJETIVOS.</div>
                            <p><b>a)</b> Brindar servicios educativos de alta calidad.</p>
                            <p><b>b)</b> Formar profesionales técnicos calificados en 3 años de estudios con una salida base humanística científica, tecnológica y artística, capaces de satisfacer las necesidades del mercado laboral.</p>
                            <p><b>c)</b> Proyectarse a la comunidad a través de compañías de apoyo social (salud y otros) así como cursos de extensión educativa, a fin de reducir los altos índices de pobreza y desempleo de la población.</p>
                            <p><b>d)</b> Propiciar la creación del desarrollo de la pequeña empresa relacionadas a las careras que ofertamos, entre las estudiantes y comunidad en general.</p>
                    </div>
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span>7 de cada 10 de nuestros estudiantes trabajan en su especialidad después de terminar la carrera.</span>
                            </div>
                            <div class="line html"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Nuestros estudiantes tienen el acceso a un convenio con CIVIME para estudiar idiomas.</span>
                            </div>
                            <div class="line css"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Acceso a becas completas o medias becas dependiendo del rendimiento del alumno.</span>
                            </div>
                            <div class="line js"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>El Aula Virtual ASM permite interactuar con maestros y verificar calificaciones/puntajes.</span>
                            </div>
                            <div class="line php"></div>
                        </div>
                        <div class="bars">
                            <img src="images/docentes.jpg" alt="" width="550" height="320">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--seccion TEAMS-->
        <section class="teams" id="teams">
            <div class="max-width">
                <h2 class="title">Experiencias de nuestros alumnos</h2>
                <div class="carousel owl-carousel">
                    <div class="card">
                        <div class="box">
                            <img src="images/alumno-1.jpg" alt="Alumno 1">
                            <div class="text">Ricardo López</div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="images/alumno-2.jpg" alt="Alumno 2">
                            <div class="text">Karina Salas</div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="images/alumno-3.jpg" alt="Alumno 3">
                            <div class="text">Rosa Sosa</div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="images/alumno-4.jpg" alt="Alumno 4">
                            <div class="text">Félix Sánchez</div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="images/alumno-5.jpg" alt="Alumno 5">
                            <div class="text">Javier Palermo</div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--seccion CONTACTO-->
        <section class="contact" id="contact">
            <div class="max-width">
                <h2 class="title">Contáctanos</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15607.104468853857!2d-77.02426300373536!3d-12.058919412091278!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x75454801ea944e9e!2sInstituto%20Superior%20Tecnol%C3%B3gico%20Arturo%20Sabroso%20Montoya!5e0!3m2!1ses-419!2spe!4v1608704117154!5m2!1ses-419!2spe" width="1000" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="contact-content">
                    <div class="column left">
                        <div class="text">Permanezcamos conectados</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis quaerat numquam ad voluptatum cupiditate quis, perspiciatis voluptatem sequi obcaecati id!</p>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head">Direccion</div>
                                    <div class="sub-title">Prolongacion 1020, Jirón Antonio Raimondi, Cercado de Lima</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email</div>
                                    <div class="sub-title">mesadepartevirtual@iestpasm.edu.pe</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-phone-square-alt"></i>
                                <div class="info">
                                    <div class="head">Número telefónico</div>
                                    <div class="sub-title">+51 987 654 321</div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <!--http://localhost/ASMInstituto-2/home.php?nombre-ape=Carlos+Santisteban&dni=19428362&ciclo-turno=ciclo1-d&carrera-prof=computacion-e-informatica&fecha-nac=2021-03-09&email=rodrigosantisteban25%40gmail.com&voucher-pago=Final+Exam+-+I06.pdf&numero-cel=912767102&mensaje=dadad&submit=#-->

                    <!--http://localhost/ASMInstituto-2/home.php?nomnbre-ape=Carlos+Santisteban&dni=76043500&ciclo-turno=ciclo2-d&carrera-prof=computacion-e-informatica&fecha-nac=2021-11-02&email=santistebancalzadoc%40gmail.com&voucher-pago=Final+Exam+-+I06.pdf&numero-cel=912767102&mensaje=zfsfsfs&submit=#-->

                    <!--http://localhost/ASMInstituto-2/home.php?nombre-ape=Carlos+Santisteban&dni=76043500&ciclo-turno=ciclo1-d&carrera-prof=computacion-e-informatica&fecha-nac=2021-11-01&email=santistebancalzadoc%40gmail.com&voucher-pago=Final+Exam+-+I06.pdf&numero-cel=912767102&mensaje=%3Cdasdada&submit=#-->
                    <div class="column right">
                        <div class="text">Matricúlate aquí con nosotros</div>
                        <form action="registrar-matricula.php" method="post" id="form" enctype="multipart/form-data">
                            <div class="fields">
                                <div class="field name">
                                    <input type="text" placeholder="Nombre y Apellidos" name="nombre-ape" required>
                                </div>
                                <div class="field email">
                                    <input type="text" placeholder="DNI" name="dni" required>
                                </div>
                            </div>
                            <div class="fields">
                                
                                <select class="field name" name="ciclo-turno" id="">
                                    <option value="" selected>--Elige Ciclo/Turno--</option>
                                    <option value="ciclo1-d">Ciclo I - Diurno</option>
                                    <option value="ciclo2-d">Ciclo II - Diurno</option>
                                    <option value="ciclo3-d">Ciclo III - Diurno</option>
                                    <option value="ciclo4-d">Ciclo IV - Diurno</option>
                                    <option value="ciclo5-d">Ciclo V - Diurno</option>
                                    <option value="ciclo6-d">Ciclo VI - Diurno</option>
                                    <option value="ciclo1-n">Ciclo I - Noche</option>
                                    <option value="ciclo2-n">Ciclo II - Noche</option>
                                    <option value="ciclo3-n">Ciclo III - Noche</option>
                                    <option value="ciclo4-n">Ciclo IV - Noche</option>
                                    <option value="ciclo5-n">Ciclo V - Noche</option>
                                    <option value="ciclo6-n">Ciclo VI - Noche</option>
                                </select>
        
                                <select class="field email" name="carrera-prof" id="">
                                    <option value="" selected>--Elige una carrera--</option>
                                    <option value="computacion-e-informatica">Computación e Informática</option>
                                    <option value="enfermeria-tecnico">Enfermería Técnica</option>
                                    <option value="secretarido-ejecutivo">Secretariado Ejecutivo</option>
                                    <option value="contabilidad">Contabilidad</option>
                                    <option value="protesis-dental">Prótesis Dental</option>
                                </select>
                            </div>
                            <p>Indica tu fecha de nacimiento</p>
                            <div class="fields">
                                <div class="field name">
                                    <input type="date" placeholder="Fecha de Nacimiento" name="fecha-nac" required>
                                </div>
                                <div class="field email">
                                    <input type="email" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <p>Voucher de pago en .pdf o .jpg</p>
                            <div class="fields">
                                <div class="field name">
                                    <input type="file" placeholder="Adjuntar voucher de pago" name="voucher-pago" required>
                                </div>
                                <div class="field email">
                                    <input type="tel" placeholder="Número de celular" name="numero-cel" required>
                                </div>
                            </div>
                            <div class="field textarea">
                                <textarea cols="30" rows="10" placeholder="Escribe un mensaje..." name="mensaje" required></textarea>
                            </div>
                            <div class="button">
                                <button type="submit" name="submit">Enviar Datos</button>
                            </div>
                            <!--<input class="button" type="submit" name="submit">-->
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!--seccion FOOTER-->
        <footer>
            <span>Creado y diseñado por <a href="#">Grupo 3</a> | <span class="far fa-copyright"></span> 2021 Todos los Derechos Reservados.</span>
        </footer>

        <script src="script.js"></script>
    </body>
</html>