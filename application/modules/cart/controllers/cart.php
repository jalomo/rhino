<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**

 **/
class cart extends MX_Controller {

    /**
     
     **/
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mcart', '', TRUE);
        $this->load->library(array('session'));
        $this->load->helper(array('form', 'html','url'));
    }
	
	public function index(){

        $content = $this->load->view('cart/index', '', TRUE);
        $this->load->view('main/template', array('aside'=>'',
                                                       'content'=>$content,
                                                       'included_js'=>array('statics/js/modules/login.js')));
		
	}

	
	
}