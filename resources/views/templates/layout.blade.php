<!DOCTYPE html>

<html>
    <head>
        <title>Voz da UFRJ</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


    </head>

    <body>
    <!-- Modal Cadastro -->
        <div id="modalCad" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Cadastro</h4>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body edit-content container-fluid">

                            <div class="form-group">
                                <label for="nome">Nome: </label>
                                <input type="text" class="form-control" name="nome" id="nome">
                            </div>

                            <div class="form-group">
                                <label for="DRE">DRE: </label>
                                <input type="text" class="form-control" name="DRE" id="DRE" maxlength="9" minlength="9">
                            </div>


                            <div class="form-group">
                                <label for="predio">Prédio: </label>
                                <input type="text" class="form-control" name="predio" id="predio">
                            </div>


                            <div class="form-group">
                                <label for="Curso">Curso: </label>
                                <input type="text" class="form-control" name="curso" id="curso">
                            </div>


                            <div class="form-group">
                                <label for="Login">Login: </label>
                                <input type="text" class="form-control" name="login" id="nome_input">
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha: </label>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary text-right">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--fim do modal-->

        <header>
            <div class="cabecalho container">

                <img class="col-xs-1 col-md-1 col-lg-1 img-responsive ufrjlog" src="{{asset('./imagens/003minerva_transparente_vertical.png')}}" width="50px">
                <h1 class="col-xs-4 col-xs-offset-3 col-md-4 col-md-offset-3 col-lg-4 col-lg-offset-3">Voz da UFRJ</h1>
                <div class="col-xs-4 col-md-4 col-lg-4">
                    <form class="input-group">
                        Login <input type="text" name="login" class="form-group">
                        <p>Senha<input type="text" name="senha" class="form-group">
                            <button class="">Logar</button></p>
                    </form>
                </div>
            </div>


            <nav class="dropdownNav marginBottom-0" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}">HOME</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li><a href="{{route('contato')}}">CONTATO</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PRÉDIO<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('CCMN')}}">CCMN</a></li>
                                <li><a href="#">CCS</a></li>
                                <li><a href="#">CT</a></li>
                                <li><a href="#">EEFD</a></li>
                                <li><a href="#">LETRAS</a></li>

                                <li class="divider"></li>

                            </ul>
                        <li><a for="logar"><button class="logar" type="button" data-href="#myModal" data-toggle="modal" data-target="#modalCad">CADASTRO</button></a></li>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </header>


        <div class="container contColor">
        @yield('conteudo')
        </div>

        <div class="container-fluid rodape">
            <footer>

                <div class="col-xs-3 elementos_footer">
                    <ul class="list-unstyled">
                        <li><p class="titulo_footer">Links úteis</p></li>
                        <li><a href="#">Site UFRJ</a></li>
                        <li><a href="#">Grade Cursos</a></li>
                        <li><a href="#">Bolsas</a></li>
                    </ul> </div>
                <div class="col-xs-6 elementos_footer"><p class="titulo_footer">Sobre Nós</p>
                        <p>O Voz da UFRJ foi criado por três alunos que perceberam a necessidade de ampliar o conhecimento das pessoas sobre seu
                        curso de interesse.</p>
                        <p>Para isso, disponibilizamos o acesso as avaliações e comentários feitos por pessoas que estão
                        cursando a graduação.</p></div>
                <div class="col-xs-3 elementos_footer">
                    <p class="titulo_footer">Redes Sociais</p>
                    <img src="{{asset('./imagens/facebook.png')}}" class="icones">
                    <img src="{{asset('./imagens/instagram.png')}}" class="icones">
                    <img src="{{asset('./imagens/twitter.png')}}" class="icones">
                </div>


            </footer>
        </div>

    </body>
    <script src='{{asset("js/app.js")}}'></script>
    <script src='{{asset("js/dropdown.js")}}'></script>
</html>


