<?php
    $name   = $_POST["name"];
   $con = mysqli_connect("localhost", "root", "", "sample");
   mysqli_query($con, "set session character_set_connection=utf8;");
        mysqli_query($con, "set session character_set_results=utf8;");
        mysqli_query($con, "set session character_set_client=utf8;");
   $sql = "select id from member where name='$name'";
   $result = mysqli_query($con, $sql);
   $num_match = mysqli_num_rows($result);
   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('회원정보를 찾을수 없습니다.')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $id = $row["id"];
        echo "회원님의 아이디는 $id 입니다.";
        mysqli_close($con);

    }   
?>

<img src="./image/close.jpg" onclick="javascript:self.close()">