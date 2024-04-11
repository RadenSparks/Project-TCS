<div id="sidebar">
    <div class="sidebar-header">
        <h3><img src="./static/image/img-layoutold/logo.png" class="img-fluid" /><span>TCS Dashboard</span></h3>
    </div>
    <ul class="list-unstyled component m-0">
        <li class="<?php if($entity == "game") echo 'active' ?>">
            <a href="index.php?act=dashboard&entity=game&page=1" class="dashboard">
                Games
            </a>            
        </li>
        <li class="<?php if($entity == "account") echo 'active' ?>">
            <a href="index.php?act=dashboard&entity=account&page=1" class="dashboard">
                Account
            </a>            
        </li>
        <li class="<?php if($entity == "genre") echo 'active' ?>">
            <a href="index.php?act=dashboard&entity=genre&page=1" class="dashboard">
                Genre
            </a>            
        </li>
        
    </ul>
</div>