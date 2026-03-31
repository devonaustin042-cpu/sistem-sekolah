<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="min-h-screen flex flex-col bg-gray-100">
    <!-- Header Start -->
    <header class="bg-blue-500 text-white">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>
    <!-- Header End -->

    <!-- Main Start -->
    <main class="grow container mx-auto">
        <div class="mt-8 space-y-4">
            <!-- Card Header Start -->
             <div class="bg-white shadow rounded-lg p-4">
                <h1 class="text-2xl font-bold">Daftar Siswa</h1>
                <p>Menampilkan daftar siswa yang terdaftar</p>
             </div>
             <!-- Card Header End -->

             <!-- Card Content Start -->
              <div class="bg-white shadow rounded-lg">
                <table class="w-full">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-2 px-4 text-left">No</th>
                            <th class="py-2 px-4 text-left">Nama</th>
                            <th class="py-2 px-4 text-left">NIS</th>
                            <th class="py-2 px-4 text-left">Kelas</th>
                            <th class="py-2 px-4 text-left">No Telepon</th>
                            <th class="py-2 px-4 ">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 text-left">1</td>
                            <td class="py-2 px-4 text-left">Andi</td>
                            <td class="py-2 px-4 text-left">1234</td>
                            <td class="py-2 px-4 text-left">11 TKJ 3</td>
                            <td class="py-2 px-4 text-left">0812345678</td>
                            <td class="py-2 px-4">
                                <div class="flex items-center justify-center gap-4">
                                    <a href="" class="text-green-500">Detail</a>
                                    <a href="" class="text-yellow-500">Edit</a>
                                    <a href="" class="text-red-500">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
              <!-- Cart Content End -->
        </div>
    </main>
    <!-- Main End -->

    <!-- Footer Start -->
    <footer class="bg-gray-800 text-white">
        <div class="text-center p-4">
            &copy <?= date('Y')?> - Sistem Sekolah SMK Kristen Immanuel
        </div>
    </footer>
    <!-- Footer End -->
</body>

</html>