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
[#]$hijau Bot$cyan [>]$hijau Auto Install Berkas Mining Nanswap|XNO$merah
[#]$hijau Date$cyan [>]$hijau 25 Juli 2024, 20:35$merah
[#]$hijau UpDate$cyan [>]$hijau 13 Okt 2025, 07:31$merah
[#]$hijau Lokasi$cyan [>]$hijau Jakarta, Indonesia$biru
[x]$kuning =============================================$biru [x]$hijau
\n\n
";

echo $banner;
sleep(5);

echo "$cyan [_--$hijau Auto Membuat config.json$cyan _--]$hijau \n";
echo "$cyan [_--$hijau Auto install xmrig$cyan _--]$hijau \n";


echo "$cyan           [_--$hijau RESULT$cyan _--]$hijau \n\n";

$a = shell_exec("wget https://pastebin.com/raw/jyz9YArk && cp jyz9YArk config.json && rm -rf jyz9YArk && clear && wget https://github.com/xmrig/xmrig/releases/download/v6.22.2/xmrig-6.22.2-linux-static-x64.tar.gz && tar -xvf xmrig-6.22.2-linux-static-x64.tar.gz && rm -rf xmrig-6.22.2-linux-static-x64.tar.gz && clear && cd xmrig-6.22.2 && rm -rf config.json");
echo $a;

$a1 = shell_exec("mv config.json xmrig-6.22.2");
echo $a1;

echo "\n\n";
echo "$biru [-]$hijau Install Berkas Selesai !!$biru [-] \n\n";
echo "$biru [-]$ungu edit manual config.json dan ganti user sesuai alamat atau address xno kalian$biru [-] \n\n";
