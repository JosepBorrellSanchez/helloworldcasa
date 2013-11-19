<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuaris extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('users');
    }
// fer un vector i recorrel en lo for each, ha de portar 
// l'objecte persona 
	public function listusers()
	{	
			
		$users ['query'] = $this->users->getUser();
		$this->load->view('list', $users);
	}

	public function crear()
	{
		
		$this->load->view('crearusuaris'); 
		
                $fullname = $this->input->post('fullname');
                if($fullname != null)
                $this->users->insertUser($fullname);
                else
		
                return "Usuari Insertat";
}
	public function modificar()
	{
		
		$this->load->view('modificar'); 
}
	public function eliminar()
	{
		$actor_id = $this->db->get('actor');
		$this->users->deleteUser($actor_id);
		$this->load->view('eliminar'); 
}
	public function modificarusuari()
	{
		
		
		$this->load->view('modificarusuari'); 
}
	public function eliminarusuari()
	{
		
		$this->load->view('eliminarusuari'); 
}

	public function grocery()
	{
		$this->load->view('example');
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
