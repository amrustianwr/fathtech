<?php
    class Ayah {
      public $nama="Ayah";

      function Ayah($nama){
        $this->nama=$nama;
      }
      function Hallo(){
        echo "Hello, saya adalah $this->nama <br>";
      }
    }

    class Anak extends Ayah{
      function Hai(){
        echo "Hai dari kelas Anak";
      }
    }

    $panggil_class = new Ayah("Nono");
    $panggil_class ->Hallo();
?>
