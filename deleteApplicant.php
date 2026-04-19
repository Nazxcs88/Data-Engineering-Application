<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Applicant</title>
</head>
<body>
    <?php $getApplicantByID = getApplicantByID($pdo, $_GET['id']); ?>
    <h3>Are you sure you want to delete this applicant?</h3>
    <div style="border: 1px solid black; padding: 15px; width: 50%;">
        <p>First Name: <?php echo $getApplicantByID['FirstName']; ?></p>
        <p>Last Name: <?php echo $getApplicantByID['LastName']; ?></p>
        <p>Gender: <?php echo $getApplicantByID['gender']; ?></p>
        <p>Address: <?php echo $getApplicantByID['Address']; ?></p>
        <p>Date of Birth: <?php echo $getApplicantByID['BirthDate']; ?></p>
        <p>Phone Number: <?php echo $getApplicantByID['PhoneNum']; ?></p>
        <p>Position: <?php echo $getApplicantByID['Position']; ?></p>
        <p>School Graduated: <?php echo $getApplicantByID['GraduatedFrom']; ?></p>

        <form action="core/handleForm.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <input type="submit" name="deleteApplicantBtn" value="Delete" style="background-color: red; color: white;">
            <a href="index.php" style="margin-left: 15px;">Cancel</a>
        </form>
    </div>
</body>
</html>
