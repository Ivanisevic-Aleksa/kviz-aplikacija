<?php
//magic.php
error_reporting(0);
include_once "db.php";
class Quiz extends DB{
	public function user($username){
		$trim_username = trim($username);
		$esc_username = mysqli_real_escape_string($this->connect(),$trim_username);
		
		if (empty($esc_username)) {
		 	//header("location:../index.php?prazno-polje!");
		 	echo "<script>
		 			alert('Popunite prazno polje!');
		 			history.back();
		 		  </script>";
		 	exit();
		 }
		 else{
		 	session_start();
		 	$_SESSION["logged"] = "successuful-session";
		 	$_SESSION["username"] = $esc_username;
		 	header("location:../quiz.php");
		 	exit();
		 }

	}
	public function session(){
		if (!$_SESSION["logged"]) {
			header("location:index.php?greska");
			exit();
		}
	}
	public function play($question_1,$question_2,$question_3){
		
		$question_sum = 0;

		if (empty($question_1) || empty($question_2) || empty($question_3)) {
			//header("location:../quiz.php?odgovorite-na-sva-pitanja!");
			echo "<script>
					alert('Niste odgovorili na sva pitanja!');
					history.back();
				  </script>";
			exit();
		}
		else{
			if ($question_1 == "4") {
				$question_sum++;
			}
			if ($question_2 == "beograd") {
				$question_sum++;
			}
			if ($question_3 == "boja_3") {
				$question_sum++;
			}
			//echo $question_sum;
			session_start();
			$username = $_SESSION['username'];
			$sql = "INSERT INTO player(username,score,played_at)
					VALUES('$username','$question_sum',now())";
			$res_conn = $this->connect()->query($sql);
			if (!$res_conn) {
				header("location:../quiz.php?greska");
				exit();
			}
			else{
				$result = 'Tacno ste odgovorili na'.' '.$question_sum.' '.'/ 3 pitanja';
				echo "<script>
						alert('".$result."');
						window.location.href='logout.php';
					  </script>";
			}
			
		}
		

	}
	public function display(){
		$sql_dis = "SELECT username,score,played_at FROM player ORDER BY score DESC, played_at DESC";
		$result_dis = $this->connect()->query($sql_dis);
		if (mysqli_num_rows($result_dis) == 0) {
			echo "<p>Nije pronadjen nijedan igrac....</p>";
		}
		else{
			echo "<div>";
				echo "<table>";
				echo "<tr>";
				echo "<th>Korisnicko ime</th>";
				echo "<th>Rezultat</th>";
				echo "<th>Odigrano</th>";
				echo "</tr>";
				
			while ($row = mysqli_fetch_assoc($result_dis)) {
				echo "<tr>";
				echo "<td>".$row['username']."</td>";
				echo "<td>".$row['score']."</td>";
				echo "<td>".$row['played_at']."</td>";
				echo "</tr>";
			}
			
				echo "</table>";
				echo "</div>";
		}
		
	}
}
?>