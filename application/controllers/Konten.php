<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Konten extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konten_m');

        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function index()
    {

        $this->load->view('templates/bar');

        $this->load->view('view_Konten');
        $this->load->view('templates/footer');
    }

    public function echopre($dt)
    {
        echo "<pre>";
        print_r($dt);
        echo "</pre>";
    }

    public function get_data()
    {
        $konten = $this->Konten_m->get_data();

        $i = 0;
        if (!empty($konten)) {
            foreach ($konten as $k => $v) {
                $dt_final[$i]['konten_id'] = $v['konten_id'];
                $dt_final[$i]['konten_judul'] = $v['konten_judul'];
                $dt_final[$i]['konten_deskripsi'] = $v['konten_deskripsi'];
                $dt_final[$i]['link'] = base_url() . 'assets/images/' . $v['gambar'];
                $dt_final[$i]['gambar'] = $v['gambar'];                
                $i++;
            }
        } else {
            $dt_final[$i]['konten_id'] = '';
            $dt_final[$i]['konten_judul'] = "Data is null";
            $dt_final[$i]['konten_deskripsi'] = '';
            $dt_final[$i]['gambar'] = '';
        }
        $object = json_decode(json_encode($dt_final), FALSE);
        // $this->echopre($object);
        // die;
        echo json_encode(array('response' => $object));
    }

    public function get_data_kategori()
    {
        $kategori = $this->Konten_m->get_data_kategori();
        echo json_encode($kategori);
    }

    public function save_add()
    {
        $msg = "Error Input";
        $config['upload_path'] = "./assets/images"; //path folder file upload
        $config['allowed_types'] = 'jpg|jpeg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
        if (!empty($_FILES)) {
            $this->load->library('upload', $config); //call library upload 
            if ($this->upload->do_upload("file")) { //upload file
                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                $image = $data['upload_data']['file_name']; //set file name ke variable image
                $data = array(
                    'konten_judul' => $_POST['konten_judul'],
                    'konten_deskripsi' => $_POST['konten_deskripsi'],
                    'create_date' => date("Y-m-d H:i:s"),
                    'gambar' => $image,
                );
                $result = $this->Konten_m->save_add($data);
            } else {
                $result = false;
                $msg = "Format gambar tidak sesuai";
            }
        } else {
            $image = '';
            $data = array(
                'konten_judul' => $_POST['konten_judul'],
                'konten_deskripsi' => $_POST['konten_deskripsi'],
                'create_date' => date("Y-m-d H:i:s"),
                'gambar' => $image,
            );

            $result = $this->Konten_m->save_add($data);
        }


        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode($msg);
        }
    }

    public function get_data_by_id($id)
    {

        $konten = $this->Konten_m->get_data_by_id($id);

        echo json_encode($konten);
    }

    public function save_edit()
    {
        $msg = "Error Edit";
        if (!empty($_FILES)) {
        //save gambar
        $config['upload_path'] = "./assets/images"; //path folder file upload
        $config['allowed_types'] = 'jpg|jpeg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload

        $this->load->library('upload', $config); //call library upload 
        if ($this->upload->do_upload("file")) { //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image = $data['upload_data']['file_name']; //set file name ke variable image
            $id = $_POST['konten_id'];
            $data = array(
                'konten_judul' => $_POST['konten_judul'],
                'konten_deskripsi' => $_POST['konten_deskripsi'],
                'gambar' => $image,

            );
            $result = $this->Konten_m->save_edit($data, $id);
        } else {
            $result = false;
            $msg = "Format gambar tidak sesuai";
        }
        //delete gambar
        @unlink("./assets/images/" . $_POST['file_prev']);
    } else {
        $id = $_POST['konten_id'];
        $data = array(
            'konten_judul' => $_POST['konten_judul'],
            'konten_deskripsi' => $_POST['konten_deskripsi'],            
        );
        $result = $this->Konten_m->save_edit($data, $id);
    }

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode($msg);
        }
    }

    public function save_delete()
    {
        $id = $_POST['id'];
        $gambar_delete = $this->Konten_m->get_gambar_delete($id);
        $result = $this->Konten_m->deleted_data($id);
        if ($result) {
            @unlink("./assets/images/" . $gambar_delete);
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
