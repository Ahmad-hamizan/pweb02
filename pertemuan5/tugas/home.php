<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="../../src/output.css" />
  </head>

  <body>
    <div class="min-h-screen bg-gradient-to-bl from-blue-300 to-indigo-500 p-4">
      <!-- Header -->
      <h1 class="text-4xl font-bold text-center text-white mb-8">
        Selamat Datang di Aplikasi Pelayanan Kesehatan
      </h1>

      <!-- Card Container -->
      <div class="container mx-auto flex flex-wrap justify-center gap-6">

        <!-- Card Pasien -->
        <a href="./pasien/data_pasien.php" class="w-full sm:w-3/4 md:w-1/2 lg:w-1/4">
          <div class="flex flex-col items-center bg-white rounded-lg shadow-md p-6 h-full hover:bg-gray-100 transition">
            <h2 class="text-2xl font-semibold mb-2">Pasien</h2>
            <p class="text-gray-700 text-center">
              Daftar pasien yang terdaftar di aplikasi.
            </p>
          </div>
        </a>

        <!-- Card Paramedik -->
        <a href="./paramedik/data_paramedik.php" class="w-full sm:w-3/4 md:w-1/2 lg:w-1/4">
          <div class="flex flex-col items-center bg-white rounded-lg shadow-md p-6 h-full hover:bg-gray-100 transition">
            <h2 class="text-2xl font-semibold mb-2">Paramedik</h2>
            <p class="text-gray-700 text-center">
              Daftar paramedik yang tersedia untuk membantu pasien.
            </p>
          </div>
        </a>

        <!-- Card Kelurahan -->
        <a href="./kelurahan/data_kelurahan.php" class="w-full sm:w-3/4 md:w-1/2 lg:w-1/4">
          <div class="flex flex-col items-center bg-white rounded-lg shadow-md p-6 h-full hover:bg-gray-100 transition">
            <h2 class="text-2xl font-semibold mb-2">Kelurahan</h2>
            <p class="text-gray-700 text-center">
              Daftar kelurahan yang terdaftar dalam aplikasi.
            </p>
          </div>
        </a>

        <!-- Card Periksa -->
        <a href="./periksa/data_periksa.php" class="w-full sm:w-3/4 md:w-1/2 lg:w-1/4">
          <div class="flex flex-col items-center bg-white rounded-lg shadow-md p-6 h-full hover:bg-gray-100 transition">
            <h2 class="text-2xl font-semibold mb-2">Periksa</h2>
            <p class="text-gray-700 text-center">
              Daftar pemeriksaan yang dilakukan oleh paramedik kepada pasien.
            </p>
          </div>
        </a>

        <!-- Card Unit Kerja -->
        <a href="./uk/data_uk.php" class="w-full sm:w-3/4 md:w-1/2 lg:w-1/4">
          <div class="flex flex-col items-center bg-white rounded-lg shadow-md p-6 h-full hover:bg-gray-100 transition">
            <h2 class="text-2xl font-semibold mb-2">Unit Kerja</h2>
            <p class="text-gray-700 text-center">
              Daftar unit kerja yang ada dalam aplikasi pelayanan kesehatan.
            </p>
          </div>
        </a>

      </div>
    </div>
  </body>
</html>
