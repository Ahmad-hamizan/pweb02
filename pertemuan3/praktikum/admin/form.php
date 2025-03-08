<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="">
        <div class="container">
            <label for="name">Nama :</label>
            <input type="text">
        </div>
        <div class="container">
            <label for="adress">Alamat :</label>
            <textarea name="adress" id="alamat" cols="40" rows="5"></textarea>
        </div>
        <div class="container">
            <label for="notelpn">Nomor Telepon :</label>
            <input type="number" id="nomor">
        </div>
        <div class="container">
            <label for="pmbyrn">Metode Pembayaran :</label>
            <input type="text" list="pmbyrn" name="mtde-pmbyrn">
            <datalist id="pmbyrn">
                <option value="COD-Cek Dulu"></option>
                <option value="Transfer Bank"></option>
                <option value="Kartu Kredit/Debit"></option>
            </datalist>
        </div>
        <div class="container">
            <label for="jmlhpsn">Jumlah Pemesanan</label>
            <input type="number" min="1" max="10">
        </div>
        <div class="btn">
            <button type="submit">Buat Pesanan</button>
        </div>
    </form>
</body>

</html>