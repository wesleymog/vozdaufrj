<!DOCTYPE html>

<html>
<head>
	<title>Voz Da UFRJ</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel= "stylesheet" type="text/css" href="{{asset('css/dropdown.css')}}">
</head>
<header>
    <div class="cabecalho ">

        <img class="col-xs-1 col-md-1 col-lg-1 img-responsive ufrjlog" src="https://ufrj.br/img/minerva/003minerva_transparente_vertical.png" width="50px">
        <h1 class="col-xs-4 col-xs-offset-3 col-md-4 col-md-offset-3 col-lg-4 col-lg-offset-3">Voz Da UFRJ</h1>
        <form class="input-group col-xs-4 col-md-4 col-lg-4">
            Login<input type="text" name="login" class="form-control" width="50px">
            <p>Senha<input type="text" name="senha" class="form-control">
                <button>Logar</button></p>
        </form>
    </div>
</header>
<body>

		
        <nav class="dropdownNav marginBottom-0" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a class="navbar-brand" href="./">Home</a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Sobre Nós</a></li>
                    <li><a href="./contato">Contato</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Campos<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">CCMN</a></li>
                            <li><a href="#">CCS</a></li>
                            <li><a href="#">CT</a></li>
                            <li><a href="#">EEFD</a></li>
                            <li><a href="#">LETRAS</a></li>

                            <li class="divider"></li>
        
                        </ul>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        
    <div class="container">
    @yield('conteudo')
    </div>
     
</body>
</html>
<script src="js/app.js"></script>
<script src="js/dropdown.js"></script>