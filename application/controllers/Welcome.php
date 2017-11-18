<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Welcome extends CI_Controller {

	 function __construct() {
		parent::__construct();
		$this->load->model('Home_model');
		}
	public function index()
	{
		$this->bollywood();
	}
	public function home()
	{
		$this->load->view('components/header');
		$this->load->view('home');
		$this->load->view('components/footer');
	}
	public function hollywood()
	{	
		$this->load->view('components/header');
		$this->load->view('hollywood');
	}
	public function bollywood()
	{	
		$this->load->view('components/header');
		$this->load->view('bollywood');
	}
	public function bmovie($id = NULL)
	{	
		$data = array();
        
        $this->db->select( '*' );
        $this->db->from( 'bollywood' );
        $this->db->where( 'ID', $id );
        $this->db->limit( 1 );

        $query = $this->db->get();

        $data = $query->row_array();
		$this->load->view('components/header');
		$this->load->view('movie',$data);
	}

    public function hmovie( $id = NULL ) {
        
		$data = array();
        
        $this->db->select( '*' );
        $this->db->from( 'hollywood' );
        $this->db->where( 'ID', $id );
        $this->db->limit( 1 );

        $query = $this->db->get();

        $data = $query->row_array();
        $this->load->view('components/header');
		$this->load->view('movie', $data);
	}
}
?>