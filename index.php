<?php
//Koneksi ke database mysql
include "latapi.php";

// Mendapatkan metode HTTP (GET, POST, PUT, DELETE)
$method = $_SERVER['REQUEST_METHOD'];

// Mengecek metode HTTP yang diterima
switch ($method) {
    case 'GET':
        // Mendapatkan data
        $response = getData($conn);
        break;
    case 'POST':
        // Menambah data
        $response = addData($conn);
        break;
    case 'PUT':
        // Memperbarui data
        $response = updateData($conn);
        break;
    case 'DELETE':
        // Menghapus data
        $response = deleteData($conn);
        break;
    default:
        $response = array('status' => 'Error', 'message' => 'Metode HTTP tidak valid.');
        break;
}

// Mencetak respons dalam format JSON
echo json_encode($response);

// Fungsi untuk mendapatkan data(Read)
function getData($conn)
{
    $sql = "SELECT * FROM calonsiswa";
    $query = mysqli_query($conn, $sql);
    $item = array();
    while ($data = mysqli_fetch_array($query)) {
        $item[] = array(
            'id' => $data["id"],
            'nama' => $data["nama"],
            'nilai' => $data["nilai"]
        );
    }
    $response = array(
        'status' => 'OK',
        'data' => $item
    );
    return $response;
}

// Fungsi untuk menambah data(Create)
function addData($conn)
{
    // Ambil data dari body request
    $data = json_decode(file_get_contents('php://input'), true);
    $nama = $data['nama'];
    $nilai = $data['nilai'];

    // Masukkan data ke database
    $sql = "INSERT INTO calonsiswa (nama, nilai) VALUES ('$nama', $nilai)";
    if (mysqli_query($conn, $sql)) {
        $response = array('status' => 'OK', 'message' => 'Data berhasil ditambahkan.');
    } else {
        $response = array('status' => 'Error', 'message' => 'Gagal menambahkan data: ' . mysqli_error($conn));
    }
    return $response;
}

// Fungsi untuk memperbarui data(Update)
function updateData($conn)
{
    // Ambil data dari body request
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'];
    $nama = $data['nama'];
    $nilai = $data['nilai'];

    // Perbarui data di database
    $sql = "UPDATE calonsiswa SET nama='$nama', nilai=$nilai WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        $response = array('status' => 'OK', 'message' => 'Data berhasil diperbarui.');
    } else {
        $response = array('status' => 'Error', 'message' => 'Gagal memperbarui data: ' . mysqli_error($conn));
    }
    return $response;
}

// Fungsi untuk menghapus data(Delete)
function deleteData($conn)
{
    // Ambil ID dari URL
    $id = $_GET['id'] ?? null;

    // Hapus data dari database
    $sql = "DELETE FROM calonsiswa WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        $response = array('status' => 'OK', 'message' => 'Data berhasil dihapus.');
    } else {
        $response = array('status' => 'Error', 'message' => 'Gagal menghapus data: ' . mysqli_error($conn));
    }
    return $response;
}
?>
