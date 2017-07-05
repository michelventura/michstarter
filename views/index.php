<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<meta name="robots" content="noodp,noydir">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical" href="<?php echo $url; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo $assets_dir; ?>/dist/css/main.css" type="text/css">
	<link rel="shortcut icon" href="<?php echo $assets_dir; ?>/images/favicon.ico?ver=<?php echo $version; ?>">
</head>
<body> 
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="<?php echo $assets_dir; ?>/images/profile.png" alt="" />
                <h1 class="name">Michel Ventura</h1>
                <h3 class="tagline">Desarrollador web</h3>
            </div>
            <!--//profile-container-->

            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: yourname@email.com">mich@pyxies.pro</a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:0445561312929">04455 6131 2929</a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="https://michelventura.com/" target="_blank">michelventura.com</a></li>
                    <li class="linkedin"><i class="fa fa-linkedin"></i><a href="https://www.linkedin.com/in/michventura/" target="_blank">linkedin.com/in/michventura</a></li>
                    <li class="github"><i class="fa fa-github"></i><a href="https://github.com/michelventura" target="_blank">github.com/michelventura</a></li>
                    <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/michventu" target="_blank">@michventu</a></li>
                </ul>
            </div>
            <!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Educación</h2>
                <div class="item">
                    <h4 class="degree">Licenciado en traducción</h4>
                    <h5 class="meta">Universidad Intercontinental</h5>
                    <div class="time">2017 - 2011</div>
                </div>
                <!--//item-->
                <div class="item">
                    <h4 class="degree">Internet Marketing Association</h4>
                    <h5 class="meta">IMA Certified Internet Marketer</h5>
                    <div class="time">2012</div>
                </div>
                <!--//item-->
                <div class="item">
                    <h4 class="degree">Diplomado en Inovación y estrategia</h4>
                    <h5 class="meta">Instituto Tecnológico de Monterrey</h5>
                    <div class="time">2012 - 2013</div>
                </div>
                <!--//item-->
            </div>
            <!--//education-container-->

            <div class="languages-container container-block">
                <h2 class="container-block-title">Idiomas</h2>
                <ul class="list-unstyled interests-list">
                    <li>Español <span class="lang-desc">(Nativo)</span></li>
                    <li>Inglés <span class="lang-desc">(Avanzado)</span></li>
                    <li>Francés <span class="lang-desc">(Avanzado)</span></li>
                    <li>Portugués <span class="lang-desc">(Básico)</span></li>
                </ul>
            </div>
            <!--//interests-->

            <div class="interests-container container-block">
                <h2 class="container-block-title">Intereses</h2>
                <ul class="list-unstyled interests-list">
                    <li>Desarrollo de aplicaciones</li>
                    <li>Nuevas tecnologías</li>
                    <li>Optimización SEO</li>
                    <li>Experiencia de usuario</li>
                    <li>Estrategia de contenidos</li>
                    <li>Marketing de atracción</li>
                </ul>
            </div>
            <!--//interests-->

        </div>
        <!--//sidebar-wrapper-->

        <div class="main-wrapper">

            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Perfil profesional</h2>
                <div class="summary">
                    <p>En 2010 inicié mi formación en marketing digital y desarrollo web, y desde entonces he creado soluciones para otros, desde asesoría hasta plataformas digitales con WordPress y Genesis Framework. He trabajado principalmente con emprendedores
                        y pequeñas empresas con asesoría, implementación de estrategias y desarrollo de aplicaciones web.</p>
                </div>
                <!--//summary-->
            </section>
            <!--//section-->

            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiencia</h2>

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Co Fundador</h3>
                            <div class="time">2017 - Presente</div>
                        </div>
                        <!--//upper-row-->
                        <div class="company">Pyxies</div>
                    </div>
                    <!--//meta-->
                    <div class="details">
                        <p>Pyxies es una plataforma de aprendizaje en línea con cursos de marketing y estrategias digitales.</p>
                        <p>Esta plataforma cuenta con lecciones gratuitas y cursos premium de pago de email marketing, facebook marketing, inbound marketing y optimización web.</p>
                    </div>
                    <!--//details-->
                </div>
                <!--//item-->

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Freelance en desarrollo web con WordPress</h3>
                            <div class="time">2013 - Presente</div>
                        </div>
                        <!--//upper-row-->
                        <div class="company">México, D.F.</div>
                    </div>
                    <!--//meta-->
                    <div class="details">
                        <p>Utilizo WordPress para crear soluciones optimizadas para buscadores y backend accesible para el administrador. En el desarrollo de soluciones que ofrezco a mis clientes utilizo Genesis Framework y en ocasiones Roots Sage dependiendo
                            del tipo de proyecto.</p>
                        <p>Si el cliente requiere adaptar una plantilla, diseño, prototipo, integración con un tema actual de Genesis o solución de comercio electrónico de WooCommerce, también realizo estos proyectos.</p>
                    </div>
                    <!--//details-->
                </div>
                <!--//item-->

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Desarrollo Front End</h3>
                            <div class="time">2012 - 2014</div>
                        </div>
                        <!--//upper-row-->
                        <div class="company">Corporativo Elige, México D. F.</div>
                    </div>
                    <!--//meta-->
                    <div class="details">
                        <p>En Corporativo Elige mi tarea fue trabajar en equipo junto con una diseñadora y copywriter para crear en conjunto páginas de aterrizaje para la promoción y venta de libros en línea.</p>
                    </div>
                    <!--//details-->
                </div>
                <!--//item-->

            </section>
            <!--//section-->

            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Proyectos</h2>
                <div class="intro">
                    <p>En cada uno de mis proyectos de soluciones personalizadas, el proceso de colaboración con mis clientes va desde entender perfectamente sus motivaciones, objetivos y audiencia hasta crear algo funcional, fácil de utilizar y auto administrar
                        con asesoría y guías personalizadas específicas para cada cliente.</p>
                    <p>Puedes dar clic en <a href="#">este video</a> para conocer bien el proceso que llevo a cabo.</p>
                </div>
                <!--//intro-->
                <div class="item">
                    <span class="project-title"><a href="http://serbinter.com/" target="_blank">Serbinter</a></span> - <span class="project-tagline">En este proyecto, el objetivo principal del cliente era mejorar la experiencia de usuario para aumentar el número de visitas, segmentar a prospectos interesados de sus productos por intereses y poder crear fácilmente publicaciones, noticias y promociones del mes a través de su blog.</span>

                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a href="#" target="_blank">IBCI Coyoacán</a></span> -
                    <span class="project-tagline">En este proyecto, el objetivo del cliente fue dar a conocer su nueva oferta académica. Para ejecutar esto, se realizó un rediseño de sitio web para el lanzamiento de su oferta educativa y nuevos cursos.</span>
                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a href="#" target="_blank">Enrico Bompani</a></span> - <span class="project-tagline">Para este proyecto, Enrico me contactó para crear su presencia en línea con la finalidad de posicionarse como autoridad en su nicho. Para esto, colaboramos juntos para crear una página web que mostrará su trabajo y un blog donde el pudiera compartir su conocimiento y una sección de videos donde está creando contenido informativo para su audiencia.</span>
                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a href="#" target="_blank">Green Energy Development</a></span> - <span class="project-tagline">En este proyecto, desarrollamos un equipo de trabajo para crear una solución optimizada para buscadores para que el cliente pueda de manera sencilla probar distintas versiones (A/B Test) para sus campañas de publicidad pagada así como implementación de SEO técnico para mejorar el quality score y bajar el costo por clic.</span>
                </div>
                <!--//item-->
            </section>
            <!--//section-->

            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Habilidades &amp; competencias</h2>
                <div class="skillset">
                    <div class="item">
                        <h3 class="level-title">Desarrollo con WordPress</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="95%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->
                    <div class="item">
                        <h3 class="level-title">PHP &amp; SQL</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="90%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Javascript &amp; jQuery</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="80%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Gulp &amp; Yarn</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="85%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="95%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">IA &amp; UX</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="90%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->
                    <div class="item">
                        <h3 class="level-title">Optimización SEO</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="93%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->
                    <div class="item">
                        <h3 class="level-title">Ecommerce</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="85%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                </div>
            </section>
            <!--//skills-section-->

        </div>
        <!--//main-body-->
    </div>

    <footer class="footer">
        <div class="text-center">
            <small class="copyright">&copy 2017 <a href="https://michelventura.com" target="_blank">Michel Ventura</a>.</small>
        </div>
        <!--//container-->
    </footer>
    <!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo $assets_dir; ?>/dist/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $assets_dir; ?>/dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="<?php echo $assets_dir; ?>/dist/js/main.js"></script>
</body>

</html>