# latar belakang masalah
kemampuan analisis yang kurang mengakibatkan kurangnya kemampuan untuk mengkomunikasikan data dan teknis, analisis diperlukan untuk melatih kemampuan komunikasi data dengan teknis agar sesuai dengan apa yang di tuju. Maka dari itu atas kekurangan tersebut mahasiswa perlu mengasah kemampuan analisis dimulai dari yang sudah di sampaikan tenaga pengajar ( dosen ) di dalam kelas.

pada pertemuan pertama membahas tentang apa itu docker, cara kerja docker, pembuatan container, dan html dasar. teknik dasar dalam pemograman web yang perlu di pahami untuk pembuatan project baru kedepan nya. kurangnya pengetahuan tentang teknis dasar akan mengakibatkan kebutuan dan tujuan yang tidak sesuai seperti apa yang sudah di rencanakan

# Pembahasan :
1. Docker : Docker adalah sebuah platform kontainerisasi yang memungkinkan pengembang untuk membuat, menguji, dan menjalankan aplikasi dalam kontainer yang ringan dan portabel. cara kerjanya seperti menjadi layer tambahan unutk menampung beberapa program dengan docker compose up.

docker biasanya digunakan oleh para developer, engineer, dan perusahaan teknologi tinggi
docker digunakan pada saat pengembangan karna menyediakan lingkungan yang konsisen. docker dapat dijalankan di berbagai lingkungan seperti leptop dan seerver local, mengapa harus memakai docker ? karena efesiensi, kensistensi, dan kecepatan yang dapat membentu mengembangkan projek projek


2. pembuatan container memerlukan .env sebagai identitas dengan diisi :
COMPOSE_PROJECT_NAME = esgul #nama container di dockernya
REPOSITORY_NAME = pemweb 
IMAGE_TAG=latest 

lalu membuat file docker-compose.yml yang berisikan:
- version (sesuai dengan versi docker yang di gunakan),
- services yang berisikan : web yang didalamnya berisi (container_name),(image),(ports),volumes

3. Html Dasar : pada pertemuan pertama pembelajaran belajar mengenai tag tag dasar html seperti :
- tag a : menyertakan link
- tag h : judul
- tag p : paragraf
- tag img : memasukan gambar
- tag div : untuk memisahkan ibaratkata garis baru
- tag ul&li : untuk list
- tag from : unutk membuat from pengisian

# Analisis Tugas :
1. membuat profile
* latar belakang 
profile adalah suatu halaman yang menampilkan data dari seseorang, profil biasanya berisikan biodata dan foto. 

* Desain :
menggunakan desain html dasar yang simple agar mempermudah dalam penyampaian informasi, informasi yang di tampilkan sebagai berikut :
- nama 
- tempat tanggal lahir
- alamat
- hobi
- foto
- kata kata mutiara

* analisis menggunakan metode 5W + 1H
- what (apa yang di buat) :
halaman profile sederhana menggunakan html
- who (siapa yang menggunakan) :
mahasiswa yang ingin mempromosikan diri melalui website
- when (kapan digunakan) :
digunakan ketika seseorang ingin memberkenalkan disi secara online
- where (dimana digunakan) :
di website local
- why (kenapa dibuat) :
untuk memperkelankan diri secara online dan Sebagai latihan dasar pemrograman web
- how (bagaimana membuatnya) :

2. membuat Home / tampilan utama
* latar belakang 
tampilan utama biasanya berisi informasi informasi yang dibutuhkan untuk menuju halaman halaman tertentu 
* Desain
menggunakan desain yang sangat sederhana hanya menampilkan 2 link hlaman link pertama profil github untuk melihat hasil pekerjaan, link kedua menuju profile biodata
