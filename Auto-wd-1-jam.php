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
[#]$hijau Bot$cyan [>]$hijau Auto Penarikan Saldo Mining Nanswap|XNO 1 Jam$merah
[#]$hijau Date$cyan [>]$hijau 25 Juli 2024, 20:35$merah
[#]$hijau UpDate$cyan [>]$hijau 13 Okt 2025, 07:31$merah
[#]$hijau Lokasi$cyan [>]$hijau Jakarta, Indonesia$biru
[x]$kuning =============================================$biru [x]$hijau
\n\n
";

echo $banner;
sleep(5);

echo "$cyan [_--$hijau Auto Penarikan Saldo Mining Nanswap|XNO 1 Jam$cyan _--]$hijau \n\n";

echo "$cyan [?]$ungu Masukan alamat atau address XNO kalian$merah [=>]$putih ";
$xno = trim(fgets(STDIN));

system("clear");

sleep(1);

while(TRUE){
    
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
[#]$hijau Bot$cyan [>]$hijau Auto Penarikan Saldo Mining Nanswap|XNO 1 Jam$merah
[#]$hijau Date$cyan [>]$hijau 25 Juli 2024, 20:35$merah
[#]$hijau UpDate$cyan [>]$hijau 13 Okt 2025, 07:31$merah
[#]$hijau Lokasi$cyan [>]$hijau Jakarta, Indonesia$biru
[x]$kuning =============================================$biru [x]$hijau
\n\n
";

echo $banner;
sleep(5);

echo "$cyan [_--$hijau Auto Penarikan Saldo Mining Nanswap|XNO 1 Jam$cyan _--]$hijau \n\n";

echo "$cyan           [_--$hijau RESULT$cyan _--]$hijau \n\n";
    
$url = "https://api.nanswap.com/withdraw?paymentAddress=$xno";
$data = "paymentAddress: $xno";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
echo "[$] STATUS WD LU [=>] $result \n";
echo "[?] Silakan cek Akun lu saldo sudah di wd semua \n";
echo "[?] Bot ini akan auto wd dalam durasi 1 jam$putih ";
echo "\n\n";

//$url1 = "https://nanswap.com/mining/nano?payment-address=nano_1zx95tfscsakkuntwpjis9k9y848h5qqhn5zodp6e7e55pwb7gp4g7oagqa3";
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, $url1);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$result1 = curl_exec($ch);
//echo $result1;
system("date");
sleep(3600);
echo "\n\n";

    }
