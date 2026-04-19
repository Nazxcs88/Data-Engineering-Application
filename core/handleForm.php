<?php
require_once __DIR__ . '/dbConfig.php';
require_once __DIR__ . '/models.php';

if (isset($_POST['insertNewApplicantBtn'])) {

	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$gender = $_POST['gender'];
	$Address = $_POST['Address'];
	$BirthDate = $_POST['BirthDate'];
	$PhoneNum = $_POST['PhoneNum'];
    $Position = $_POST['Position'];
	$GraduatedFrom = $_POST['GraduatedFrom'];

	$query = insertApplicantRecords($pdo, $FirstName, $LastName, $gender, $Address, $BirthDate, $PhoneNum, $Position, $GraduatedFrom);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Query unsuccessful. Insertion failed!";
	}

}

if (isset($_POST['editApplicantBtn'])) {
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$gender = $_POST['gender'];
	$Address = $_POST['Address'];
	$BirthDate = $_POST['BirthDate'];
	$PhoneNum = $_POST['PhoneNum'];
	$Position = $_POST['Position'];
	$GraduatedFrom = $_POST['GraduatedFrom'];
	$ApplicantID = $_GET['id'];

	$query = updateApplicant($pdo, $FirstName, $LastName, $gender, $Address, $BirthDate, $PhoneNum, $Position, $GraduatedFrom, $ApplicantID);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Edit failed";
	}
}

if (isset($_POST['deleteApplicantBtn'])) {
	$ApplicantID = $_GET['id'];
	$query = deleteApplicant($pdo, $ApplicantID);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}

?>