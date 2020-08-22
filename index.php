<?php
$var="/^(?=.*[A_Za-z0-9#-_$])(?=.{6,})/";
$var1="/^(?=.*\d)(?=.*[-@_&,#%])(?=.*[A-Z])(?=.{8,12})/";
$var2="/^\w+@[a-zA-z_]+\.+[a-zA-z]/";
$var3="/^[0-9]{10}$/";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$user=$_POST["username"];
$pass=$_POST["password"];
$email=$_POST["email"];
$phone=$_POST["phone"];
if (preg_match($var,$user))
{
    if(preg_match($var1, $pass))
    {
         if(preg_match($var2, $email))
         {
             if(preg_match($var3, $phone))
             {
                 echo "<h1>Login successful</h1>";
             }
             else
             {
                 echo "number incorrect";
             }
         }
         else 
        {
                echo "email incorrect";
        }
    }
    else
    {
         echo "Password incorrect";   
    }
}
else
{
    echo "Username incorrect";
}
}
?>
 <html>
     <head>
         <title>Index</title>
     </head>
     <body>
         <form action="index.php" method="POST">
             USERNAME:&nbsp;<input type="text" name="username"><br><br>
             PASSWORD:&nbsp;<input type="text" name="password"><br><br>
             EMAIL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email"><br><br>
             PHONE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="phone"><br><br><br>
             <input type="submit" value="LOGIN">
         </form>
     </body>
 </html>

