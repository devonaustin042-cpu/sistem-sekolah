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
                        <?php foreach($students as $index => $student):?>
                            <tr>
                                <td class="py-2 px-4 text-left">
                                    <?= $index + 1?>
                                </td>
                                <td class="py-2 px-4 text-left">
                                    <?= $student['name']?>
                                </td>
                                <td class="py-2 px-4 text-left">
                                    <?= $student['nis']?>
                                </td>
                                <td class="py-2 px-4 text-left">
                                    <?= $student['class']?>
                                </td>
                                <td class="py-2 px-4 text-left">
                                    <?= $student['phone_number']?>
                                </td>
                            <td class="py-2 px-4">
                                <div class="flex items-center justify-center gap-4">
                                    <a href="/students/<?= $student['id'] ?>" class="text-green-500">Detail</a>
                                    <a href="/students/<?= $student['id'] ?>/edit" class="text-yellow-500">Edit</a>
                                    <a href="" class="text-red-500">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach?>
                        
                    </tbody>
                </table>
              </div>
              <!-- Cart Content End -->
</div>