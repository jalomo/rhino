<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**

 **/
class Medic extends MX_Controller {

    /**
     
     **/
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mmedic', '', TRUE);
        $this->load->library(array('session'));
        $this->load->helper(array('form', 'html','url'));
    }
	
	public function index(){

        $content = $this->load->view('medic/index', '', TRUE);
        $this->load->view('main/template', array('aside'=>'',
                                                       'content'=>$content,
                                                       'included_js'=>array('statics/js/modules/login.js')));
		
	}
	
	
	
	/*
	*metodo para checar el login y la contraseña
	*/
	public function checkDataLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if(isset($username) && isset($password) && !empty($password) && !empty($username))
        {
            $pass = encrypt_password($username,
                                     $this->config->item('encryption_key'),
                                     $password);
            $total = $this->mmedic->count_results_users($username, $pass);
            if($total == 1)
            {
                echo "1";
            }
            else{
                echo "0";
            }
        }
        else{
            redirect('companies');
        }
    }
	
	/*
	*metodo para inicio de session
	*/
	public function mainView()
    {
        $post = $this->input->post('Login');
        if(isset($post) && !empty($post))
        {
            $pass = encrypt_password($post['adminUsername'],
                                     $this->config->item('encryption_key'),
                                     $post['adminPassword']);
            $dataUser = $this->mmedic->get_all_data_users_specific($post['adminUsername'], $pass);

            $array_session = array('id'=>$dataUser->adminId);
            $this->session->set_userdata($array_session);

            if($this->session->userdata('id'))
            {
				redirect('companies/historial_secciones');
                /*$aside = $this->load->view('companies/left_menu', '', TRUE);
                $content = $this->load->view('companies/main_view', '', TRUE);
                $this->load->view('main/template', array('aside'=>$aside,
                                                         'content'=>'',
														 'included_js'=>array('statics/js/modules/menu.js')));*/
            }
            else{
            }
        }
        else{
        }
    }
	
	
	
}
