<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('admin/overview');
    }

    // public function about($nama = "Abim", $npm = 211711532, $prodi = "Sistem Informasi", $alamat = "Maguwoharjo", $no_telp = "081234567890", $umur = 0, $jenis_kelamin = "Laki-laki")
    // {
    //     echo "<h1> Halo gaes, berikut adalah biodata saya</h1>
    //     <p>Nama Lengkap    : $nama<br></p>
    //     <p>NPM             : $npm<br></p>
    //     <p>Program Studi   : $prodi<br></p>
    //     <p>Alamat          : $alamat<br></p>
    //     <p>Nomor Telepon   : $no_telp<br></p>
    //     <p>Jenis Kelamin   : $jenis_kelamin<br></p>";
    // }

    // public function contact()
    // {
    //     $this->load->view('contact.php');
    // }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
