<?php
//Menghitung kalori fu setiap hari dan minggunya
echo "A. Menghitung Kalori";
$kalori = 2500;
$senin = ($kalori + $kalori + $kalori);
$selasa = ($kalori + $kalori);
$rabu = ($kalori + $kalori);
$kamis = ($kalori + $kalori + $kalori);
$jumat = ($kalori + $kalori + $kalori);
$sabtu = ($kalori + $kalori);
$minggu = ($kalori);

$jumlahKaloriPermakan = 2500;
$jumlahKaloriPerMinggu = $jumlahKaloriPermakan * 21;
$selisih = $jumlahKaloriPerMinggu - $senin - $selasa - $rabu - $kamis - $jumat - $sabtu - $minggu;
$jumlahkalorifu = $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;
echo "</br>";
echo "1. jumlah kalori perminggu seharusnya adalah $jumlahKaloriPerMinggu";
echo "</br>";
echo "2. tetapi jumlah kalori yang telah dikonsumsi oleh Fu adalah" , $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;
echo "</br>";
echo "3. selisih kalori dari yang kalori seharusnya dihasilkan perminggu adalah $selisih ";
echo "</br>";
echo "</br>";

//Menghitung waktu istirahat
echo "B. Menghitung Waktu Istirahat";
echo "</br>";
$istirahatsenin = 5;
$istirahatselasa =6;
$istirahatrabu = 8;
$istirahatkamis = 8;
$istirahatjumat = 5;
$istirahatsabtu = 6;
$istirahatminggu = 4;

$totalwaktuistirahat = 8;
$totalwaktuistirahatseharusnya = $totalwaktuistirahat * 7;
$totalwaktuistrahatsebenarnya = $istirahatsenin + $istirahatselasa + $istirahatrabu + $istirahatkamis + $istirahatjumat + $istirahatsabtu + $istirahatminggu;
$selisihwaktuistirahat = $totalwaktuistirahatseharusnya - $totalwaktuistrahatsebenarnya;

echo "1. Total waktu istirahat yang seharusnya Fu lakukan adalah  $totalwaktuistirahatseharusnya jam/minggu";
echo "</br>";
echo "2. Total waktu istirahat yang dilakukan Fu sebenarnya adalah" . $istirahatsenin + $istirahatselasa  + $istirahatrabu + $istirahatkamis + $istirahatjumat + $istirahatsabtu + $istirahatminggu . " jam/minggu";
echo "</br>";
echo "3. Tetapi Selisih waktu istirahatnya adalah  $selisihwaktuistirahat jam/minggu" ;
echo "</br>";
echo "</br>";

//Menentukan Fu sehat atau tidak
echo "C. Menentukan Fu sakit atau tidak?";
$kebutuhankalori = $jumlahkalorifu;
$kebutuhantidur = $totalwaktuistrahatsebenarnya;

if ($selisih > 2500) {
    $kebutuhankalori = 'Masih sakit';
} else {
    $kebutuhankalori = 'Sudah sembuh';
}

if ($selisihwaktuistirahat  < 56) {
    $kebutuhantidur = 'Masih sakit';
} else {
    $kebutuhantidur = 'Sudah sembuh';
}
echo "</br>";
// Menampilkan hasil
echo "1. Total kalori per hari: " . $jumlahKaloriPermakan * 3;
echo "</br>";
echo "2. Total kalori per minggu: " . $jumlahKaloriPerMinggu;
echo "</br>";
echo "3. Total kalori yang sudah fu lakukan: $jumlahkalorifu  kalori";
echo "</br>";
echo "4. Status kesehatan berdasarkan selisih kalori: " . $kebutuhankalori ;
echo "</br>";
echo "5. Total waktu tidur per hari: " . $totalwaktuistirahat;
echo "</br>";
echo "6. Total waktu tidur seharusnya adalah: $totalwaktuistirahatseharusnya";
echo "</br>";
echo "7. Total waktu tidur per minggu yang fu lakukan: " . $totalwaktuistrahatsebenarnya;
echo "</br>";
echo "8. Status kesehatan berdasarkan selisih waktu tidur: " . $kebutuhantidur;
echo "</br>";
echo "Jika hasil dari status kalori dan waktu tidur sama maka Fu dinyatakan MASIH SAKIT";