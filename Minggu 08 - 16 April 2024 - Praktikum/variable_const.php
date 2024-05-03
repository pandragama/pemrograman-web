<?php
  // Menampilkan Variabel dan Konstanta
  $nama = "Pandu";
  define("GAJI", 50000000);
  echo $nama;
  echo "<br>";
  echo GAJI;

  // Memanggil variabel dalam string
  $nama = "Pandu";
  echo "<p>Selamat pagi $nama</p>";
  
  // Menghapus Variabel
  $nama = "Pandu";
  echo $nama;
  unset($nama);
  echo $nama;
