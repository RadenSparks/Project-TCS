<?php
$data = '';
// echo '<h1 style="color: red">Hello</h1>';
if (isset($_POST['input-search'])) {
    $search = $_POST['input-search'];
    echo $search;
    $result = search($search);
    foreach ($result as $item) {
        $data .= '<li>
        <div>
            <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                <div class="games-search">
                    <div class="image-search">
                        <img src="./static/img/icon/' . $item['icon'] . '" alt="">
                    </div>
                    <div class="name-searchs">
                        <span class="name-search-product">' . $item['gamename'] . '</span>

                    </div>
                </div>
            </a>
        </div>
    </li>';
    };
    
}

function search($search)
{
    include("../model/connectdb.php");
    $sql = "SELECT * FROM game WHERE gamename LIKE '%$search%'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();
    $conn = null;
    return $data;
}
