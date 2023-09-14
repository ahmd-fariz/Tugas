<?php
class Produk
{
    private $NamaMenu, $Topping, $Harga;

    public function __construct($NamaMenu, $Topping, $Harga)
    {
        $this->NamaMenu = $NamaMenu;
        $this->Topping = $Topping;
        $this->Harga = $Harga;
    }
    public function SetNamaMenu($NamaMenu)
    {
        $this->NamaMenu = $NamaMenu;
    }
    public function GetNamaMenu()
    {
        return $this->NamaMenu;
    }
    public function SetTopping($Topping)
    {
        $this->Topping = $Topping;
    }
    public function GetTopping()
    {
        return $this->Topping;
    }
    public function SetHarga($Harga)
    {
        $this->Harga = $Harga;
    }
    public function GetHarga()
    {
        return $this->Harga;
    }
}
class Seblak extends Produk
{
    public function __construct($NamaMenu, $Topping, $Harga)
    {
        parent::__construct($NamaMenu, $Topping, $Harga);
    }
    public function Hitung()
    {
        $topping_prices = array("sosis" => 2000, "bakso" => 2000, "ceker" => 5000, "pangsit" => 3000);
        if (array_key_exists($this->GetTopping(), $topping_prices)) {
            return $this->GetHarga() + $topping_prices[$this->GetTopping()];
        } else {
            return $this->GetHarga();
        }
    }
}

$seblak1 = new Seblak("seblak", "sosis", 12000);
$seblak1->SetTopping("ceker");
echo "Topping: " . $seblak1->GetTopping() . "\n";
echo "Total Price: " . $seblak1->Hitung();
