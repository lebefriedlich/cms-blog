# CMS BLOG - Wonderful Pasuruan

CMS BLOG - Wonderful Pasuruan adalah sebuah platform blog yang bertujuan untuk menyoroti keindahan dan kekayaan budaya kota/kabupaten Pasuruan. Melalui artikel dan konten visual yang menarik, kami berkomitmen untuk mengenalkan berbagai aspek dari Pasuruan kepada audiens yang lebih luas.

## Cara Menggunakan

1. **Clone Project github**
   - Buka terminal dan arahkan ke direktori localhost (Pakai Laragon: di folder www. Pakai XAMPP: di folder htdocs)
   - kemudian ketik
     ```
     git clone https://github.com/lebefriedlich/cms-blog.git
     ```
    
2. **Impor Database ke Manajemen Basis Data**
   - Buka manajemen basis data (seperti phpMyAdmin atau HeidiSQL) dan buat basis data baru (untuk namanya saya sarankan cms-blog).
   - Impor file database yang ada di folder projek yang namanya cms-blog.sql.
     
4. **Konfigurasi Database:**
   - Buka file `config.php` di dalam proyek Anda dibagian app->config->config.php.
     
   ![image](https://github.com/lebefriedlich/cms-blog/assets/117328752/1b9bf902-9729-4f9b-ae34-085bd4ee0a3c)

   - BASEURL : alamat URL nya
   - DB_HOST : nama host database
   - DB_USER : nama user database
   - DB_PASS : password database
   - DB_NAME : nama databasenya

5. **Informasi Akun Admin:**
   - Setelah mengonfigurasi database, Anda akan memerlukan informasi login admin.
   - Gunakan informasi berikut untuk mengakses akun admin:

   Akun 1
   - Email: noval.akbar.906@gmail.com
   - Password: 123456
  
   Akun 2
   - Email: maulanahaekal@gmail.com
   - Password: 123456
  
   Akun 3
   - Email: haidar@gmail.com
   - Password: 123456

6. **Route**
   - Aplikasi ini menggunakan sistem routing untuk menentukan controller dan method berdasarkan URL yang diberikan. Berikut adalah penjelasan mengenai beberapa route yang tersedia:
   
   - Halaman Pengunjung Blog
        - URL: /home
        - Deskripsi: Mengarahkan ke halaman utama untuk pengunjung blog.
        - Controller: home
        - Method: index
   
   - Halaman pengelola konten
        - URL: /login
        - Deskripsi: Halaman login untuk pengelola konten.
        - Controller: login
        - Method: index

   - Format URL itu http://localhost/**folder**/public/**controller**/**method**/**parameter**
      
## Kontribusi
Kontribusi selalu dipersilakan! Jika Anda ingin meningkatkan proyek ini, silakan buka *issue* untuk mendiskusikan perubahan yang ingin Anda usulkan atau kirimkan *pull request*.

## Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT. Silakan lihat [LICENSE](LICENSE) untuk detail lebih lanjut.
