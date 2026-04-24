<div class="mt-8 space-y-4">
            <!-- Card Header Start -->
             <div class="bg-white shadow rounded-lg p-4">
                <h1 class="text-2xl font-bold">Edit Siswa</h1>
                <p>Melakukan perubahan data siswa yang terdaftar</p>
             </div>
             <!-- Card Header End -->

             <!-- Card Content Start -->
              <div class="bg-white shadow rounded-lg">
                <form action="/students/<?= $student['id'] ?>" method="POST" class="p-4 grid grid-cols-2 gap-4">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="space-y-2">
                        <label class="block font-bold" for="name">Nama</label>
                        <input value="<?= $student['name']?>" class="w-full border rounded-lg py-2 px-4" type="text" name="name" id="name" placeholder="Masukkan nama">
                    </div>
                    <div class="space-y-2">
                        <label class="block font-bold" for="nis">NIS</label>
                        <input value="<?= $student['nis']?>" class="w-full border rounded-lg py-2 px-4" type="text" name="nis" id="nis" placeholder="Masukkan NIS">
                    </div>
                    <div class="space-y-2">
                        <label class="block font-bold" for="class">Kelas</label>
                        <input value="<?= $student['class']?>" class="w-full border rounded-lg py-2 px-4" type="text" name="class" id="class" placeholder="Masukkan kelas">
                    </div>
                    <div class="space-y-2">
                        <label class="block font-bold" for="phone_number">No Telepon</label>
                        <input value="<?= $student['phone_number']?>" class="w-full border rounded-lg py-2 px-4" type="text" name="phone_number" id="phone_number" placeholder="Masukkan No Telepon">
                    </div>
                    <div class="flex justify-end gap-4 col-span-2">
                        <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
                        <button type="submit" class="py-2 px-4 bg-blue-500 rounded-lg text-white">Simpan</button>
                    </div>
                </form>
              </div>
              <!-- Cart Content End -->
</div>