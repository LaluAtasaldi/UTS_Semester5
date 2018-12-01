<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbpengguna extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbpengguna_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tbpengguna/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tbpengguna/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tbpengguna/index.html';
            $config['first_url'] = base_url() . 'tbpengguna/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tbpengguna_model->total_rows($q);
        $tbpengguna = $this->Tbpengguna_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbpengguna_data' => $tbpengguna,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbpengguna/tbpengguna_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbpengguna_model->get_by_id($id);
        if ($row) {
            $data = array(
		'No' => $row->No,
		'Nama_Depan' => $row->Nama_Depan,
		'Nama_Belakang' => $row->Nama_Belakang,
		'Email' => $row->Email,
		'Username' => $row->Username,
		'Password' => $row->Password,
		'Level' => $row->Level,
		'Photo' => $row->Photo,
	    );
            $this->load->view('tbpengguna/tbpengguna_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbpengguna'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbpengguna/create_action'),
	    'No' => set_value('No'),
	    'Nama_Depan' => set_value('Nama_Depan'),
	    'Nama_Belakang' => set_value('Nama_Belakang'),
	    'Email' => set_value('Email'),
	    'Username' => set_value('Username'),
	    'Password' => set_value('Password'),
	    'Level' => set_value('Level'),
	    'Photo' => set_value('Photo'),
	);
        $this->load->view('tbpengguna/tbpengguna_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Nama_Depan' => $this->input->post('Nama_Depan',TRUE),
		'Nama_Belakang' => $this->input->post('Nama_Belakang',TRUE),
		'Email' => $this->input->post('Email',TRUE),
		'Username' => $this->input->post('Username',TRUE),
		'Password' => $this->input->post('Password',TRUE),
		'Level' => $this->input->post('Level',TRUE),
		'Photo' => $this->input->post('Photo',TRUE),
	    );

            $this->Tbpengguna_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbpengguna'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbpengguna_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbpengguna/update_action'),
		'No' => set_value('No', $row->No),
		'Nama_Depan' => set_value('Nama_Depan', $row->Nama_Depan),
		'Nama_Belakang' => set_value('Nama_Belakang', $row->Nama_Belakang),
		'Email' => set_value('Email', $row->Email),
		'Username' => set_value('Username', $row->Username),
		'Password' => set_value('Password', $row->Password),
		'Level' => set_value('Level', $row->Level),
		'Photo' => set_value('Photo', $row->Photo),
	    );
            $this->load->view('tbpengguna/tbpengguna_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbpengguna'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('No', TRUE));
        } else {
            $data = array(
		'Nama_Depan' => $this->input->post('Nama_Depan',TRUE),
		'Nama_Belakang' => $this->input->post('Nama_Belakang',TRUE),
		'Email' => $this->input->post('Email',TRUE),
		'Username' => $this->input->post('Username',TRUE),
		'Password' => $this->input->post('Password',TRUE),
		'Level' => $this->input->post('Level',TRUE),
		'Photo' => $this->input->post('Photo',TRUE),
	    );

            $this->Tbpengguna_model->update($this->input->post('No', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbpengguna'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbpengguna_model->get_by_id($id);

        if ($row) {
            $this->Tbpengguna_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbpengguna'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbpengguna'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Nama_Depan', 'nama depan', 'trim|required');
	$this->form_validation->set_rules('Nama_Belakang', 'nama belakang', 'trim|required');
	$this->form_validation->set_rules('Email', 'email', 'trim|required');
	$this->form_validation->set_rules('Username', 'username', 'trim|required');
	$this->form_validation->set_rules('Password', 'password', 'trim|required');
	$this->form_validation->set_rules('Level', 'level', 'trim|required');
	$this->form_validation->set_rules('Photo', 'photo', 'trim|required');

	$this->form_validation->set_rules('No', 'No', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbpengguna.xls";
        $judul = "tbpengguna";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Depan");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Belakang");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Username");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Level");
	xlsWriteLabel($tablehead, $kolomhead++, "Photo");

	foreach ($this->Tbpengguna_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Nama_Depan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Nama_Belakang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Username);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Level);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Photo);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbpengguna.doc");

        $data = array(
            'tbpengguna_data' => $this->Tbpengguna_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tbpengguna/tbpengguna_doc',$data);
    }

}

/* End of file Tbpengguna.php */
/* Location: ./application/controllers/Tbpengguna.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-12-02 03:39:15 */
/* http://harviacode.com */