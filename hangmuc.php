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
        input,textarea{
            width:400px;
        }
        #but{
            width:200px;
        }
       
    </style>
    
</head>
<body>
    
    <form action="#" method="post" enctype="multipart/form-data" >
        <table style="margin:auto;text-align:left">
        <center><h2>Thêm hạng mục</h2></center>
            <tr>
                <td>Tên hạng mục :</td>
                <td><input type="text" name="tenhm"  required ></td>
            </tr>
            <tr>
                <td>Diện giải :</td>
                <td><textarea name="diengiai" cols="21" rows="4"></textarea></td>
            </tr>
            
            <tr>
                <td>hạng mục cha:</td>
                <td>
                    <select name="hangm">
                   <?php
                    /*include_once("Controller/ccompany.php");
                    $comp= new controlcom();
                    $table=$comp->getallcompany();
                    if(mysql_num_rows($table)){
                        while($row=mysql_fetch_assoc($table)){
                            echo "<option value=".$row["comid"].">".$row["comname"]."</option>";
                        }
                    }*/
                    
                    ?>
                    <option value=""></option>
                    </select>
                </td>
            </tr>
            
            
           
            
            
            
        </table>
        <br>
        <center>
        <input type="reset" value="reset" id="but">
        <input type="submit" name="btnsub"  value="Lưu" id="but">
            
        
            </center>
    </form>
</body>
</html>
<?php
 //include_once("Controller/cproduct.php");
if(isset($_REQUEST['btnsub'])){
    $ten=$_REQUEST['tenhm'];
    $hangmuc=$_REQUEST['hangm'];
    $diengiai=$_REQUEST['diengiai'];
    
   
        
    echo"<script>alert('Thêm dữ liệu thành công')</script>";
    echo header("refresh:0;url='hangmuc.php'");
   

}


?>