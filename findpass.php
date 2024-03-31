<?php
    $id   = $_POST["id"];
   $con = mysqli_connect("localhost", "root", "", "sample");
   mysqli_query($con, "set session character_set_connection=utf8;");
        mysqli_query($con, "set session character_set_results=utf8;");
        mysqli_query($con, "set session character_set_client=utf8;");
   $sql = "select * from member where id='$id'";
   $result = mysqli_query($con, $sql);
   $num_match = mysqli_num_rows($result);
   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('아이디를 찾을 수 없습니다.')
             history.go(-1)
           </script>
         ");
    }
    else
    {   
        $row = mysqli_fetch_array($result);
        $email = $row["email"];
        $pass = $row["pass"];
        $name = $row["name"];
    

        echo "
        <script>
                window.open('mail.php?email=$email&pass=$pass&name=$name', 
    '이메일발송', 'width=400, height=150, toolbar=no, menubar=no, scrollbars=no, resizable=yes');
        </script>
    ";

        echo "회원님의 이메일($email)로 비밀번호가 발송되었습니다.";
        mysqli_close($con);

    }   
?>

<img src="./image/close.jpg" onclick="javascript:self.close()">