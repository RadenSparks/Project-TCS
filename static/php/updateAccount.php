<?php
 include_once "../model/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();


    try {
        $result = new stdClass();
        $result->status = false;
        if (!isset($_SESSION['email'])) {
            $result->status = false;            
        }
        
        if(isset($_POST['displayname'])){            
            $conn->begin_transaction();
            $accountResult = queryResult($conn, 'SELECT * from accounts a where a.email = ? and active = 1 LIMIT 1', 's', $_SESSION['email']);
            if($accountResult->num_rows > 0){
                $account = $accountResult->fetch_assoc();
                $accountId = $account["accountid"];
                queryResult($conn, 'UPDATE accounts set displayname = ? where accountid = ?', 'si', $_POST['displayname'], $account['accountid']);
                $result->status = true;

            }
            $conn->commit();        
        }        
        echo json_encode($result);
    } catch (Exception $e) {
        $error = new stdClass();
        $error->status = false;
        $error->message = $e->getMessage();
        $error->stack = $e->getTraceAsString();
        echo json_encode($error);
    }
} else {
    $result = new stdClass();
    $result->status = false;
    echo json_encode($result);
}