    <link rel="stylesheet" type="text/css" href="./css/common.css">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>		

        <div id="top">
            <ul id="top_menu">  
<?php
    if(!$userid) {
?>               
                <li><a href="member_form.php">Join</a> </li>
                <li>|</li>
                <li><a href="login_form.php">Login</a></li>
<?php
    } else {
                $logged = $username."(".$userid.")님[Level:".$userlevel.", Point:".$userpoint."]";
?>
                <li><?=$logged?></li>
                <li>|</li>
                <li><a href="logout.php">Logout</a> </li>
                <li>|</li>
                <li><a href="cart.php">CART</a></li>
                <li>|</li>
                <li><a href="member_modify_form.php">MYPAGE</a></li>
<?php
    }
?>
<?php
    if($userlevel==0) {
?>
                <li>|</li>
                <li><a href="admin.php">관리자모드</a></li>
<?php
    }
?>
            </ul>
        </div>