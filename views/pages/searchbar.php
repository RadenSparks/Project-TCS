<div class="row">
    <div class="col-sm-3 searchbar">
      <form method="get" class="searchbox" id="searchbarform">
        <button style="background-color: #202020; border:none;" name="search" type="submit">
          <svg  width=" 20px" height="20px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg" aria-labelledby="searchIconTitle" stroke="#fff" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#fff"> <title id="searchIconTitle">Search</title> <path d="M14.4121122,14.4121122 L20,20"/> <circle cx="10" cy="10" r="6"/> </svg>
        </button>
        <input name="inputsearch" type="text" placeholder="Search store">  
      </form>
      <a href="index.php" class="searchbar-link">
        Discover
      </a>
      <a href="index.php?site=products&page=1" class="searchbar-link">
        Browse
      </a>
      <a href="index.php?site=wishlist" class="searchbar-link">
        Wishlist
      </a>
      <a href="index.php?site=cart" class="cart-link searchbar-link">Cart</a>
    </div>
</div>
<script>
  document.getElementById("searchbarform").addEventListener("submit", function(event){
    event.preventDefault()
    window.location = "/Project-TCS/index.php?site=products&page=1&search=" + event.currentTarget.inputsearch.value;
  });
</script>


