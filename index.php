<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Home - PHP Assignment</title>
  </head>
  <body>
    <header>
      <nav class="container">
        <div class="navigation-bar">
          <div><h3>php<span class="dot">.</span></h3></div>
          <div class="nav-links">
            <ul>
              <li><a class="active" href="./">Home</a></li>
              <li><a href="./admin.php">Admin</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container">
        <h2>
        <?php 
            if($_POST['f-heading']){
              echo $_POST['f-heading'];
            } else {
              echo "Lorem ipsum";
            } 
        ?>
        <span class="dot">.</span></h2>
        <hr />
        <p>
          <?php 
            if($_POST['f-message']){
              echo $_POST['f-message'];
            } else {
              echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum
                    laboriosam aspernatur iure quo sint, aliquid quod dolorem quam quidem
                    earum delectus repudiandae molestiae modi quae deleniti eaque minus
                    esse natus?";
            } 
          ?>
        </p>
      </div>
    </main>
    <aside>
      <div class="container">
        <div class="aside-content">
          <img
            class="aside-img"
            <?php
            $filename =  $_POST['f-image'];
            if($_POST['f-image']){
              echo "src=\"./assets/uploads/$filename\"";
            } else {
              echo "src=\"./assets/images/bg.webp\"";
            }
            ?>
            alt="main-bg"
          />
          <div class="aside-con">
            <h2>Image Description<span class="dot">.</span></h2>

            <hr />
            <p>
            <?php 
                if($_POST['f-description']){
                  echo $_POST['f-description'];
                } else {
                  echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum
                        laboriosam aspernatur iure quo sint, aliquid quod dolorem quam quidem
                        earum delectus repudiandae molestiae modi quae deleniti eaque minus
                        esse natus?";
                } 
            ?>
            </p>
          </div>
        </div>
      </div>
    </aside>
    <footer><p>php<span class="dot">.</span> &copy; 2021</p></footer>
  </body>
</html>
