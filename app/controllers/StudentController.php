<?php
namespace App\Controllers;

class StudentController
{

    public function index(): void
    {
        require_once '../app/views/students/index.php';
    }
    
    public function create(): void
    {
        require_once '../app/views/students/create.php';
    }

    public function show(string $id): void
    {
        require_once '../app/views/students/show.php';
    }

}

