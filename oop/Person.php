<?php

class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat constructor
    public function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    # membuat method (function)
    public function setNama($data)
    {
        $this->nama = $data;
    }

    public function getNama()
    {
        $this->nama;
        return $this->alamat;
    }

    # buat method set dan get alamat
    # buat method set dan get jurusan
}

$anis = new Person('Anisa Nur Halifah', 'Bandung', 'Informatika');
$dim = new Person('Dimas', 'Depok', 'Bisnis Digital');

echo $anis->getNama();
echo '<br>';
echo $dim->getNama();

// $mahasiswa = [
//     [
//         'nama' => 'Anisa Nur Halifah',
//         'jurusan' => 'Informatika',
//     ],
//     [
//         'nama' => 'Dimas',
//         'jurusan' => 'Sistem Informasi',
//     ],
// ];
// foreach ($mahasiswa as $mhs) {
//     $person = new Person();
//     $person->setNama($mhs['nama']);
//     echo $person->getNama();
//     echo '<br>';
// }

// $anis = new Person();
// $anis->setNama('Anisa Nur Halifah');
// echo $anis->getNama();
// echo '<br>';

// $dim = new Person();
// $dim->setNama('Dimas');
// echo $dim->getNama();
?>