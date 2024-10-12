<?php
// Definisi Class Mahasiswa
class Mahasiswa {
    // Properti
    public $nama;
    public $nim;
    public $kelas;
    public $jurusan;
    public $semester;

    // Constructor untuk menginisialisasi properti
    public function __construct($nama, $nim, $kelas, $jurusan, $semester) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->kelas = $kelas;
        $this->jurusan = $jurusan;
        $this->semester = $semester;
    }

    // Function untuk menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Kelas: " . $this->kelas . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        echo "Semester: " . $this->semester . "<br>";
    }

    // Function untuk memperbarui semester
    public function updateSemester($semesterBaru) {
        $this->semester = $semesterBaru;
        echo "Semester telah diperbarui menjadi: " . $this->semester . "<br>";
        echo "<br>";
    }
}

// Membuat objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Haykal Aditya Saputra", "23.240.0023","3P41", "Teknik Informatika", 3);

// Menampilkan informasi mahasiswa
$mahasiswa1->tampilkanInfo();

// Memperbarui semester mahasiswa
$mahasiswa1->updateSemester(3);

// Menampilkan kembali informasi mahasiswa setelah semester diperbarui
$mahasiswa1->tampilkanInfo();
?>