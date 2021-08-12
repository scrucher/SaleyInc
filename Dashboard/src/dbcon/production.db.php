<?php 


ob_start();
session_start();

$user = "saleyma_usr";
$pass = ";LKmW7S5HRX0";
$pdo  = 'mysql:host=localhost;dbname=saleyma';


try 
{

    $con = new PDO($pdo, $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e) {

    echo 'Connection failed : ' . $e->getMessage();

}
  


// sql to create table

$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name      VARCHAR(30) NOT NULL,
username  VARCHAR(30) NOT NULL UNIQUE,
email     VARCHAR(30) NOT NULL UNIQUE, 
phone     VARCHAR(15) NOT NULL,
password  VARCHAR(500) NOT NULL,
user_type VARCHAR(50) NOT NULL,
role      VARCHAR(50) NOT NULL,
image     IMAGE (12000) NOT NULL,
reg_date  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$res = $con->prepare($sql);

if ($res-> execute()) {
  echo "Table User created successfully";
} else {
  echo "Error creating table: " . $res->errorInfo();
}

///////////////////////////////
/////////////////////////////
//////////////////////////////

$sql2 = "CREATE TABLE about (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(500) NOT NULL,
    body VARCHAR(5000) NOT NULL,
    
    )";
    
    $res = $con->prepare($sql2);
    
    
    if ($res-> execute()) {
      echo "Table About created successfully";
    } else {
      echo "Error creating table: " . $res->errorInfo();
    }

/////////////////////////////////
//////////////////////////////////
/////////////////////////////////

$sql3 = "CREATE TABLE aboutl_li (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(500) NOT NULL,
  body VARCHAR(500) NOT NULL,
  
  )";
  
  $res = $con->prepare($sql3);
  
  
  if ($res-> execute()) {
    echo "Table About Li created successfully";
  } else {
    echo "Error creating table: " . $res->errorInfo();
  }

/////////////////////////////////////////
////////////////////////////////////////
///////////////////////////////////////

$sql4 = "CREATE TABLE why_us_desc (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(500) NOT NULL,
  body VARCHAR(5000) NOT NULL,
  
  )";
  
  $res = $con->prepare($sql4);
  
  
  if ($res-> execute()) {
    echo "Table why us description created successfully";
  } else {
    echo "Error creating table: " . $res->errorInfo();
  }
  $sql5 = "CREATE TABLE why_us (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(500) NOT NULL,
    body VARCHAR(5000) NOT NULL,
    
    )";
    
    $res = $con->prepare($sql5);
    
    
    if ($res-> execute()) {
      echo "Table Why_US_Bosy created successfully";
    } else {
      echo "Error creating table: " . $res->errorInfo();
    }


    $sql6 = "CREATE TABLE services (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      title VARCHAR(500) NOT NULL,
      body VARCHAR(5000) NOT NULL,
      
      )";
      
      $res = $con->prepare($sql6);
      
      
      if ($res-> execute()) {
        echo "Table Services created successfully";
      } else {
        echo "Error creating table: " . $res->errorInfo();
      }


      $sql7 = "CREATE TABLE offr (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title  VARCHAR(500) NOT NULL,
        offr1  VARCHAR(500) NOT NULL,
        offr2  VARCHAR(500) NOT NULL,
        offr3  VARCHAR(500) NOT NULL,
        offr4  VARCHAR(500) NOT NULL,
        offr5  VARCHAR(500) NOT NULL,
        offer6 VARCHAR(500) NOT NULL,

        
        )";
        
        $res = $con->prepare($sql7);
        
        
        if ($res-> execute()) {
          echo "Table PAcks And Offers created successfully";
        } else {
          echo "Error creating table: " . $res->errorInfo();
        }
    
        $sql8 = "CREATE TABLE mailing (
          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          name VARCHAR(500) NOT NULL , 
          email VARCHAR(500) NOT NULL , 
          phone VARCHAR(500) NOT NULL , 
          message VARCHAR(500) NOT NULL ,
          
          )";
          
          $res = $con->prepare($sql8);
          
          
          if ($res-> execute()) {
            echo "Table mailing created successfully";
          } else {
            echo "Error creating table: " . $res->errorInfo();
          }

          $sql9 = "CREATE TABLE offr_dm (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            pack VARCHAR(500) NOT NULL , 
            email VARCHAR(500) NOT NULL , 
            phone  VARCHAR(500) NOT NULL ,
            
            )";
            
            $res = $con->prepare($sql9);
            
            
            if ($res-> execute()) {
              echo "Table Ordered Packs created successfully";
            } else {
              echo "Error creating table: " . $res->errorInfo();
            }


            $sql0 = "CREATE TABLE newsletter (
              id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              email VARCHAR(500) NOT NULL , 
            
              )";
              
              $res = $con->prepare($sql0);
              
              
              if ($res-> execute()) {
                echo "Table NewsLetter created successfully";
              } else {
                echo "Error creating table: " . $res->errorInfo();
              }
$conn->close();










?>