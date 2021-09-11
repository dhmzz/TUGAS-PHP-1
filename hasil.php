<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">    
</head>
</head>
<body>
    <style="padding: 100px">
        
    </style>
    <div style="margin: 30px 200px; background-color: rgb(255, 255, 255); box-shadow: black 2px 5px; box-shadow: #838383 0px -8px 20px; border-radius: 0px; padding : 30px">
    <?php
        $nama=$_POST["nama"];
        $gender=$_POST["gender"];
        $usia=$_POST["usia"];
        $alamat=$_POST["alamat"];
        $lahir=$_POST["lahir"];
        $agama=$_POST["agama"];
        $cita=$_POST["cita"];
        $hobi=$_POST["hobi"];
        $asal=$_POST["asal"];

        echo "Data berhasil masuk<br>";
        echo "Nama          : ".$nama."<br>";
        echo "Jenis kelamin : ".$gender."<br>";
        echo "Usia          : ".$usia."<br>";
        echo "Alamat        : ".$alamat."<br>";
        echo "Asal kota     : ".$lahir."<br>";
        echo "Agama         : ".$agama."<br>";
        echo "Cita-cita     : ".$cita."<br>";
        echo "Hobi          : ".$hobi."<br>";
        echo "Asal sekolah  : ".$asal."<br>";
    ?>
</div>
</body>
<footer>
     <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</footer>
</html>
