
<?php


echo "Something !";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $total = $_POST["total"];
    $cartid = $_POST["cartid"];
    $email = $_SESSION["email"];

    $total = 0;
    // Construct the response array
    $response = [
        "actions" => [
            "order" => [
                "create" => [
                    "purchase_units" => [
                        [
                            "amount" => [
                                "currency_code" => "USD",
                                "value" => $total
                            ]
                        ]
                    ],
                    "intent" => "CAPTURE"
                ]
            ]
        ]
    ];

    // Encode the response array as JSON
    $json_response = json_encode($response);

    // Set the proper Content-Type header
    header('Content-Type: application/json');

    // Set the HTTP response code to 200 (OK)
    http_response_code(200);

    // Output the JSON response
    echo $json_response;
} else {
    // If the request method is not POST
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
