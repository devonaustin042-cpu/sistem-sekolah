<?php
namespace App\Core;

class Router
{

    public function run(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if($method == 'GET' && $uri == '/students'){
            echo ' <h1>Daftar Siswa</h1> ';            
            echo ' <p>menampilkan daftar siswa</p> ';
            return; 
        }

        http_response_code(404);
        echo '<h1>404 = Page Not Found</h1>';
    }

}

?>