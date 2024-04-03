<?php
$search = $_POST['search'];
echo $search;
$result = search($search);
$data = '';
foreach ($result as $index => $item) {
    if ($index >= 0  && $index <= 3) {
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
    }
}
$data .
echo $data;

function search($search)
{
    include("../model/connectdb.php");
    $conn = connectDb();
    $sql = "SELECT * FROM game WHERE gamename LIKE '%$search%'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();
    $conn = null;
    return $data;
}
