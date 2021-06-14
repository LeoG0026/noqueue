# NoQ (NoQueue)
![homepage](/images-laporan/user/homepage.jpg)

# Laporan Akhir Projek
- KOM 331 | Rekayasa Perangkat Lunak | P2
- Kelompok 5

# Dibimbing oleh :
- Ali Naufal Ammarullah
- Levina S
- Muhammad Fauzan Ramadhan

# Tim Pengembang NoQ
| Name                   | Nim       | Role            |
| ---------------------- | --------- | --------------- |
| Daffa Muhammad Subhan  | G64190013 | Back-end        |
| Lesy Okviani           | G64190026 | Project Manager |
| Bobby Williams K. Hara | G64190061 | Front-end       |
| Muhammad Jazuli        | G64190081 | UI/UX Designer  |

# Deskripsi Singkat NoQ
NoQ (No Queue) yang berarti "Tanpa Antri" merupakan sebuah aplikasi berbasis web yang bertujuan untuk memungkinkan pengguna bisa mengunjungi restoran tanpa harus mengantri. Aplikasi ini menawarkan pembayaran secara nontunai yang aman dan praktis. Sesuai dengan nama aplikasi ini, NoQ memberikan fitur yang dapat mereservasi tempat duduk tenpa harus datang ke restoran.

# Latar Belakang
Makanan adalah sumber energi manusia, tanpa adanya energi sangat sulit untuk melakukan banyak aktifitas yang memakan banyak waktu. Terkadang semakin banyak pekerjaan dan aktifitas membuat kita tidak memiliki waktu untuk mendapatkan sumber energi tersebut, bahkan saat datang ke sebuah restoran atau tempat makan, seringkali kita dihadapkan dengan antrian yang sangat panjang sehingga kalian harus menunggu atau membawa pulang makanan kalian. Diiringi dengan kemajuan teknologi, manusia semakin dimudahkan dengan adanya teknologi-teknologi tersebut. NoQ hadir untuk menjadi sebuah solusi, memesan makanan serta tempat sebelum datang ke restoran menjadi hal yang mudah dan sangat efisien untuk membantu aktifitas. Tidak perlu mengantrI atau pulang karena restoran tersebut ramai. Hanya dengan hal tersebut, NoQ sangat membantu user dalam membuat aktifitas lebih efisien.

# Tujuan
- Memungkinkan pengguna memesan makanan sebelum datang ke restoran
- Membantu pengguna menghindari antrean saat melakukan pemesanan makanan
- Mempermudah pengguna untuk mereservasi tempat duduk yang tersedia

# User Stories
- Sebagai pengguna yang terdaftar, agar dapat mencari menu makanan yang saya inginkan, saya dapat mencarinya melalui pencarian
- Sebagai pengguna yang telah logout, agar dapat menggunakan aplikasi secara personal, saya dapat login menggunakan alamat email untuk masuk ke aplikasi
- Sebagai pengguna yang tidak mau menunggu lama, agar dapat melakukan pemesanan makanan tanpa antri , saya dapat memesan makanan sebelum datang ke restoran dan mereservasi tempat duduk yang tersedia
- Sebagai pengguna yang terdaftar, agar dapat mengetahui restoran yang digemari banyak orang, saya dapat melihat review pada restoran tersebut
- Sebagai pengguna yang terdaftar, agar saya mengetahui total harga makanan yang saya pesan, saya dapat melihat pada pada **total harga**
- Sebagai pemilik restoran, agar dapat melihat pesanan yang masuk, saya dapat melihat di bagian notifikasi pesanan
- Sebagai pemilik restoran, agar dapat menambahkan dan mengedit menu dan kategori menu makanan, saya dapat menambahkannya di bagian tambah data
- Sebagai pemilik restoran, agar dapat melihat laporan pemesanan, saya dapat melihat di bagian data laporan

# Ruang Lingkup Pengembangan
## Software
|                  |                       |
| ---------------- | --------------------- |
| Operating System | Windows 10, Linux     |
| Text Editor/IDE  | VS Code, Sublime Text |
| Database         | MySQL                 |
| Design           | Figma                 |
| Server           | Apache                |

## Hardware
| <!-- -->      | <!-- -->            |
| ------------- | ------------------- |
| Processor     | Intel Core i5-4210U |
| Graphics Card | Graphics Card       |
| RAM           | 4GB DDR3            |
| Storage       | 1 TB                |

