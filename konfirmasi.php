<?php
include "db.php";
$nama=$_POST['nama'];
$komentar=$_POST['isi'];
$date = date('Y-m-d H:i:s', time());
$result=mysqli_query($con,"insert into komentar values('null','$nama','$komentar', '$date')");

                             function waktu_lalu($timestamp)
                            {
                                $selisih = time() - strtotime($timestamp) ;
                             
                                $detik = $selisih ;
                                $menit = round($selisih / 60 );
                                $jam = round($selisih / 3600 );
                                $hari = round($selisih / 86400 );
                                $minggu = round($selisih / 604800 );
                                $bulan = round($selisih / 2419200 );
                                $tahun = round($selisih / 29030400 );
                             
                                if ($detik <= 60) {
                                    $waktu = $detik.' detik yang lalu';
                                } else if ($menit <= 60) {
                                    $waktu = $menit.' menit yang lalu';
                                } else if ($jam <= 24) {
                                    $waktu = $jam.' jam yang lalu';
                                } else if ($hari <= 7) {
                                    $waktu = $hari.' hari yang lalu';
                                } else if ($minggu <= 4) {
                                    $waktu = $minggu.' minggu yang lalu';
                                } else if ($bulan <= 12) {
                                    $waktu = $bulan.' bulan yang lalu';
                                } else {
                                    $waktu = $tahun.' tahun yang lalu';
                                }
                                
                                return $waktu;
                            }
                              $data = mysqli_query($con, "SELECT * FROM komentar");
                              $waktu = mysqli_fetch_array($data);
                              $waktu_posting = $waktu['waktu'];

header("location:aplikasi.php");
exit;
?>