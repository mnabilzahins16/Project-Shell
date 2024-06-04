<?php
    include 'proses.php';
    $proses = new Beli();
    $proses->setHarga(15429, 16130, 18310, 16510);
    if(isset($_POST['kirim'])) {
        $proses->jumlah = $_POST['liter'];
        $proses->jenis = $_POST['jenis'];

        $proses->hargaBeli();
        $proses->cetakPembelian();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table>
        <form action="" method="POST">
                <tr>
                    <td>Masukkan Jumlah Liter : </td>
                    <td>
                        <input type="number" name="liter" id="liter" required>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Tipe Bahan Bakar : </td>
                    <td>
                        <select name="jenis" id="jenis">
                            <option disabled selected>--Shell Option--</option>
                            <option value="SSuper">SSuper</option>
                            <option value="SVPower">SVPower</option>
                            <option value="SVPowerDiesel">SVPowerDiesel</option>
                            <option value="SVPowerNitro">SVPowerNitro</option>
                        </select>
                        <button type="submit" value="kirim" name="kirim">kirim</button>
                    </td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>