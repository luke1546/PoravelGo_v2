<h3>아이디 중복체크</h3>
<p>
	<?php
		$id = $_GET["id"];
		if(!$id)
		{
			echo("<li>아이디를 입력해 주세요!</li>");
		}
		else
		{
			$con = mysqli_connect("localhost", "root", "", "sample");
			$sql = "select * from member where id='$id'";
			$result = mysqli_query($con, $sql);
			$num_record = mysqli_num_rows($result);

			if ($num_record)
			{
				echo "<li>".$id." 아이디가 중복됩니다.</li>";
				echo "<li>다른 아이디를 사용해 주세요!</li>";
			}
			else
			{
				echo "<li>".$id." 아이디가 사용 가능합니다.</li>";
			}

			mysqli_close($con);
		}
	?>
</p>
<div id="close">
	<img src="./image/close.jpg" onclick="javascript:self.close()">
</div>