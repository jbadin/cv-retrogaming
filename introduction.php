<!DOCTYPE html>
<html lang="fr" class="h-100">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>

    <link
      rel="stylesheet"
      href="./node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="./node_modules/nes.css/css/nes-core.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./node_modules/animate.css/animate.min.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
  </head>

  <body class="d-flex flex-column h-100">
    <div class="container" id="introduction">
      <h1 class="animate__animated animate__slideInUp text-center py-5">
        Level One : Présentation
      </h1>
      <div class="row">
        <div class="card mb-3 m-auto col nes-container is-dark is-rounded">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="./assets/images/bulbizarre.png" class="img-fluid rounded-start" alt="avatar" id="avatar" />
            </div>
            <div class="col-md-8">
              <div class="card-body px-4">
                <h5 class="card-title">Johanne BADIN</h5>
                <div class="col-3">
                     <p class="mb-0">HP : 31 PV</p>
                    <progress value="50" max="100"></progress>
                </div>
                   <div class="col-3">
                     <p class="mb-0">LVL 6 - XP : 7</p>
                    <progress value="50" max="100"></progress>
                </div>
                <ul class="card-text">
              
                  
                  <li>Location: Noyon, Oise</li>
                  <li>Job : Développeuse Web et Formatrice</li>
                  <li>Hobby : Créer des cv thématiques, jouer à Pokémon et éclater du papier-bulle</li>
                  <li>Bio :
                    <p>Passionnée depuis très longtemps à tout ce qui touche au code et à l'informatique, après un petit détour vers un parcours littéraire, je me suis orientée vers le développement web. Depuis 2016, je suis passée du web au logiciel, en passant par le développement d'applications multi-couches et d'applications mobiles.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="footer mt-auto p-2 text-center">
      <p>Licensed by Johanne BADIN Inc.</p>
      <p>© 2022</p>
    </div>
  </body>
</html>
