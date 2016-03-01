<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

</head>
<body onload="start()">

<strong> Insert New Library Member </strong><br>
<form <?php $_PHP_SELF ?>" method = "POST">
Card Number:<input type="text" name="cardno">
First name: <input type="text" name="fname">
Last name: <input type="text" name="lname">
Email: <input type="text" name="email">
<input type = "submit" />
</form> 
<?php 
	if(!(empty($_POST['cardno'])||empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['email']))){
	require '/../models/insertpeople.php';
	insertperson($_POST['cardno'],$_POST['fname'],$_POST['lname'],$_POST['email']);
	}
?>


<strong> Insert New Book </strong><br>
<form <?php $_PHP_SELF ?>" method = "POST">
ISBN:<input type="text" name="isbn">
Book Title: <input type="text" name="title">
Author: <input type="text" name="author">
<input type = "submit" />
</form> 

<?php 
	if(!(empty($_POST['isbn'])||empty($_POST['title'])||empty($_POST['author']))){
	require '/../models/insertbooks.php';
	insertbook($_POST['isbn'],$_POST['title'],$_POST['author']);
	}
?>
<strong>Insert New Borrowing </strong><br>
<form <?php $_PHP_SELF ?>" method = "POST">
Lendee Card Number:<input type="text" name="bcardno">
ISBN of Book Lent: <input type="text" name="bisbn">
Time of lending <input type="text" name="stime">
Time of return: <input type="text" name="rtime">
<input type = "submit" />
</form> 

<?php 
	if(!(empty($_POST['bcardno'])||empty($_POST['bisbn'])||empty($_POST['stime'])||empty($_POST['rtime']))){
	require '/../models/insertborrowing.php';
	insertborrowing($_POST['bcardno'],$_POST['bisbn'],$_POST['stime'],$_POST['rtime']);
	}
?>

<strong> Delete Library Member </strong><br>
<form <?php $_PHP_SELF ?>" method = "POST">
Enter Card Number:<input type="text" name="deletecardno">
<input type = "submit" />
</form> 
<?php 
	if(!(empty($_POST['deletecardno']))){
	require '/../models/deletepeople.php';
	deleteperson($_POST['deletecardno']);
	}
?>

<strong> Delete All Borrowings Associated with Member </strong><br>
<form <?php $_PHP_SELF ?>" method = "POST">
Enter Card Number:<input type="text" name="deletebcardno">
<input type = "submit" />
</form> 
<?php 
	if(!(empty($_POST['deletebcardno']))){
	require '/../models/deleteborrowing.php';
	deleteborrowing($_POST['deletebcardno']);
	}
?>


<strong> Update Email for Member </strong><br>
<form <?php $_PHP_SELF ?>" method = "POST">
Card Number:<input type="text" name="emailcardno">
New Email: <input type="text" name="emailemail">
<input type = "submit" />
</form> 

<?php 
	if(!(empty($_POST['emailcardno'])||empty($_POST['emailemail']))){
	require '/../models/updatepeople.php';
	updateemail($_POST['emailcardno'],$_POST['emailemail']);
	}
?>

<strong> Update Return Time Of Book </strong><br>
<form <?php $_PHP_SELF ?>" method = "POST">
Card Number:<input type="text" name="rcardno">
ISBN: <input type="text" name="risbn">
Return Time: <input type="text" name="rreturn">
<input type = "submit" />
</form> 

<?php 
	if(!(empty($_POST['rcardno'])||empty($_POST['risbn'])||empty($_POST['risbn']))){
	require '/../models/updateborrowing.php';
	updateborrowing($_POST['rcardno'],$_POST['risbn'],$_POST['rreturn']);
	}
?>

<p id="people"></p>
<p id="books"></p>
<p id="borrowing"></p>



<strong>People</strong><br><br>
<?php require '/../models/readpeople.php';?><br>
<strong>Books</strong><br><br>
<?php require '/../models/readbooks.php';?><br>
<strong>Borrowings</strong><br><br>
<?php require '/../models/readborrowing.php';?><br>






</body>







</html>