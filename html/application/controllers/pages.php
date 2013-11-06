<?php
include_once('/home/tex/Documentos/acces_to_kitmaker/Blog/kitmaker/html/FuncionError.php');//Funcion para mostrar el error
class Pages extends CI_Controller{
	public function view($page='home'){
		if (! file_exists('application/views/pages/'.$page.'.php')){
			//Juas no está echa la pagina!!!
			show_404();
		}
		
		$data['title']=ucfirst($page);//Capitaliza la primera letra
		
		$this-> load->view('templates/header', $data);
		$this-> load->view('pages/'.$page, $data);
		$this-> load->view('templates/footer', $data);
	}
}