<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Applicant</title>
</head>
<body>
    <?php $getApplicantByID = getApplicantByID($pdo, $_GET['id']); ?>
    <h3>Edit Applicant Details!</h3>
    <a href="index.php">View All Applicants</a>
	<form action="core/handleForm.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<p><label for="FirstName">First Name</label> <input type="text" name="FirstName" value="<?php echo $getApplicantByID['FirstName']; ?>"></p>
		<p><label for="LastName">Last Name</label> <input type="text" name="LastName" value="<?php echo $getApplicantByID['LastName']; ?>"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender" value="<?php echo $getApplicantByID['gender']; ?>"></p>
		<p><label for="Address">Home Address</label> <input type="text" name="Address" value="<?php echo $getApplicantByID['Address']; ?>"></p>
		<p><label for="BirthDate">Date of Birth</label> <input type="date" name="BirthDate" value="<?php echo $getApplicantByID['BirthDate']; ?>"></p>
		<p><label for="PhoneNum">Phone Number</label> <input type="text" name="PhoneNum" value="<?php echo $getApplicantByID['PhoneNum']; ?>"></p>
		<p><label for="Position">Position</label> <input type="text" name="Position" value="<?php echo $getApplicantByID['Position']; ?>"></p>
        <p><label for="GraduatedFrom">School Graduated</label> <input type="text" name="GraduatedFrom" value="<?php echo $getApplicantByID['GraduatedFrom']; ?>">
			<input type="submit" name="editApplicantBtn" value="Save Changes">
		</p>
	</form>
</body>
</html>
