<div class="transaction">
    <h2>Transactions</h2>
    <p>Your account payment details, transactions and earned Epic Rewards</p>
    <table class="table">
        <thead>
            <tr>              
                <th>Id</th>  
                <th>Date</th>
                <th>Product</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once "./static/model/query.php";
            include_once "generateUUID.php";
            if (isset($_SESSION['email'])) {
                $conn = openConnection();
                $accountResult = queryResult($conn, 'SELECT * from accounts a where a.email = ? and active = 1 LIMIT 1', 's', $_SESSION['email']);

                if ($accountResult->num_rows > 0) {
                    $account = $accountResult->fetch_assoc();
                    $accountId = $account["accountid"];
                    $ciQuery = 
                    'SELECT * FROM cartitem ci 
                    join game g on g.gameid = ci.gameid
                    join cart c on ci.cartid = c.cartid
                    join accounts a on c.accountid = a.accountid
                    WHERE status = 0 and a.accountid = ? 
                    order by c.cartid';
                    $cartItemResult = queryResult($conn, $ciQuery, 'i', $accountId);
                    if ($cartItemResult->num_rows > 0) {
                        while($cartItem = $cartItemResult->fetch_assoc()){
                            $cartPuchaseDate = $cartItem['purchasedate'];
                            $sale = $cartItem['sale'];
                            $gamePrice = $cartItem['price'];
                            $newPrice = $gamePrice;
                            if ($sale != 0) {
                                $newPrice = $sale * $gamePrice;                                
                            }
                            echo 
                                '<tr>
                                    <td>#'.$cartItem['cartid'].'</td>
                                    <td>'.$cartPuchaseDate.'</td>
                                    <td><a class="description" href="index.php?act=detail&id='.$cartItem['gameid'].'">'.$cartItem['gamename'].'</a></td>
                                    <td>'. number_format($newPrice) . ' vnđ</td>  
                                    <td>Purchased</td>
                                </tr>';
                        }
                    }
                }

                

                
            }
            ?>
            <!-- <tr>
                <td>1/11/2024</td>
                <td class="description">Assassin's Creed Odyssey</td>
                <td>318,500đ</td>
                <td>TCS Game Store</td>
                <td>Purchased</td>
            </tr>
            <tr>
                <td>1/11/2024</td>
                <td class="description">Assassin's Creed Odyssey</td>
                <td>318,500đ</td>
                <td>TCS Game Store</td>
                <td>Purchased</td>
            </tr>
            <tr>
                <td>1/11/2024</td>
                <td class="description">Assassin's Creed Odyssey</td>
                <td>318,500đ</td>
                <td>TCS Game Store</td>
                <td>Purchased</td>
            </tr>
            <tr>
                <td>1/11/2024</td>
                <td class="description">Assassin's Creed Odyssey</td>
                <td>318,500đ</td>
                <td>TCS Game Store</td>
                <td>Purchased</td>
            </tr>
            <tr>
                <td>1/11/2024</td>
                <td class="description">Assassin's Creed Odyssey</td>
                <td>318,500đ</td>
                <td>TCS Game Store</td>
                <td>Purchased</td>
            </tr>
            <tr>
                <td>1/11/2024</td>
                <td class="description">Assassin's Creed Odyssey</td>
                <td>318,500đ</td>
                <td>TCS Game Store</td>
                <td>Purchased</td>
            </tr> -->
        </tbody>
    </table>
</div>
</div>
</body>

</html>