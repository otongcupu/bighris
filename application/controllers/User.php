<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['userid' => $this->session->userdata('nik')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function leave()
    {
        $data['title'] = 'Leave Management';
        $data['user'] = $this->db->get_where('user', ['userid' => $this->session->userdata('nik')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/leave', $data);
        $this->load->view('templates/footer');
    }

    public function present()
    {
        $data['title'] = "Present";
        $data['user'] = $this->db->get_where('user', ['userid' => $this->session->userdata('nik')])->row_array();

        //$this->load->view('templates/header', $data);
        //$this->load->view('templates/sidebar', $data);
        //$this->load->view('templates/topbar', $data);
        $this->load->view('user/present', $data);
        //$this->load->view('templates/footer');
    }

    public function absence()
    {
        $data['title'] = "Absence";
        $data['user'] = $this->db->get_where('user', ['userid' => $this->session->userdata('nik')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/absence', $data);
        $this->load->view('templates/footer');
    }
}
