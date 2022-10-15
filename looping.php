<?php
for ($i = 0; $i <= 10; $i++) {
    echo "looping ke $i<br>";
}

$animals = ["cat", "dog", "fish"];
foreach ($animals as $animal) {
    echo $animal . '<br>';
}

# membuat array asosiatif
$data_user = [
    'nama' => "Anisa Nur Halifah",
    'jurusan' => "Informatika",
    'ipk' => 3.50,
];

foreach ($data_user as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
