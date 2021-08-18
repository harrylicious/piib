<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('format_indo')) {
  function format_indo($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5); 
    $hari = date("w",strtotime($date));
    $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu;

    return $result;
  }
}

if (!function_exists('jam_indo')) {
	function jam_indo($date){
	  date_default_timezone_set('Asia/Jakarta');

	  $waktu = substr($date,11,5);
	  $result = $waktu;
  
	  return $result;
	}
  }

  if (!function_exists('tgl_default')) {
    function tgl_default($date){

      $newdate = date("d-m-Y", strtotime($date));
    
      return $newdate;
    }
    }
/* 
function tgl_indo($date)
{
	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl   = substr($date, 8, 2);
 
	$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;		
	return($result);
} */

function get_bulan($no)
{
	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
 
	$result = $BulanIndo[$no];		
	return($result);
}

function tgl_dan_hari($tgl) {
  $hari = array ( 1 =>    'Senin',
    'Selasa',
    'Rabu',
    'Kamis',
    'Jumat',
    'Sabtu',
    'Minggu'
  );

  // Misal hari ini adalah sabtu 
  // echo date('N'); // Hasil 6
  // echo $hari[ date('N') ]; // Sama seperti echo $hari[6], hasil: Sabtu

  // Contoh tanggal 20 Maret 2016 adalah hari Minggu
  $num = date('N', strtotime($tgl)); 
  //echo $num; // Hasil 7
  return $hari[$num]; // Hasil: Minggu

}

?>