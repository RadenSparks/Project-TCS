<?php
include_once "./static/model/account.php";
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $data = getInfoAccount($email, $password);
    extract($data[0]);
    echo $displayname;
}
?>

<div class="accountsetting">
    <h2>Account Settings</h2>
    <p>Manage your account details</p>
    <h3>Account Information</h3>
    <p><strong>ID: </strong><?= $accountid, session_id() ?></p>
    <form id="infor_form" action="">
        <input type="text" class="input_username" disabled value="<?= $displayname != "" ? $displayname : "" ?>" required>
        <input type="email" class="input_email" disabled value="<?= $email != "" ? $email : "" ?>" required>
        <button type="submit">Save changes</button>
    </form>
    <h2>Change your password</h2>
    <p>For your security, we highly recommend that you choose a unique password that you don’t use for any other online account</p>
    <form id="newpass_form" action="" method="POST">
        <div class="input_group">
            <label for="currentpass">Current Password</label>
            <div class="grouppass">
                <input id="currentpass" type="password" name="currentpass" title="Mật khẩu hiện tại của bạn không đúng" pattern="<?php echo $password ?>" required>
                <span class="showpassword" onclick="showPassword(this)"><i class="fa-solid fa-eye"></i></span>
            </div>
            <div class="error"></div>
        </div>
        
        <div class="input_group">
            <label for="newpass">New Password</label>
            <div class="grouppass">
                <input id="newpass" type="password" name="newpass" required>
                <span class="showpassword" onclick="showPassword(this)"><i class="fa-solid fa-eye"></i></span>
            </div>
            <div class="error"></div>
        </div>
        <div class="input_group">
            <label for="confirmnewpass">Confirm New Password</label>
            <div class="grouppass">
                <input id="confirmnewpass" type="password" name="confirmnewpass" required>
                <span class="showpassword" onclick="showPassword(this)"><i class="fa-solid fa-eye"></i></span>
            </div>
            <div class="error"></div>
        </div>
        <input type="submit" class="save-btn" name="save-btn" value="Save Changes">
    </form>
</div>
</div>
</body>

</html>

<?php

if (isset($_POST['save-btn']) && $_POST['save-btn']) {
    $currentpass = $_POST['currentpass'];
    if ($currentpass != $password) {
    }
}
?>

<script>
    const form = document.getElementById('newpass_form');
    const inputs = form.querySelectorAll('input[type="password"]');
    
    Array.from(inputs).forEach((input, index) => {
        const groupPass = input.closest('.grouppass');
        const showPass = groupPass.querySelector('.showpassword');
        console.log(showPass);
        input.addEventListener('input', () => {
            if(input.value == "") {
                showPass.classList.add('none');
            } else {
                showPass.classList.remove('none');
            }
        })
    })
  
</script>