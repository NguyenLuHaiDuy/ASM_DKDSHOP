<?

if (isset($_POST['them'])) {
    $ten = $_POST['ten'] ? trim($_POST['ten']) : '';
    
    $trangthai = $_POST['trangthai'] ? trim($_POST['trangthai']) : '';



    if (empty($ten)) {
        $errors['ten'] = 'không được để trống';
    }
    if (empty($trangthai)) {
        $errors['trangthai'] = ' vui lòng chọn';
    }
}

include "themloaisp.php";
?>