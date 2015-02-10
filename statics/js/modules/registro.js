$(document).ready(function(){

$("#register").submit(function(){
        var band = 0;

        if($("#medicoNombre").val() == ''){
            $("#medicoNombre").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoNombre").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoAPaterno").val() == ''){
            $("#medicoAPaterno").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoAPaterno").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoAMaterno").val() == ''){
            $("#medicoAMaterno").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoAMaterno").css('border', '0px solid #ADA9A5');
        }

        if($("#dia").val() == '0'){
            $("#dia").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#dia").css('border', '0px solid #ADA9A5');
        }


        if($("#mes").val() == '0'){
            $("#mes").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#mes").css('border', '0px solid #ADA9A5');
        }

        if($("#anio").val() == '0'){
            $("#anio").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#anio").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoEstado").val() == '0'){
            $("#medicoEstado").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoEstado").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoMunicipio").val() == ''){
            $("#medicoMunicipio").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoMunicipio").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoColonia").val() == ''){
            $("#medicoColonia").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoColonia").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoCalle").val() == ''){
            $("#medicoCalle").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoCalle").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoCP").val() == ''){
            $("#medicoCP").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoCP").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoEspecialidad").val() == '0'){
            $("#medicoEspecialidad").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoEspecialidad").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoCedula").val() == ''){
            $("#medicoCedula").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoCedula").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoTelFijo").val() == ''){
            $("#medicoTelFijo").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoTelFijo").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoTelMobil").val() == ''){
            $("#medicoTelMobil").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoTelMobil").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoEmail").val() == ''){
            $("#medicoEmail").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoEmail").css('border', '0px solid #ADA9A5');
        }

        if($("#medicoPassword").val() == ''){
            $("#medicoPassword").css('border', '1px solid #FF0000');
            band++;
        }
        else{
            $("#medicoPassword").css('border', '0px solid #ADA9A5');
        }

        if(band != 0)
        {
            $("#errorMessage").text("Por favor, verifique los campos marcados.").show();
            return false;
        }
        else{
            
            return true;
        }
    });
    
});    
    