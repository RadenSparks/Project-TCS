<div class="row">  
  <div class="col-sm-9">
    <div class="row">
      <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Show:
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">A</a></li>
          <li><a class="dropdown-item" href="#">b</a></li>
          <li><a class="dropdown-item" href="#">c</a></li>
        </ul>
      </div>
    <?php
        $sql="select * FROM game where genreid='$_GET[id]'";
        $run=$conn->query($sql);
        $row=$run->fetch_array();
    ?>
    <?php 
        $count=$run->num_rows;
        if($count>0){
          while($row=$run->fetch_array()){
            $price = $row['price'];
            $salePrice = $row['saleprice'];
            $sale = $row['sale'];
            if ($price == 0) {
                $pricebar = '
                <div class="price-bar">
                  <p style = "margin: 0" class="price">Free</p>
                </div>'
                ;
            } else if ($sale == 0) {
              $pricebar = '
                <div class="price-bar">
                  <p style = "margin: 0" class="price">đ'.number_format($price).'</p>
                </div>'
              ;

            } else {
              $salePercent = $row['sale']*100;
              $pricebar = '
              <div class="price-bar">
                <p>
                  <button class="btn btn-primary sale" type="button">-'.$salePercent.'%</button>
                </p>
                <p class="sale-price">đ'.number_format($price).'</p>
                <p class="price">đ'.number_format($salePrice).'</p>
              </div>'
              ;
            }
    ?>
    <a href="index.php?site=details&id=<?php echo ''.$row['gameid']?>" class="col-sm-3 game">
        <img src="<?php echo $row['icon'] ?>" class="img-responsive" style="width: 100%" >   
        <p class="base" style="padding-top: 10px">BASE GAME</p>
        <p class="game-name"><?php echo $row['gamename'] ?></p>
        <?php
          echo ''.$pricebar;
        ?>
    </a>
    <?php
        }
	}else{
		echo '0';
	}
    ?>
    </div>
  </div>
  <div class="col-sm-3 mrg-btm-48">
    <div class="fr-bar filter-bar" style=" display: flex;justify-content: space-between;">
      <div class="filter-text">Filter</div>
      <button class="resetbtn"><a style="text-decoration: none; color: #f5f5f5;" href="searchpage.php">RESET</a></button>
    </div>
    <form action="" method="post" class="searchbox">
      <button style="background-color: #202020; border:none;" name="search" type="submit"><svg  width="24px" height="24px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg" aria-labelledby="searchIconTitle" stroke="#fff" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#fff"> <title id="searchIconTitle">Search</title> <path d="M14.4121122,14.4121122 L20,20"/> <circle cx="10" cy="10" r="6"/> </svg></button>
      <input name="inputsearch" type="text"  placeholder="Keywords">  
    </form>
    <div class="accordion" id="accordionPanelsStayOpenExample">
      <?php
        $sql_gl="select * FROM genre";
        $run=$conn->query($sql_gl);
      ?>
      <div class="accordion-item ">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
          <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            GENRE
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
        
        <?php
          while($row=$run->fetch_array()){  
          ?>
          <div class="accordion-body" >
            <label><a href="searchpage.php?browse=genre&id=<?php echo $row['genreid'] ?>"> <?php echo $row['genrename'] ?> </a></label>
          </div> 
        <?php
          }
        ?>
        <?php 
		      $run->close();
	      ?>
      </div>
    </div>
    <div class="line"></div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
          <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            FEATURES
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
          <div class="accordion-body">
            <label></label>
          </div>
        </div>
      </div>
      <div class="line"></div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
          <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            TYPES
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
          <div class="accordion-body">
          </div>
        </div>
      </div>
      <div class="line"></div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
          <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
            PLATFORM
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
          <div class="accordion-body"> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

   
                        
					

			

			
			

	
	