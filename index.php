<?php
     include ('Php.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>C++ To Php</title>
               
     <link rel="stylesheet" href="Css.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
     <div class="kotak">
          <div class="pilihan">
               <form action="" method="post">
                    <div class="input-group">
                         <select name="input" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                              <option selected>Menu</option>
                              <option value="1">Pola 3 Bintang</option>
                              <option value="2">Pola Segitiga Siku-siku</option>
                              <option value="3">Pola Segitiga Sama Sisi</option>

                              <option value="4">Mencetak Angka Piramida</option>
                              <option value="5">Mencetak Angka Berlian</option>
                              <option value="6">Mencetak Pola Angka Piramida</option>
                              <option value="7">Mencetak Piramida Nomor Vertikal</option>
                              <option value="8">Mencetak Angka Piramida 2</option>
                              <option value="9">Mencetak Angka Pada Segitiga</option>
                              <option value="10">Mencetak Angka Pada Segitiga 2</option>
                              <option value="11">Mencetak Angka Pada Segitiga 3</option>

                              <option value="12">Mencetak Pola Piramida Setengah Bintang</option>
                              <option value="13">Mencetak Pola Piramida Setengah Bintang Terbalik</option>
                              <option value="14">Mencetak Pola Piramida Bintang</option>
                              <option value="15">Mencetak Pola Piramida Bintang 2</option>
                              <option value="16">Mencetak Pola Piramida Bintang Terbalik</option>
                              <option value="17">Mencetak Pola Piramida Bintang 3</option>
                              <option value="18">Mencetak Pola Berlian Bintang Penuh</option>
                              <option value="19">Mencetak Pola Piramida Bintang Ke Samping Kanan</option>
                              <option value="20">Mencetak Pola Piramida Bintang Ke Samping Kiri</option>
                              <option value="21">Mencetak Piramida Bintang Berongga</option>
                              <option value="22">Mencetak Pola Piramida Bintang Berlubang Terbalik</option>
                              <option value="23">Mencetak Piramida Bintang Berongga Dalam Pola Berlian</option>
                              <option value="24">Mencetak Persegi Dan Diamond Berongga</option>
                              <option value="25">Mencetak Kupu-Kupu</option>
                              <option value="26">Mencetak Diagonal & Sisi KotakDiagonal & Sisi Kotak</option>
                              <option value="27">Mencetak Diagonal & Sisi Belah Ketupat / Berlian</option>
                              <option value="28">Mencetak Anak Panah</option>
                              <option value="29">Belah Ketupat</option>
                              <option value="30">Segitiga Bersebelahan</option>                                                           
                         </select>
                         <button class="btn btn-warning" type="submit" id="bt" name="bt">Pilih</button>                                        
                    </div>
               </form>
          </div>

          <div class="isi" id="isi">
               <?php
                    $pilih = isset($_POST['input']) ? $_POST['input'] : false;
                    proses($pilih);
               ?>
          </div>
     </div>

     <script src="Javascript.js"></script>
</body>
</html>