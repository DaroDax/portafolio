
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/nickie">Portafolio WEB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" id="home" aria-current="page" href="/nickie">Sobre mi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pro" href="./system.php">Programación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="des" href="./design.php">Diseño</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>

  <script src="./frontend/js/jquery-3.6.0.min.js"></script>
  
  <script> 
  //Funcion para marcar la pestaña actual
  var pathname = window.location.pathname;
  //alert(pathname);

  if(pathname == '/nickie/system.php'){
    $("#pro").addClass("active");
  }else if(pathname == '/nickie/design.php'){
    $("#des").addClass("active");
  }else{
    $("#home").addClass("active");
  }

  </script>
  