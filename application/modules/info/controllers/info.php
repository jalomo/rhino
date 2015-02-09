<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**

 **/
class info extends MX_Controller {

    /**
     
     **/
    public function __construct()
    {
        parent::__construct();
        $this->load->model('minfo', '', TRUE);
        $this->load->library(array('session'));
        $this->load->helper(array('form', 'html','url'));
    }
	
	public function index(){

        $content = $this->load->view('minfo/index', '', TRUE);
        $this->load->view('main/template', array('aside'=>'',
                                                       'content'=>$content,
                                                       'included_js'=>array('statics/js/modules/login.js')));
		
	}

	
	
}