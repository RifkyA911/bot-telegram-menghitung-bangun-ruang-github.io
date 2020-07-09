<?php
// Setting token bot API
// Token didapatkan dari melakukan pembuatan bot pada BotFather ditelegram
$botToken = "857676443:AAG8OByR5grpIppaZFab5CsecomW7reTd5s";
$IdBot = "Bangun11_bot";
// Base Url untuk mengakses API dari telegram bot
$website = "https://api.telegram.org/bot".$botToken;
// Mengambil informasi dari webhook, informasi yang didapat akan diparse dan dimasukkan kedalam variable $message
$content = file_get_contents("php://input");
$update = json_decode($content, TRUE);
$message = $update["message"];
// Beberapa variable yang dibutuhkan dalam proses auto responder
// Mengambil unique chat id dari tiap user
$chatId = $message["chat"]["id"];
// Mengambil text message yang dikirmkan oleh user
$key= $message["text"];
    sscanf($key, '/volume_kubus_%[0-9,]', $sisi);
        $hasil1=(int)$sisi*(int)$sisi*(int)$sisi;
        $sisi=strval($sisi);
    sscanf($key,'/volume_balok_%[0-9,]_%[0-9,]_%[0-9,]',$panjang,$lebar,$tinggi);
        $hasil2=(int)$panjang*(int)$lebar*(int)$tinggi;
        $panjang=strval($panjang);
        $lebar=strval($lebar);
        $tinggi=strval($tinggi);
    sscanf($key,'/volume_bola_%[0-9,]',$jari2);
        $hasil3=4/3*22/7*(int)$jari2*(int)$jari2*(int)$jari2;
        $jari2=strval($jari2);
    sscanf($key,'/volume_tabung_%[0-9,]_%[0-9,]',$jari2,$tinggi);
        $hasil4=22/7*(int)$jari2*(int)$jari2*(int)$tinggi;
        $jari2=strval($jari2);
        $tinggi=strval($tinggi);
    sscanf($key,'/volume_kerucut_%[0-9,]_%[0-9,]',$jari2,$tinggi);
        $hasil5=1/3*22/7*(int)$jari2*(int)$jari2*(int)$tinggi;
        $jari2=strval($jari2);
        $tinggi=strval($tinggi);
    sscanf($key,'/volume_prisma_segitiga_%[0-9]_%[0-9,]_%[0-9,]',$panjang,$luas,$tinggi);
        $hasil6=(int)1/2*$panjang*(int)$luas*(int)$tinggi;
        $panjang=strval($panjang);
        $luas=strval($luas);
        $tinggi=strval($tinggi);
    sscanf($key,'/volume_limas_segitiga_%[0-9,]_%[0-9,]_%[0-9,]',$a,$b,$tinggi);
        $hasil7=1/3*(1/2*(int)$a*(int)$b)*(int)$tinggi;
        $a=strval($a);
        $b=strval($b);
        $tinggi=strval($tinggi);
    sscanf($key, '/diagonal_ruang_balok_%[0-9,]_%[0-9,]_%[0-9,]',$panjang,$lebar,$tinggi);
        $hasil8=sqrt((int)$panjang*(int)$panjang+(int)$lebar*(int)$lebar+(int)$tinggi*(int)$tinggi);
        $panjang=strval($panjang);
        $lebar=strval($lebar);
        $tinggi=strval($tinggi);
    sscanf($key, '/luas_permukaan_kubus_%[0-9,]', $sisi);
        $hasil9=6*((int)$sisi*(int)$sisi);
        $sisi=strval($sisi);
    sscanf($key,'/luas_permukaan_balok_%[0-9,]_%[0-9,]_%[0-9,]',$panjang,$lebar,$tinggi);
        $hasil10=(2*(int)$panjang*(int)$lebar)+(2*(int)$panjang*(int)$tinggi)+(2*(int)$lebar*(int)$tinggi);
        $panjang=strval($panjang);
        $lebar=strval($lebar);
        $tinggi=strval($tinggi);
    sscanf($key,'/luas_permukaan_bola_%[0-9,]',$jari2);
        $hasil11=4*22/7*(int)$jari2*(int)$jari2;
        $jari2=strval($jari2);
    sscanf($key,'/volume_limas_segiempat_%[0-9,]_%[0-9,]',$sisi,$tinggi);
        $hasil12=1/3*(int)$sisi*(int)$sisi*(int)$tinggi;
        $sisi=strval($sisi);
        $tinggi=strval($tinggi);
    sscanf($key,'/luas_alas_tabung_%[0-9,]',$jari2);
        $hasil13=22/7*(int)$jari2*(int)$jari2;
        $jari2=strval($jari2);
    sscanf($key,'/luas_permukaan_kerucut_%[0-9,]_%[0-9,]',$jari2,$sisi);
        $hasil14=(22/7*(int)$jari2*(int)$jari2)+(22/7*(int)$jari2*(int)$sisi);
        $jari2=strval($jari2);
        $sisi=strval($sisi);
    sscanf($key,'/luas_alas_prisma_segitiga_%[0-9,]_%[0-9,]',$alas,$tinggi);
        $hasil15=1/2*(int)$alas*(int)$tinggi;
        $alas=strval($alas);
        $tinggi=strval($tinggi);
    sscanf($key,'/luas_selubung_limas_segiempat_%[0-9,]_%[0-9,]',$alas,$tinggi);
        $hasil16=4*(1/2*(int)$alas*(int)$tinggi);
        $alas=strval($alas);
        $tinggi=strval($tinggi);
    sscanf($key,'/keliling_alas_prisma_segitiga_%[0-9,]',$sisi);
        $hasil17=3*((int)$sisi+(int)$sisi+(int)$sisi);
        $sisi=strval($sisi);
    sscanf($key,'/luas_alas_primsa_segitiga_%[0-9,]_%[0-9,]',$alas,$tinggi);
        $hasil18=1/2*(int)$alas*(int)$tinggi;
        $alas=strval($alas);
        $tinggi=strval($tinggi); 
    sscanf($key,'/luas_alas_limas_segitiga_%[0-9,]_%[0-9,]',$alas,$tinggi);
        $hasil19=1/2*(int)$alas*(int)$tinggi;
        $alas=strval($alas);
        $tinggi=strval($tinggi);
    sscanf($key,'/luas_selubung_limas_segitiga_%[0-9,]_%[0-9,]',$alas,$tinggi);
        $hasil20=(1/2*(int)$alas*(int)$tinggi)*4;
        $alas=strval($alas);
        $tinggi=strval($tinggi);
        
