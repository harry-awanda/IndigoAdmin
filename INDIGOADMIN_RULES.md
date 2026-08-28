# IndigoAdmin Template Rules

- PHP hanya dipakai untuk include layout/partials dan variabel halaman sederhana.
- Hindari routing PHP, request handling, loop dummy, conditional rendering, dan active-state otomatis.
- Adaptasi konten dan pola komponen boleh mengikuti Sneat, tetapi struktur harus tetap mudah dikonversi ke HTML statis.
- Gunakan color scheme dari `Assets/css/themes.css` untuk setiap styling baru.
- Simpan aset gambar project di dalam `Assets/img/` dengan subfolder yang jelas.
- Untuk aset Sneat berupa ilustrasi/avatar, buat aset lokal bergaya mirip dengan warna flat berbasis primary IndigoAdmin.
- Untuk aset berupa konten nyata seperti course, article, atau thumbnail, boleh gunakan gambar acak Unsplash yang disimpan lokal.
- Jangan hotlink gambar eksternal di markup final.
- Semua elemen gambar wajib memiliki atribut `alt` yang jelas.
