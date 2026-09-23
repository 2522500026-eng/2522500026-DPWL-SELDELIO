# pertemuan-01


**NAMA : SELDELIO** <br>
**NIM  : 2522500026** <br>
**KELAS: DPWL SI3A**

1. kesinambungan PWD–DPW–DPWL
2. perbedaan PHP terstruktur dan MVC
3. fungsi Model, View, dan Controller
4. alur request–response MVC
5. pemetaan satu atau beberapa bagian/fitur aplikasi DPW ke Model, Controller, dan View disertai alasan 
6. kesimpulan P1. <br>

 **jawaban** 

1. Ketiga tahapan ini sangat berkesinambungan dikerenakan pwd mengajarkan kita fondasi untuk membuat kerangka HTML dan CSS biar web bisa terwujud. lanjut ke desain pemrograman web tampilannya dipercantik dan dibuat rapi supaya nyaman dibuka di hp dan laptop, lalu terakhir itu desain pemrograman web lanjutan web dihidupkan pakai javascript modern dan sistem interaktif biar berfungsi penuh seperti aplikasi beneran.

2.  PHP terstruktur itu ibarat nulis kode dari atas ke bawah dalam satu file, jadi logika dan tampilannya campur aduk. Cocok buat pemula atau project kecil, tapi bakal berantakan kalau aplikasinya besar.
Sebaliknya, MVC memisahkan kode jadi tiga bagian: Model (data/database), View (tampilan), dan Controller (penghubung). Hasilnya, kodenya jauh lebih rapi, gampang dirawat, dan aman buat project skala besar.

3. Model: Berfungsi sebagai "gudang data" dan otak pengolah database. Tugasnya ngambil, nyimpen, atau nge-update data dari database (misalnya ngecek data user atau nambahin produk baru) tanpa peduli gimana data itu nanti ditampilin.
View: Berfungsi sebagai "wajah" atau antarmuka yang kelihatan sama pengguna. Tugasnya murni buat nampilin visual, teks, tombol, dan form (HTML/CSS) ke layar user.
Controller: Berfungsi sebagai "makelar" atau jembatan penghubung. Tugasnya nerima klik atau inputan dari user di View, minta data yang dibutuhin ke Model, terus ngirim balik datanya ke View buat ditampilin lagi.

4. Berikut adalah langkah-langkah detail bagaimana sebuah request diproses hingga menghasilkan response dalam arsitektur MVC:

-  Pengguna Mengirim Request
Pengguna berinteraksi dengan aplikasi melalui peramban (browser)—misalnya dengan mengklik sebuah tautan, mengirim formulir (form), atau mengakses URL tertentu ). Tindakan ini menghasilkan HTTP Request yang dikirim ke server.

-  Routing Menerima Request
Server menerima request tersebut dan meneruskannya ke komponen Router. Router bertugas mencocokkan URL yang diminta dengan fungsi atau controller yang sesuai berdasarkan aturan rute (routes) yang telah didefinisikan.

-  Controller Memproses Request
Setelah rute cocok, router memanggil Controller yang bersangkutan. Controller menerima request tersebut dan bertindak sebagai pengatur lalu lintas:
Jika memerlukan data, controller akan memanggil Model.
Jika hanya menampilkan halaman statis, controller bisa langsung menyiapkan view.

-  Model Berkomunikasi dengan Database
Jika controller meminta data (misalnya data profil pengguna dari database), Model akan menjalankan logika bisnis, mengambil data tersebut dari database, memprosesnya, lalu mengembalikannya ke controller.

-  Controller Meneruskan Data ke View
Controller menerima data yang sudah disiapkan oleh Model. Selanjutnya, controller memilih file View yang tepat dan menyertakan data tersebut ke dalamnya.

- View Merender Tampilan
Komponen View menerima data dari controller, lalu merender atau menggabungkannya ke dalam format HTML/CSS/JS sehingga menjadi halaman antarmuka yang siap dibaca oleh manusia.

- Server Mengirimkan Response
View yang sudah dirender dikembalikan oleh controller ke server, kemudian server mengirimkannya kembali ke peramban pengguna sebagai HTTP Response. Pengguna pun akhirnya dapat melihat halaman web yang diminta.

5. pemetaan :<br>
- Model: Bertugas sebagai pengelola struktur tabel dan koneksi ke database untuk menyimpan data anggota DPW (seperti nama, jabatan, dan wilayah). Alasannya, semua urusan query, validasi data mentah, dan komunikasi dengan database harus terisolasi di sini supaya aman dan rapi.

- Controller: Berfungsi sebagai otak penengah yang nangkep request pas anggota mau lihat atau update profil. Alasannya, controller yang nanti ngecek logika apakah user ini berhak akses, nyuruh model buat ambil data, terus lempar hasilnya ke view.

- View: Berbentuk halaman antarmuka web (HTML/Blade) yang nampilin data profil anggota ke layar. Alasannya, komponen ini murni cuma buat urusan visual dan desain tampilan biar gampang dibaca, tanpa ikut-ikutan ngurusin logika atau database."

6. "Kesimpulannya untuk materi Pertemuan 1 (P1) ini, pemahaman tentang konsep dasar arsitektur MVC sangat penting untuk menggantikan gaya ngoding PHP terstruktur yang berantakan. Dengan pemisahan tugas yang jelas lewat Model, View, dan Controller, serta pemahaman alur request-response dan penerapannya di fitur aplikasi seperti DPW, kita jadi punya pondasi yang kuat buat bikin aplikasi web yang jauh lebih rapi, aman, dan gampang dikembangkan ke depannya"