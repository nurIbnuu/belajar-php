<?php
                                // Pengenalan Function – Tutorial PHP Function #01


  // Apa itu Function()
    // + Mengelompokkan satu blok kode menjadi sebuah function
    // + Bertujuan melaksanakan 1 tugas
    // + var_dump, printf merupakan (built in function)
    // + bisa membuat function sendiri (user defined function)

  // Manfaat Function()
    // 1. Reusability
      // Manfaat pertamanya dahulu, yaitu reuseability. Function yang telah kita buat, bisa kita gunakan secara berulang-ulang. Sebagai contoh ya misalkan kalau kita hendak menggunakan fungsi var_dump. Dalam source code yang sama, kita bebas menggunakan var_dump berkali-kali. Misalkan kita mau var_dump variable a, kemudian var_dump lagi variable b, dan seterusnya. Bebas sebanyak apa pun yang kita perlukan.
      // Manfaat reuseability ini sesuai dengan konsep pemograman yang bernama DRY alias Don’t Repeat Yourself. Jangan pernah menuliskan kode yang sama secara berulang-ulang. Walaupun bisa, namun lebih baik jangan melakukan copy paste. Cara yang disarankan adalah kode yang sama atau berulang, bisa kita ubah menjadi function. Kemudian barulah function ini kita jalankan secara berulang-ulang.
    // 2. Abstraction
      // Sekarang kita sekalian membahas manfaat kedua dari function, yaitu Abstraction. Abstraction berarti kita bisa menyembunyikan kompleksitas dari masalah yang sedang kita hadapi di dalam function. Kita lihat dahulu contoh di kiri yang belum ada function ya. Disini kalau kita mau membuat nilai acak untuk warna, kita harus tau dahulu bahwa nilai tersebut harus berada di antara 0 hingga 255. Karena kita memerlukan kedua nilai ini untuk memanggil built-in function mt_rand. Sedangkan di sebelah kanan, nilai 0 hingga 255 tersebut sudah disimpan di dalam function kita. Tidak perlu kita ingat lagi. Kita hanya perlu mengingat bahwa kalau ingin membuat nilai acak untuk warna, kita tinggal memanggil function generateRandomColor.
    // 3. Decomposition
      // Sekarang kita masuk ke manfaat ketiga, yaitu Decomposition. Ini lebih ke cara kita menuliskan program ya. Kita kembali ke contoh tadi. Misalkan masalah besar kita adalah kita ingin membuat program yang menhasilkan warna acak. Nah, masalah besar tadi kita pecahkan lagi menjadi langkah-langkah kecil yang harus kita jalankan untuk memecahkan masalah.
      // Pertama kita mesti tau dahulu, bahwa warna di komputer itu dibuat dari 3 warna dasar, yaitu merah, hijau dan biru. Jadi kita mesti memberikan nilai acak diantara 0 hingga 255 untuk ketiga warna tersebut. Disini kita buat function generateRandomColor untuk menghasilkan nilai acaknya.
      // Kemudian kita buat lagi function getRandomColor. Dimana disini kita memanggil generateRandomColor untuk menghasilkan warna dasar merah, hijau dan biru. Kemudian ketiga warna tersebut kita gabung menjadi format warna hexadesimal. Dan akhirnya masalah kita bisa diselesaikan dengan membuat dua function yang terhubung.
    // 4. Refactoring
      // Kita loncat dahulu ke manfaat keempat dari function, yaitu refactoring. Refactoring adalah proses menulis ulang kode kita agar lebih mudah untuk dibaca dan dipelihara. Sekarang coba kita bayangkan kalau kita menulis kode ini sekarang, kemudian suatu saat di tahun depan ternyata kita harus kembali membaca kode ini. Kira-kira kita masih mengerti atau tidak, apa yang sedang kita tulis saat ini?

  // Cara membuat Function()
    // Aturnannya hampir sama dengan format penulisan variable hanya saja;
      // diakhiri (), bersifat case insensitive
      // membuat, memanggil


// function bisa dipanggil sebelum dibuat
greet();
// membuat function
function greet() {
  echo 'Hello' . PHP_EOL;
};
// memanggil function, case insensitive
GREET();







