<?php
// Nama: Andreas Pascalis Tristan    
//NIM: 121140017      
//Kelas: RB

class Orang { //deklarasi class dan variabel
  public $nama;
  public $nim;
  public $birth;
  public $call;

  public function __construct($nama, $nim, $birth, $call) { //inisiasi objek sehingga bisa dipanggil
    $this->nama = $nama;
    $this->nim = $nim;
    $this->birth = $birth;
    $this->call = $call;
  }

  public function tampil() { //fungsi yang akan terpanggil otomatis
    echo "Nama: " . $this->nama . "<br>";
    echo "NIM: " . $this->nim . "<br>";
    echo "Tanggal Lahir: " . $this->birth . "<br>";
    echo "Status: " . $this->call . "<br>";
    echo "<br>";
  }
}

$Orang1 = new Orang("Andreas Pascalis Tristan", "121140017", "16 April 2003", "Mahasiswa");
$Orang1->tampil();

$Orang2 = new Orang("Bam", "140140001", "1998" , "Karyawan");
$Orang2->tampil();

?>