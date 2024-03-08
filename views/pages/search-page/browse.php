<div class="row">  
  <div class="col-sm-9">
    <div class="row">
      <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Show:
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">All</a></li>
          <li><a class="dropdown-item" href="#">Coming Soon</a></li>
          <li><a class="dropdown-item" href="#">New Realease</a></li>
        </ul>
      </div>
      <?php 
        if(isset($_GET['page'])){
          $page=$_GET['page'];
        }else{
          $page=1;
        }
        $gameoncepage=16;
        $pagination=($page*$gameoncepage)-$gameoncepage;
        $sql="select*FROM game limit $pagination,$gameoncepage";
        $query_sql=mysqli_query($conn,$sql);
        while($row_sql=mysqli_fetch_assoc($query_sql)){
          include('game.php');
        }
        //pagination	
        $sql_pagination="select*FROM game";
        $query_pagination=mysqli_query($conn,$sql_pagination);
        $row_pagination=mysqli_num_rows($query_pagination);
        $pagenumber=ceil($row_pagination/$gameoncepage);
        include('pagination.php');
        ?>
  </div>
  </div>
  <div class="col-sm-3">
    <div class="fr-bar filter-bar" style=" display: flex;justify-content: space-between;">
      <div class="filter-text">Filter</div>
      <button class="resetbtn"><a style="text-decoration: none; color: #f5f5f5;" href="index.php?site=products&page=1">RESET</a></button>
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

   
                        
					

			

			
			

	
	