<?php
$animals = ["burung", "kucing", "ayam", "musang", "ikan"];
    
class AnimalControler extends Controller{
    
    public function index(){
        foreach ($animals as $isi){
            echo $isi. "<br>";
        }
        echo "<hr>";
    }
    public function store(){
        $animals[]= "kodok";
        echo $isi."<br>";
    }
    public function update(reqquest $request, $id){
        echo "mengubah data animals";
        echo " Nama Hewan: $request->nama";
    }
    public function destroy(){
        echo "menghapus data animals";
    }
}