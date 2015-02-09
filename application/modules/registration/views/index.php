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
.header-{
    height: 50px;
    margin-bottom: 2px;
}
.margen-registro{
   border-style: solid;
    border-color: #bceee8 ;
    background: #bceee8;


}
.color-gris{
    background: #ccc;
}
.margen-registro-no{
   border-style: solid;
    border-color: #ccc ;
    

}

html, body, .fondo-az {
    
    background: -webkit-linear-gradient(#65c6bb, #fff)!important; /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#65c6bb, #fff)!important; /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#65c6bb, #fff)!important; /* For Firefox 3.6 to 15 */
    background: linear-gradient(#65c6bb, #fff)!important; /* Standard syntax (must be last) */

    background-repeat: no-repeat;
}



.pad{
    padding: 10px;
}
.fondo-blanco{
    background: #fff !important;
}

</style>

<?php echo form_open('registration/saveUser', array('onsubmit'=>'')); ?>
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
                <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Nombre">
                 </div>
                 <div class="form-group col-lg-4">
                    <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Apellido paterno">
                 </div>
                 <div class="form-group col-lg-4">
                    <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Apellido materno">
                 </div>
            </div>

            <div class="row">
                <label>Fecha de nacimiento</label>
            </div>

            <div class="row">
                <div class="form-group col-lg-4">
                    <select class="form-control">
                        <option>Dìa</option>
                        <?php for($i=1;$i<=31;$i++):?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php endfor;?>
                    </select>
                 </div>
                 <div class="form-group col-lg-4">
                    <select class="form-control">
                        <option>Mes</option>
                        <?php for($i=1;$i<=12;$i++):?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php endfor;?>
                    </select>
                 </div>
                 <div class="form-group col-lg-4">
                    <select class="form-control">
                        <option>Año</option>
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
                       <select name="state" id="state" class="form-control">
                        <option>Estado</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select> 
                </div>

                <div class="form-group col-lg-4">
                        <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Municipio">
                </div>

                <div class="form-group col-lg-4">
                        <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Colonia">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Calle">
                </div>
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Codigo postal">
                </div>
            </div>

            <div class="row">
                <label>Especialidad</label>
            </div>

            <div class="row">
                <select class="form-control">
                        <option>Especialidad</option>
                        
                        <option value="1">Medico</option>
                        <option value="2">Dentista</option>
                   
                </select>
            </div>

            <div class="row">
                <label>Cadula</label>
            </div>

            <div class="row">
                    <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Cedula">
            </div>

            <div class="row">
                <label>Teléfono</label>
            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Fijo">
                </div>
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Mobil">
                </div>
            </div>

            <div class="row">
                <label>Email</label>
            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Email">
                </div>
                <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="ejemplo_email_1"
                           placeholder="Repetir Email">
                </div>
            </div>

            <div class="row">
                <label>Contraseña</label>
            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                        <input type="password" class="form-control" id="ejemplo_email_1"
                           placeholder="Contraseña">
                </div>
                <div class="form-group col-lg-6">
                        <input type="password" class="form-control" id="ejemplo_email_1"
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
                      <input type="checkbox"> Acepto los terminos y condiciones de uso y politica de privacidad de Rhinomedic
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


