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

	

	<div class="col-xs-12">

		<div class="panel panel-default">
		  <div class="panel-body">
		    <!-- INICIO DEL PANEL  -------------------->

		    
			    <div class='row'>
			        <div class='col-md-4'></div>
			        <div class='col-md-4'>
			          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
			          <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
			            <div class='form-row'>
			              <div class='col-xs-12 form-group required'>
			                <label class='control-label'>Name on Card</label>
			                <input class='form-control' size='4' type='text'>
			              </div>
			            </div>
			            <div class='form-row'>
			              <div class='col-xs-12 form-group card required'>
			                <label class='control-label'>Card Number</label>
			                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
			              </div>
			            </div>
			            <div class='form-row'>
			              <div class='col-xs-4 form-group cvc required'>
			                <label class='control-label'>CVC</label>
			                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
			              </div>
			              <div class='col-xs-4 form-group expiration required'>
			                <label class='control-label'>Expiration</label>
			                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
			              </div>
			              <div class='col-xs-4 form-group expiration required'>
			                <label class='control-label'> </label>
			                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
			              </div>
			            </div>
			            <div class='form-row'>
			              <div class='col-md-12'>
			                <div class='form-control total btn btn-info'>
			                  Total:
			                  <span class='amount'>$300</span>
			                </div>
			              </div>
			            </div>
			            <div class='form-row'>
			              <div class='col-md-12 form-group'>
			                <button class='form-control btn btn-primary submit-button' type='submit'>Pay »</button>
			              </div>
			            </div>
			            <div class='form-row'>
			              <div class='col-md-12 error form-group hide'>
			                <div class='alert-danger alert'>
			                  Please correct the errors and try again.
			                </div>
			              </div>
			            </div>
			          </form>
			        </div>
			        <div class='col-md-4'></div>
			    </div>
			


		    <!-- FIN DEL PANEL ------------------------>
		  </div>
		</div>

	</div>

	

</div>

