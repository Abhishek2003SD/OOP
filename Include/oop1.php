<?php
include ('oop.php');
// include('connection.php');
?>
<?php
if(isset($_REQUEST['submit'])){
    include('connection.php');

// $cid=$_REQUEST['courseId'];
// $cname=$_REQUEST['cName'];
// $cduration=$_REQUEST['duration'];
// $cfees=$_REQUEST['cFees'];
// $cregfees=$_REQUEST['RegistrationFees'];
// $ctype=$_REQUEST['cType'];
// $stdate=$_REQUEST['StartDate'];
// $lname=$_REQUEST['lName'];

$course=new Oop();

$course->setCouresId($_REQUEST['courseId']);
$course->setCourseName($_REQUEST['cName']);
$course->setCourseDuration($_REQUEST['duration']);
$course->setCourseFees($_REQUEST['cFees']);
$course->setRegFees($_REQUEST['RegistrationFees']);
$course->setCType($_REQUEST['cType']);
$course->setStartDate($_REQUEST['StartDate']);
$course->setLectureName($_REQUEST['lName']);


$cid=$course->getCouresId();
$cname=$course->getCourseName();
$cduration=$course->getCourseDuration();
$cfees=$course->getCourseFees();
$cregfees=$course->getRegFees();
$ctype=$course->getCType();
$stdate=$course->getStartDate();
$lname=$course->getLectureName();



$query="SELECT * FROM course WHERE courseId='$cid'";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
header("location:../registration.php?error=userexit");

}else{
$query2="INSERT INTO course(courseId,courseName,Duration,courseFees,RegisFees,CourseType,startDate,lectureName)VALUES('$cid','$cname','$cduration','$cfees','$cregfees','$ctype','$stdate','$lname')";
$result=mysqli_query($conn,$query2);

header("location:../registration.php");
}
}
?>