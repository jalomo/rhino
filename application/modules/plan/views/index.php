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

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1>Elige el plan que mas te convenga</h1>
	</div>
	<div class="col-md-4"></div>
</div>

<div class="row pad fill">

<?php echo form_open('plan/silver', array('onsubmit'=>'')); ?>
 <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="text-center">
                        SILVER PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$49USD / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>citas ilimitadas</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>50 Registros </li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                   
                </ul>
                <div class="panel-footer">
                    
                    <button type="submit" class="btn btn-lg btn-block btn-primary">BUY NOW!</button>    
                </div>
            </div>
</div>
 <?php echo form_close(); ?>

<?php echo form_open('plan/gold', array('onsubmit'=>'')); ?>
 <div class="col-md-4">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="text-center">
                        GOLD PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$59USD / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                   <li class="list-group-item"><i class="icon-ok text-danger"></i>citas ilimitadas</li>
                   <li class="list-group-item"><i class="icon-ok text-danger"></i>100 Registros </li>
                   <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                    
                     <button type="submit" class="btn btn-lg btn-block btn-warning">BUY NOW!</button>      
                </div>
            </div>
</div>
 <?php echo form_close(); ?>

<?php echo form_open('plan/platinum', array('onsubmit'=>'')); ?>
<div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">
                        PLATINUM PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$67USD / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                   <li class="list-group-item"><i class="icon-ok text-danger"></i>citas ilimitadas</li>
                   <li class="list-group-item"><i class="icon-ok text-danger"></i> Registros ilimitados</li>
                   <li class="list-group-item"><i class="icon-ok text-danger"></i>publicidad en www.doctores.com</li>
                   <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                   
                     <button type="submit" class="btn btn-lg btn-block btn-default">BUY NOW!</button>      
                </div>
            </div>
</div>
 <?php echo form_close(); ?>

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




