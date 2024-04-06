
<?php
    include_once "./static/model/account.php";
    if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        $data = getInfoAccount($email, $password);
        extract($data[0]);
        echo $displayname;
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accountsetting</title>
    <link rel="stylesheet" href="./static/css/accountsetting.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <div class="container">
        <div class="nav_bar">
            <div class="acc active"><a href="">Account Settings</a></div>
            <div class="trans"><a href="./index?act=transaction">Transactions</a></div>
        </div>
        <div class="accountsetting">
            <h2>Account Settings</h2>
            <p>Manage your account details</p>
            <h3>Account Information</h3>
            <p><strong>ID: </strong><?='$accountid'session_id()?></p>
            <form id="infor_form" action="">
                <input type="text" class="input_username" disabled placeholder="<?=$displayname != "" ? $displayname : ""?>" required>
                <input type="email" class="input_email" placeholder="<?=$email != "" ? $email : ""?>" required>
                <button type="submit">Save changes</button>
            </form>
            <h2>Change your password</h2>
            <p>For your security, we highly recommend that you choose a unique password that you don’t use for any other online account</p>
            <form id="newpass_form" action="">
                <div class="input_group">
                    <label for="currentpass">Current Password</label>
                    <input id="currentpass" type="text">
                </div>
                <div class="input_group">
                    <label for="newpass">New Password</label>
                    <input id="newpass" type="text">
                </div>
                <div class="input_group">
                    <label for="retypepass">Confirm New Password</label>
                    <input id="retypepass" type="text">
                </div>
                <button type="submit">Save changes</button>
            </form>
        </div>
    </div>
</body>
</html>