<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas2.php</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<?php
$nrp_terakhir = 125;

switch ($nrp_terakhir % 5) {
    case 1:
        $kategori = "Budaya Daerah di Indonesia";
        $data = [
            "Nama" => "Batik",
            "Deskripsi" => "Kain tradisional dari Jawa yang memiliki nilai simbolis.",
            "Asal" => "Jawa",
            "Tahun UNESCO" => 2009,
            "Gambar" => "https://up.yimg.com/ib/th?id=OIP.VVXeZeMiXExp4Fp5uMQySwAAAA&pid=Api&rs=1&c=1&qlt=95&w=154&h=102.jpg"
        ];
        break;
    case 2:
        $kategori = "Penemu-penemu terkenal di dunia";
        $data = [
            "Nama" => "Albert Einstein",
            "Penemuan" => "Teori Relativitas",
            "Negara" => "Jerman",
            "Tahun Penemuan" => 1905,
            "Gambar" => "https://up.yimg.com/ib/th?id=OIP.O9Uxtjw5Zcp-Dk04_-yCngHaHp&pid=Api&rs=1&c=1&qlt=95&w=95&h=98.jpg"
        ];
        break;
    case 3:
        $kategori = "Flora dan Fauna terancam punah";
        $data = [
            "Nama" => "Harimau Sumatra",
            "Jenis" => "Fauna",
            "Habitat" => "Sumatra",
            "Status" => "Kritis",
            "Gambar" => "https://up.yimg.com/ib/th?id=OIP.zq-XrgyRfAn0x1FKRr4OYQHaE8&pid=Api&rs=1&c=1&qlt=95&w=149&h=99.jpg"
        ];
        break;
    case 4:
        $kategori = "Pahlawan Nasional Indonesia";
        $data = [
            "Nama" => "Soekarno",
            "Peran" => "Proklamator Kemerdekaan Indonesia",
            "Tahun Lahir" => 1901,
            "Tahun Wafat" => 1970,
            "Gambar" => "https://up.yimg.com/ib/th?id=OIP.Mrjd-TsLiEoafZf0qAx-rQHaD4&pid=Api&rs=1&c=1&qlt=95&w=190&h=99.jpg"
        ];
        break;
    case 0:
        $kategori = "Perusahaan Teknologi";
        $data = [
            "Nama" => "Apple Inc.",
            "Produk Utama" => "iPhone, Mac",
            "Negara Asal" => "AS",
            "Tahun Didirikan" => 1976,
            "Gambar" => "https://up.yimg.com/ib/th?id=OIP.YHuoAd9Wowx7qdmP4h35KQHaDp&pid=Api&rs=1&c=1&qlt=95&w=234&h=115.jpg"
        ];
        break;
    default:
        $kategori = "Tidak Diketahui";
        $data = [];
        break;
}

echo "<h1>Kategori: $kategori</h1>";
if (!empty($data)) {
    echo "<table>";
    echo "<tr>";
    foreach ($data as $key => $value) {
        echo "<th>$key</th>";
    }
    echo "</tr><tr>";
    foreach ($data as $key => $value) {
        if ($key === "Gambar") {
            echo "<td><img src='$value' alt='Gambar'></td>";
        } else {
            echo "<td>$value</td>";
        }
    }
    echo "</tr></table>";
} else {
    echo "<p>Data tidak tersedia.</p>";
}
?>

</body>
</html>