// Saat ini kita sudah memasuki playlist baru dari kursus lengkap pemograman back-end menggunakan PHP. Dan pada playlist ini, kita akan membahas secara khusus mengenai function.

// Apakah itu function? Nah, kita bisa mengelompokkan satu blok kode menjadi sebuah function. Biasanya blok kode tersebut bertujuan untuk melaksanakan satu tugas. Jadi kalau kita menggunakan pengelompokan seperti ini, source code kita menjadi lebih jelas.

// Kalau misalkan kita hendak memecahkan suatu masalah menggunakan empat langkah, misalkan langkah A B C D. Daripada seluruh kodenya kita tulis memanjang secara global, lebih baik kita kelompokkan menjadi 4 function, yaitu function A, function B, function C, dan function D. Nantinya waktu kita hendak membaca ulang kode kita, kita akan lebih gampang untuk menganalisa ulang maksud dari kode tersebut. Function A adalah langkah pertamanya, kemudian kita lanjut langkah kedua ke function B, dan seterusnya.

// Sebenarnya di video tutorial sebelumnya, kita sudah pernah menggunakan function seperti var_dump, printf, dan lain-lain. Kalau teman-teman ingat ya, semua perintah yang setelah namanya harus menggunakan tanda kurung adalah function. Yang selama ini kita gunakan adalah built-in function, yaitu fungsi-fungsi yang sudah disediakan oleh PHP. Jadi kita tinggal menggunakan saja.

// Diluar dari built-in function, kita bisa membuat function sendiri, atau yang dikenal dengan istilah user-defined function.

// Kenapa kita mesti repot-repot membuat function? Nah, ini adalah 4 buah manfaat dari function, yaitu untuk reuseability, abstraction, decomposition, dan refactoring. Kita bahas satu per satu ya.

// Manfaat pertamanya dahulu, yaitu reuseability. Function yang telah kita buat, bisa kita gunakan secara berulang-ulang. Sebagai contoh ya misalkan kalau kita hendak menggunakan fungsi var_dump. Dalam source code yang sama, kita bebas menggunakan var_dump berkali-kali. Misalkan kita mau var_dump variable a, kemudian var_dump lagi variable b, dan seterusnya. Bebas sebanyak apa pun yang kita perlukan.

// Manfaat reuseability ini sesuai dengan konsep pemograman yang bernama DRY alias Don’t Repeat Yourself. Jangan pernah menuliskan kode yang sama secara berulang-ulang. Walaupun bisa, namun lebih baik jangan melakukan copy paste. Cara yang disarankan adalah kode yang sama atau berulang, bisa kita ubah menjadi function. Kemudian barulah function ini kita jalankan secara berulang-ulang.

// Kita lihat contohnya ya. Misalkan kita menuliskan kode untuk menghasilkan warna acak. Kita sudah tau, bahwa warna di komputer merupakan kombinasi dari 3 warna, yaitu RGB atau red, green blue. Merah, hijau, biru. Jadi kalau kita hendak membuat warna yang acak, maka pertama kita harus memberikan nilai acak dahulu ke warna merah. Kemudian kode yang sama kita jalankan lagi untuk warna hijau dan biru. Di sebelah kiri kita bisa melihat bahwa kode mt_rand dijalankan sebanyak 3 kali.

// Untuk best practice, disarankan kita mengganti kode mt_rand ini menjadi sebuah function yang kita buat sendiri, atau user-defined function. Kita berikan nama function yang menggambarkan tujuan dari function tersebut, yaitu untuk menghasilkan nilai acak warna. Di dalamnya barulah kita panggil built-in function mt_rand.

// Disini mungkin teman-teman bertanya ya. Kode yang mestinya bisa sederhana, mengapa malah dibikin menjadi ribet? Kode yang tadinya di sebelah kiri hanya 3 baris, mesti diubah ke sebelah kanan menjadi 8 baris.

// Nah, disini saya bisa menjelaskan sekalian beberapa manfaat yang bisa kita dapatkan dari function. Yang pertama adalah reuseable. Artinya function yang telah kita buat dapat kita gunakan lagi secara berulang-ulang. Jadi dalam contoh ini kita membuat function dengan nama generateRandomColor, yang tujuannya adalah menghasilkan nilai acak diantara 0 hingga 255. Kemudian function yang telah kita buat ini, kita gunakan 3 kali untuk menghasilkan warna merah, hijau dan biru.

