<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DpwController extends CI_Controller {

    public function detail($param = '') {
        $data['nama_matkul'] = $param;
        $this->load->view('dpw_view', $data);
    }
}