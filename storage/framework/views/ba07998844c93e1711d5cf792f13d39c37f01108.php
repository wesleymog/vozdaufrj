<?php $__env->startSection('conteudo'); ?>

<div class='container contPos' >
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->

<legend class='h1'>Contato</legend>
<br>

<!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput"></label>
    <div class="col-md-6">
  <input id="textinput" name="textinput" type="text" placeholder="Nome" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-6">
  <input id="textinput" name="textinput" type="Email" placeholder="Email" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-6">
  <input id="textinput" name="textinput" type="Tel" placeholder="Telefone" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-6">
  <input id="textinput" name="textinput" type="text" placeholder="Assunto" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea"></label>
  <div class="col-md-4">                     
    <textarea rows="10" cols="80" class="form-control" id="textarea" name="textarea">Mensagem</textarea>
  </div>
</div>

<br>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">ENVIAR MENSAGEM</button>
  </div>
</div>

</fieldset>
</form>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Templates/layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>