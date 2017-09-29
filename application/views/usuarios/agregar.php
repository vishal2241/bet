<?php $this->load->view('overall/header'); ?>
<body>
  <?php $this->load->view('overall/nav2'); ?>
  <div class="container">
    <h2 align="center"> 
      Nuevo Usuario
    </h2>
    <h5 align="center">
      La cedula es la clave por defecto.
    </h5>
    <br>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php if (validation_errors()): ?>
          <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong>  <?=   validation_errors(); ?>
          </div>
        <?php endif ?>
        
        <?=  form_open('usuarios/agregar',  array('id'=>"formUsuario", 'class'=>"form-horizontal" ) );  ?>
        <fieldset>
          <?php if ($this->session->userdata('type')==1): ?>
            <div class="form-group">
              <label for="" class="col-md-3 control-label bold">Tipo Usuario</label>
              <div class="col-md-9">
                <select  class="form-control" name="ID_TIPO" id="ID_TIPO" required>
                  <option value="1">Administrador</option>
                  <option value="2">Estación </option>
                  <option value="3">Casa de Apuestas</option>
                  <option value="4">Usuario</option>
                </select>
              </div>
            </div>
          <?php endif ?>
          <div class="form-group" id="inputCedula">
            <label for="" class="col-md-3 control-label bold">Cedula</label>
            <div class="col-md-9">
              <input type="number" class="form-control " name="CEDULA" id="CEDULA" required >
              <small id="ErrorCedula" class="form-text text-danger hidden">
                <i class="fa fa-times" aria-hidden="true"></i>
                El número de identificación ingresado ya fue registrado en el sistema.
              </small>
            </div>
          </div> 
          <div class="form-group">
            <label for="" class="col-md-3 control-label bold">Primer Nombre</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="P_NOMBRE" id="P_NOMBRE" required>
            </div>
          </div> 
          <div class="form-group">
            <label for="" class="col-md-3 control-label bold">Segundo Nombre</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="S_NOMBRE" id="S_NOMBRE"  >
            </div>
          </div> 
          <div class="form-group">
            <label for="" class="col-md-3 control-label bold">Primer Apellido</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="P_APELLIDO" id="P_APELLIDO"  required >
            </div>
          </div> 
          <div class="form-group">
            <label for="" class="col-md-3 control-label bold">Segundo Apellido</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="S_APELLIDO" id="S_APELLIDO" >
            </div>
          </div> 
          <div class="form-group">
            <label for="" class="col-md-3 control-label bold">Correo Electrónico</label>
            <div class="col-md-9">
              <input type="mail" class="form-control" name="EMAIL" id="EMAIL" required >
            </div>
          </div> 
          <div class="form-group">
            <label for="" class="col-md-3 control-label bold">Nick Usuario</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="USUARIO" id="USUARIO" required >
            </div>
          </div> 
         <!-- <div class="form-group">
            <label for="" class="col-md-3 control-label bold">Contraseña</label>
            <div class="col-md-9">
              <input type="password" class="form-control" name="CLAVE" id="CLAVE" required >
            </div>
          </div> -->
          <div class="form-group">
            <label for="" class="col-md-3 control-label bold">Dirección</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="DIRECCION" id="DIRECCION" >
            </div>
          </div> 
          <div class="form-group">
            <label for="" class="col-md-3 control-label bold">Celular</label>
            <div class="col-md-9">
              <input type="number" class="form-control" name="TELEFONO" id="TELEFONO"  >
            </div>
          </div>   
          <div class="form-group" align="center">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-default">Regresar</button>
              <button type="submit" class="btn btn-success" id="btnGuardar">Guardar</button>
            </div>
          </div>
        </fieldset>
        <?=   form_close(); ?>
      </div>
      <div class="col-md-2"></div>
    </div>  
  </div>
</body>
<?php $this->load->view('overall/footer'); ?>
<script>
 $( document ).ready(function() {

  $("#CEDULA").on("keyup", function() {
    var url= '<?= base_url(); ?>';
    var valor = $(this).val();
    $.ajax({
      dataType: 'text',
      url: url+'ajax/json_getUsuario',
      type: 'post',
      data: {valor: valor},
      success: function(data){
        if (data==1) {
          console.log(data)
          $( "#inputCedula" ).addClass( "has-error" );
          $( "#ErrorCedula" ).removeClass( "hidden" );
          $( "#btnGuardar" ).addClass( "hidden" );
        } else {
         $( "#inputCedula" ).removeClass( "has-error" );
         $( "#ErrorCedula" ).addClass( "hidden" );
         $( "#btnGuardar" ).removeClass( "hidden" );
       }


     },
     error: function(e){
      console.log(e);
    }
  });

  });


});
</script>
</html>   