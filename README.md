<p align="center"><a href="https://laravel.com" target="_blank"><img src="public/imgs/logo2.png" width="500"></a></p>

### <p align="center">Samudera Angkasa</p>

<br>

## Tentang Canopus

Canopus merupakan perangkat lunak edukasi ilmu astronomi berbasis website yang dikembangkan eksklusif untuk masyarakat Indonesia. Canopus dibangun dengan tujuan untuk membantu masyarakat Indonesia dari semua kalangan mengenal, menumbuhkan minat, serta menumbuhkan rasa senang terhadap ilmu astronomi. Beberapa fitur yang terdapat dalam Canopus diantaranya adalah :

- Edukasi ilmu astronomi (planet dan benda langit lainnya).
- Membuat sekaligus mengelola akun.
- Membuat sekaligus mengelola topik diskusi.
- Mengelola konten edukasi ilmu astronomi dalam daftar favorit.
- Mengelola tanya jawab dengan pengguna lain.
- Mengevaluasi konten edukasi ilmu astronomi.

Canopus adalah perangkat lunak edukasi ilmu astronomi berbasis website yang ringan, menarik, dan informatif.

## Pengembangan

Dalam pengembangannya, Canopus menggunakan bahasa, perangkat lunak bantuan, serta framework berikut :

#### Bahasa, Framework, Library
- **[PHP](https://php.net/)**
- **[Laravel](https://laravel.com/)**
- **[TailwindCSS](https://tailwindcss.com/)**
- **[TailwindUI Kit](https://tailwinduikit.com/)**
- **[Faker](https://fakerphp.github.io/)**

#### Perangkat Lunak Bantuan
- **[Figma](https://figma.com/)**
- **[Visual Studio Code](https://code.visualstudio.com/)**
- **[ClickUp](https://clickup.com/)**
- **[Laragon](https://laragon.org/)**
<br>
<a href="https://php.net"><img src="https://cdn.cdnlogo.com/logos/p/71/php.svg" width="80" height="80"></a>
<a href="https://laravel.com"><img src="https://cdn.cdnlogo.com/logos/l/23/laravel.svg" width="80" height="80"></a>
<a href="https://tailwindcss.com/"><img src="https://cdn.cdnlogo.com/logos/t/58/tailwind-css.svg" width="80" height="80"></a>
<a href="https://figma.com/"><img src="https://cdn.cdnlogo.com/logos/f/43/figma.svg" width="80" height="80"></a>
<a href="https://code.visualstudio.com/"><img src="https://cdn.cdnlogo.com/logos/v/82/visual-studio-code.svg" width="80" height="80"></a>

## Kontributor

Berikut adalah kontributor - kontributor utama yang membantu pengembangan perangkat lunak Canopus :
- [Arif Abdan Syakur](https://github.com/arifabdan)
- [Dafa Rizky Fahreza](https://github.com/dafalagi/)
- [Ikhsan Nurul Rizki](https://github.com/IkhsanNurulRizki)
- [Muhammad Rojabi Nur Fauzi](https://github.com/FauziSS123)
- [Saeful Anwar Oktariansah](https://github.com/SaefulA0)

## Instalasi

1. Clone repository
   ```sh
   git clone https://github.com/dafalagi/Canopus.git
   ```
2. Install Laravel
   ```sh
   composer install
   ```
3. Buat database dengan nama "canopus" pada server MySQL lokal anda.
4. Copy-paste file `.env.example` lalu ubah menjadi `.env` dan sesuaikan baris berikut :
   ```sh
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=canopus
      DB_USERNAME=root
      DB_PASSWORD=
   ```
5. Buka terminal lalu jalankan perintah berikut untuk melakukan key generate
   ```sh
   php artisan key:generate
   ```
5. Import database
   ```sh
   php artisan migrate:fresh --seed
   ```
5. Jalankan server
   ```sh
   php artisan serve
   ```

## Masukan

Apabila anda memiliki masukan yang dapat membantu pengembangan Canopus, silahkan lakukan pull-request atau hubungi dafarizky34@gmail.com

## Lisensi

Canopus adalah perangkat lunak open-source yang dilisensikan dibawah [MIT license](https://opensource.org/licenses/MIT).
