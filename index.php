<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <title>MeklēBūvi.lv</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
<style> 

input[type=button], input[type=submit], input[type=reset] {
  background-color: black;
  border: none;
  border-radius: 5px;
  padding: none;
  text-decoration: none;
  margin: 10px 2px;
  font-size: 17px;
  font-family: "Lato", sans-serif;
  margin: 0px;
  cursor: pointer;color: gray;
 
 
}
</style>
  <div class="container">
    <div class="nav-wrapper">
      <div class="left-side">
        <div class="nav-link-wrapper active-nav-link">
          <a href="index.php">Sākums</a>
        </div>

        <div class="nav-link-wrapper">
          <a href="about.php">Kontakti</a>
        </div>
		
		<div class="nav-link-wrapper">
          <a href="db_saraksts.php">Pilnais datu bāžu saraksts</a>
        </div>
		
      </div>

      <div class="right-side">
        <div class="brand">
          RTU IZV
        </div>
      </div>
    </div>
	
	<div class = "container">
		<div class="content-wrapper">
			<div class="portfolio-item-wrapper">
				<div class="portfolio-img-background1" style="background-image:url(images/portfolio1.jpg)"></div>
				<div class="img-text-wrapper2">
				<div class="logo-wrapper1">
				<img src="images/logos/quip.png" alt="">
				</div>
				</div>
				<div class="img-text-wrapper1">
				<div class="Title">Latvijas būvmeklētājs</div>
            	
				</div>
			</div>
		</div>
    </div>
	
	
    <div class="content-wrapper">
      <div class="portfolio-items-wrapper">
	
        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio12.jpg)"></div>

          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/maja.png" alt="">
            </div>
			<div class="subtitle">Pēc adreses</div>
			
			
			<form action = "search.php" method= "post"> 
			
			<input type="text" name="keyword"><br>
			
			<input type="submit" value="Meklēt">
			 
			</form>
           
			
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio2.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/arhitekts.png" alt="">
            </div>

            <div class="subtitle">Pēc arhitekta</div>
			<form action = "search_arhitekts.php" method= "post"> 
			<input type="text" name="keyword"><br>
			<input type="submit" value="Meklēt">
			</form>
            
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/portfolio4.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/karte.png" alt="">
            </div>
			
			
            <div class="subtitle">Meklēt kartē</div>
			<div class="nav-link-wrapper2">
			<a href="karte.php">Atvērt karti</a>
			</div>
            
          </div>
        </div>
	</div>
	
	<div class = "container">
				<div class="portfolio-img-background_last" style="background-image:url(images/rights.jpeg)"></div>
    </div>
	
	
	
</body>

<script>
  const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');

  portfolioItems.forEach(portfolioItem => {
    portfolioItem.addEventListener('mouseover', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.add('image-blur');
    });

    portfolioItem.addEventListener('mouseout', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.remove('image-blur');
    });
  });

</script>

</html>