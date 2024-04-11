<form action="index.php?act=dashboard&pg=editcustomer&accountid=<?php echo $accountid; ?>" method="POST">
        
        <div class="main-content">
        <h2>Account Edit</h2>
        <hr>
                <div class="col-md-7">
                    <label class="form-label" for="country">Account Id</label>
                    <input class="form-control" type="text" name="accountid" id="accountid" value="<?php echo $customer_info['accountid']?>">
                </div>

                <div class="col-md-7">
                    <label class="form-label" for="firstname">First Name</label>
                    <input class="form-control" type="text" name="firstname" id="firstname" value="<?php echo $customer_info['firstname']?>">
                </div>
            
                <div class="col-md-7">
                    <label class="form-label" for="lastname">Last Name</label>
                    <input class="form-control" type="text" name="lastname" id="lastname" value="<?php echo $customer_info['lastname']?>">
                </div>

                <div class="col-md-7">
                    <label class="form-label" for="displayname">Display Name</label>
                    <input class="form-control" type="text" name="displayname" id="displayname" value="<?php echo $customer_info['displayname']?>">
                </div>

                <div class="col-md-7">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="text" name="password" id="password" value="<?php echo $customer_info['password']?>">
                </div>

                <div class="col-md-7">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="<?php echo $customer_info['email']?>">
                </div>
            
                <div class="col-md-7">
                    <!-- Move the text-right class here -->
                    <div class="text-right">
                        <input class="btn-danger m-5" type="submit" name="editCustomer" value="Edit">
                    </div>
                </div>
            </div>
            
        </div>
</form>
