<?php
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $data = search($search);
    foreach ($data as $result) {
        echo '<li>
        <div>
            <a href="#">
                <div class="games-search">

                    <div class="name-searchs">
                        <span class="name-search-product" style="text-decoration: underline; opacity: 0.5">View More</span>

                    </div>
                </div>
            </a>
        </div>
    </li>';
    }
}

function search($search)
{
    $conn = connectDb(); // Hàm kết nối đến cơ sở dữ liệu
    $sql = "SELECT * FROM game WHERE gamename LIKE '%$search%'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();
    $conn = null;
    return $data;
}