/*fungsi urlecode mengkonvert karakter agsr \n terbaca*/
if ($key=="/start"){
sendmessage($chatId,urlencode(" 📌 Bot Kalkulator Hitung Volume Bangun Ruang 📌 \n 🔑 Silahkan pilih salah satu command yang tersedia dengan cara mengetik format command bot dengan 🔑\n /(rumus)_(nilai) dibawah ini:
            
1. 🧾/volume_kubus_[ sisi ]\n 
2. 🧾/volume_balok_[ panjang ]_[ lebar ]_[ tinggi ]\n
3. 🧾/volume_bola_[ jari-jari ]\n
4. 🧾/volume_tabung_[ jari-jari ]_[ tinggi ]\n
5. 🧾/volume_kerucut_[ jari-jari ]_[ tinggi ]\n
6. 🧾/volume_prisma_segitiga_[ panjang ]_[ luas ]_[ tinggi ]\n
7. 🧾/volume_limas_segitiga_[ sisi a ]_[sisi b]_[tinggi]\n
8. 🧾/volume_limas_segiempat_[sisi]_[tinggi]\n
9. 🧾/diagonal_ruang_balok_[panjang]_[lebar]_[tinggi]\n
10. 🧾/luas_permukaan_kubus_[sisi]\n
11. 🧾/luas_permukaan_balok_[panjang]_[lebar]_[tinggi]\n
12. 🧾/luas_permukaan_bola_[jari-jari]\n
13. 🧾/luas_alas_tabung_[jari-jari]\n
14. 🧾/luas_permukaan_kerucut_[jari-jari]_[sisi]\n
15. 🧾/luas_alas_prisma_segitiga_[alas]_[tinggi]\n
16. 🧾/luas_selubung_limas_segiempat_[alas]_[tinggi]\n
17. 🧾/keliling_alas_prisma_segitiga_[sisi]\n
18. 🧾/luas_alas_prisma_segitiga_[alas]_[tinggi]\n
19. 🧾/luas_alas_limas_segitiga_[alas]_[tinggi]\n
20. 🧾/luas_selubung_limas_segitiga_[alas]_[tinggi]\n"));
        }
elseif ($key=="/volume_kubus_".$sisi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : \n
    Sisi = $sisi\n
 🍎 Ditanya :\n
    Volume Kubus ?\n
 ✅ Jawab :\n
    Volume Kubus = sisi x sisi x sisi\n
    Volume Kubus = $hasil1\n
    sumber referensi :\n
    https://id.wikipedia.org/wiki/Kubus"));
    }
elseif ($key=="/volume_balok_".$panjang."_".$lebar."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : \n
    Panjang = $panjang\n
    Lebar = $lebar\n
    Tinggi = $tinggi\n
 🍎 Ditanya : \n
    Volume Balok ?\n
 ✅ Jawab : \n
    Volume Balok = panjang x lebar x tinggi\n
    Volume Balok = $hasil2\n
    sumber referensi :\n
    https://id.wikipedia.org/wiki/Balok"));
    }
elseif ($key=="/volume_bola_".$jari2) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : \n
    Jari-Jari = $jari2\n
 🍎 Ditanya : \n
    Volume Bola ?\n
 ✅ Jawab : \n
    Volume bola = 4/3 x 22/7 x jari-jari x jari-jari x jari-jari\n
    Volume bola = $hasil3\n
    sumber referensi :\n
    https://id.wikipedia.org/wiki/Volume"));
    }
elseif ($key=="/volume_tabung_".$jari2."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : \n
    Jari-Jari = $jari2 \n
    Tinggi = $tinggi \n
 🍎 Ditanya : \n
    Volume Tabung ? \n
 ✅ Jawab : \n
    Volume Tabung = 22/7 * jari2 * jari2 * tinggi\n
    Volume Tabung = $hasil4\n
    sumber referensi : 
    https://id.wikipedia.org/wiki/Volume"));
    }
elseif ($key=="/volume_kerucut_".$jari2."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : \n
    Jari-Jari = $jari2\n
    Tinggi = $tinggi\n
 🍎 Ditanya : \n
    Kerucut ?\n
 ✅ Jawab :\n
    Volume Kerucut = 1/3 * 22/7 * jari2 * jari2 * tinggi\n
    Volume Kerucut = $hasil5 \n
    sumber referensi : \n
    https://id.wikipedia.org/wiki/Volume"));
    }
elseif ($key=="/volume_prisma_segitiga_".$panjang."_".$luas."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : ️\n
    Panjang = $panjang.\n
    Tinggi = $tinggi.\n
    Luas = $luas.\n
 🍎 Ditanya : \n
    volume prisma segitiga ?\n
 ✅ Jawab : \n
    Volume prisma segitiga = 1/2 * panjang * luas * tinggi\n
    Volume prisma segitiga =$hasil6\n
    sumber refrensi : \n
    https://id.wikipedia.org/wiki/Volume"));
    }
elseif ($key=="/volume_limas_segitiga_".$a."_".$b."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : ️\n
    sisi a = $a \n
    sisi b = $b \n
    Tinggi = $tinggi \n
 🍎 Ditanya : \n
    Volume limas segitiga ? \n
 ✅ Jawab : \n
    Volume limas segitiga = 1/3 * (1/2 * a * b) * tinggi \n
    Volume limas segitiga = $hasil7 \n
    sumber refrensi : \n
    https://id.wikipedia.org/wiki/Volume"));
    }
elseif ($key=="/diagonal_ruang_balok_".$panjang."_".$lebar."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : ️\n
    Panjang = $panjang.\n
    Lebar = $lebar.\n
    Tinggi = $tinggi.\n
 🍎  Ditanya : \n
    Diagonal ruang balok ? \n
 ✅ Jawab : \n
    Diagonal ruang balok = √ (panjang * panjang + lebar * lebar + tinggi * tinggi)\n
    Diagonal ruang balok = $hasil8\n
    sumber referensi : \n
    https://id.wikipedia.org/wiki/Balok"));
    }
elseif ($key=="/luas_permukaan_kubus_".$sisi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : ️\n
    Sisi = $sisi\n
 🍎  Ditanya : \n
    luas permukaan Kubus ? \n
 ✅ Jawab : \n
    luas permukaan Kubus = 6 * (sisi * sisi) \n
    luas permukaan Kubus = $hasil9 \n
    sumber referensi : \n
    https://id.wikibooks.org/wiki/Subjek:Matematika/Materi:Luas_permukaan_bangun_ruang"));
    }
elseif ($key=="/luas_permukaan_balok_".$panjang."_".$lebar."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : ️\n
    Panjang = $panjang\n
    Lebar = $lebar\n
    Tinggi = $tinggi\n
 🍎  Ditanya :\n
    luas permukaan balok ? \n
 ✅ Jawab : \n
    luas permukaan balok = (2 * panjang * lebar) + (2 * panjang * tinggi) + (2 * lebar * tinggi)\n
    luas permukaan balok = $hasil10 \n
    sumber referensi : \n
    https://www.rumusmatematika.org/2017/10/rumus-luas-permukaan-balok-dan-contoh-soalnya.html"));
    }
elseif ($key=="/luas_permukaan_bola_".$jari2) {
sendmessage($chatId,urlencode(
"🍏️ Diketahui : ️\n
    jari-jari = $jari2\n
 🍎  Ditanya :\n
    luas permukaan Bola ?\n
 ✅ Jawab :\n
    luas permukaan Bola = 4 * 22/7 *  jari-jari * jari-jari\n
    luas permukaan Bola = $hasil11\n
    sumber referensi : \n
    http://www.wikirumus.com/rumus-volume-dan-luas-permukaan-bola/"));
    }
elseif ($key=="/volume_limas_segiempat_".$sisi."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏️ Diketahui : ️\n
    Sisi = $sisi.\n
    Tinggi = $tinggi.\n
 🍎  Ditanya : \n
    volume limas segiempat ? \n
 ✅ Jawab : \n
    volume limas segiempat = (22/7 * jari2 * jari2) + (22/7 * jari2 * sisi) \n
    volume limas segiempat = $hasil12\n
    sumber referensi : \n
    http://www.wikirumus.com/rumus-volume-limas-segitiga-segi-empat/"));
    }
elseif ($key=="/luas_alas_tabung_".$jari2) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : \n
    Jari-jari = $jari2 \n
 🍎 Ditanya : \n
    luas alas tabung ? \n
 ✅ Jawab : \n
    luas alas tabung = 1/2 * alas * tinggi \n
    luas alas tabung = $hasil13\n
    sumber referensi : \n
    https://www.rumusmatematika.org/2015/06/rumus-volume-tabung-dan-luas-permukaan.html"));
    }
elseif ($key=="/luas_permukaan_kerucut_".$jari2."_".$sisi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : \n
    Sisi = $sisi \n
    Jari-jari = $jari2 \n
 🍎 Ditanya : \n
    luas permukaan Kerucut ? \n
 ✅ Jawab : \n
    luas permukaan Kerucut = (22/7 * jari2 * jari2) + (22/7 * jari2 * sisi) \n
    luas permukaan Kerucut = $hasil14 \n
    sumber referensi : \n
    https://rumusrumus.com/luas-permukaan-kerucut/"));
    }
elseif ($key=="/luas_alas_prisma_segitiga_".$alas."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏️ Diketahui : \n
    alas = $alas \n
    Tinggi = $tinggi.
 🍎 Ditanya : \n
    luas alas prisma segitiga ? \n
 ✅ Jawab : \n
    luas alas prisma segitiga = 1/2 * alas * tinggi \n
    luas alas prisma segitiga = $hasil15 \n
    sumber referensi : \n
    https://www.rumusmatematika.org/2015/06/rumus-prisma.html?m=1"));
    }
elseif ($key=="/luas_selubung_limas_segiempat_".$alas."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : ️\n
    alas = $alas.\n
    Tinggi = $tinggi.\n
 🍎 Ditanya : \n
    luas selubung limas segiempat ? \n
 ✅ Jawab : \n
    luas selubung limas segiempat = (1/2 * alas * tinggi) * 4 \n
    luas selubung limas segiempat = $hasil16 \n
    sumber referensi : \n
    https://id.wikipedia.org/wiki/Limas"));
    }
elseif ($key=="/keliling_alas_prisma_segitiga_".$sisi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : \n
    Sisi = $sisi\n
 🍎 Ditanya : \n
    keliling alas prisma segitiga ? \n
 ✅ Jawab : \n
    keliling alas prisma segitiga = 3 * (sisi + sisi + sisi) \n
    keliling alas prisma segitiga = $hasil17 \n
    sumber referensi : \n
    https://rumus.co.id/keliling-alas-prisma/"));
    }
elseif ($key=="/luas_alas_primsa_segitiga_".$alas."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏 Diketahui : ️\n
    alas = $alas \n
    Tinggi = $tinggi \n
 🍎 Ditanya : \n
    luas alas prisma segitiga ? \n
 ✅ Jawab : \n
    luas alas prisma segitiga = 1/2 * alas * tinggi \n
    luas alas prisma segitiga = $hasil18 \n
    sumber referensi : \n
    https://www.rumusmatematika.org/2015/06/rumus-prisma.html?m=1"));
    }
elseif ($key=="/luas_alas_limas_segitiga_".$alas."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏️ Diketahui : ️\n
    alas = $alas \n
    Tinggi = $tinggi \n
 🍎 Ditanya :\n
    luas selubung limas segitiga ? \n
 ✅ Jawab : \n
    luas selubung limas segitiga = 1/2 * alas * tinggi \n
    luas selubung limas segitiga = $hasil19 \n
    sumber referensi : \n
    https://www.belajarmtk.com/rumus-volume-limas-segitiga-dan-luas-permukaannya/"));
    }
elseif ($key=="/luas_selubung_limas_segitiga_".$alas."_".$tinggi) {
sendmessage($chatId,urlencode(
"🍏️ Diketahui : ️\n
    alas = alas \n
    Tinggi = $tinggi \n
 🍎 Ditanya :
    luas selubung limas segitiga ? \n
 ✅ Jawab : \n
    luas selubung limas segitiga = (1/2 * alas * tinggi) * 4 \n
    luas selubung limas segitiga = $hasil20\n
    sumber referensi : \n
    https://id.wikipedia.org/wiki/Limas"));
        }
else{
sendmessage($chatId,"❌Command Not Found, kembali ke /start ? ❌");
        }

// Mengirim pesan menggunakan api telegram menggunakan API sendMessage
// ex : https://api.telegram.org/bot[token]/sendmessage?text=[message]]&chat_id=[chatid]]
// file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$balasan);



function sendmessage($s_chatId,$s_message){
	$url = $GLOBALS[website]."/sendmessage?chat_id=".$s_chatId."&text=".$s_message;
	file_get_contents($url);
}
?>