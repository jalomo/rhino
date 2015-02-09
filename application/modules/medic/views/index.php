<?php
/**
 * View login for show to the user the
 * login admin and can login to admin panel
 **/
?>
<style type="text/css">

.color_blanco{
    color:#ffffff;
}
.color_az{
    background: #65c6bb !important;
}

.login{

    width: 300px;
    margin-top: 20%;
    margin-left: 40%;
}
.in-login{
    margin: 20px;
}
.bt-login{
    width: 90%;
    background: #65c6bb !important;
    color:#ffffff;
}
</style>

<div class="container">

<div class="fill">

<div class="panel panel-default login">
  <div class="panel-heading color_az" align="center">
    <h3 class="panel-title color_blanco">Bienvenido</h3>
  </div>
  <div class="panel-body">
    
    <div></div>
    <!--inicio -->
        <div class="row">
          <div class="input-group in-login">
              <span class="input-group-addon color_az">
                <img src="<?php echo base_url()?>statics/img/login_usuario"  height="20" >
              </span>
              <input type="text" class="form-control" placeholder="Usuario...">
          </div>
        </div>
        
        <div class="row">
          <div class="input-group in-login">
              <span class="input-group-addon color_az">
                <img src="<?php echo base_url()?>statics/img/login_contrasena"  height="20" >
              </span>
              <input type="text" class="form-control" placeholder="Contraseña">
          </div>
        </div>
        
        <div class="row" align="center">
          <label>¿Olvido su contraseña?</label>
        </div>
        <br/>
        <div class="row" align="center">
            <button type="button" class="btn btn-default bt-login">Entrar</button>
        </div>
        <br/>
        <div class="row" align="center">
            <?php echo anchor('registration/', 'registrar', array('id'=>'')); ?>
        </div>
    <!--fin -->

  </div>
</div>



</div>

</div>









