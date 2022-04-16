<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Konten_detail extends CI_Controller
{

    public function __construct()
    {           
        parent::__construct();
        $this->load->model('Konten_m');
    }

    public function index($id = '')
    {           
        $konten = $this->Konten_m->get_data_by_id($id);

        $i = 0;
        if (!empty($konten)) {
            foreach ($konten as $k => $v) {
                $dt_final['konten'][$i]['konten_id'] = $v['konten_id'];
                $dt_final['konten'][$i]['konten_judul'] = $v['konten_judul'];
                $dt_final['konten'][$i]['konten_deskripsi'] = $v['konten_deskripsi'];
                $dt_final['konten'][$i]['link'] = base_url() . 'assets/images/' . $v['gambar'];
                $dt_final['konten'][$i]['link_detail'] = base_url() . 'Konten_detail/' . $v['konten_id'];
                $dt_final['konten'][$i]['gambar'] = $v['gambar'];                
                $i++;
            }
        } else {
            $dt_final['konten'][$i]['konten_id'] = '';
            $dt_final['konten'][$i]['konten_judul'] = "Data is null";
            $dt_final['konten'][$i]['konten_deskripsi'] = '';
            $dt_final['konten'][$i]['link'] = '';
            $dt_final['konten'][$i]['link_detail'] = '';
            $dt_final['konten'][$i]['gambar'] = '';
        }
        echopre($dt_final);
        $this->load->view('website/web_site_detail',$dt_final);
    }

    public function view($id = '')
    {           
        $konten = $this->Konten_m->get_data_view($id);

        $i = 0;
        if (!empty($konten)) {
            foreach ($konten as $k => $v) {
                $dt_final['konten'][$i]['konten_id'] = $v['konten_id'];
                $dt_final['konten'][$i]['konten_judul'] = $v['konten_judul'];
                $dt_final['konten'][$i]['konten_deskripsi'] = $v['konten_deskripsi'];
                $dt_final['konten'][$i]['link'] = base_url() . 'assets/images/' . $v['gambar'];
                $dt_final['konten'][$i]['link_detail'] = base_url() . 'Konten_detail/' . $v['konten_id'];
                $dt_final['konten'][$i]['gambar'] = $v['gambar'];                
                $i++;
            }
        } else {
            $dt_final['konten'][$i]['konten_id'] = '';
            $dt_final['konten'][$i]['konten_judul'] = "Data is null";
            $dt_final['konten'][$i]['konten_deskripsi'] = '';
            $dt_final['konten'][$i]['link'] = '';
            $dt_final['konten'][$i]['link_detail'] = '';
            $dt_final['konten'][$i]['gambar'] = '';
        }
        $this->load->view('website/web_site_detail',$dt_final);
    }

}
