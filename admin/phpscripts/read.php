<?php

			function getAll($tbl) {
			include('connect.php');
			$queryAll = "SELECT * FROM {$tbl}";
			$runAll = mysqli_query($link, $queryAll);
			if($runAll){
			return $runAll;
			}else{
			$error = "There was error accessing this information.  Please contact your admin.";
			return $error;
			}
			mysqli_close($link);
			}


			function getImage($tbl1) {
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl1}";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

			function getTextinfo($tbl2) {
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl2}";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

			function getmemory($tbl3) {
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl3} WHERE NOT memory_id = 1";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

			function getsingle($tbl3) {
				include('connect.php');
				$querySingle = "SELECT * FROM {$tbl3} WHERE memory_id = 1";
				$runSingle = mysqli_query($link, $querySingle);
				if($runSingle){
					return $runSingle;
				}else {
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);

			}

			function getevent($tbl4) {
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl4}";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

			function getContact($tbl5) {
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl5}";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

			function getSingletbl($tbl, $col, $id) {
				include('connect.php');
				$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
				$runSingle = mysqli_query($link, $querySingle);
				if($runSingle){
					return $runSingle;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
	}

			function getVideo($tbl6) {
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl6}";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

			function getSingleform($tbl, $col, $id) {
				include('connect.php');
				$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
				$runSingle = mysqli_query($link, $querySingle);
				if($runSingle){
					return $runSingle;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

?>