// Apa kelebihan dari cara menulis kode seperti ini? Kedepannya, kalau misalkan kita mau mengubah warna acak kita, misalnya hanya boleh diisi dengan nilai 0 hingga 100, maka kita hanya perlu mengubah satu kali di dalam function. Kalau kita bandingkan dengan cara di sebelah kiri, disini kita harus mengubah sebanyak 3 kali.

// Sekarang kita sekalian membahas manfaat kedua dari function, yaitu Abstraction. Abstraction berarti kita bisa menyembunyikan kompleksitas dari masalah yang sedang kita hadapi di dalam function. Kita lihat dahulu contoh di kiri yang belum ada function ya. Disini kalau kita mau membuat nilai acak untuk warna, kita harus tau dahulu bahwa nilai tersebut harus berada di antara 0 hingga 255. Karena kita memerlukan kedua nilai ini untuk memanggil built-in function mt_rand. Sedangkan di sebelah kanan, nilai 0 hingga 255 tersebut sudah disimpan di dalam function kita. Tidak perlu kita ingat lagi. Kita hanya perlu mengingat bahwa kalau ingin membuat nilai acak untuk warna, kita tinggal memanggil function generateRandomColor.

// Kita loncat dahulu ke manfaat keempat dari function, yaitu refactoring. Refactoring adalah proses menulis ulang kode kita agar lebih mudah untuk dibaca dan dipelihara. Sekarang coba kita bayangkan kalau kita menulis kode ini sekarang, kemudian suatu saat di tahun depan ternyata kita harus kembali membaca kode ini. Kira-kira kita masih mengerti atau tidak, apa yang sedang kita tulis saat ini?

// Kalau kita lihat di sebelah kiri, kita menyimpan hasil dari built-in function mt_rand ke dalam variable red, green, dan blue. Untuk saat ini kita masih bisa ingat bahwa function mt_rand bertujuan untuk menghasilkan nilai acak diantara 0 hingga 255. Namun tahun depan kira-kira masih ingat ga? Kalau tidak ingat, nanti kita mesti buka dokumentasi lagi di php.net untuk melihat apa maksud dari function mt_rand.

// Sedangkan kalau kita melihat ke kode sebelah kanan, kita memanggil function generateRandomColor. Dari nama function-nya kita bisa mengira-ngira ini maksudnya apa.... Oh. Mestinya sih untuk menghasilkan nilai acak untuk warna. Karena hasil dari function ini disimpan sebagai warna merah, hijau dan biru. Jadi maksud dari kode di sebelah kanan akan lebih gampang untuk ditangkap oleh pikiran manusia.

// Kita lanjutkan slide. Manfaat kedua adalah Abstraction, tadi sudah kita bahas ya. Kita lanjutkan lagi.

// Nah, sekarang kita lihat programnya lebih jauh lagi ya. Jadi nilai acak yang tadinya kita simpan ke variable red, green dan blue, harus kita ubah lagi menjadi format warna yaitu # ditambah dengan 6 digit nilai hexadesimal warna. Untuk itu kita perlu memanggil built-in function sprintf dengan format ‘#%02X%02X%02X’.

// Di sebelah kanan, format tersebut sudah kita bungkus menjadi function getRandomColor. Jadi kedepannya, setiap kali kita memerlukan warna acak, kita hanya perlu memanggil function getRandomColor saja. Kita sudah tidak perlu memikirkan secara detil seperti langkah-langkahnya seperti apa, cara membuat nilai acaknya seperti apa, dan cara mengubah nilainya menjadi format warna seperti apa. Masalah yang tadinya ribet, sekarang menjadi simple karena cukup memanggil satu function saja.

// Sekarang kita masuk ke manfaat ketiga, yaitu Decomposition. Ini lebih ke cara kita menuliskan program ya. Kita kembali ke contoh tadi. Misalkan masalah besar kita adalah kita ingin membuat program yang menhasilkan warna acak. Nah, masalah besar tadi kita pecahkan lagi menjadi langkah-langkah kecil yang harus kita jalankan untuk memecahkan masalah.

