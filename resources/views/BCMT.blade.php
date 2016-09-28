@extends ('.templates/layout')

@section ('conteudo')
    <div class="container">
         <div class="col-xs-8">
            <h2>BCMT</h2>
            <h4>Informações Gerais</h4>
             <p>Este bacharel é um profissional generalista, com forte formação em matemática, física e ciências da natureza. </p>
             <p>Ele tem possibilidade de atuar tanto no mercado financeiro quanto em outros mercados em atividades nas quais análises matemáticas são importantes. </p>
             <p>É o caso dos serviços de metrologia, serviços estatísticos, instituições financeiras e seguradoras, por exemplo. O bacharel pode trabalhar também como autônomo, prestando consultoria para empresas.</p>
             <p><small>Fonte:  Guia do Estudante</small></p>
             <h4>Como estudante...</h4>
             <p>Acredito que com este curso pessoas indecisas dentro das ciências, podem ter uma experiência perfeita para descobrimento de novas situações</p>
             <p>Por ser uma grade bem flexível, tal curso oferece maior liberdade para quem o cursa</p>
             <p>Oferece-se também habilitações, que são uma espécie de especialização nas áreas citadas acima, além das possiblidades de tranferências oara diversos cursos do CCMN</p>

             <p>Deixe seu comentário: </p>
            <div class="centro">
             <div class="fb-comments" data-href="http://localhost/vozdaufrj/public/BCMT" data-width="600" data-numposts="5"></div>
             <div id="fb-root"></div>
            </div>

             <script>(function(d, s, id) {
                     var js, fjs = d.getElementsByTagName(s)[0];
                     if (d.getElementById(id)) return;
                     js = d.createElement(s); js.id = id;
                     js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7";
                     fjs.parentNode.insertBefore(js, fjs);
                 }(document, 'script', 'facebook-jssdk'));</script>j

         </div>
        <div class="col-xs-2 col-xs-offset-2 anuncios">

        </div>
    </div>
    @endsection