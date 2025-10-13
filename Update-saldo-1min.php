<?php
system("clear");

$hitam = "\033[1;30m";
$merah = "\033[1;31m";
$hijau = "\033[1;32m";
$kuning = "\033[1;33m";
$biru = "\033[1;34m";
$ungu = "\033[1;35m";
$cyan = "\033[1;36m";
$putih = "\033[1;37m";


// banner
$banner = "$biru
[x]$kuning =============================================$biru [x]$merah
[#]$hijau Author$cyan [>]$hijau Rinaldi ID$merah
[#]$hijau Bot$cyan [>]$hijau Auto Update Saldo Mining Nanswap|XNO$merah
[#]$hijau Date$cyan [>]$hijau 25 Juli 2024, 20:35$merah
[#]$hijau UpDate$cyan [>]$hijau 13 Okt 2025, 07:31$merah
[#]$hijau Lokasi$cyan [>]$hijau Jakarta, Indonesia$biru
[x]$kuning =============================================$biru [x]$hijau
\n\n
";

echo $banner;
sleep(5);

echo "$cyan [_--$hijau Auto Update Saldo Mining nanswap|XNO$cyan _--]$hijau \n\n";

echo "$kuning [?]$hijau Masukan alamat XNO$merah [=>]$putih ";
$xno = trim(fgets(STDIN));

system("clear");

while(TRUE){

echo $banner;
    
echo "$cyan [_--$hijau Auto Update Saldo Mining nanswap|XNO$cyan _--]$hijau \n\n";

sleep(1);
echo "$cyan           [_--$hijau RESULT$cyan _--]$hijau \n\n";
    
$url = "https://api.nanswap.com/get-amount-withdrawable?paymentAddress=$xno";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
echo $result;
echo "\n\n$putih ";
system("date");
sleep(60);
}
//$auto_tarik = explode('<div style="margin-top:16px;margin-bottom:8px" id="withdraw">', $result);
//$auto_tarik1 = explode('<br/>', $auto_tarik[1]);
//echo $auto_tarik1[0];
