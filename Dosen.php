<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
    public function index() {
        $this->load->model('Dosen_model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn='100121082';
        $this->dsn1->nama='Basuki Hari Prasetyo';
        $this->dsn1->pendidikan='S2 Ilmu Komputer';

        $this->load->model('Dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn='100121088';
        $this->dsn2->nama='Dewi Kusuma Ningsih';
        $this->dsn2->pendidikan='S2 Ilmu Komputer';

        $this->load->model('Dosen_model','dsn3');
        $this->dsn3->id=3;
        $this->dsn3->nidn='100121083';
        $this->dsn3->nama='Haris Munandar';
        $this->dsn3->pendidikan='Sarjana Teknik';

        $this->load->model('Dosen_model','dsn4');
        $this->dsn4->id=4;
        $this->dsn4->nidn='100121085';
        $this->dsn4->nama='Pipin Farida Ariyani';
        $this->dsn4->pendidikan='Magister Teknologi Informasi';

        $this->load->model('Dosen_model','dsn5');
        $this->dsn5->id=5;
        $this->dsn5->nidn='100121084';
        $this->dsn5->nama='Rizky Pradana';
        $this->dsn5->pendidikan='Magister Sains';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4, $this->dsn5];
        $data['list_dsn']=$list_dsn;
        $this->load->view('dosen/index',$data);
    } 
}
?>