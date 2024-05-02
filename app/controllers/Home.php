<?php

class Home extends Controller{
    public function index()
    {
        $data['judul']= 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul']= 'Page';
        $data['gambar']= 'asahi.jpg';
        $data['nama']= 'Asahi';
        $data['pekerjaan']= 'idol (Treasure)';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}
   

?>