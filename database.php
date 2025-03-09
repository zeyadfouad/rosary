<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(isset($_POST["con"])){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "std2";
        $conn = mysqli_connect($host, $user, $pass, $db);#امر الإتصال بقاعدة البيانات

        // $insert = "insert into teacher values(2,'zeyad','egypt')"; #هذا الامر الإضافة البيانات
        // $q = mysqli_query($conn,$insert);#الإتصال بقاعدة البيانات ثم اضف البيانات

        // $update = "update teacher set name = 'zeyad' where id=1 ";#امر تعديل في قواعد البيانات
        // $q2 = mysqli_query($conn,$update);#الإتصال بقاعدة البيانات ثم عدل البيانات
 
        // $delete = "delete from teacher where name='zain'";#حذف  في قاعدة البيانات
        // $q3 = mysqli_query($conn,$delete);#الإتصال بقاعدة البيانات ثم عدل البيانات

        // if($q3){
        //     echo "ok , all things is okay";
        // }else{
        //     echo "";
        // }


        $r = mysqli_query($conn,"select * from teacher");# امر جلب البيانات



        

    }
    ?>

    <form method="POST">
        <center>   
          <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "</tr>";
            }
            ?>
          </table>
    </center>
    </form>
</body>
</html>
