<?php

class Persegi
{
    private $sisi;

    // Konstruktor untuk mengatur panjang sisi
    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    // Menghitung keliling persegi
    public function hitungKeliling()
    {
        return 4 * $this->sisi;
    }

    // Menghitung luas persegi
    public function hitungLuas()
    {
        return $this->sisi ** 2;
    }
}

// Contoh penggunaan
$sisiPersegi = 5;
$persegi = new Persegi($sisiPersegi);

echo "Panjang sisi persegi = $sisiPersegi cm <br>";
echo "Keliling persegi = " . $persegi->hitungKeliling() . " cm <br>";
echo "Luas persegi = " . $persegi->hitungLuas() . " cm^2";
?>
