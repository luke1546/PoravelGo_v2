<?php
        $aa = $_GET['num'];
        $bb = $_GET['id'];
        $conn = mysqli_connect( 'localhost', 'root', '', 'sample' );
        $sql3 = "DELETE FROM CART WHERE num=$aa and userid='$bb'";
        $result = mysqli_query( $conn, $sql3 );
        echo "
                <script>
                        location.href = 'cart.php';
                </script>
        ";
?>