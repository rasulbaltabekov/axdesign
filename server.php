<?php
session_start();

// initializing variables
$username = "";
$email    = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'test');


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['user_login']);
  $email = mysqli_real_escape_string($db, $_POST['user_email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['user_password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['user_password2']);
  $user_fio = mysqli_real_escape_string($db, $_POST['user_fio']);
  $_SESSION['user_fio'] = $user_fio;
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Логин обязателен!"); }
  if (empty($user_fio)) { array_push($errors, "ФИО обязательно!"); }
  if (empty($email)) { array_push($errors, "Введите email"); }
  if (empty($password_1)) { array_push($errors, "Введите пароль"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Пароли не совпадают");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE `user_login`='$username' OR `user_email`='$email'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['user_login'] === $username) {
      array_push($errors, "Имя пользователя уже существует!");
      $_SESSION['user_fio'] = $result['user_fio'];
      $_SESSION['user_fio'] = $user_fio;
    }

    if ($user['user_email'] === $email) {
      array_push($errors, "Такой email уже сущетсвует!");
      $_SESSION['user_fio'] = $result['user_fio'];
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO users (user_login, user_fio, user_email, user_password) 
  			  VALUES('$username', '$user_fio', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['user_login'] = $username;

  	$_SESSION['success'] = "Вы вошли в систему!";
  	header('location: index.php');
  }
 



}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['user_login']);
    $password = mysqli_real_escape_string($db, $_POST['user_password']);

    
    if (empty($username)) {
        array_push($errors, "Введите логин");
    }
    if (empty($password)) {
        array_push($errors, "Введите пароль");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE user_login='$username' AND user_password='$password'";
        
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['user_login'] = $username;
          
     
          $_SESSION['success'] = "Вы вошли в систему";
          header('location: index.php');
        }else {
            array_push($errors, "Неправильный пароль или логин");
           
        }
        
    }
  }



  ?>