// Pertama kita mesti tau dahulu, bahwa warna di komputer itu dibuat dari 3 warna dasar, yaitu merah, hijau dan biru. Jadi kita mesti memberikan nilai acak diantara 0 hingga 255 untuk ketiga warna tersebut. Disini kita buat function generateRandomColor untuk menghasilkan nilai acaknya.

// Kemudian kita buat lagi function getRandomColor. Dimana disini kita memanggil generateRandomColor untuk menghasilkan warna dasar merah, hijau dan biru. Kemudian ketiga warna tersebut kita gabung menjadi format warna hexadesimal. Dan akhirnya masalah kita bisa diselesaikan dengan membuat dua function yang terhubung.

// Kita lanjut ke manfaat keempat, yaitu Refactoring. Sudah kita bahas tadi ya. Jadi kita langsung lanjutkan saja.

// Bagaimana cara membuat function? Pertama kita harus gunakan dahulu kata kunci function. Setelah itu diikuti oleh nama function. Aturan menulis nama function ini mirip dengan aturan menulis nama variable. Kalau teman-teman masih ingat, bagaimana aturan menulis nama variable? Nama boleh terdiri dari huruf, angka dan simbol underscore, namun nama tidak boleh diawali oleh angka.

// Yang menjadi perbedaan antara variable dengan function adalah variable harus diawali oleh simbol dollar. Sedangkan function tidak perlu menggunakan simbol dollar, namun harus diakhiri oleh tanda kurung. Perbedaan lainnya adalah nama variable bersifat case sensitif. Sedangkan nama function bersifat case insensitif.

// Kita coba praktek. Sekarang kita membuat program sederhana untuk menulis ‘Hello World’ menggunakan function.

// Pertama kita coba cara biasa terlebih dahulu. Kita bisa menulis perintah echo diikuti oleh string ‘Hello World’ dan PHP_EOL. Kita simpan dan coba jalankan di terminal. Maka di terminal keluar tulisan ‘Hello World’.

// Selanjutnya, kalau kita ingin menggunakan function, maka pertama kita mesti membuat function-nya terlebih dahulu. Kita tulis kata kunci function. Diikuti oleh nama function, misalnya greet. Ingat bahwa function harus selalu diikuti oleh tanda kurung. Lalu kita buka kurung kurawal dan kita bisa pindahkan perintah echo ke dalam kurung kurawal.

// Kalau kita coba jalankan. Ternyata tidak keluar tulisan apa-apa. Lihat kembali ke source code-nya ya. Disini kita hanya membuat function greet. Namun kita belum pernah menjalankan function tersebut. Untuk menjalankan, kita mesti mengetikkan nama function tersebut, yaitu greet, dan ingat ya bahwa function harus selalu diikuti oleh tanda kurung. Kalau kita jalankan sekarang, barulah keluar tulisan hello world.

// Function bisa dijalankan secara berulang-ulang. Jadi kalau kita panggil lagi function greet. Maka pada saat dijalankan di terminal akan keluar 2 buah tulisan Hello World. Hal ini disebabkan karena function greet dijalankan sebanyak 2 kali.

// Kita hapus salah satu greet. Kemudian kita tes lagi ya. Tadi saya mengatakan bahwa nama function bersifat case insensitif. Berarti pada saat kita memanggil function greet, kita bebas untuk menggunakan huruf besar ataupun huruf kecil. Sekarang kita coba dahulu menggunakan huruf G besar. Ternyata bisa berjalan dengan benar ya. Kita coba lagi menggunakan GREET semuanya besar. Dan ternyata tetap bisa berjalan dengan benar. Artinya nama function memang bersifat case insensitif.

// Selanjutnya kita lihat lagi ya posisi dari function greet. Kalau di kode kita yang sekarang, kita membuat dahulu function greet, setelah itu barulah kita panggil. Sekarang posisinya kita balik ya. Kita pindahkan kode untuk memanggil fungsi ke sebelah atas. Jadi sekarang memanggil terlebih dahulu fungsi greet, setelah itu barulah kita buat fungsinya. Apakah akan error? Kita coba jalankan. Ternyata berjalan normal ya. Artinya posisi dari kode definisi function ini sangat fleksibel. Kita boleh bebas meletakkan kodenya di bagian manapun.