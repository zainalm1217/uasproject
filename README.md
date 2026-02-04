Dokumentasi Struktur Database

Sistem Informasi Manajemen Rumah Sakit

Nama: Zainal Muttaqin
NIM: 20240803112
Keterangan: Proyek Ujian Akhir Semester (UAS)

Dokumentasi ini dibuat untuk menjelaskan struktur database pada Sistem Informasi Manajemen Rumah Sakit. Pembahasan meliputi fungsi tabel serta hubungan antar tabel yang digunakan dalam sistem.

Struktur Tabel

Tabel rumah_sakits
Digunakan untuk menyimpan data utama rumah sakit seperti identitas, alamat, kontak, status, dan tipe rumah sakit. Satu rumah sakit dapat memiliki lebih dari satu poliklinik.

Tabel poli_kliniks
Menyimpan data poliklinik yang berada di rumah sakit. Tabel ini terhubung dengan rumah sakit dan digunakan oleh dokter, jadwal praktek, serta data kunjungan.

Tabel dokters
Berisi data dokter yang meliputi nama, spesialisasi, serta poliklinik tempat praktik. Satu dokter dapat memiliki beberapa jadwal praktek dan melayani banyak kunjungan pasien.

Tabel pasiens
Digunakan untuk menyimpan data identitas pasien. Setiap pasien dapat melakukan lebih dari satu kunjungan dan menerima beberapa resep.

Tabel obats
Menyimpan informasi obat yang tersedia, termasuk nama obat, satuan, dan jumlah stok. Data obat digunakan pada detail resep.

Tabel jadwal_prakteks
Berisi jadwal praktik dokter berdasarkan hari dan jam. Jadwal ini digunakan sebagai acuan dalam pencatatan kunjungan pasien.

Tabel kunjungans
Mencatat data kunjungan pasien ke rumah sakit, termasuk dokter, poliklinik, keluhan, dan diagnosa. Data kunjungan menjadi dasar pembuatan resep.

Tabel reseps
Menyimpan data resep utama yang diberikan kepada pasien berdasarkan kunjungan yang dilakukan.

Tabel resep_details
Berisi rincian obat dalam resep, seperti jenis obat, jumlah, dan aturan pemakaian.

Diagram dan Dashboard

Dashboard Metabase digunakan untuk menampilkan informasi dan analisis data rumah sakit secara visual.

