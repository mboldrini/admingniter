<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper('form', 'Funcoes_helper');
		#pegar as infos dos Usuarios
		$this->load->model('Usuario');

		$this->load->model('Funcoes');
	}
	
	public function index(){
		
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		# pega o nome do Usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->Usuario->pegaUsuario($nome);

		$dados = array(
			'pasta'			=> 'perfil',
			'tela' 			=> 'perfil',
			'titulo' 		=> 'Perfil',
			'descricao' 	=> ' - Informações do Usuário',
			'infos' 		=> $pegaInfos,
		);

		$this->load->view('tela',$dados);

	}

}