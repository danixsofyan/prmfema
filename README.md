# prmfema
Aplikasi E-votting federasi mahasiswa

# Screenshoot Tampilan User
![screen shot 2018-05-03 at 16 39 42](https://user-images.githubusercontent.com/6905354/39570079-5ac1be64-4ef1-11e8-9e4d-eff1679ff45e.png)
![screen shot 2018-05-03 at 16 40 57](https://user-images.githubusercontent.com/6905354/39570080-5af1ec1a-4ef1-11e8-8ab8-d1233f8b92dd.png)
![screen shot 2018-05-03 at 16 41 54](https://user-images.githubusercontent.com/6905354/39570081-5b1fa4f2-4ef1-11e8-9a0f-1cb11d09edfc.png)
![screen shot 2018-05-03 at 16 42 04](https://user-images.githubusercontent.com/6905354/39570082-5b4bb420-4ef1-11e8-91f9-286bb0de80ae.png)

# Screenshoot Tampilan Admin
![screen shot 2018-05-03 at 16 44 13](https://user-images.githubusercontent.com/6905354/39570265-f8fb90fa-4ef1-11e8-8729-047bf46f61d0.png)
![screen shot 2018-05-03 at 16 44 29](https://user-images.githubusercontent.com/6905354/39570266-f9707154-4ef1-11e8-8dce-18a044a6ea0c.png)
![screen shot 2018-05-03 at 16 44 45](https://user-images.githubusercontent.com/6905354/39570268-f99d2f00-4ef1-11e8-8f72-46440b9cae1e.png)

#Cara Penggunaan
Perangkat yang diperlukan:
1. komputer server
2. accses point
3. user untuk voting (disesuaikan jumlah bilik suara)
Syarat komputer server:
Sudah terinstall aplikasi webserver (XAMPP / MAPP)
Syarat komputer klien:
Sudah terinstall browser (chrome, mozila)
Konfigurasi aplikasi PRM di computer server
1. Simpan folder aplikasi “prmfema” dalam folder htdocs webservernya
2. Jalankan webserver (XAMPP / MAPP)
3. Buat database melalui phpmyadmin bernama “db_prm_fema” lalu Import file
databasenya http://localhost/phpmyadmin/
4. sesuaikan settingan koneksi database di file database.php
lokasi file : prm/application/config/database.php sesuaikan user dan password koneksi database DEFAULT KONEKSI XAMPP:
U: root
P: (tanpa password)
KONEKSI MAMP: U: root
P: root
Setalah database berhasil diimport, coba jalankan aplikasi
http://localhost/prmfema/ (sesuaikan dengan nama folder) Seting ip addres laptop server menjadi statis:
192.168.1.1
Seting laptop client
1. Untuk menjalankan aplikasi prm dari client pastikan semua computer sudah terkoneksi ke accses point
2. Buka browser dan ketikan http://192.168.1.1/prmfema (sesuaikan dengan nama folder)
3. Aplikasi siap digunakan