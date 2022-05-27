<?php 
include_once "../php_Mysql_project/headFoot/header.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">

<link href="css/animate.css" rel="stylesheet">
<link href="css/maain.css" rel="stylesheet">


    <style>


html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  flex-wrap: wrap;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  background: rgba(0, 0, 0, 0.5) url("https://www.tennis-conditioning.com/wp-content/uploads/2021/02/w6bhqa8ukc0-scaled.jpg");
  background-size: cover;
  background-position: center;
  background-blend-mode: darken;
  padding: 50px;
  text-align: center;
  /* background-color: #474e5d; */
  color: white;
}

.container {
  padding: 0 16px;
}

img{
  margin: 20px;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: orange;
  background-color: #fff;
  border: 2px solid orange;
  text-align: center;
  cursor: pointer;
  width: 100%;
  
}

.button:hover {
  background-color: orange;
  color: #fff;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    </style>
  </head>
  <body>

  <section class="container">
    <div class="about-section">
        <h1>About Us Page</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse illo quasi velit molestiae impedit iure quisquam optio voluptas? Enim in perspiciatis nostrum dolorem labore sit tempora neque eaque atque repudiandae. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut aut modi quasi! Reprehenderit sequi eaque est vel accusamus molestias, accusantium doloremque dignissimos dolore porro ullam nobis rerum distinctio minima placeat.</p>
        
         
      </div>
      
      <h2 style="text-align:center">Our Team</h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="https://cdn.dribbble.com/users/230875/screenshots/12215958/media/2c74bf1cf56023f67dc73f94fcb1b62b.jpg" alt="Jane" style="width:90%">
            <div class="container">
              <h2>Khaled Bani-Amer</h2>
              <p class="title">Leader</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>jane@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="https://cdn.dribbble.com/users/230875/screenshots/12078079/media/eeb31ec92dd87b131f2930c08b91ac7c.jpg" alt="John" style="width:90%">
            <div class="container">
              <h2>Khozama Obeidat</h2>
              <p class="title">Developer</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>john@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="https://cdn.dribbble.com/users/230875/screenshots/12078079/media/eeb31ec92dd87b131f2930c08b91ac7c.jpg" alt="John" style="width:90%">
            <div class="container">
              <h2>Leen Abu AL Hija</h2>
              <p class="title">Developer</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>john@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
        
        <div class="column">
          <div class="card">
            <img src="https://cdn.dribbble.com/users/230875/screenshots/12215958/media/2c74bf1cf56023f67dc73f94fcb1b62b.jpg" alt="Mike" style="width:90%">
            <div class="container">
              <h2>Mohammad Amarneh</h2>
              <p class="title">Developer</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>mike@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
        
      
        <div class="column">
          <div class="card">
            <img src="https://cdn.dribbble.com/users/230875/screenshots/12215958/media/2c74bf1cf56023f67dc73f94fcb1b62b.jpg" alt="Mike" width="90%" > 
            <div class="container">
              <h2>Aiman Jaradat</h2>
              <p class="title">Assistant</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>mike@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
       
      </div>
      </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php 
include_once "../php_Mysql_project/headFoot/footer.php";

?>
