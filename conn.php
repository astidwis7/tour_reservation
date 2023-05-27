<?php
$koneksi = mysqli_connect("localhost", "root", "", "tour");

function pesan($data){
    global $koneksi;
    $nama = $data['name'];
    $id = $data['id'];
    $hp = $data['phone'];
    $destinasi = $data['destination'];
    $tanggal = $data['date'];
    $dewasa = $data['adult'];
    $anak = $data['children'];
    if ($data['destination'] == 'Museum Purbakala') {
        $harga = 40000;
    } elseif ($data['destination'] == 'Taman Pintar') {
        $harga = 30000;
    } else {
        $harga = 60000;
    }
    $bayar= (0.5 * $harga * $anak)+($harga * $dewasa);

    $query = "INSERT INTO reservation VALUES
                ('$nama', '$id', '$hp', '$destinasi',
                '$tanggal', '$dewasa', '$anak', '$harga', '$bayar')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
?>
