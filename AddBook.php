<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop bán hàng NetaShop</title>

    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <!-- Main content -->
    <div class="container">
        <h1>Form Thêm mới Sách</h1>

        <form name="frmCreate" method="post" action="" class="form">
            <table class="table">
                <tr>
                    <td>Tên sách</td>
                    <td><input type="text" name="tensach" id="tensach" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Tên tác giả</td>
                    <td><input type="text" name="tentacgia" id="tentacgia" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Nhà xuất bản</td>
                    <td><textarea name="nhaxuatban" id="nhaxuatban" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>Năm xuất bản</td>
                    <td><input type="text" name="namxb" id="namxb" class="form-control" /></td>
                </tr>

                <tr>
                    <td>ISBN</td>
                    <td><input type="text" name="isbn" id="isbn" class="form-control" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ liệu</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <?php

    include_once('BookList.php');

   
    if ( isset($_POST['btnSave']) ) {
        
        // 3. Nếu người dùng có bấm nút `Lưu dữ liệu` thì thực thi câu lệnh INSERT
        // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
        $tensach = $_POST['tensach'];
        $tentacgia = $_POST['tentacgia'];
        $nhaxuatban = $_POST['nhaxuatban'];
        $namxb = $_POST['namxb'];
        $isbn = $_POST['isbn'];

        $book = new Book($tensach, $tentacgia, $nhaxuatban, $namxb, $isbn);

        $bookList = new BookList();

        $bookList->addBook($book);

        // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
        header('location:home.php');   
    }
    ?>

    <!-- Liên kết JS Jquery bằng CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <!-- Liên kết JS Popper bằng CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Liên kết JS Bootstrap bằng CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Liên kết JS FontAwesome bằng CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>