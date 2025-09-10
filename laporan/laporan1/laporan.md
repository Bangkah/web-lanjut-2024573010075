# Laporan Modul 1: Perkenalan Laravel<br>
**Mata Kuliah:** Workshop Web Lanjut <br> 
**Nama:** Muhammad Dhiyaul Atha <br>
**NIM:** 2024573010075<br>
**Kelas:** TI 2B  

---

## Abstrak 
Laporan ini membahas pengenalan framework Laravel sebagai fondasi dalam pengembangan web modern berbasis PHP. Tujuan dari laporan ini adalah memahami struktur dasar Laravel, komponen utama, serta pola kerja Model-View-Controller (MVC) yang menjadi tulang punggung Laravel.

---

## 1. Pendahuluan
 Laravel adalah framework web PHP yang populer, bersifat open-source, dan dirancang untuk membangun aplikasi web modern yang skalabel dan aman.
Laravel merupakan framework high-level yang bersifat opinionated (punya aturan dan konvensi tertentu). Nanti kita akan bahas lebih detail apa maksudnya. Laravel juga mengikuti arsitektur Model-View-Controller (MVC), yang akan kita pelajari lebih lanjut, dengan tujuan mempermudah sekaligus membuat proses pengembangan menjadi lebih efisien dan menyenangkan.
### Apa Itu Laravel?

Laravel adalah framework web PHP yang populer, bersifat open-source, dan dirancang untuk membangun aplikasi web modern yang skalabel dan aman.
Laravel merupakan framework high-level yang bersifat opinionated (punya aturan dan konvensi tertentu). Nanti kita akan bahas lebih detail apa maksudnya. Laravel juga mengikuti arsitektur Model-View-Controller (MVC), yang akan kita pelajari lebih lanjut, dengan tujuan mempermudah sekaligus membuat proses pengembangan menjadi lebih efisien dan menyenangkan.

Bagi yang belum familiar, framework web adalah kumpulan pustaka (library) dan alat (tools) yang membantu pengembang membangun aplikasi lebih cepat dengan menyediakan fitur-fitur umum seperti:

Routing
Manajemen basis data
Autentikasi (authentication)

Laravel dibuat oleh Taylor Otwell pada tahun 2011 dan hingga kini menjadi salah satu framework PHP paling populer di dunia. Laravel dikenal karena:

Sintaks yang ekspresif dan elegan
Fitur yang lengkap dan kuat
Komunitas yang aktif

Laravel digunakan oleh pengembang di seluruh dunia untuk membangun berbagai jenis aplikasi, mulai dari blog sederhana hingga sistem perusahaan yang kompleks.

Biasanya, saat orang belajar PHP, ada dua jalur umum:

Belajar WordPress → Cocok untuk website berbasis konten atau blog
Belajar Laravel → Cocok untuk aplikasi yang kompleks

Tidak ada larangan untuk mempelajari keduanya.
- Karakteristik utama (MVC, opinionated, dsb.)
- Untuk jenis aplikasi apa Laravel cocok?

---

## 2. Komponen Utama Laravel
- Blade (templating): Blade adalah engine templating Laravel yang memungkinkan penulisan tampilan HTML dengan sintaks sederhana dan fleksibel, serta mendukung inheritance antar layout.

- Eloquent (ORM): Eloquent adalah Object-Relational Mapping Laravel yang memudahkan interaksi dengan database melalui model PHP, tanpa perlu menulis query SQL secara langsung.

- Routing: Routing berfungsi untuk menentukan respon terhadap permintaan URL tertentu, mengarahkan request ke fungsi atau controller yang sesuai.

- Controllers: Controller adalah komponen yang menjembatani antara model dan view, berisi logika untuk memproses permintaan dari pengguna.

- Migrations & Seeders: Migrations digunakan untuk mengelola struktur tabel database secara versioned, sedangkan seeders digunakan untuk mengisi data awal ke dalam tabel.

- Artisan CLI: Artisan adalah command line interface Laravel yang menyediakan berbagai perintah untuk mempercepat pengembangan, seperti membuat controller, migration, dan menjalankan server lokal.

- Testing (PHPUnit): Laravel terintegrasi dengan PHPUnit untuk melakukan testing otomatis terhadap aplikasi, baik untuk unit testing maupun feature testing.


---

## 3. Berikan penjelasan untuk setiap folder dan files yang ada didalam struktur sebuah project laravel.
app/ – kode aplikasi (Models, Controllers, Middleware)

bootstrap/ – bootstrap & konfigurasi awal

config/ – file konfigurasi aplikasi (database, mail, cache...)

database/ – migrasi, factories, seeders

public/ – akses publik (index.php, assets)

resources/ – Blade templates, bahasa, asset frontend

routes/ – definisi routing (web.php, api.php)

storage/ – cache, log, session, file unggahan

tests/ – file pengujian aplikasi

vendor/ – dependency dari Composer

.env – konfigurasi environment sensitif

---

## 4. Diagram MVC dan Cara kerjanya

> Letakkan gambar di dalam folder `laporan1/gambar/`. Kemudian masukkan gambar tersebut ke laporan. 

lihat cara nya disini https://www.ulas.in/komputer/markdown-memasukkan-gambar/

---

## 6. Kelebihan & Kekurangan (refleksi singkat)
Kelebihan Laravel:

Sintaks ekspresif dan elegan, fitur lengkap, serta komunitas yang aktif 
HackMD
.

Opinionated framework: menyediakan banyak fitur bawaan (routing, ORM, keamanan, dll) sehingga pengembangan jadi lebih cepat dan konsisten 
HackMD
.

Tantangan bagi Pemula:

Banyak fitur dan kompleksitas bisa membingungkan jika baru mengenal OOP atau konsep MVC.

Struktur project dan konvensi Laravel yang ketat dapat terasa membatasi bagi yang terbiasa dengan kebebasan penuh dalam coding.
---

## 7. Referensi
Modul 1 – Introduction to Laravel (HackMD) — https://hackmd.io/@mohdrzu/By0Wc1Dule

---