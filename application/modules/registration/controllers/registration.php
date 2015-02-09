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
        $this->load->library(array('session'));
        $this->load->helper(array('form', 'html','url'));
    }
	
	public function index(){

        $content = $this->load->view('registration/index', '', TRUE);
        $this->load->view('main/template', array('aside'=>'',
                                                       'content'=>$content,
                                                       'included_js'=>array('statics/js/modules/login.js')));
		
	}
	

    /*
    * metodo para guardar un medico.
    * autor: jalomo <jalomo@hotmail.es>
    */
    public function saveUser(){

        redirect('plan');
    }
	
	
	
}