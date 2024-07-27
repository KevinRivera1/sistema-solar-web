<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌞 SISTEMA SOALR 🌍</title>
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./styles/boot.css">
    <link rel="stylesheet" href="./styles/redes.css">
    <link rel="stylesheet" href="./styles/footer.css">
</head>

<body>
    <main>
        <header class="header">
            <div class="header__container">
                <div class="header__logo">
                    <a href="#" class="header__logo-link">
                        <img src="./assets/img/logo.png" alt="Logo" class="header__logo-image">
                    </a>
                </div>
                <div class="header__toggle">
                    <button class="header__menu-btn" id="menu-btn">
                        &#9776;
                    </button>
                </div>
                <nav class="header__nav" id="nav-menu">
                    <ul class="header__nav-list" id="nav-menu">
                        <li class="header__nav-item"><a href="#" class="header__nav-link">Inicio</a></li>
                        <li class="header__nav-item"><a href="#planetas" class="header__nav-link">Planetas</a></li>
                        <li class="header__nav-item"><a href="./src/pages/lunas.php" class="header__nav-link">Lunas</a></li>
                        <li class="header__nav-item"><a href="./src/pages/exploracion.php" class="header__nav-link">Exploración</a></li>
                        <li class="header__nav-item"><a href="./src/pages/contacto.php" class="header__nav-link">Contácto</a></li>
                        <li class="header__nav-item"><a href="./src/pages/contacto.php" class="header__nav-link">Juegos</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="hero">
            <div class="hero__container">
                <h1 class="hero__title">Explora el Maravilloso Sistema Solar</h1>
                <p class="hero__subtitle">Descubre los secretos de nuestros planetas, lunas y estrellas</p>
                <div class="hero__actions">
                    <a href="#planetas" class="hero__button">Aprende más</a>
                </div>
            </div>
        </section>
        <div style="background:#0f0e17; width:100%;">
            <br>
        </div>
        <section class="card">
            <p><span><img src="./assets/planetas/mercurio.png" alt="Mercurio">Mercurio</span></p>
            <p><span><img src="./assets/planetas/venus.png" alt="Venus">Venus</span></p>
            <p><span><img src="./assets/planetas/tierra.png" alt="Marte">Tierra</span></p>
            <p><span><img src="./assets/planetas/marte.png" alt="Marte">Marte</span></p>
            <p><span><img src="./assets/planetas/jupiter.png" alt="Júpiter">Júpiter</span></p>
            <p><span><img src="./assets/planetas/saturno.png" alt="Saturno">Saturno</span></p>
            <p><span><img src="./assets/planetas/urano.png" alt="Urano">Urano</span></p>
            <p><span><img src="./assets/planetas/neptuno.png" alt="Neptuno">Neptuno</span></p>
        </section>

        <section class="planetas" id="planetas">
            <h1 class="planetas__title">Descubre los planetas de nuestro sistema solar</h1>
            <div class="planetas__list">
                <article class="planetas__card">
                    <img src="./assets/planetas/mercurio.png" alt="Mercurio" class="planetas__image">
                    <div class="planetas__content">
                        <h2 class="planetas__name">Mercurio</h2>
                        <p class="planetas__description">
                            Mercurio es el planeta más cercano al Sol y el más pequeño del sistema solar. Su superficie es rocosa y está llena de cráteres, similares a los de la Luna.
                        </p>
                    </div>
                </article>
                <article class="planetas__card">
                    <img src="./assets/planetas/venus.png" alt="Venus" class="planetas__image">
                    <div class="planetas__content">
                        <h2 class="planetas__name">Venus</h2>
                        <p class="planetas__description">
                            Venus es conocido como el gemelo de la Tierra debido a su tamaño y composición similar, pero tiene una atmósfera extremadamente densa y caliente.
                        </p>
                    </div>
                </article>
                <article class="planetas__card">
                    <img src="./assets/planetas/tierra.png" alt="Tierra" class="planetas__image">
                    <div class="planetas__content">
                        <h2 class="planetas__name">Tierra</h2>
                        <p class="planetas__description">
                            La Tierra es el único planeta conocido con vida. Tiene agua en estado líquido y una atmósfera rica en oxígeno, lo que lo hace único en el sistema solar.
                        </p>
                    </div>
                </article>
                <article class="planetas__card">
                    <img src="./assets/planetas/marte.png" alt="Marte" class="planetas__image">
                    <div class="planetas__content">
                        <h2 class="planetas__name">Marte</h2>
                        <p class="planetas__description">
                            Marte, el planeta rojo, tiene la mayor montaña del sistema solar, el Olympus Mons, y es el objetivo principal para futuras exploraciones humanas.
                        </p>
                    </div>
                </article>
                <article class="planetas__card">
                    <img src="./assets/planetas/jupiter.png" alt="Júpiter" class="planetas__image">
                    <div class="planetas__content">
                        <h2 class="planetas__name">Júpiter</h2>
                        <p class="planetas__description">
                            Júpiter es el planeta más grande del sistema solar y tiene una gran mancha roja, que es una tormenta gigantesca. También cuenta con un gran número de lunas.
                        </p>
                    </div>
                </article>
                <article class="planetas__card">
                    <img src="./assets/planetas/saturno.png" alt="Saturno" class="planetas__image">
                    <div class="planetas__content">
                        <h2 class="planetas__name">Saturno</h2>
                        <p class="planetas__description">
                            Saturno es conocido por sus impresionantes anillos, formados por partículas de hielo y rocas. Es el segundo planeta más grande del sistema solar.
                        </p>
                    </div>
                </article>
                <article class="planetas__card">
                    <img src="./assets/planetas/urano.png" alt="Urano" class="planetas__image">
                    <div class="planetas__content">
                        <h2 class="planetas__name">Urano</h2>
                        <p class="planetas__description">
                            Urano es un planeta gigante gaseoso con un color azul verdoso debido a su atmósfera rica en metano. Tiene un eje de rotación muy inclinado.
                        </p>
                    </div>
                </article>
                <article class="planetas__card">
                    <img src="./assets/planetas/neptuno.png" alt="Neptuno" class="planetas__image">
                    <div class="planetas__content">
                        <h2 class="planetas__name">Neptuno</h2>
                        <p class="planetas__description">
                            Neptuno es el planeta más lejano del Sol y tiene un color azul intenso debido al metano en su atmósfera. Es conocido por sus vientos rápidos y tormentas.
                        </p>
                    </div>
                </article>
            </div>
        </section>

        <section class="solar-system">
            <h2 class="solar-system__title">Curiosidades del Sistema Solar</h2>

            <div class="solar-system__curiosity solar-system__curiosity--sun">
                <img src="./assets/planetas/sol.png" alt="sol">
                <div class="solar-system-content">
                    <h3 class="solar-system__curiosity-title">El Sol</h3>
                    <p class="solar-system__curiosity-text">El Sol es tan grande que cabrían más de un millón de Tierras dentro de él.</p>
                    <p class="solar-system__curiosity-text">El sistema solar tiene ocho planetas: Mercurio, Venus, Tierra, Marte, Júpiter, Saturno, Urano y Neptuno.</p>
                    <p class="solar-system__curiosity-text">Entre Marte y Júpiter hay un cinturón lleno de asteroides de diferentes tamaños.</p>
                </div>
            </div>

            <div class="solar-system__curiosity solar-system__curiosity--mercury">
                <img src="./assets/planetas/mercurio.png" alt="Mercurio">
                <div class="solar-system-content">
                    <h3 class="solar-system__curiosity-title">Mercurio</h3>
                    <p class="solar-system__curiosity-text">Mercurio es el planeta más pequeño del sistema solar.</p>
                    <p class="solar-system__curiosity-text">Un día en Mercurio (de amanecer a amanecer) dura 176 días terrestres.</p>
                    <p class="solar-system__curiosity-text">Durante el día, Mercurio puede alcanzar hasta 430°C, pero por la noche, las temperaturas pueden caer a -180°C.</p>
                </div>
            </div>

            <div class="solar-system__curiosity solar-system__curiosity--venus">
                <img src="./assets/planetas/venus.png" alt="Venus">
                <div class="solar-system-content">
                    <h3 class="solar-system__curiosity-title">Venus</h3>
                    <p class="solar-system__curiosity-text">Venus es más caliente que Mercurio, con temperaturas que pueden llegar a 465°C.</p>
                    <p class="solar-system__curiosity-text">Venus gira en dirección opuesta a la mayoría de los otros planetas.</p>
                    <p class="solar-system__curiosity-text">Un día en Venus es más largo que su año. Un día dura 243 días terrestres y su año dura 225 días terrestres.</p>
                </div>
            </div>

            <div class="solar-system__curiosity solar-system__curiosity--earth">
                <img src="./assets/planetas/tierra.png" alt="Tierra">
                <div class="solar-system-content">
                    <h3 class="solar-system__curiosity-title">Tierra</h3>
                    <p class="solar-system__curiosity-text">La Tierra es el único planeta donde sabemos que hay vida.</p>
                    <p class="solar-system__curiosity-text">Alrededor del 71% de la superficie de la Tierra está cubierta de agua.</p>
                    <p class="solar-system__curiosity-text">La Tierra tiene un campo magnético que nos protege de los rayos solares dañinos.</p>
                </div>
            </div>

            <div class="solar-system__curiosity solar-system__curiosity--mars">
                <img src="./assets/planetas/marte.png" alt="Marte">
                <div class="solar-system-content">
                    <h3 class="solar-system__curiosity-title">Marte</h3>
                    <p class="solar-system__curiosity-text">Marte es conocido como el "Planeta Rojo" debido a su suelo rico en óxido de hierro.</p>
                    <p class="solar-system__curiosity-text">Marte tiene la montaña más alta del sistema solar, el Olympus Mons, que es tres veces más alta que el Monte Everest.</p>
                    <p class="solar-system__curiosity-text">Los científicos creen que Marte pudo haber tenido agua y vida en el pasado.</p>
                </div>
            </div>

            <div class="solar-system__curiosity solar-system__curiosity--jupiter">
                <img src="./assets/planetas/jupiter.png" alt="Júpiter">
                <div class="solar-system-content">
                    <h3 class="solar-system__curiosity-title">Júpiter</h3>
                    <p class="solar-system__curiosity-text">Júpiter es el planeta más grande del sistema solar, con una masa que es más del doble de la de todos los demás planetas juntos.</p>
                    <p class="solar-system__curiosity-text">Júpiter tiene una tormenta gigante llamada la Gran Mancha Roja que es más grande que la Tierra.</p>
                    <p class="solar-system__curiosity-text">Júpiter tiene al menos 79 lunas, incluyendo la luna más grande del sistema solar, Ganimedes.</p>
                </div>
            </div>

            <div class="solar-system__curiosity solar-system__curiosity--saturn">
                <img src="./assets/planetas/saturno.png" alt="Saturno">
                <div class="solar-system-content">
                    <h3 class="solar-system__curiosity-title">Saturno</h3>
                    <p class="solar-system__curiosity-text">Saturno es famoso por sus grandes y hermosos anillos hechos de hielo y roca.</p>
                    <p class="solar-system__curiosity-text">Si hubiera una bañera lo suficientemente grande, Saturno flotaría en el agua debido a su baja densidad.</p>
                    <p class="solar-system__curiosity-text">Saturno tiene al menos 83 lunas, siendo Titán la más grande.</p>
                </div>
            </div>

            <div class="solar-system__curiosity solar-system__curiosity--uranus">
                <img src="./assets/planetas/urano.png" alt="Urano">
                <div class="solar-system-content">
                    <h3 class="solar-system__curiosity-title">Urano</h3>
                    <p class="solar-system__curiosity-text">Urano gira de lado, lo que significa que rota horizontalmente en lugar de verticalmente como los demás planetas.</p>
                    <p class="solar-system__curiosity-text">Urano tiene un color azul verdoso debido al metano en su atmósfera.</p>
                    <p class="solar-system__curiosity-text">Es uno de los planetas más fríos del sistema solar, con temperaturas que pueden bajar a -224°C.</p>
                </div>
            </div>

            <div class="solar-system__curiosity solar-system__curiosity--neptune">
                <img src="./assets/planetas/neptuno.png" alt="Neptuno">
                <div class="solar-system-content">
                    <h3 class="solar-system__curiosity-title">Neptuno</h3>
                    <p class="solar-system__curiosity-text">Neptuno tiene los vientos más rápidos del sistema solar, que pueden alcanzar velocidades de hasta 2,400 km/h.</p>
                    <p class="solar-system__curiosity-text">Neptuno es conocido por su color azul profundo, también debido al metano en su atmósfera.</p>
                    <p class="solar-system__curiosity-text">Neptuno tiene al menos 14 lunas y unos tenues anillos de hielo y polvo.</p>
                </div>
            </div>
        </section>

        <?php require "./src/components/boot.php"; ?>

        <?php require "./src/components/redes.php"; ?>

        <?php require "./src/components/footer.php"; ?>

    </main>

</body>

<script src="./js/index.js"></script>
<script src="./js/footer.js"></script>

</html>