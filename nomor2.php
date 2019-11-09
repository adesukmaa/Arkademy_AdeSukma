
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 2</title>
</head>
<body>
    <h1>Login</h1>
    <table>
    <tr>
    <form method="post">
    <td>Username</td>
    <td>:</td> 
    <td><input type="text" name="username" ></td>
    <td><?php
    if(isset($_POST['kirim'])){
         $username =$_POST['username'];
         $lowercase =preg_match('@[a-z]@', $username);

         $error ='';
            if (strlen($username)<=6 || !$lowercase ){
           $error = 'nama minimal 6 karakter dan tidak huruf besar';    
            echo $error;
            unset($error);
            }
    }   
?></td></tr>
    <tr>
    <td>Password</td>
    <td>:</td> 
    <td><input type="text" name="password" ></td>
    <td><?php
    if(isset($_POST['kirim'])){
         $password =$_POST['password'];
         $angka = substr($password, 0,2);
         $huruf = substr($password, 3,4);
       
           
         $errors ='';
            if (preg_match('/[0-9]/', $angka) && (preg_match('/[@]/',$password) || preg_match('/[&]/',$password)) && preg_match('@[A-Z]@', $huruf) && strlen($password)==7 ){
           $errors = '';    
            
            } else{
                $errors = 'password salah';  
            }
            echo $errors;
    }   
?>
    </td></tr>
    <tr>
    <td><input type="submit" name="kirim" value="Submit"></td>
    </tr>
    </form>
    </table>
</body>
</html>