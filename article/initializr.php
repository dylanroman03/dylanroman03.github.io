<?php
  $nombre = "Dylan Buitrago";
  $comentario1 = '19';
  const INFO="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
?>
<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="../bootstrap.css">
  <link rel="stylesheet" href="../main.css">
  <title>Blog</title>
</head>
<body>
  <header>
    <div class="container-fluid col-md-12 header">
      <nav>
        <img src="../blogger.svg" class="logo">
        <div class="col-md-1"><a href="../index.html">Inicio</a></div>
        <div class="col-md-1"><a>Blog</a></div>
        <div class="col-md-2"><a>Portafolio</a></div>
        <div class="col-md-1"><a>Ayuda</a></div>
        <div class="col-md-1" id="espacio"><a href="">Entra</a></div>
        <div class="col-md-2"><a href="">Registrate</a></div>
      </nav>
    </div>
  </header>
  <article>
    <div class="col-md-12">
      <div class="article col-md-12">
        <h1>Lorem Ipsum</h1>
        <div class="col-md-6" title="Poster Encuentro">
          <img class="portada" src="../img/bt1.jpg">
        </div>
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h3>Lorem ipsum dolor sit</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <ul>
            <li>consectetur</li>
            <li>sed do</li>
            <li>eiusmod</li>
          </ul>
          <img class="post-img" src="../img/terminal.png">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <img class="post-img" src="../img/terminal_error.png">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-12" id="boxer-user">
          <div class="col-md-2">
            <a>
              <img class="avatar" src="../img/avatar-default.svg">
            </a>
          </div>
          <div class="col-md-10">
            <p>
              <span class="avatar-text">
              <a href="" class="text-panel">
                <strong> <?php echo "$nombre";  ?> </strong>
              </a>
              </span>
              <span class="avatar-text">
                <?php echo INFO; ?>
              </span>
            </p>
          </div>
          <div class="col-md-10">
            <div class="col-md-3">
              <p>
                <img class="avatar-panel" title="Fecha" src="../img/fecha-panel.svg"/>
                <a class="text-panel" href="">26 Nov 2018</a>
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <img class="avatar-panel" title="Tacks" src="../img/etiqueta-panel.svg"/>
                <a class="tacks" href="">Plugins</a>
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <img class="avatar-panel" title="Comentarios" src="../img/comentarios-panel.svg"/>
                <a class="text-panel" href="">
                  <?php echo $comentario1; ?>
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <h4>Comentarios (<?php echo $comentario1; ?>)
          </h4>
        </div>
      </div>
    </div>
  </article>
  <footer></footer>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script src="jquery.js"></script>
</body>
