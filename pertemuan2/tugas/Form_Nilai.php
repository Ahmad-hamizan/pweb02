<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Siswa</title>
</head>
<body>
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: "Comic Sans MS", cursive, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form action="Nilai_Siswa.php" method="post">
     <div class="form-group ">
      <label class="control-label requiredField" for="nama">
       Nama
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="nama" name="nama" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="matkul">
       Pilih Mata Kuliah
       <span class="asteriskField">
        *
       </span>
      </label>
      <select class="select form-control" id="matkul" name="matkul">
       <option value="Basis Data">
        Basis Data
       </option>
       <option value="Pemrograman Web">
        Pemrograman Web
       </option>
       <option value="Jaringan Komputer">
        Jaringan Komputer
       </option>
      </select>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="nilai_uts">
       Nilai UTS
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="nilai_uts" name="nilai_uts" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="nilai_uas">
       Nilai UAS
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="nilai_uas" name="nilai_uas" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="nilai_tugas">
       Nilai Tugas/Praktikum
      </label>
      <input class="form-control" id="nilai_tugas" name="nilai_tugas" type="text"/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Simpan
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
</body>
</html>