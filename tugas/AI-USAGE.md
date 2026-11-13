# Dokumentasi Penggunaan AI — Tugas 9

## 1. Tool yang Digunakan
- **Nama Tool:** Gemini AI (sebagai kolaborator AI pribadi)
- **Peran:** Membantu merancang struktur folder modular tanpa file CSS terpisah (`index.php`, `search.php`, `contact.php`, `process.php`, `success.php`), mengimplementasikan logika validasi sisi server, penanganan kode status HTTP (`405`, `422`, `303`), serta teknik *output escaping* untuk mencegah XSS.

## 2. Prompt Penting yang Digunakan
- *"bantu aku kerjakan tugas-9"*
- *"tidak perlu style.css"*
- *"aku butuh script untuk uji validasi, status 405, 422, dan escaping sesuai instruksi tugas-9"*
- *"bantu aku buat AI-USAGE.md"*

## 3. Saran yang Dipakai & Ditolak
- **Saran yang Dipakai:** 
  - Menggunakan struktur file modular yang memisahkan antara halaman form (`contact.php`) dan penanganan logika server (`process.php`) agar alur pengiriman data POST, validasi, dan pengujian Network panel dapat dilakukan secara akurat.
  - Menghindari penggunaan file CSS terpisah demi menjaga fokus pengujian agar tetap murni pada fungsionalitas protokol HTTP dan skrip PHP.
  - Melakukan *debugging* bersama saat menghadapi kendala penamaan direktori (`htdocs`) dan kesalahan pengetikan nama file (*typo* `processt.php` vs `process.php`).
- **Saran yang Ditolak:** Tidak ada saran utama yang ditolak, karena seluruh proses disesuaikan langsung dengan rubrik dan instruksi modul.

## 4. Perubahan yang Dilakukan
- Menyusun validasi input sisi server di `process.php` menggunakan fungsi `empty()` dan `filter_var()` untuk memastikan field wajib terisi dan format email valid.
- Menerapkan fungsi `htmlspecialchars($data, ENT_QUOTES, 'UTF-8')` pada seluruh titik keluaran data untuk mengamankan aplikasi dari celah injeksi skrip (*Cross-Site Scripting* / XSS).
- Mengatur pengiriman kode status HTTP secara manual menggunakan `http_response_code(405)` untuk penolakan method GET pada endpoint POST dan `http_response_code(422)` untuk kegagalan validasi input.
- Mengimplementasikan fungsi `header("Location: success.php", true, 303)` guna memastikan *redirect* setelah POST sukses tercatat sebagai kode status `303 See Other`.

## 5. Pemahaman yang Diperoleh
- Memahami secara mendalam cara kerja protokol HTTP dalam membedakan penggunaan metode **GET** (untuk operasi pembacaan/pencarian data) dan **POST** (untuk pengiriman data formulir).
- Mengetahui cara menangani *error path* dan mengirimkan kode status HTTP secara eksplisit dari sisi server PHP.
- Memahami pentingnya perlindungan *output escaping* sebelum merender data masukan pengguna ke dalam dokumen HTML.
- Terampil melakukan *debugging* lokal melalui *localhost* (XAMPP) serta menganalisis respons server melalui *Network panel* browser.