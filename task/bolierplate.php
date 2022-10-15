<?php

# membuat class Animal
class Animal
{
    # property animals
    public $namahewan;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $this->namahewan = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        # gunakan foreach untuk menampilkan data animals (array)
        foreach ($this->namahewan as $animal);
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        # gunakan method array_push untuk menambahkan data baru
        array_push($this->namahewan, $data);
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data)
    {
        $this->namahewan[$index] = $data;
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
        unset($this->namahewan[$index]);
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(["Kodok", "Ular", "Jerapah"]);

echo "Index - Menampilkan seluruh hewan <br> Kodok <br> Jerapah <br> Ular";
$animal->index();
echo "<br>";

echo "<br> Store - Menambahkan hewan baru <br>";
echo "Kodok <br>Jerapah<br>Ular<br>Burung";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "<br>Update - Mengupdate hewan <br> Kucing Anggora <br> Jerapah <br>Ular <br>Burung";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "<br>Destroy - Menghapus hewan <br> Jerapah <br> Ular <br>Burung";
$animal->destroy(1);
$animal->index();
echo "<br>";

echo "<br><b>Anisa Nur Halifah - 0110221136 - 3TI05</b>";
?>