<?php
include_once "./static/model/account.php";
include_once "./static/model/query.php";
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email = $_SESSION['email'];
    $conn = openConnection();
    $accountResult = getAccountResultByEmail($conn, $_SESSION['email']);
    if ($accountResult->num_rows > 0) {
        $account = $accountResult->fetch_assoc();
    }
}
?>

<div class="accountsetting">
    <h2>Account Settings</h2>
    <p>Manage your account details</p>
    <h3>Account Information</h3>
    <p><strong>ID: </strong><?php echo $account['accountid'] ?></p>
    <form id="infor_form">
        <input type="text" class="input_username" name='displayname' value="<?php echo $account['displayname']?>" required>
        <input type="email" class="input_email" name='email' disabled value="<?php echo $account['email']?>" required>
        <button type="submit">Save changes</button>
    </form>
    <h2>Change your password</h2>
    <p>For your security, we highly recommend that you choose a unique password that you don’t use for any other online account</p>
    <form id="newpass_form">
        <div class="input_group">
            <label for="currentpass">Current Password</label>
            <div class="grouppass">
                <input id="currentpass" type="password" name="currentpass" title="Your current password is incorrect" pattern="<?php echo $account['password'] ?>" required>
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
<script>
    const form = document.getElementById('infor_form');
    if(form){
        form.onsubmit = async function(e){
            e.preventDefault();
            let body = new FormData(e.target);
            await fetch('./static/php/updateAccount.php', {
                method: 'POST',
                body: body
            }).then(response =>
                response.json()
            ).then(response => {
                let data = response;
                console.log(data);                
            }).catch(function (err) {
                console.log(err);
            });
            }
    }

    const changePwdform = document.getElementById('newpass_form');
    if(changePwdform){
        changePwdform.onsubmit = async function(e){
            e.preventDefault();
            let body = new FormData(e.target);
            await fetch('./static/php/changePassword.php', {
                method: 'POST',
                body: body
            }).then(response =>
                response.json()
            ).then(response => {
                let data = response;
                console.log(data);       
                if(data.status)         {
                    location.href = "index.php?act=signin";
                }
            }).catch(function (err) {
                console.log(err);
            });
            }
    }
    
</script>
</html>
