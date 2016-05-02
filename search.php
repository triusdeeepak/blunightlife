<head>

    <title>Search | Blu Nightlife</title>

    <?php include 'header.php'; ?>

    <div class="venues">

      <div class="title">

        <h2 class="left"><?=$_GET['q']?></span></h2>
        <h2 class="right">Search <span class="translucent">Results</span></h2>

      </div>
      
      <div class="container featured">

        <div class="flexslider search-result">

          <ul class="slides">
          
          <?php
            include("inc/functions.php");
            $results = search($_GET['q']) ;
            
            if (count($results) > 0 ) {
	            foreach($results as $result) {
		            echo $result['Venue_HTML'];
	            }
            } else {
	            echo "No Results found";
            }
          ?>

          </ul>

          <div class="clear-space"></div>

        </div>

        <div class="clear-space"></div>

      </div>

    <div class="clear-space"></div>

    <?php include 'footer.php'; ?>

</body>