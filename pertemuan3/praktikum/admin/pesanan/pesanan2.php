<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap');
        
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Patrick Hand', cursive;
        background-color: aliceblue;
        }

        body {
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .row {
            display: flex;
            margin-top: 1.5rem;
            padding: 2rem;
            flex-wrap: wrap;
        }

        .row img {
            width: 40%;
        }

        .row .deskripsi {
            padding: 2rem 1rem;
        }

        .row .deskripsi h2 {
            font-size: 2rem;
            font-weight: 1000;
            color: darkblue;
        }

        .row .deskripsi label {
            font-size: 1.5rem;
            font-weight: 500;
            color: darkblue;
        }

        .row .deskripsi p, ul {
            font-size: 1.5rem;
            font-weight: 500;
            color: darkblue;
        }

        /* media queries */

        /* laptop */
        @media (max-width: 1366px) {
            html {
            font-size: 75%;
            }
        }

        /* tablet */
        @media (max-width: 768px) {
            html {
            font-size: 62.5%;
            }
        }

        /* android */
        @media (max-width: 450px) {
            html {
            font-size: 55%;
            }
        }
    </style>
</head>
<body>
    <div class="row">
        <img src="../img/menu/produk2.jpg" alt="1">

        <form action="">
            <div class="deskripsi">
                <h2>Raleigh</h2>
                <label for="note">Baru</label>
                <ul>Model: Motus Grand Tour</ul>
                <ul>Fitur: Memiliki sistem transmisi yang halus dan nyaman untuk perjalanan jauh</ul>
                <p>Dapatkan manfaat dari berkendara tanpa emisi! Sepeda listrik kami adalah pilihan yang tepat untuk menjaga kebersihan lingkungan sambil tetap aktif.</p>
            </div>
        </form>
    </div>
</form>
</body>
</html>