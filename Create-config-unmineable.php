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
[#]$hijau Bot$cyan [>]$hijau Auto Create Config Mining Unmineable$merah
[#]$hijau Date$cyan [>]$hijau 25 Juli 2024, 20:35$merah
[#]$hijau UpDate$cyan [>]$hijau 14 Nov 2025, 07:31$merah
[#]$hijau Lokasi$cyan [>]$hijau Jakarta, Indonesia$biru
[x]$kuning =============================================$biru [x]$hijau
\n\n
";
echo $banner;
sleep(5);
echo "$cyan [_--$hijau Tanpa Nama Worker & Menggunakan Nama Worker$cyan _--]$hijau \n";
echo "$cyan [_--$hijau Auto Membuat config mining$cyan _--]$hijau \n";
echo "$cyan [_--$hijau Kosongkan jika tidak ada Nama Worker langsung ENTER$cyan _--]$hijau \n\n";
echo "$kuning [?]$hijau Masukan nama coin tanpa$cyan : $merah [=>]$putih ";
$coin = trim(fgets(STDIN));
echo "\n";
echo "$kuning [?]$hijau Masukan alamat coin$merah [=>]$putih ";
$addrs = trim(fgets(STDIN));
echo "\n";
echo "$kuning [?]$hijau Masukan server atau url tanpa$cyan : $merah [=>]$putih ";
$url = trim(fgets(STDIN));
echo "\n";
echo "$kuning [?]$hijau Masukan port$merah [=>]$putih ";
$port = trim(fgets(STDIN));
echo "\n";
echo "$kuning [?]$hijau Masukan nama worker tanpa$cyan . $merah [=>]$putih ";
$id = trim(fgets(STDIN));
echo "\n\n";
$reff = "bpl2-23hi";
sleep(1);
echo "$cyan           [_--$hijau RESULT$cyan _--]$hijau \n\n";
echo "$cyan           [_--$hijau Tanpa nama worker$cyan _--]$hijau \n\n";
sleep(1);
echo "$hijau cd xmrig-6.22.2 && ./xmrig -o$putih $url:$port $hijau -a rx -k -u$putih $coin:$addrs#$reff $hijau -p x -t 64 --cpu-priority=5 --cpu-memory-pool=-1 --huge-pages-jit --randomx-mode=fast --randomx-1gb-pages \n\n";
echo "$cyan           [_--$hijau Menggunakan nama worker$cyan _--]$hijau \n\n";
echo "$hijau cd xmrig-6.22.2 && ./xmrig -o$putih $url:$port $hijau -a rx -k -u$putih $coin:$addrs.$id#$reff $hijau-p x -t 64 --cpu-priority=5 --cpu-memory-pool=-1 --huge-pages-jit --randomx-mode=fast --randomx-1gb-pages \n\n";
echo "$biru [-]$ungu Simpan code ini dengan nama run.sh$biru [-] \n\n";
