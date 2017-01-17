<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <?php include 'metadatos.php' ?>
    </head>
    <body>
        <div class="wrapper" id="cuerpototal">
            <header>
                <nav class="navbar navbar-default" role="navigation" id="barraprincipal">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><?= $params["sitename"] ?></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?= site_url("user/login") ?>">Iniciar Sesión</a></li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seguridad <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Usuarios</a></li>
                                        <li><a href="#">Roles y Permisos</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Puestos de Trabajo</a></li>
                                        <li><a href="#">Plantillas 1</a></li>
                                        <li><a href="#">Plantillas 2</a></li>
                                        <li><a href="#">Verbos</a></li>
                                        <li><a href="#">Mapas</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Importación <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Empleados</a></li>
                                        <li><a href="#">Puestos de Trabajo</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>
            <div class="cuerpopag" ng-app="empleadosapp">