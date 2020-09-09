<?php

$connection = mysqli_connect("localhost", "root", "", "latihan");

function inputdata(){
	global $connection;
	if(!$connection){
	die("failed to connect");
	};

	$catatan = $_POST["catatan"];

	$insert = "INSERT INTO todolist (id, catatan) VALUES ('', '$catatan')";


	if(mysqli_query($connection, $insert)){
		echo '<script>alert("noted!"); </script>';
	};
};

function showdata(){
	global $connection;
	if(!$connection){
	die("failed to connect");
	};

	$getdata = "SELECT * FROM todolist";
	$show = mysqli_query($connection, $getdata);
	while ($list = mysqli_fetch_array($show)) {
		echo '<div style="display: flex; justify-content: center; flex-direction: row; position: relative;" class="main">
                    <div id="list">
                        <span id="isilist">'. $list["catatan"] .'</span>
                    </div>
                    <div id="option">
                        <i class="far fa-check-square" id="cek"></i>
                        <a href="deletedata.php?id='.$list["id"].'">
                        <button id="deletebtn"><i class="far fa-trash-alt"></i></button>
                        </a>
                    </div>
                </div>';
	};
};

function deletedata(){
	global $connection;
	if(!$connection){
		die("failed to connect");
	};

	$id = $_GET["id"];

	$delete = "DELETE FROM todolist WHERE id= $id";
	$result = mysqli_query($connection, $delete);

	echo '<script>alert("deleted!"); </script>';
	echo '<script>document.location.href = "showdata.php"</script>';
	
}
?>