<?php
    class Bus {
      //properti
      public $ban;
      public $karcis;
      public $supir;
      public $klakson;

      //method
      public function index(){
        echo "ini class tentang bus <br>";
      }

      public function set_ban($ban){
        $this->ban = $ban;
      }

      public function tampil_ban(){
        echo "jumlah ban adalah $this->ban <br>";
      }
      public function set_karcis($karcis){
        $this->karcis = $karcis;
      }

      public function tampil_karcis(){
        echo "harga karcis adalah $this->karcis <br>";
      }

      public function set_supir($supir){
        $this->supir = $supir;
      }

      public function tampil_supir(){
        echo "nama supir adalah $this->supir <br>";
      }

      public function set_klakson($klakson){
        $this->klakson = $klakson;
      }

      public function tampil_klakson(){
        echo "bunyi klaksonnya adalah $this->klakson <br>";
      }
    }
    //generate
    $object_tampil = new Bus;
    $object_tampil -> set_ban(6);
    $object_tampil -> tampil_ban();

    $object_keluar = new Bus;
    $object_keluar -> set_karcis(100000);
    $object_keluar -> tampil_karcis();
    $object_keluar -> set_supir("Bapak Nono");
    $object_keluar -> tampil_supir();
    $object_keluar -> set_klakson("Nono Nono Nono");
    $object_keluar -> tampil_klakson();
?>
