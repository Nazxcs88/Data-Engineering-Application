<?php
require_once __DIR__ . '/dbConfig.php';

function insertApplicantRecords($pdo, $FirstName, $LastName, $gender, $Address, $BirthDate, $PhoneNum, $Position, $GraduatedFrom) {

	$sql = "INSERT INTO Applicant (FirstName, LastName, gender, Address, BirthDate, PhoneNum, Position, GraduatedFrom) VALUES (?,?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute(
		[$FirstName, $LastName, $gender, $Address, $BirthDate, $PhoneNum, $Position, $GraduatedFrom]
	);

	if ($executeQuery) {
		return true;
	}
}

function seeAllApplicantRecords($pdo) {
	$sql = "SELECT * FROM applicant";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();

	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getApplicantByID($pdo, $ApplicantID) {
	$sql = "SELECT * FROM Applicant WHERE ApplicantID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$ApplicantID]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function updateApplicant($pdo, $FirstName, $LastName, $gender, $Address, $BirthDate, $PhoneNum, $Position, $GraduatedFrom, $ApplicantID) {
	$sql = "UPDATE Applicant
			SET FirstName = ?,
				LastName = ?,
				gender = ?,
				Address = ?,
				BirthDate = ?,
				PhoneNum = ?,
				Position = ?,
				GraduatedFrom = ?
			WHERE ApplicantID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$FirstName, $LastName, $gender, $Address, $BirthDate, $PhoneNum, $Position, $GraduatedFrom, $ApplicantID]);

	if ($executeQuery) {
		return true;
	}
}

function deleteApplicant($pdo, $ApplicantID) {
	$sql = "DELETE FROM Applicant WHERE ApplicantID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$ApplicantID]);

	if ($executeQuery) {
		return true;
	}
}
?>