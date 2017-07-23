<?php
    class Luaspersegi extends CI_Controller{
      function index() {
        $this->load->view('persegi');
      }

      function hitung(){
        $sisi = $_GET['sisi'];
        $hasil = $sisi * $sisi;

        echo "Jawaban <br>";
        echo "Luas persegi adalah $hasil";
      }
    }

 ?>
