<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="es">
<head>
  <?php $this->load->view('overall/header'); ?>
</head>

<body class="components-page">
  <?php $this->load->view('overall/nav2'); ?>
  <div class="main main-raised">
    <div class="section">
      <div class="container">
        <div class="row" id="form">
          <div class="col-md-8 col-md-offset-2">
            <h2 align="center">Agregar País</h2>
            <?=  form_open_multipart('conceptos/agregar/', 'class="form-horizontal"');  ?>
            <fieldset>
              <div class="form-group">
                <label for="" class="col-md-2 control-label">Nombre</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="NOMBRE" id="NOMBRE" value="">
                </div>
              </div>    
              <div class="form-group">
              <label for="" class="col-md-2 control-label">Bandera</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="BANDERA" id="BANDERA" value="">
                </div>
              </div>  
              <div class="form-group" align="center">
                <div class="col-md-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-success">Guardar</button>
                </div>
              </div>
            </fieldset>
            <?=   form_close(); ?>
          </div>

        </div>
      </div>

      <?php $this->load->view('overall/footer'); ?>
      </html>