## Tech Stack
| <!-- -->               | <!-- -->                       |
| ---------------------- | ------------------------------ |
| Collaboration Platform | Github                         |
| Project Management     | Trello                         |
| Teknologi              | HTML, CSS, Javascript, dan PHP |

# Hasil dan Pembahasan
## Use Case Diagram
![Usecase Diagram](/images-laporan/usecase.png)

## Activity Diagram
![Activity Diagram](/images-laporan/activity.png)
![Activity-Admin Diagram](/images-laporan/activity-admin.png)

## Entity Relationship Diagram
![ERD](/images-laporan/erd.jpg)

## Arsitektur Sistem
![Arsitektur Aplikasi](/images-laporan/arsitektur_aplikasi.png)

## Fungsi Utama yang Dikembangkan
### User
* Pemesanan makanan
* Edit foto, profil, foto profil
* Memberikan rating pada resto setelah makan di resto
* Sistem pembayaran online wallet
* Memiliki sistem untuk reset password dengan email valid yang telah didaftarkan pada database

### Admin
* Menambah, melihat, dan menghapus kategori menu dan menunya
* Menambah, melihat, dan menghapus meja pada restoran
* Mengubah detail menu
* Melihat dan menghapus order dan detail order

### Superadmin
* Menambah dan melihat lokasi kota pada restoran
* Menambah, melihat, dan mengapus restoran yang terkait pada lokasi restoan
* Menambah,melihat,dan menghapus admin yang terkait pada resto tersebut

## Fungsi CRUD
| Domain Class     | CRUD   | Role                               |
| ---------------- | ------ | ---------------------------------- |
| Restoran (Admin) | Create | Membuat akun                       |
|                  |        | Membuat Kategori dan menu restoran |
|                  |        | Membuat meja restoran              |
|                  | Read   | Membaca pesanan                    |
|                  |        | Membaca pembayaran                 |
|                  |        | Membaca laporan transaksi          |
|                  | Update | Mengubah kategori dan menu         |
|                  |        | Menyelesaikan transaksi            |
|                  | Delete | Menghapus kategori dan menu        |
|                  |        | Menghapus restoran                 |
|                  |        |                                    |
| Superadmin       | Create | Membuat akun                       |
|                  | Read   | Membaca data restoran              |
|                  | Update | Mengubah informasi restoran        |
|                  | Delete | Menghapus restoran                 |
|                  |        |                                    |
| Customer (User)  | Create | Membuat akun                       |
|                  |        | Membuat pesanan                    |
|                  | Read   | Membaca kategori dan menu restoran |
|                  | Update | Melakukan pembayaran               |
|                  |        | Mengubah pemesanan                 |
|                  |        | Mengubah informasi akun            |
|                  | Delete | Menghapus akun                     |

# Hasil Implementasi
## Screenshot Sistem
Dilampirkan screenshot hasil pengembangan perangkat lunak noqueue
### 1. User
![homepage](/images-laporan/user/homepage.jpg)
![profile](/images-laporan/user/profile.jpg)
![meja](/images-laporan/user/meja.jpg)
![menu](/images-laporan/user/menu.jpg)
![pemesanan](/images-laporan/user/pemesanan.jpg)
![review](/images-laporan/user/review.jpg)
![bukti-pembayaran](/images-laporan/user/bukti-pembayaran.jpg)

### 2. Admin
![master-data](/images-laporan/admin/master-data.jpg)
![data-category](/images-laporan/admin/data-category.jpg)
![add-category](/images-laporan/admin/add-category.jpg)
![data-menu](/images-laporan/admin/data-menu.jpg)
![add-menu](/images-laporan/admin/add-menu.jpg)
![data-transaksi](/images-laporan/admin/data-transaksi.jpg)
![data-laporan](/images-laporan/admin/data-laporan.jpg)

### 3. Super Admin
![main](/images-laporan/superadmin/main.jpg)
![register](/images-laporan/superadmin/register.jpg)
![form-tambah-resto](/images-laporan/superadmin/form-tambah-resto.jpg)
![form-tambah-kota](/images-laporan/superadmin/form-tambah-kota.jpg)
![table-admin](/images-laporan/superadmin/table-admin.jpg)
![table-lokasi](/images-laporan/superadmin/table-lokasi.jpg)
![table-resto](/images-laporan/superadmin/table-resto.jpg)

