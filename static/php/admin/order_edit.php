<form action="?act=dashboard&pg=order_edit&id=<?php echo $orderId; ?>" method="post" enctype="multipart/form-data">
    <div class="main-content">
        <div class="col-md-6">
            <label class="form-label" for="cartid">Cart id</label>
            <input class="form-control" type="text" name="cartid" id="cartid" value="<?php echo $order['cartid']; ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="accountid">Account id</label>
            <input class="form-control" type="text" name="accountid" id="accountid" value="<?php echo $order['accountid']; ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="purchasedate">Purchase date</label>
            <input class="form-control" type="text" name="purchasedate" id="purchasedate" value="<?php echo $order['purchasedate']; ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="status">Status</label>
            <input class="form-control" type="text" name="status" id="status" value="<?php echo $order['status']; ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="paymentmethod">Payment method</label>
            <input class="form-control" type="text" name="paymentmethod" id="paymentmethod" value="<?php echo $order['paymentmethod']; ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="totalprice">Total price</label>
            <input class="form-control" type="text" name="totalprice" id="totalprice" value="<?php echo $order['totalprice']; ?>">
        </div>
        <div class="col-md-6">
            <div class="text-right">
                <input class="btn-danger m-5" type="submit" name="editOrder_submit" value="Edit">
            </div>
        </div>
    </div>
</form>
