<div class="top-category-slider_icons__133YT">
    <a <?php if ($page > 1)
    echo 'href="./index.php?act=browse&page=' . (max(1, $page - 1)) . '&keyword='.$keyword.'&genreid='.$genre.'&price='.$price.'&sort='.$sort.'"' ?>
        class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
            viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <g>
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z">
                </path>
            </g>
        </svg>
    </a>

    <div class="pagination">
    <?php
    for ($i = 1; $i <= $pageCount; $i++) {
        if ($i == $page) {
            echo '<a class="active">' . $i . '</a>';
        } else {
            echo '<a href="./index.php?act=browse&page=' . $i . '&keyword='.$keyword.'&genreid='.$genre.'&price='.$price.'&sort='.$sort.'">' . $i . '</a>';
        }
    }
    ?>
    </div>
    <a <?php if ($page < $pageCount)
    echo 'href="./index.php?act=browse&page=' . (max(1, min($pageCount, $page + 1))) . '&keyword='.$keyword.'&genreid='.$genre.'&price='.$price.'&sort='.$sort.'"' ?>
        class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
            viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <g>
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z">
                </path>
            </g>
        </svg>
    </a>
</div>