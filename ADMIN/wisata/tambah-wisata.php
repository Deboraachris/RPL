<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tambah Wisata</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

  <div class="max-w-xl mx-auto bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Wisata Baru</h1>

    <form action="proses-tambah-wisata.php" method="POST" enctype="multipart/form-data" class="space-y-4">
      <div>
        <label for="judul" class="block text-gray-700 font-medium mb-1">Judul Wisata</label>
        <input type="text" name="judul" id="judul" required
               class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>

      <div>
        <label for="deskripsi" class="block text-gray-700 font-medium mb-1">Deskripsi Wisata</label>
        <textarea name="deskripsi" id="deskripsi" rows="4" required
                  class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
      </div>

      <div>
        <label for="maps_url" class="block text-gray-700 font-medium mb-1">URL Google Maps</label>
        <input type="url" name="maps_url" id="maps_url" required
               placeholder="https://www.google.com/maps/embed?pb=..."
               class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>

      <div>
        <label for="foto" class="block text-gray-700 font-medium mb-1">Foto Wisata</label>
        <div class="flex items-center border rounded-md overflow-hidden">
          <button type="button" id="browseButton"
                  class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-l-md">
            Telusuri...
          </button>
          <input type="file" name="foto" id="foto" accept="image/*" required class="hidden" />
          <span id="fileName" class="px-4 py-2 text-gray-500 truncate w-full">Tidak ada file dipilih.</span>
        </div>
      </div>

      <button type="submit"
              class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition duration-200">
        Simpan Wisata
      </button>
    </form>
  </div>

  <script>
    document.getElementById('foto').addEventListener('change', function () {
      const fileName = this.files[0] ? this.files[0].name : 'Tidak ada file dipilih.';
      document.getElementById('fileName').textContent = fileName;
    });

    document.getElementById('browseButton').addEventListener('click', function () {
      document.getElementById('foto').click();
    });
  </script>

</body>
</html>
