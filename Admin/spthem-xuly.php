<?
if (isset($_POST['them'])) {
    $ten = $_POST['ten'] ? trim($_POST['ten']) : '';
    $gia = $_POST['gia'] ? trim($_POST['gia']) : '';
    
    $mota = $_POST['mota'] ? trim($_POST['mota']) : '';
    $id_lsp = $_POST['id_lsp'] ? trim($_POST['id_lsp']) : '';
    $trangthai = $_POST['trangthai'] ? trim($_POST['trangthai']) : '';


    if (empty($ten)) {
        $errors['ten'] = 'không được để trống';
    }
    if (empty($gia)) {
        $errors['gia'] = 'không được để trống';
    }
   
    if (empty($mota)) {
        $errors['mota'] = 'không được để trống';
    }
    if (empty($id_lsp)) {
        $errors['id_lsp'] = 'không được để trống';
    }
    if (empty($trangthai)) {
        $errors['trangthai'] = 'không được để trống';
    }
    if (empty($errors)) {

        $query = "SELECT * FROM admin WHERE ten='$ten' AND gia='$gia' ";
    }
}
include "themsp.php";


?>