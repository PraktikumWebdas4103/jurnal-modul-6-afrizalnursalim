<form action="koneksi.php" method="POST">
<center><h1>Login</h1>
  <table>
    <tr>
      <td>Username</td>
      <td><input type="text" name="Username" placeholder="Username" required="Afrizal"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="Password" name="Password" placeholder="Password" required="4087"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Login" value="login">
      </td>
    </tr>
   </table>
</center>
</form>
<?php
session_start();
$login=array(
  "Username"=>" ",
  "Password" =>" "
);
    if(isset($_POST['login'])){
      $username = $_POST['Username'];
      $password = $_POST['Password'];


      if($id== $Login["Username"] && $password==$Login["Password"]){
        $_session['id']=$id;
        header("location:form.php");
      }else{
        header("location:login.php");
      }

    }
?>