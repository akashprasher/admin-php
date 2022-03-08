<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Admin - PHP Assignment</title>
  </head>
  <body>
    <header>
      <nav class="container">
        <div class="navigation-bar">
          <div>
            <h3>php<span class="dot">.</span></h3>
          </div>
          <div class="nav-links">
            <ul>
              <li><a href="./">Home</a></li>
              <li><a class="active" href="./admin.php">Admin</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main class="main-admin">
      <div class="container">
        <h1>Admin Page<span class="dot">.</span></h1>
        <hr />
        <form method="post" enctype="multipart/form-data" action="#">
          <div class="form-div">
            <label for="f-heading">Enter Heading</label>
            <input
              name="f-heading"
              id="f-heading"
              type="text"
              placeholder="An awesome heading"
              required
            />
          </div>
          <div class="form-div">
            <label for="f-message">Enter Welcome Message</label>
            <textarea
              name="f-message"
              id="f-message"
              type="text"
              placeholder="An awesome Welcome Message"
              required
            ></textarea>
          </div>
          <!-- <div class="divide"></div> -->
          <div class="form-div">
            <label for="image">Upload an Image</label>
            <input
              class="input-image"
              type="file"
              id="image"
              name="image"
              accept="image/png, image/jpeg"
              required
            />
            <div class="img-help">
              <small>Chose or Drag & Drop. Supports .png and .jpg only.</small>
            </div>
          </div>
          <div class="form-div">
            <label for="f-img-dec">Image Description</label>
            <textarea
              name="f-img-dec"
              id="f-img-dec"
              type="text"
              placeholder="An awesome image description"
              required
            ></textarea>
          </div>
          <input class="btn" type="submit" value="Submit" name="submit">
          <!-- <button class="btn">Submit</button> -->
        </form>

        <?php
            $target_dir = "./assets/images"; 
            $target_file = $target_dir . basename($_FILES["userImage"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["userImage"]["tmp_name"]);
                if($check !== false) {
                    echo "This file is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "This file is not an image.";
                    $uploadOk = 0;
                }
            }
        ?>
      </div>
    </main>
    <footer>
      <p>php<span class="dot">.</span> &copy; 2021</p>
    </footer>
  </body>
</html>
