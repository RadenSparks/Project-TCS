<form action="index.php?pg=editcustomer&accountid=<?php echo $accountid; ?>" method="POST">
        
        <div class="main-content">
        <h2>Account Edit</h2>
        <hr>
                <div class="col-md-7">
                    <label class="form-label" for="firstname">First Name</label>
                    <input class="form-control" type="text" name="firstname" id="productName">
                </div>
            
                <div class="col-md-7">
                    <label class="form-label" for="lastname">Last Name</label>
                    <input class="form-control" type="text" name="lastname" id="productName">
                </div>

                <div class="col-md-7">
                    <label class="form-label" for="displayname">Display Name</label>
                    <input class="form-control" type="text" name="displayname" id="productName">
                </div>

                <div class="col-md-7">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="text" name="password" id="productName">
                </div>

                <div class="col-md-7">
                    <label class="form-label" for="country">Country</label>
                    <input class="form-control" type="text" name="country" id="productName">
                </div>

                <div class="col-md-7">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="productName">
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
