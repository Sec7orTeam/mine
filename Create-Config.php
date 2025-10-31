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
[#]$hijau Bot$cyan [>]$hijau Auto Create Config Mining Nanswap|XNO$merah
[#]$hijau Date$cyan [>]$hijau 25 Juli 2024, 20:35$merah
[#]$hijau UpDate$cyan [>]$hijau 13 Okt 2025, 07:31$merah
[#]$hijau Lokasi$cyan [>]$hijau Jakarta, Indonesia$biru
[x]$kuning =============================================$biru [x]$hijau
\n\n
";

echo $banner;
sleep(5);

echo "$cyan [_--$hijau Tanpa API key & Menggunakan API key$cyan _--]$hijau \n";
echo "$cyan [_--$hijau Auto Membuat config mining$cyan _--]$hijau \n";
echo "$cyan [_--$hijau Kosongkan jika tidak ada API key langsung ENTER$cyan _--]$hijau \n\n";

echo "$kuning [?]$hijau Masukan alamat XNO$merah [=>]$putih ";
$xno = trim(fgets(STDIN));
echo "\n";
echo "$kuning [?]$hijau Masukan server atau url$merah [=>]$putih ";
$url = trim(fgets(STDIN));
echo "\n";
echo "$kuning [?]$hijau Masukan port$merah [=>]$putih ";
$port = trim(fgets(STDIN));
echo "\n";
echo "$kuning [?]$hijau Masukan API key$merah [=>]$putih ";
$id = trim(fgets(STDIN));
echo "\n\n";

sleep(1);
echo "$cyan           [_--$hijau RESULT$cyan _--]$hijau \n\n";
echo "$cyan           [_--$hijau Tanpa API key$cyan _--]$hijau \n\n";
sleep(1);
echo "cd xmrig-6.22.2 && ./xmrig -o $url:$port -a rx -k -u $xno -p x -t 64 --cpu-priority=5 --cpu-memory-pool=-1 --huge-pages-jit --randomx-mode=fast --randomx-1gb-pages \n\n";

echo "$cyan           [_--$hijau Menggunakan API key$cyan _--]$hijau \n\n";

echo "cd xmrig-6.22.2 && ./xmrig -o $url:$port -a rx -k -u $xno -p x -t 64 --cpu-priority=5 --cpu-memory-pool=-1 --huge-pages-jit --randomx-mode=fast --randomx-1gb-pages --api-id=$id \n\n";

echo "$biru [-]$ungu Simpan code ini dengan nama run.sh$biru [-] \n\n";
