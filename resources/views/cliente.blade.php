<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
<link rel="icon" type="image/png" href="/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
  IDGS-81
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- CSS Files -->
<link href="/css/bootstrap.min.css" rel="stylesheet" />
<link href="/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
</head>

<body class="user-profile">
<div class="wrapper ">
  <div class="sidebar" data-color="yellow">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li>
          <a href="/">
            <i class="fas fa-th-large"></i>
            <p>Inicio</p>
          </a>
        </li>
        <li>
          <a href="./reporte.html">
            <i class="fas fa-file-alt"></i>
            <p>Reporte</p>
          </a>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <a href="./material.html">
            <i class="fas fa-book"></i>
            <p>Alta de Materiales</p>
          </a>
        </li>
        <li>
          <a href="user">
            <i class="fas fa-user"></i>
            <p>Alta de Empleados</p>
          </a>
        </li>
        <li>
          <a href="./producto.html">
            <i class="fas fa-boxes"></i>
            <p>Alta de Productos</p>
          </a>
        </li>
        <li>
          <a href="./pedido.html">
            <i class="fas fa-truck"></i>
            <p>Alta de Pedidos</p>
          </a>
        </li>
        <li class="active">
          <a href="./cliente.html">
            <i class="fas fa-users"></i>
            <p>Alta de Clientes</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel" id="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-toggle">
            <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <a class="navbar-brand" href="#pablo">IDGS-81</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Buscar...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="title">Alta de clientes</h5>
            </div>
                <div class="dropdown-divider"></div>            
                <div class="dropdown-divider"></div>
                <h6 style="text-align: center">Datos relevantes del cliente</h6>            
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <label>Nombre(s)</label>
                      <input type="text" name="Nombres" class="form-control" placeholder="Nombre(s)">
                    </div>
                  </div>
                  <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <label>Apellido paterno</label>
                      <input type="text" name="Apellido_paterno" class="form-control" placeholder="Apellido paterno">
                    </div>
                  </div>
                  <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <label>Apellido Materno</label>
                      <input type="text" name="Apellido_materno" class="form-control" placeholder="Apellido Materno">
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-3 pr-1">
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" name="Telefono" class="form-control" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="col-md-3 pr-1">
                        <div class="form-group">
                            <label>Fecha de nacimiento</label>
                            <input type="date" name="Fecha_de_nacimiento" class="form-control" placeholder="Fecha_de_nacimiento">
                        </div>
                    </div>
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label>Sexo</label> <br>
                            <div class="form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Masculino"> Masculino
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                              <div class="form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Femenino"> Femenino
                                  <span class="form-check-sign"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" name="correo" class="form-control" placeholder="Correo">
                        </div>
                    </div>
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>            
                <div class="dropdown-divider"></div>
                <h6 style="text-align: center">Datos de direccion</h6>
                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                            <label>Estado</label>
                            <select name="Estado" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                            <label>Municipio</label>
                            <select name="Municipio" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                            <label>Codigo postal</label>
                            <input type="text" name="codigo_postal" class="form-control" placeholder="Codigo postal">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                            <label>Colonia</label>
                            <input type="text" name="Colonia" class="form-control" placeholder="Colonia">
                        </div>    
                    </div>
                    <div class="col-md-5 pr-1">
                        <div class="form-group">
                            <label>Calle</label>
                            <input type="text" name="Calle" class="form-control" placeholder="Calle">
                        </div>
                    </div>
                    <div class="col-md-3 pr-1">
                        <div class="form-group">
                            <label>Numero de casa</label>
                            <input type="text" name="Numero_de_casa" class="form-control" placeholder="Numero de casa">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 pr-1">
                        <div class="form-group">
                            <label>Referencia</label>
                            <input type="text" name="Referencia" class="form-control" placeholder="Referencia">
                        </div>
                    </div>
                <button type="button" class="btn btn-success col-md-12  ">Dar de Alta</button>

                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>  
</div>


<!--   Core JS Files   -->
<script src="/js/core/jquery.min.js"></script>
<script src="/js/core/popper.min.js"></script>
<script src="/js/core/bootstrap.min.js"></script>
<script src="/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="/demo/demo.js"></script>
</body>

</html>