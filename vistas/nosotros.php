<?php
session_start(); // Sesión iniciada
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nosotros</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <a href="../index.php">
        <img class="logo" src="img/logo.png" alt="logo" />
      </a>
    </header>

    <hr />

    <div class="nosotros-div">
      <h1>Acerca de Nosotros</h1>

      <main class="contenedor seccion">
        <div class="contenedor nosotros">
          <div class="imagen">
            <picture>
              <source
                srcset="img/nosotros.webp"
                alt="nosotros"
                type="image/webp"
              />
              <source
                srcset="img/nosotros.jpg"
                alt="nosotros"
                type="image/jpeg"
              />
              <img src="img/nosotros.jpg" alt="nosotros" loading="lazy" />
            </picture>
          </div>
          <div class="texto-nosotros">
            <p class="negrita-nosotros">Desde el año 2022</p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti
              natus corporis modi unde sint pariatur culpa cum quam, assumenda
              sunt eveniet, eligendi possimus beatae necessitatibus non animi
              nobis velit porro. dolor sit amet consectetur adipisicing elit.
              Neque deleniti repellat veniam optio. Natus, cupiditate
              dignissimos perspiciatis culpa iure, molestiae eligendi eaque quo
              optio ad in. Corrupti quam inventore repudiandae. sit amet
              consectetur adipisicing elit. Libero excepturi laudantium id,
              earum sit dolores architecto explicabo quae corrupti placeat
              aperiam suscipit ab, beatae ducimus nostrum eligendi quia
              perspiciatis cumque.
            </p>
            <p>
              consectetur adipisicing elit. Libero excepturi laudantium id,
              earum sit dolores architecto explicabo quae corrupti placeat
              aperiam suscipit ab, beatae ducimus nostrum eligendi quia
              perspiciatis cumque. adipisicing elit. Libero excepturi laudantium
              id.
            </p>
          </div>
        </div>

        <div class="iconos-nosotros">
          <div class="icono">
            <h3>Seguridad</h3>
            <img src="img/icono1.svg" alt="Icono seguridad" loading="lazy" />
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Consequuntur, suscipit quidem? Quod a corporis libero porro
              quidem. Ipsam accusamus architecto cumque aliquid exercitationem
              laborum aperiam reiciendis sunt. Deserunt, dolorem ea!
            </p>
          </div>
          <div class="icono">
            <h3>Precio</h3>
            <img src="img/icono2.svg" alt="Icono precio" loading="lazy" />
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Consequuntur, suscipit quidem? Quod a corporis libero porro
              quidem. Ipsam accusamus architecto cumque aliquid exercitationem
              laborum aperiam reiciendis sunt. Deserunt, dolorem ea!
            </p>
          </div>
          <div class="icono">
            <h3>Tiempo</h3>
            <img src="img/icono3.svg" alt="Icono tiempo" loading="lazy" />
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Consequuntur, suscipit quidem? Quod a corporis libero porro
              quidem. Ipsam accusamus architecto cumque aliquid exercitationem
              laborum aperiam reiciendis sunt. Deserunt, dolorem ea!
            </p>
          </div>
        </div>
      </main>
    </div>
    <footer class="footer">
      <div class="contenedor contenedor-footer">
        <nav class="navegacion">
          <a href="../index.php"> Inicio </a>
          <a href="nosotros.php"> Nosotros </a>
          <a href="cotizar.php"> Cotizar </a>
          <a href="pqrs.php"> PQRS </a>
        </nav>
        <p class="copyright">
          Fotovallas. Todos los derechos reservados 2022 &copy;
        </p>
      </div>
    </footer>
  </body>
</html>
