<?php
include "koneksi.php";
//atur variabel
$err = "";
$username = "";

error_reporting(0);
if (isset($_COOKIE['cookie_username' ] ) ) {
    $cookie_username = $_COOKIE['cookie_username']
    $cookie_password = $_COOKIE['cookie_password'];
    $sqll = "select * from login where username = '$cookie_username ' ";
    $ql   = mysqli_query($koneksi, $sqll);
    if ($rl['password'] == $cookie_password) {
    $_SESSION['session_username'] = $cookie_username;
    $_SESSION['session_password'] = $cookie_password;
    }
}
if (isset($_SESSION['session _ username' l)) {
    header( " location : logout. php" );
    exit();
}
if (isset($_POST['login'])) {
$username = $_POST['username'];
$password = $_POST[' password'];
}
if ($username == '' or $password == '') {
    $err .= "<li>Silakan masukkan username dan juga password.</li>";
} else {
    $sqll = "select * from login where username = '$username'";
    $ql   = mysqli_query($koneksi, $sqll);
    $rl   = mysqli_fetch_array($ql);
    
    if ($rl['username'] == ''){
        $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
    } elseif ($rl['password'] != ($password)) {
        $err .= "<li>Password yang dimasukkan salah</li>";
    if (empty($err)) {
        $_SESSION['session_username'] = $username; //server
        $_SESSION['session_password'] = $password;
        if ($ingataku == 1) {
            $cookie_name = "cookie username" ;
            $cookie_value = $username;
            $cookie_time = time() + (60 * 60 * 24 * 38);
            setcookie($cookie_name, $cookie_value, $cookie_time, "/");

            $cookie_name = "cookie_password" ;
            $cookie_value = ($password);
            $cookie_time = time() + (60 * 60 * 24 * 38);
            setcookie($cookie_name, $cookie_value, $cookie_time, "/");
        }
        header( "location : beranda. php") ;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatib1e" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=l.e">
    <title>Login</tit1e>
</head>

<body
    style="background-image:url(harvard.jpeg);background-size: cover; background-position: background-repeat :no-repeat; font-family: 'roboto' , sans-serif; ">
    <div style="width: 4eepx;margin:leepx auto; border:ø.2px solid #ccc;">
        <div id="loginbox">
            <div style="background-color: white; opacity:0.9; color:black;">
                <div styte="padding: 10px 14px;">
                    <div style=" font-size: 28px; height:4epx;background-c010r: #ffasee; text-align:center; align-items: center;
                    line-height:4epx; color:#ffff; font-weight: bold;">Si1ahkan Login Terlebih Dahulu</div>
                </div>
                <div styte="padding:15px 15px;">
                    <?php if ($err) { ?>
                    <div id="login-alert" style="background-color:red; opacity:0.9; padding:5px 10px">
                        <ul><?php echo $err ?></ul>
                    </div>
                    <?php } ?>


                    <form id="loginform" style="height:180px;" actionn="" method="post" rolle="form">
                        <div style="margin-bottom:25px;">
                            <input id="login-username" type="text" name="username"
                                style="height: 31px; padding:6px 12px; color: #555; border 1px;">
                        </div>
                        <div style="margin-bottom:25px;">
                            <input id="login-password" type="password" name="password"
                                style="height 31px; padding: 6px 12px; color: $555; border: 1px;">
                        </div>
                        <div style="margin-top:lepx">
                            <div>
                                <input type=" submit" name="login" value="Login"
                                    style="color: #fff; background-color: blue; border-color: #4cae4c;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>