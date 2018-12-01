<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengguna_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pengguna/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pengguna/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pengguna/index.html';
            $config['first_url'] = base_url() . 'pengguna/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pengguna_model->total_rows($q);
        $pengguna = $this->Pengguna_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pengguna_data' => $pengguna,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pengguna/pengguna_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pengguna_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pengguna' => $row->id_pengguna,
		'nm_depan' => $row->nm_depan,
		'nm_belakang' => $row->nm_belakang,
		'email' => $row->email,
		'username' => $row->username,
		'password' => $row->password,
		'level' => $row->level,
		'photo' => $row->photo,
	    );
            $this->load->view('pengguna/pengguna_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengguna'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengguna/create_action'),
	    'id_pengguna' => set_value('id_pengguna'),
	    'nm_depan' => set_value('nm_depan'),
	    'nm_belakang' => set_value('nm_belakang'),
	    'email' => set_value('email'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'level' => set_value('level'),
	    'photo' => set_value('photo'),
	);
        $this->load->view('pengguna/pengguna_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();
        // $photo=$_FILES['photo']['name'];
        // if($photo=='')
        //     {}else
        // {
        //     $config['upload_path']= ',/assets/img';
        //     $config['allowed_types']= 'jpg|png|gif';
        //     $this->load->library('upload', $config);
        //     if(!$this->upload->do_upload('photo')){
        //         echo "gagal";die();
        //     }else{
        // }

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nm_depan' => $this->input->post('nm_depan',TRUE),
		'nm_belakang' => $this->input->post('nm_belakang',TRUE),
		'email' => $this->input->post('email',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'level' => $this->input->post('level',TRUE),
		'photo' => $this->input->post('photo',TRUE),
	    );

            $this->Pengguna_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengguna'));
            
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pengguna_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengguna/update_action'),
		'id_pengguna' => set_value('id_pengguna', $row->id_pengguna),
		'nm_depan' => set_value('nm_depan', $row->nm_depan),
		'nm_belakang' => set_value('nm_belakang', $row->nm_belakang),
		'email' => set_value('email', $row->email),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'level' => set_value('level', $row->level),
		'photo' => set_value('photo', $row->photo),
	    );
            $this->load->view('pengguna/pengguna_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengguna'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pengguna', TRUE));
        } else {
            $data = array(
		'nm_depan' => $this->input->post('nm_depan',TRUE),
		'nm_belakang' => $this->input->post('nm_belakang',TRUE),
		'email' => $this->input->post('email',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'level' => $this->input->post('level',TRUE),
		'photo' => $this->input->post('photo',TRUE),
	    );

            $this->Pengguna_model->update($this->input->post('id_pengguna', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengguna'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengguna_model->get_by_id($id);

        if ($row) {
            $this->Pengguna_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pengguna'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengguna'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nm_depan', 'nm depan', 'trim|required');
	$this->form_validation->set_rules('nm_belakang', 'nm belakang', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('level', 'level', 'trim|required');
	$this->form_validation->set_rules('photo', 'photo', 'trim|required');

	$this->form_validation->set_rules('id_pengguna', 'id_pengguna', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pengguna.xls";
        $judul = "pengguna";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Depan");
	xlsWriteLabel($tablehead, $kolomhead++, "Nm Belakang");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Username");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Level");
	xlsWriteLabel($tablehead, $kolomhead++, "Photo");

	foreach ($this->Pengguna_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_depan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nm_belakang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->username);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteNumber($tablebody, $kolombody++, $data->level);
	    xlsWriteLabel($tablebody, $kolombody++, $data->photo);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=pengguna.doc");

        $data = array(
            'pengguna_data' => $this->Pengguna_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('pengguna/pengguna_doc',$data);
    }

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/Pengguna.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-12-02 02:31:58 */
/* http://harviacode.com */