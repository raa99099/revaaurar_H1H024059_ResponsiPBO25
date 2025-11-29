 revaaurar_H1H024059_ResponsiPBO25

 Nama : REVA AURA R 
 NIM : H1H024059 
 SHIFT AWAL B 
 SHIFT AKHIR B

Aplikasi PokéCare – Wigglytuff adalah aplikasi web sederhana berbasis PHP Native yang mensimulasikan latihan Pokémon. User bisa: Aplikasi PokéCare – Wigglytuff adalah aplikasi web sederhana berbasis PHP Native yang mensimulasikan latihan Pokémon. User bisa: Melihat info dasar Pokémon Wigglytuff Melakukan latihan (Attack, Defense, Speed) Mencatat aktivitas latihan ke file JSON Melihat riwayat latihan lengkap (level & HP sebelum–sesudah) Aplikasi ini menerapkan konsep OOP PHP, yaitu: Encapsulation → atribut Pokémon disimpan sebagai protected Inheritance → Wigglytuff mewarisi BasePokemon Polymorphism → method train() di-Wigglytuff beda dari BasePokemon Abstraction → BasePokemon punya method abstract specialMove()

a. BasePokemon.php Kelas induk abstract Menyimpan properti dasar: name, type, level, hp, specialMove Punya method abstract specialMove() → harus di-override Punya method train() default Ada getter untuk ambil data Pokémon (encapsulation)

b. Wigglytuff.php Extends BasePokemon Meng-set data default Wigglytuff (level, hp, tipe, jurus) Override method specialMove() Override method train() → efek latihan khusus untuk Wigglytuff (contoh: Attack menaikkan level lebih cepat)

c. index.php Menampilkan info Pokémon Tombol menuju latihan dan riwayat

d. train.php Form latihan User pilih jenis latihan & intensitas

e. process_train.php Memanggil method train() dari class Wigglytuff Menyimpan perubahan level/HP ke pokemon.json Menambahkan sesi latihan ke history.json Menampilkan hasil latihan

f. history.php Menampilkan tabel daftar seluruh riwayat latihan

g. Folder data/ pokemon.json → menyimpan kondisi Wigglytuff history.json → menyimpan aktivitas latihan Semuanya berjalan tanpa framework — murni PHP.

Instalasi Pastikan PHP sudah ter-install Cek lewat terminal:

php -v

Taruh folder aplikasi di tempat bebas Contoh: C:/xampp/htdocs/WigglytuffApp

B. Jalankan server PHP Masuk ke folder aplikasi: cd WigglytuffApp php -S localhost:8000

C. Buka di browser Masukkan URL: http://localhost:8000 Aplikasi sudah jalan.
