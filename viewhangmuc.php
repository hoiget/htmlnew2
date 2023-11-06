<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hạng mục</title>
    <style>
       
        h2{
            width:400px;
            border: 1px solid black;
            border-radius: 20px;
            text-align: center;
            background-color: rgb(30, 144, 255);
            color: aliceblue;
        }
        
    </style>
    
</head>
<body>
    
    <form action="#" method="post" enctype="multipart/form-data" >
        <button ><a href="" style="text-decoration:none; color:black">Thêm hạng mục</a></button>
       
        <?php 
        echo"<center>";
         echo"<h2>Quản lý hạng mục</h2>";
         echo"<table border='1px solid' style='width:100%;margin:auto;text-align:center;background-color:aliceblue'>";
         echo"<tr><th>ID</th><th>Tên hạng mục</th><th>Hạng mục cha</th><th>Diễn giải</th><th>Action</th></tr>";
         echo"<tr><td>1</td><td>ăn</td><td>ăn uống</td><td>..</td><td>  <button><a href='' style='text-decoration:none;color:black' onclick='return confirm(\""."Bạn chắc có muốn xóa không"."\")'>Xóa</a></button> / <button><a href='' style='text-decoration:none;color:black'>Sửa</a></button></td></tr>";
         echo"<tr><td>2</td><td>ăn</td><td>ăn uống</td><td>..</td><td> <button><a href='' style='text-decoration:none;color:black' onclick='return confirm(\""."Bạn chắc có muốn xóa không"."\")'>Xóa</a></button> / <button><a href='' style='text-decoration:none;color:black'>Sửa</a></button> </td></tr>";
         echo"<tr><td>2</td><td>ăn</td><td>ăn uống</td><td>..</td><td> <button><a href='' style='text-decoration:none;color:black' onclick='return confirm(\""."Bạn chắc có muốn xóa không"."\")'>Xóa</a></button> / <button><a href='' style='text-decoration:none;color:black'>Sửa</a></button></td></tr>";
         echo"</center>";
        ?>
        
    </form>
</body>
</html>
