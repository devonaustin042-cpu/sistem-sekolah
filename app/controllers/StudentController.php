<?php
namespace App\Controllers;

class StudentController
{

    public function index(): void
    {
        echo '<h1>Daftar Siswa</h1>';            
        echo '<p>menampilkan daftar siswa</p>';
    }
    

    public function create(): void
    {
        echo '<h1>Tambah Siswa</h1>';            
        echo '<p>menampilkan form tambah</p>';
    }
}

