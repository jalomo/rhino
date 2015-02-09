<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**

 **/
class plan extends MX_Controller {

    /**
     
     **/
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mplan', '', TRUE);
        $this->load->library(array('session'));
        $this->load->helper(array('form', 'html','url'));
    }
	
	public function index(){

        $content = $this->load->view('plan/index', '', TRUE);
        $this->load->view('main/template', array('aside'=>'',
                                                       'content'=>$content,
                                                       'included_js'=>array('statics/js/modules/login.js')));
		
	}

    /*
    * metodo para guardar el plan silver.
    * autor: jalomo <jalomo@hotmail.es>
    */
    public function silver(){

        redirect('cart');
    }

    /*
    * metodo para guardar el plan gold
    * autor: jalomo <jalomo@hotmail.es>
    */
    public function gold(){
        redirect('cart');
    }

    /*
    * metodo para guardar unplan platinum
    */
	public function platinum(){
        redirect('cart');
    }
	
	
	
}