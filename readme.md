MANUAL INSTALASI


        Game Playstore Reviewer ini berbentuk website yang bertujuan untuk mempermudah pengguna untuk melihat informasi mengenai game-game yang tersedia di playstore.
        
        
API ini dibentuk oleh sekumpulan anggota yang terdiri :
1. Ardhiansyah Artha K.        16/396264/SV/10477
2. Abdullah Azzam A.        17/416337/SV/14075
3. Melania Nur F.         17/410846/SV/12773
4. Talitha Luthfia IP.        17/415533/SV/13398


        Pembentukan API/Service ini dibentuk dalam rangka memenuhi tugas akhir praktikum Integrasi Aplikasi Informasi pada semester genap 2018/2019.

Adapun hal yang perlu dipersiapkan untuk menggunakan aplikasi ini adalah sebagai berikut :

Requirement / Kelengkapan :
1. XAMPP Control Panel v3.2.2
2. MySQL version 10.1.34-MariaDB
3. Apache/2.4.33 (Win32) OpenSSL/1.1.0h PHP/7.2.7 
4. phpMyAdmin version 4.8.2
5. CodeIgniter 3.1.10
6. Link download API : https://github.com/talithaizza/game-reviewer


Setelah user mendownload masing-masing dari syarat kelengkapan tersebut, berikut adalah cara instalasi dan penggunaannya :
1. Letakkan folder game-reviewer pada .htdocs di server XAMPP anda
2. Pindahkan kedua folder ‘game-reviewer-api’ dan ‘rest_ci’ ke dalam direktori .htdocs
3. Buat database berjudul ‘game’ dengan tabel bernama ‘data’ pada phpMyAdmin
4. Buka code editor lalu akses file config.php dalam direktori rest_ci/application/config kemudian rubah baseURI seperti pada kode berikut

        $config['base_url'] = 'http://localhost/rest_ci/';

1. Kemudian buat .htaccess pada root dengan mengikuti kode berikut

        RewriteEngine On
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule ^(.*)$ index.php/$1 [L]

1. Di dalam rest_ci ada fungsi post, get, dan write. Ikuti cara penggunaannya pada file tersebut
2. API ini telah memiliki front-end default pada game-reviewer-api. Jadi silakan edit sesuka kehendak pribadi


Demikian Manual Instalasi ini. Semoga bermanfaat