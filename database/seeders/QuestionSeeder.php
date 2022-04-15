<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::insert([
            [
                'lesson_id'         => 1,
                'page'              => 1,
                'question'          => "
                                            Menurut sejarah, kentang ditanam petani Peru sejak 2.000               tahun lalu pada 1524, saat tentara Spanyol mendarat di sana, kentang, kacang tanah, dan merica mulai dikenal dunia. Seorang tentara Spanyol tertarik pada kentang yang tumbuh subur di Desa Sorocota, di Pegunungan Andes, Peru. Ia membawanya ke Spanyol. Setelah mendarat di Spanyol, ia menyebarkannya ke seluruh penjuru Eropa.
                                            Pernyataan yang sesuai dengan isi teks tersebut adalah...
                                        ",
                'a'                 => "Penyebar kentang di Eropa adalah tentara Spanyol.",
                'b'                 => "Kentang merupakan makanan pokok tentara Spanyol.",
                'c'                 => "Penemuan kacang tanah dan kentang dilakukan dengan sengaja.",
                'd'                 => "Ketertarikan tentara Spanyol pada kentang karena ditanam di Peru.",
                'e'                 => null,
                'correct'           => "Penyebar kentang di Eropa adalah tentara Spanyol.",
            ],
            [
                'lesson_id'         => 1,
                'page'              => 2,
                'question'          => "
                                            (1) Menurut data UNESCO, minat baca masyarakat Indonesia hanya sekitar 0,001%. (2) Angka itu lebih rendah dibandingkan dengan rata-rata minat baca internasional. (3) Meskipun terpaut jauh dalam selisih angka dalam data tersebut, Pemerintah Indonesia tetap bertekad untuk meningkatkan minat baca masyarakat. (4) Salah satu upaya yang dilakukan adalah dengan Gerakan Literasi Sekolah (GLS).
                                            Hide quoted text
                                            
                                            Kalimat yang menyatakan pertentangan pada teks tersebut ditandai dengan nomor...
                                        ",
                'a'                 => "(1)",
                'b'                 => "(2)",
                'c'                 => "(3)",
                'd'                 => "(4)",
                'e'                 => null,
                'correct'           => "(3)",
            ],
            [
                'lesson_id'         => 1,
                'page'              => 3,
                'question'          => "
                                            Seseorang akan diuji dengan yang dia miliki. Ketika memiliki ilmu, dia akan diuji dengan seberapa jauh kemampuannya memanfaatkan ilmu. Ketika mempunyai harta, dia akan diuji dengan keikhlasannya mendistribusikan hartanya untuk orang lain. Di saat menduduki suatu jabatan, ia akan diuji dengan seberapa jauh kemampuannya mempertanggungjawabkan wewenang yang diembannya.

                                            Ide pokok paragraf tersebut adalah...
                                        ",
                'a'                 => "Ujian hidup seseorang",
                'b'                 => "Kebahagiaan keluarga",
                'c'                 => "Seseorang yang memiliki harta",
                'd'                 => "Tanggung jawab wewenang",
                'e'                 => null,
                'correct'           => "Ujian hidup seseorang",
            ],
            [
                'lesson_id'         => 1,
                'page'              => 4,
                'question'          => "
                                            (1) Pembiasaan anak-anak akrab dengan buku seharusnya sudah ditanamkan semenjak mereka duduk di bangku taman kanak-kanak (TK). (2) Setiap TK sebaiknya memiliki perpustakaan (3) Mulai TK, siswa digiring akrab dan cinta pada buku. (4) Walaupun anak TK masih belum bisa membaca, tetapi mereka menyukai gambar berwarna-warni.

                                            Kalimat utama paragraf berikut ditandai dengan nomor...
                                        ",
                'a'                 => "(1)",
                'b'                 => "(2)",
                'c'                 => "(3)",
                'd'                 => "(4)",
                'e'                 => null,
                'correct'           => "(1)",
            ],
            [
                'lesson_id'         => 1,
                'page'              => 5,
                'question'          => "
                                            (1) Pengurus OSIS telah melakukan rapat beberapa hari yang lalu. (2) Dalam rapat itu memutuskan bahwa akan diadakan acara jalan sehat. (3) Kegiatan itu dilakukan untuk memeriahkan ulang tahun sekolah. (4) Sekolah menyediakan hadiah menarik bagi peserta jalan sehat.

                                            Kalimat tidak efektif dalam teks ditandai dengan nomor...
                                        ",
                'a'                 => "(1)",
                'b'                 => "(2)",
                'c'                 => "(3)",
                'd'                 => "(4)",
                'e'                 => null,
                'correct'           => "(2)",
            ],
        ]);
    }
}
