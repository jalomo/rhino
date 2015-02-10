<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**

 **/
class registration extends MX_Controller {

    /**
     
     **/
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mregistration', '', TRUE);
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('form', 'html','url'));
    }
	
	public function index(){

        $content = $this->load->view('registration/index', '', TRUE);
        $this->load->view('main/template', array('aside'=>'',
                                                       'content'=>$content,
                                                       'included_js'=>array('statics/js/libreries/form.js','statics/js/modules/registro.js')));
		
	}
	

    /*
    * metodo para guardar un medico.
    * autor: jalomo <jalomo@hotmail.es>
    */
    public function saveUser(){
        if($this->input->post('save')){
            $fecha=$this->input->post('fecha');
            $post=$this->input->post('save');
            $post['medicoFechaNacimiento']=$fecha['dia'].'-'.$fecha['mes'].'-'.$fecha['anio'];
            $pass = $this->mregistration->encrypt_password($post['medicoEmail'],
                                     $this->config->item('encryption_key'),
                                     $post['medicoPassword']);
            $post['medicoPassword']=$pass;
            $post['medicoFechaCreacion']=date('d-m-Y');
            $id=$this->mregistration->save_register('medicos', $post);
            $this->mregistration->encrypt($id,"rhino");
            redirect('plan');

             
        }


        
    }


    public function tets(){
        $codigo=$this->mregistration->encrypt("jalomo@hotmail.es","rhino");
        echo $codigo;
        echo "<br/>";
        $des=$this->mregistration->decrypt($codigo,"rhino");
        echo $des;
    }



	
	
	
}