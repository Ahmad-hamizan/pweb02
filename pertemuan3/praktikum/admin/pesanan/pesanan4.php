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
        <img src="../img/menu/produk4.jpeg" alt="1">

        <form action="">
            <div class="deskripsi">
                <h2>Kalkhoff</h2>
                <ul>Model: Image 5.B Move</ul>
                <ul>Fitur: Memiliki desain yang elegan dan teknologi canggih untuk performa tinggi</ul>
                <label for="note">Baru</label>
                <p>Dengan baterai berkualitas tinggi, sepeda ini mampu menempuh jarak hingga 70 km dalam sekali pengisian, menjadikannya ideal untuk perjalanan sehari-hari.</p>
            </div>
        </form>
    </div>
</form>
</body>
</html>