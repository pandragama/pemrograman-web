<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
}

include("connection.php");

if (isset($_GET["nim"])) {
  $nim = $_GET["nim"];
  $nim = mysqli_real_escape_string($connection, $nim);
  $query = "DELETE FROM student WHERE nim='$nim'";
  $result = mysqli_query($connection, $query);

    if ($result) {
      $message = "Data mahasiswa dengan nim = \"<b>$nim</b>\" berhasil dihapus";
      $message = urlencode($message);
      header("Location: student_view.php?message={$message}");
    } else {
      die("Query gagal dijalankan: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
    }
}

?>