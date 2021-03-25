<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Barra de navegación</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
		</span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="../Home/bienvenida">SEEPEB</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Inicia sesión 
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="inicioE">Empleado</a></li>
						<li><hr class="dropdown-divider"></li><a class="dropdown-item" href="#">Administrador</a></li>
					</ul>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registrarse
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="formularioR">Empleado</a></li>
						<li><hr class="dropdown-divider"></li><a class="dropdown-item" href="formulariodos">Administrador</a></li>

					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Estímulos económicos
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Día de las madres</a></li>
						<li><hr class="dropdown-divider"></li><a class="dropdown-item" href="#">Día del niño</a></li>
					</ul>
				</li>


                <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ver Registros
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href= "../Home/mostrarRegistros" >Registros Administrador</a></li>
						<li><hr class="dropdown-divider"></li><a class="dropdown-item" href="../Home/mostrarRegistrosE">Registros Empleados</a></li>
					</ul>
				</li>
                <li class="nav-item">
                	<a class="nav-lin disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
               	<form method="POST" action="../Home/buscarRegistro" class="d-flex">
				<label> ID del usuario: </label>
				<input class="form-control me-2" type="Search" placeholder="Search" aria-label="Search" id="Id_usuario" name="Id_usuario">
				<button class="btn btn-outline-success" type="Submit" > Buscar </button>
			
               </form>
            </div>
        </div>
        
</nav>