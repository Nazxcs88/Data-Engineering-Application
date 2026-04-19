<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Applicant</title>
</head>
<body>
    <h3>Welcome to the Data Engineering Application System. Input your details here to register</h3>
	<form action="core/handleForm.php" method="POST">
		<p><label for="FirstName">First Name</label> <input type="text" name="FirstName"></p>
		<p><label for="LastName">Last Name</label> <input type="text" name="LastName"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><label for="Address">Home Address</label> <input type="text" name="Address"></p>
		<p><label for="BirthDate">Date of Birth</label> <input type="date" name="BirthDate"></p>
		<p><label for="PhoneNum">Phone Number</label> <input type="text" name="PhoneNum"></p>
		<p><label for="Position">Position</label> <input type="text" name="Position"></p>
        <p><label for="GraduatedFrom">School Graduated</label> <input type="text" name="GraduatedFrom">
			<input type="submit" name="insertNewApplicantBtn">
		</p>
	</form>

    	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Applicant ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
	    <th>Address</th>
	    <th>BirthDate</th>
	    <th>PhoneNum</th>
	    <th>Position</th>
	    <th>GraduatedFrom</th>
	    <th>Action</th>
	  </tr>
	  <?php $seeAllStudentRecords = seeAllApplicantRecords($pdo); ?>
	  <?php foreach ($seeAllStudentRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['ApplicantID']; ?></td>
	  	<td><?php echo $row['FirstName']; ?></td>
	  	<td><?php echo $row['LastName']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['Address']; ?></td>
	  	<td><?php echo $row['BirthDate']; ?></td>
	  	<td><?php echo $row['PhoneNum']; ?></td>
	  	<td><?php echo $row['Position']; ?></td>
        <td><?php echo $row['GraduatedFrom']; ?></td>
        <td>
            <a href="editApplicant.php?id=<?php echo $row['ApplicantID']; ?>">Edit</a>
            <a href="deleteApplicant.php?id=<?php echo $row['ApplicantID']; ?>">Delete</a>
        </td>
	  </tr>
	  <?php } ?>
	</table>
</body>
</html>