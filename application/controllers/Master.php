<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Division';
        $data['user'] = $this->db->get_where('user', ['userid' => $this->session->userdata('nik')])->row_array();

        $data['division'] = $this->db->get('t_division')->result_array();

        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('division', 'Division', 'required');
        $this->form_validation->set_rules('line', 'Line', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('master/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'code' => $this->input->post('code'),
                'division' => $this->input->post('division'),
                'line' => $this->input->post('line'),
                'flag' => $this->input->post('flag')
            ];
            $this->db->insert('t_division', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New division added!</div>');
            redirect('master');
        }
    }

    public function location()
    {
        $data['title'] = 'Location';
        $data['user'] = $this->db->get_where('user', ['userid' => $this->session->userdata('nik')])->row_array();

        $data['location'] = $this->db->get('t_location')->result_array();
        $data['city'] = $this->db->get('t_city')->result_array();

        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('line', 'Line', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('cityname', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('master/location', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'code' => $this->input->post('code'),
                'location' => $this->input->post('location'),
                'line' => $this->input->post('line'),
                'flag' => $this->input->post('flag'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('cityname'),
                'state' => $this->input->post('state'),
                'lat' => 0
            ];
            $this->db->insert('t_location', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Location added!</div>');
            redirect('master/location');
        }
    }

    public function city()
    {
        $data['title'] = 'City';
        $data['user'] = $this->db->get_where('user', ['userid' => $this->session->userdata('nik')])->row_array();

        $data['city'] = $this->db->get('t_city')->result_array();

        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('master/city', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'code' => $this->input->post('code'),
                'cityname' => $this->input->post('city')
            ];
            $this->db->insert('t_city', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New City added!</div>');
            redirect('master/city');
        }
    }

    public function workday()
    {
        $data['title'] = 'Workday';
        $data['user'] = $this->db->get_where('user', ['userid' => $this->session->userdata('nik')])->row_array();

        $data['workday'] = $this->db->get('t_day')->result_array();

        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('workday', 'Workday', 'required');
        $this->form_validation->set_rules('intime', 'Intime', 'required');
        $this->form_validation->set_rules('outtime', 'Outtime', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('master/workday', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'code' => $this->input->post('code'),
                'workday' => $this->input->post('workday'),
                'intime' => $this->input->post('intime'),
                'outtime' => $this->input->post('outtime')
            ];
            $this->db->insert('t_day', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Schedule added!</div>');
            redirect('master/workday');
        }
    }

    public function groups()
    {

        $data['title'] = 'Groups';
        $data['user'] = $this->db->get_where('user', ['userid' => $this->session->userdata('nik')])->row_array();

        $data['groups'] = $this->db->get('t_grp')->result_array();
        $data['workcode'] = $this->db->get('t_day')->result_array();

        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('sunday', 'Sunday', 'required');
        $this->form_validation->set_rules('monday', 'Monday', 'required');
        $this->form_validation->set_rules('tuesday', 'Tuesday', 'required');
        $this->form_validation->set_rules('wednesday', 'wednesday', 'required');
        $this->form_validation->set_rules('thursday', 'Thursday', 'required');
        $this->form_validation->set_rules('friday', 'Friday', 'required');
        $this->form_validation->set_rules('saturday', 'Saturday', 'required');
        $this->form_validation->set_rules('schedule', 'Schedule', 'required');
        $this->form_validation->set_rules('daywork', 'Daywork', 'required');
        $this->form_validation->set_rules('dayoff', 'Dayoff', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('master/groups', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'code' => $this->input->post('code'),
                'description' => $this->input->post('description'),
                'sunday' => $this->input->post('sunday'),
                'monday' => $this->input->post('monday'),
                'tuesday' => $this->input->post('tuesday'),
                'wednesday' => $this->input->post('wednesday'),
                'thursday' => $this->input->post('thursday'),
                'friday' => $this->input->post('friday'),
                'saturday' => $this->input->post('saturday'),
                'schedule' => $this->input->post('schedule'),
                'daywork' => $this->input->post('daywork'),
                'dayoff' => $this->input->post('dayoff')
            ];
            $this->db->insert('t_grp', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Work Groups added!</div>');
            redirect('master/groups');
        }
    }

    public function employee()
    {
        $data['title'] = 'Employee';
        $data['user'] = $this->db->get_where('user', ['userid' => $this->session->userdata('nik')])->row_array();

        $data['employee'] = $this->db->get('t_emp')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('master/employee', $data);
        $this->load->view('templates/footer');
    }

    public function addemployee()
    {
        $data['title'] = 'Add Employee';
        $data['user'] = $this->db->get_where('user', ['userid' => $this->session->userdata('nik')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('master/addemployee', $data);
        $this->load->view('templates/footer');
    }
}
