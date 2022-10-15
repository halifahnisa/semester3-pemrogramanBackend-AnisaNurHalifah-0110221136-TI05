<?php
# membuat fungsi
function hitungLuasLingkaran($jari)
{
    $phi = 3.14;
    $luasLingkaran = $phi * $jari * $jari;
    return $luasLingkaran;
}

# memanggil fungsi
echo hitungLuasLingkaran(5);
echo "<br>";
echo hitungLuasLingkaran(7);
echo "<br>";
echo hitungLuasLingkaran(9);
