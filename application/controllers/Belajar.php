<?php
  defined('BASEPATH') OR exit('No direct script acces allowed');

  class Belajar extends CI_Controller{

    public function index(){
      $this->load->view('belajar');
    }

    public function hitung(){
      $this->load->view('hitung');

      $panjang = 5;
      $lebar = 2;
      $luas = $panjang * $lebar;

      echo "Luas=$luas";
    }

  }
?>
