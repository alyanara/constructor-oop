<?php
class Product{ 
    public $Barang, 
            $Merk, 
             $Type,
              $Harga;

    public function getCetak(){ 
        return "$this->Barang, $this->Merk,$this->Type, $this->Harga"; 
    }
    public function __construct($Barang="jenis barang", $Merk="merk barang", $Type="type barang", $Harga=0){
    	$this->Barang = $Barang;
    	$this->Merk = $Merk;
    	$this->Type = $Type;
    	$this->Harga = $Harga;
    }
}


$Product1 = new Product("Laptop"," ASUS", "Vivobook S14", 6000000); 
$Product2 = new Product("Mouse","Logitec", "M185", 300000);
$Product3 = new Product("Flashdisk","Sandisk", "32 GB", 120000);
$Product4 = new Product("Harddisk","Seagate", "2 TB", 800000);

echo "Barang1 : " . $Product1->getCetak(); 
echo "<br>"; 
echo "Barang2 : " . $Product2->getCetak(); 
echo "<br>"; 
echo "Barang3 : " . $Product3->getCetak(); 
echo "<br>"; 
echo "Barang4 : " . $Product4->getCetak(); 

?> 
