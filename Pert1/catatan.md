# Tugas :
1. buat home
2. buat profile 
=================================================================================
# PEMBWEB PERT 1 :
setiap pertemuan ada Analisa (5w + 1H dan SWOT),  

pembahasan project =
project uts bikin company profile


pembahasan website =
website punya addres / identitas / domain
- apa itu website : Website adalah sekumpulan halaman yang saling terhubung dan dapat diakses melalui internet menggunakan browser. 
- Website dibuat oleh web developer, desainer, atau pemilik bisnis/personal yang ingin  membagikan informasi, produk, atau layanan.
- Website digunakan kapan saja selama 24 jam, tergantung kebutuhan pengguna. Misalnya:
Untuk belanja online: saat ingin membeli barang.
Untuk belajar: kapan pun dibutuhkan materi atau referensi.
Untuk promosi bisnis: sepanjang waktu untuk menjangkau pelanggan.
- Website bisa diakses dari mana saja asalkan perangkat terhubung ke internet. Bisa dari rumah, kantor, sekolah, atau bahkan tempat umum.
- Website bekerja dengan cara:
1. Disimpan di web server (hosting).
2. Diakses lewat nama domain (misalnya google.com).
3. Ketika pengguna mengetik alamat website, browser akan mengirim permintaan ke server.
4. Server mengirimkan halaman web ke browser pengguna.
5. Browser menampilkan isi website ke layar pengguna.


apa itu html : 
==================================================================================
# docker-compose
version: '3' # versi terbari dockernya

services:
  web:
    image: nginx:latest
    ports:
    - 80:80 #ini harus sesuai dengan nignx, 80 depan buat di os yang blakang buat docker
    volumes: #tempat diamana kita naro volume nya
    - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf #ini buat di os
    - ./src/index.html:/usr/share/nginx/html #ini buat di docker

==================================================================================
# tag html :
* <title> untuk judul 
* <link rel="stylesheet" href="styles.css"> = untuk menghubungkan ke link, ini di hubungkan ke styles.css.
* <body> bagian badan/badan dari website tersebut
* <div></div> fungsinya untuk memisahkan ibarat kata garis baru
* class digunakan unutk menghubungkan contoh <div class="judul"> bla bla bla</div>
* tag a digunakan untuk link contoh penggunaan: 
    <body><p>Ini Halaman Website Universitas Esa Unggul</p>
    <a href="https://www.esaunggul.ac.id" target="_blank">Kunjungi Halaman</a></body> 
* tag h unutk untuk judul biasanya contoh : <h1>Main Heading (h1)</h1>
* tag from untuk menyertakan link 
=================================================================================


