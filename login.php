<?php
// /**
// * Test script for EncryptPost PHP class
// */                                
// //session_start();
// if (isset($_GET['destroySession'])){
//     session_destroy();
//     session_start();
// }

// require_once './php-form-encryption-master/EncryptPost.class.php';
// $crypto = new EncryptPost(1024, './php-form-encryption-master/openssl.cnf'); // Session MUST be started.

// if (isset($_GET['resetKeys'])) $crypto->reset();

// // Check for FORM encrypted data
// if (isset($_POST['EncryptPost'])){
//    echo "entraa";
//     $cryptedPost = $_POST;              // Save crypted data for debug
//     $formId = $crypto->decodeForm();    // Decrypt $_POST contents
    
//     // Do stuff here (database record, etc). 
//     // Dont forget to secure filter $_POST values.
//     //
//     // DON'T USE received $_POST values in the HTML code! This will transmit
//     // data as clear text to the browser: Use javascript 'EncryptPost.decrypt()' 
//     // method to fill your form, so data is decrypted locally at client's browser.
//     if (isset($_POST['data1'])){
//         $data['data1'] = filter_var($_POST['data1'], FILTER_VALIDATE_INT);
//         /* ... etc ... */
//     }
    
//     // Encrypt processed data if you need to fill form again:
//     $encrypted = $crypto->encodeData($_POST, $formId);
// }
?>

<?php   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      require_once "config.php";

      // username and password sent from form 
      $myusername = mysqli_real_escape_string($db,$_POST['user']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE user = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      if (!$result) {
         $count = 0;
      } else {
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $active = $row['active'];
      
         $count = mysqli_num_rows($result);
      }
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register($myusername);  //deprecated
         $_SESSION['user'] = $myusername;
         
         header("location: system.php");
      } else if ($lang === 'pt-br') {
         $error = "Nome de usuário e/ou senha inválidos";
         echo $error;
      } else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }
?>

<?php
            // // Debug
            // echo '<h2>Session keys:</h2>';
            // if (isset($_SESSION['RSA_Public_key'])){
            //     echo 'RSA public key (hex) = '. $_SESSION['RSA_Public_key'];
            //     echo '<br /><br />';
            // }
            // if (isset($_SESSION['aesKey'])){
            //     echo 'AES key (hex) = '. bin2hex($_SESSION['aesKey']);
            //     echo '<br />';
            // }
            // if (isset($cryptedPost)){
            //     echo '<h2>Received POST data:</h2><pre>';
            //     var_dump($cryptedPost);
            //     echo '</pre><br />';
            //     echo '<h2>Decrypted POST data:</h2><pre>';
            //     var_dump($_POST);
            //     echo '</pre><br />';
            // }
?>