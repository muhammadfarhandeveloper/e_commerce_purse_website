<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include 'config.php';
    include 'dashboard.php';

    $pid = $_GET['pid'];

    $sql = "select * from products where pid = ${pid}";
    $result = mysqli_query($con,$sql) or die("no data found");

    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){

?>

    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
            <form action="" method="POST" enctype="multipart/form-data">

<input type="text" required value="<?php echo $row['pname']?>" name="ptitle"  class="form-control"/><br>
<textarea name="pdesc"   rows="5" class="form-control" ><?php echo $row['pdesc']?></textarea>
<img src="images/<?php echo $row['pthumbnail']?>" width="100px"/><br/><br/>
<input type="file" name="imgthum" required /> <br><br>
<select name="catergory" id="">

    <?php
    $sql = "select * from product_category";
    $result1  = mysqli_query($con,$sql) or die("expired");

    while($row2 = mysqli_fetch_assoc($result1)){

        if($row['catid'] == $row2['catid']){
            $select = "selected";
        }
        else{
            $select = "";
        }

        echo "<option ${select} value='$row2[catid]'> $row2[catname]</option>";
    }
?>

</select>

<select name="color" id="">

    <?php
    $sql = "select * from product_color";
    $result1  = mysqli_query($con,$sql) or die("expired");

    while($row3 = mysqli_fetch_assoc($result1)){
        if($row['colorid'] == $row3['colorid']){
            $select = "selected";
        }
        else{
            $select = "";
        }

        echo "<option $select value='$row3[colorid]'> $row3[color_name]</option>";
    }

?>
</select>   

<?php
}


}
else{
    echo "no data found";
}

?>
<br><br>
        <button type="submit" name="updateproduct" class="btn btn-primary">Update Product</button>

</form>
            </div>
        </div>
    </div>
  

    <br><br><br>
    
</body>
</html>