# Testing (Test Cases)
| domain class | Test Case Name                              | Action                                                                                 | Expected Result                                                                                         | Positive Case                                                             | Negative Case                                                                                 |
| ------------ | ------------------------------------------- | -------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| User         | Check that user can go to NoQ               | Melakukan login/sign up                                                                | User akan dialihkan ke halaman utama                                                                    | User berhasil dialihkan                                                   | -                                                                                             |
|              | Check that user can go to restoran page     | Memilih salah satu restoran                                                            | User akan dialihkan ke page restoran                                                                    | User berhasil dialihkan                                                   | -                                                                                             |
|              | Check that user dapat melakukan pemesanan   | memilih menu, table, dan waktu datang                                                  | Pesanan user akan dicatat                                                                               | User berhasil menambah pemesanan                                          | -                                                                                             |
|              | Check that user dapat melakukan pembayaran  | Menekan tombol 'Bayar'                                                                 | User akan dialihkan ke page pembayaran                                                                  | User berhasil dialihkan                                                   | -                                                                                             |
|              | Check that user dapat melihat pemesanan     | Menekan tombol pemesanan                                                               | User akan dialihkan ke page pemesanan                                                                   | User berhasil dialihkan                                                   | -                                                                                             |
| Restoran     | Check that restoran can go to NoQ           | Melakukan login/sign up                                                                | Restoran akan dialihkan ke halaman utama                                                                | Restoran berhasil dialihkan                                               | -                                                                                             |
|              | Check that restoran dapat menambah kategori | Menekan tombol 'Tambah kategori'                                                       | Restoran akan dialihkan ke page tambah kategori                                                         | Restoran berhasil dialhikan                                               | -                                                                                             |
|              | Check that restoran dapat menambah menu     | Menekan tombol 'Tambah menu'                                                           | Restoran akan dialihkan ke page tambah menu                                                             | Restoran berhasil dialihkan                                               | -                                                                                             |
|              | Search Kategori Menu                        | Memasukan Keyword yang tidak sesuai dengan database                                    | Admin tidak akan menemukan kategori yang sesuai dengan Keyword yang dicari                              | -                                                                         | Admin tidak akan menemukan kategori yang sesuai Keyword dan hasil pencarian akan kosong       |
|              | Search Menu                                 | Memasukan Keyword yang tidak sesuai dengan database                                    | Admin tidak akan menemukan menu yang sesuai Keyword yang dicari                                         | -                                                                         | Admin tidak akan menemukan menu yang sesuai Keyword dan hasil pencarian akan kosong           |
|              | Search data transaksi                       | Memasukan Keyword yang tidak sesuai dengan database                                    | Admin tidak akan menemukan data transaksi yang sesuai dengan Keyword yang dicari                        | -                                                                         | Admin tidak akan menemukan data transaksi yang sesuai Keyword dan hasil pencarian akan kosong |
|              | Remove Kategori Menu                        | Menekan tombol 'hapus' pada tabel                                                      | Kategori menu yang terdapat dalam tabel akan otomatis hilang                                            | Admin berhasil menghapus kategori menu pada tabel kategori                | -                                                                                             |
|              | Remove Menu                                 | Menekan tombol 'hapus' pada tabel                                                      | Menu yang terdapat dalam tabel akan otomatis hilang                                                     | Admin berhasil menghapus menu pada tabel menu                             | -                                                                                             |
|              | Remove data transaksi                       | Menekan tombol 'hapus' pada tabel                                                      | Data transanski yang terdapat dalam tabel akan otomatis hilang                                          | Admin berhasil menghapus transaksi pada tabel data transaksi pembayaran - |
|              | Change Status Pembayran                     | Menekan tombol 'valid' berwarna hijau atau 'invalid'berwarna merah pada data transaksi | status pembayaran user akan berubah menjadi warna hijau jika valid dan jika invalid akan berwarna merah | Admin berhasil megubah status pembayaran                                  | -                                                                                             |

# Saran Untuk Pengembangan Selanjutnya
- Riwayat Pemesanan user lebih rapih
- Cetak struk hasil pembayaran
- Deskripsi dari menu makanan
- Penyedian Vouchers diskon
- Pembayaran secara otomatis tanpa harus upload bukti pembayaran
- Jumlah menu makanan yang tersedia
- Fitur Search restoran bisa dicari secara langsung
- Tampilan web yang responsive
