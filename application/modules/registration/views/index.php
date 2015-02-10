<?php echo link_tag('statics/css/registration.css'); ?>

<script type="text/javascript">

</script>

<?php echo form_open('registration/saveUser', array('id'=>'register')); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>



<div class="row fondo-blanco">
    <div class="form-group col-lg-4">
          <img src="<?php echo base_url()?>statics/img/logo.png"  height="100" >      
    </div>
    <div class="form-group col-lg-6">
               
    </div>
    <div class="form-group col-lg-2" aling="right">
       <img src="<?php echo base_url()?>statics/img/paper.png"  height="100" >         
    </div>
</div>

<div class="row pad fondo-az">

    <div class="col-xs-3"></div>

    <div class="col-xs-6">
        <div class="panel panel-default pad">
          <div class="panel-heading">
            <h3 class="panel-title">Registro</h3>
          </div>
          <div class="panel-body">
            
            <div class="row">
                <label>Nombre</label>
            </div>

            <div class="row">
                <div class="form-group col-lg-4">

                <input type="text" class="form-control" id="medicoNombre" name="save[medicoNombre]"
                           placeholder="Nombre" >
                 </div>
                 <div class="form-group col-lg-4">
                    <input type="text" class="form-control" id="medicoAPaterno" name="save[medicoAPaterno]"
                           placeholder="Apellido paterno">
                 </div>
                 <div class="form-group col-lg-4">
                    <input type="text" class="form-control" id="medicoAMaterno" name="save[medicoAMaterno]"
                           placeholder="Apellido materno">
                 </div>
            </div>

            

            <div class="row">
                <div class="form-group col-lg-6">
                    <label>
                      <input type="radio" name="save[medicoSexo]" value="1" id=""> Hombre
                    </label>
                
                 </div>
                 <div class="form-group col-lg-6">
                    <label>
                      <input type="radio" name="save[medicoSexo]" value="2" id=""> Mujer
                    </label>
                 </div>
                 
            </div>

            <div class="row">
                <label>Fecha de nacimiento</label>
            </div>

            <div class="row">
                <div class="form-group col-lg-4">
                    <select class="form-control" id="dia" name="fecha[dia]">
                        <option value="0">Dìa</option>
                        <?php for($i=1;$i<=31;$i++):?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php endfor;?>
                    </select>
                 </div>
                 <div class="form-group col-lg-4">
                    <select class="form-control" id="mes" name="fecha[mes]">
                        <option value="0">Mes</option>
                        <?php for($i=1;$i<=12;$i++):?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php endfor;?>
                    </select>
                 </div>
                 <div class="form-group col-lg-4">
                    <select class="form-control" id="anio" name="fecha[anio]">
                        <option value="0">Año</option>
                        <?php for($i=1950;$i<=1994;$i++):?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php endfor;?>
                    </select>
                 </div>
            </div>

            <div class="row">
                <label>Ubicación</label>
            </div>

            <div class="row">
                <div class="form-group col-lg-4">
                       <select name="save[medicoEstado]" id="medicoEstado" class="form-control">
                        <option value="0">Estado</option>
                        <option value="1">Aguascalientes</option>
                        <option value="2">Baja California</option>
                        <option value="3">Baja California Sur</option>
                        <option value="4">Campeche</option>
                        <option value="5">Chiapas</option>
                        <option value="6">Chihuahua</option>
                        <option value="7">Coahuila</option>
                        <option value="8">Colima</option>
                        <option value="9">Distrito Federal</option>
                        <option value="10">Durango</option>
                        <option value="11">Estado de México</option>
                        <option value="12">Guanajuato</option>
                        <option value="13">Guerrero</option>
                        <option value="14">Hidalgo</option>
                        <option value="15">Jalisco</option>
                        <option value="16">Michoacán</option>
                        <option value="17">Morelos</option>
                        <option value="18">Nayarit</option>
                        <option value="19">Nuevo León</option>
                        <option value="20">Oaxaca</option>
                        <option value="21">Puebla</option>
                        <option value="22">Querétaro</option>
                        <option value="23">Quintana Roo</option>
                        <option value="24">San Luis Potosí</option>
                        <option value="25">Sinaloa</option>
                        <option value="26">Sonora</option>
                        <option value="27">Tabasco</option>
                        <option value="28">Tamaulipas</option>
                        <option value="29">Tlaxcala</option>
                        <option value="30">Veracruz</option>
                        <option value="31">Yucatán</option>
                        <option value="32">Zacatecas</option>
                    </select> 
                </div>

                <div class="form-group col-lg-4">

                        <input type="text" class="form-control" id="medicoMunicipio" name="save[medicoMunicipio]"
                           placeholder="Municipio">
                </div>

                <div class="form-group col-lg-4">
                        <input type="text" class="form-control" id="medicoColonia" name="save[medicoColonia]"
                           placeholder="Colonia">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="medicoCalle" name="save[medicoCalle]"
                           placeholder="Calle">
                </div>
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="medicoCP" name="save[medicoCP]"
                           placeholder="Codigo postal">
                </div>
            </div>

            <div class="row">
                <label>Especialidad</label>
            </div>

            <div class="row">
                <select class="form-control" id="medicoEspecialidad" name="save[medicoEspecialidad]">
                        <option value="0">Especialidad</option>
                        
                        <option value="1">Medico</option>
                        <option value="2">Dentista</option>
                   
                </select>
            </div>

            <div class="row">
                <label>Cadula</label>
            </div>

            <div class="row">
                    <input type="text" class="form-control" id="medicoCedula" name="save[medicoCedula]"
                           placeholder="Cedula">
            </div>

            <div class="row">
                <label>Teléfono</label>
            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="medicoTelFijo" name="save[medicoTelFijo]"
                           placeholder="Fijo">
                </div>
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="medicoTelMobil" name="save[medicoTelMobil]"
                           placeholder="Mobil">
                </div>
            </div>

            <div class="row">
                <label>Email</label>
            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="medicoEmail" name="save[medicoEmail]"
                           placeholder="Email">
                </div>
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="emailMedico"
                           placeholder="Repetir Email">
                </div>
            </div>

            <div class="row">
                <label>Contraseña</label>
            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                        <input type="password" class="form-control" id="medicoPassword" name="save[medicoPassword]"
                           placeholder="Contraseña">
                </div>
                <div class="form-group col-lg-6">
                        <input type="password" class="form-control" id="passwordMedico"
                           placeholder="Repetir Contraseña">
                </div>
            </div>
            

            <div class="row" >
                
                <div class="form-group col-lg-4">
                        <label>Prueba que no eres un robot</label>
                </div>

                <div class="form-group col-lg-8">
                       <div class="g-recaptcha" data-sitekey="6Ld2uQETAAAAAM36YFLHhQ4xF435aPr2WE2k3krf"></div>
                </div>

            </div>

            <div class="row">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" id="politicasTerminos"> Acepto los terminos y condiciones de uso y politica de privacidad de Rhinomedic
                    </label>
                  </div>
            </div>

            <div class="row">
                <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-primary">Siguiente paso</button>
                </div>
                
            </div>


          </div>
        </div>


    </div>

    <div class="col-xs-3"></div>
    
</div>


<div class="row pad">

    <div class="col-xs-4">
        <address>
          <strong>Rhinomedic</strong><br>
          Avenida Principal 123<br>
          Ciudad, Provincia 00000<br>
          
        </address>
         
        
    </div>
    <div class="col-xs-4">
        <address>
          <strong>Contacto</strong><br>
          <a href="mailto:#">contacto@rhinomedic.com</a>
          <abbr title="Phone">Tel:</abbr> 9XX 123 456
        </address>
    </div>
    <div class="col-xs-4"></div>

</div>

 <?php echo form_close(); ?>


