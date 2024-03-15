<?php

echo "=== Program Sederhana =================================================== <br><br>";
echo "Pilih operasi: <br>";
echo "1. Penjumlahan <br>";
echo "2. Pengurangan <br>";
echo "3. Perkalian <br>";
echo "4. Pembagian <br><br>";


?>

<form method="post" action=''>
    <label for="choice">Masukan pilihan:</label>
    <input type="number" id="choice" name="choice" min="1" max="4"><br>
    <label for="angka1">Masukkan bilangan pertama:</label>
    <input type="number" id="angka1" name="angka1"><br>
    <label for="angka2">Masukkan bilangan kedua:</label>
    <input type="number" id="angka2" name="angka2"><br>
    <input type="submit" value="Submit">
</form>

<?php

if (isset($_POST['choice'])) {
    $pilih = $_POST["choice"];
    $input1 = $_POST["angka1"];
    $input2 = $_POST["angka2"];

    function kalkulasikan($pilih,$a,$b) {
        switch($pilih){
            case 1:
                $jawab = $a+$b;
                break;
            case 2:
                $jawab = $a-$b;
                break;
            case 3:
                $jawab = $a*$b;
                break;
            case 4:
                $jawab = $a/$b;
                break;
            default:
                echo"masukan angka 1-4";
                break;
        }
        return $jawab;
    }

    echo 'hasil: '. kalkulasikan($pilih,$input1,$input2);
}