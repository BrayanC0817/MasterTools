<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="shortcut icon" href="imas/logo.png" />
</head>
<body>
  
<nav class="navbar navbar-expand-lg bg-body-tertiary" >
    <div class="container-fluid">
      <a class="navbar-brand" aria-current="page" href="index.php">MasterTools</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="mision_vision.php">Mision y Vision</a>
          <a class="nav-link" href="catalogo.php">Herramientas</a>
          <a class="nav-link" href="registro.php">Registro Clientes</a>
          <a class="nav-link" href="login_registrop.php">Registro Producto</a>
        </div>
      </div>
    </div>
  </nav>
    <br>
    <br>
    <br> 
    <br>
    <br>
    <br>
</body>

<body>
    <style>
    .body1 {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 50vh;
    background: linear-gradient(135deg, rgba(0, 0, 128, 0.5), rgba(255, 165, 0, 0.5));
  }
  
  .login-container {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    background: linear-gradient(135deg, rgba(0, 0, 128, 0.5), rgba(255, 165, 0, 0.5)); 
     
  }
  
  label, input, button {
    display: block;
    margin-bottom: 10px;
  }
  
  .button1 {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .button1:hover {
    background-color: #0056b3;
  }

  h1{
    align-items: center;
    text-align: center;
  }
  </style>
 
 <div class="body1">
    <div class="logo">
    <a href="index.php"><img src="imas/logo.png" alt="Volver al formulario"></a>>
    </div>
  </div>
    <br>
    <br>
    <br>

  <div class="login-container">
    <h1>Iniciar Sesión</h1>
    <form id="login-form">
      <label  for="username">Usuario:</label>
      <input  type="text" id="username" name="username" required>
      <label for="password">Contraseña:</label>
      <input  type="password" id="password" name="password" required>
      <button type="submit">Iniciar Sesión </button>
      <p id="login-message"></p>
    </form>
    <p id="login-message"></p>
  </div>
  <script src="scriptp.js"></script>
  <br>
    <br>
    <br>
    </---------------------/>

    <style>
    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 20px; /* Ajusta el margen superior según tus necesidades */
    }
</style>

    <div class="body2">
      <br>
    <div class="pagination-container">
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="index.php">Inicio</a></li>
    <li class="page-item"><a class="page-link" href="mision_vision.php">Mision y Vision</a></li>
    <li class="page-item"><a class="page-link" href="login_registroclientes.php">Registro Clientes</a></li>
    <li class="page-item"><a class="page-link" href="login_registrop.php">Registro Producto</a></li>
    <li class="page-item"><a class="page-link" href="index.php">Next</a></li>
  </ul>
</nav>
</div>
<br>
</div>
</body>
</html>