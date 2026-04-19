CREATE TABLE Applicant (
  ApplicantID int AUTO_INCREMENT PRIMARY KEY,
  FirstName varchar(50),
  LastName varchar(50),
  gender varchar(50),
  Address varchar(50),
  BirthDate DATE,
  PhoneNum int,
  Position varchar(50),
  GraduatedFrom varchar(50)
);