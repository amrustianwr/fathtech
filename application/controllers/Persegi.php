<?php
    class Persegi extends CI_Controller{
      function index(){
        $this->load->view('persegipanjang');
      }

      function jumlah(){
          $panjang = $_GET['panjang'];
          $lebar = $_GET['lebar'];
          $luas = $panjang*$lebar;
          $keliling = 2 * ($panjang + $lebar);

          echo "panjang : $panjang <br>";
          echo "lebar : $lebar <br>";
          echo "luas : $luas <br>";
          echo "keliling : $keliling <br>";

          $this->load->view('back');
        }
    }
 ?>
