<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {
    public function index()
    {
        $ruang = $this->Ruang_model->get_all();
        $data = array(
            'judul' => "Ruang Barang Inventaris",
            'page' =>  "ruang/index",
            'ruang_data' => $ruang
        );
        $this->load->view('halaman',$data);
    }

    public function create(){
         $data = array(
            'button' => 'Tambah',
            'judul' => 'Form Ruang',
            'sub_title' => 'Tambah data baru',
            'action' => site_url('ruang/create_action'),
        'id_ruang' => set_value('id_ruang'),
        'nama_ruang' => set_value('nama_ruang'),
        'fungsi_ruang' => set_value('fungsi_ruang'),
        'luas' => set_value('luas'),
        'gambar_ruang' => set_value('gambar_ruang')
    );
        $data['page'] = "ruang/form";
        $this->load->view('halaman', $data);
    }
    

    public function create_action() 
    {

        $config['upload_path']          = './upload/ruang';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar_ruang'))
        {
            $img = $this->upload->data();
            $gambar_ruang = $img['file_name'];
            $id_ruang = $this->input->post('id_ruang',true);
            $nama_ruang = $this->input->post('nama_ruang',true);
            $fungsi_ruang = $this->input->post('fungsi_ruang',true);
            $luas = $this->input->post('luas',true);
            $data = array(
                'id_ruang' => $id_ruang,
                'nama_ruang' => $nama_ruang,
                'fungsi_ruang' => $fungsi_ruang,
                'luas' => $luas,
                'gambar_ruang' => $gambar_ruang);
            $this->db->insert('daftar_ruang',$data);
            redirect(site_url('ruang'));
        }
        else
        {
            $img = $this->upload->data();
            $gambar_ruang = $img['file_name'];
            $id_ruang = $this->input->post('id_ruang',true);
            $nama_ruang = $this->input->post('nama_ruang',true);
            $fungsi_ruang = $this->input->post('fungsi_ruang',true);
            $luas = $this->input->post('luas',true);
            $data = array(
                'id_ruang' => $id_ruang,
                'nama_ruang' => $nama_ruang,
                'fungsi_ruang' => $fungsi_ruang,
                'luas' => $luas,
                'gambar_ruang' => $gambar_ruang);
            $this->db->insert('daftar_ruang',$data);
            redirect(site_url('ruang'));
        }

    }

   
    public function update($id) 
    {
        $row = $this->Ruang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'judul' => 'Ruang Inventaris',
                'sub_title' => 'Ubah Data',
                'action' => site_url('ruang/update_action'),
        'id_ruang' => set_value('id_ruang', $row->id_ruang),
        'nama_ruang' => set_value('nama_ruang', $row->nama_ruang),
        'fungsi_ruang' => set_value('fungsi_ruang', $row->fungsi_ruang),
        'luas' => set_value('luas', $row->luas),
        'gambar_ruang' => set_value('gambar_ruang', $row->gambar_ruang)
        );
           $data['page'] = "ruang/form";
            $this->load->view('halaman', $data);
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Record Not Found</p>');
            redirect(site_url('ruang'));
        }
    }
    
    public function update_action() 
    {

         $this->_rules();       
        $gambar_ruang=$_FILES['gambar_ruang']['name'];
        if($gambar_ruang==''){}else{
            $config['upload_path']= './upload/ruang/';
            $config['allowed_types']= 'jpg|png|gif';

            $this->load->library('upload', $config);


            if(!$this->upload->do_upload('gambar_ruang')){
                echo "gagal";die();
            }else{
                // if ($this->form_validation->run() == FALSE) {
                //     $this->create();
                // } else {
                    $data = array(
                        'id_ruang' => $this->input->post('id_ruang',TRUE),
                        'nama_ruang' => $this->input->post('nama_ruang',TRUE),
                        'fungsi_ruang' => $this->input->post('fungsi_ruang',TRUE),
                        'luas' => $this->input->post('luas',TRUE),
                        'gambar_ruang' => $gambar_ruang
                );
           
            // }
            $this->Ruang_model->update($this->input->post('id_ruang', TRUE), $data);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Memperbaharui</p>');
            redirect(site_url('ruang'));
            }
        }




        // $this->_rules();

        // if ($this->form_validation->run() == FALSE) {
        //     $this->update($this->input->post('id_ruang', TRUE));
        // } else {
        //     $data = array(
        // 'id_ruang' => $this->input->post('id_ruang',TRUE),
        // 'nama_ruang' => $this->input->post('nama_ruang',TRUE),
        // 'fungsi_ruang' => $this->input->post('fungsi_ruang',TRUE),
        // 'luas' => $this->input->post('luas',TRUE),
        // 'gambar_ruang' => $this->input->post('gambar_ruang',TRUE)
        // );

        //     $this->Ruang_model->update($this->input->post('id_ruang', TRUE), $data);
        //     $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Update Record Success</p>');
        //     redirect(site_url('ruang'));
        // }
    }

    public function delete($id) 
    {
        $row = $this->Ruang_model->get_by_id($id);

        if ($row) {
            $this->Ruang_model->delete($id);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Delete Record Success</p>');
            redirect(site_url('ruang'));
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Record Not Found</p>');
            redirect(site_url('ruang'));
        }
    }


  public function _rules() 
    {
    $this->form_validation->set_rules('nama_ruang', 'Nama Ruang', 'trim|required');
    $this->form_validation->set_rules('fungsi_ruang', 'Fungsi Ruang', 'trim|required');
    $this->form_validation->set_rules('luas', 'Luas', 'trim|required');
    $this->form_validation->set_rules('gambar_ruang', 'Gambar Ruang', 'trim');
    $this->form_validation->set_rules('id_ruang', 'Id Ruang', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }


   


}
