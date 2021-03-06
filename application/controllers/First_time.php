<?php

defined('BASEPATH') or exit('No direct script access allowed');

class First_time extends CI_Controller
{

    public function __construct()
    {           
        parent::__construct();
        $this->load->model('Konten_m');
    }

    public function index()
    {           
        $konten = $this->Konten_m->get_data();

        $i = 0;
        if (!empty($konten)) {
            foreach ($konten as $k => $v) {
                $dt_final['konten'][$i]['konten_id'] = $v['konten_id'];
                $dt_final['konten'][$i]['konten_judul'] = $v['konten_judul'];
                $dt_final['konten'][$i]['konten_deskripsi'] = $v['konten_deskripsi'];
                $dt_final['konten'][$i]['link'] = base_url() . 'assets/images/' . $v['gambar'];
                $dt_final['konten'][$i]['link_detail'] = base_url() . 'Konten_detail/view/' . $v['konten_id'];
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
        $this->load->view('website/web_site',$dt_final);
    }

    public function all_konten($search = '')
    {           
        $konten = $this->Konten_m->get_data($search);

        $i = 0;
        if (!empty($konten)) {
            foreach ($konten as $k => $v) {
                $dt_final['konten'][$i]['konten_id'] = $v['konten_id'];
                $dt_final['konten'][$i]['konten_judul'] = $v['konten_judul'];
                $dt_final['konten'][$i]['konten_deskripsi'] = $v['konten_deskripsi'];
                $dt_final['konten'][$i]['link'] = base_url() . 'assets/images/' . $v['gambar'];
                $dt_final['konten'][$i]['link_detail'] = base_url() . 'Konten_detail/view/' . $v['konten_id'];
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
        $this->load->view('website/web_site_all',$dt_final);
    }

}
