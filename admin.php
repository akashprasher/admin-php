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
        <form method="post" action="/">
          <div class="form-div">
            <label for="f-heading">Enter Heading</label>
            <input
              name="f-heading"
              id="f-heading"
              type="text"
              placeholder="An awesome heading"
              
            />
          </div>
          <div class="form-div">
            <label for="f-message">Enter Welcome Message</label>
            <textarea
              name="f-message"
              id="f-message"
              type="text"
              placeholder="An awesome Welcome Message"
              
            ></textarea>
          </div>
          <!-- <div class="divide"></div> -->
          <div class="form-div">
            <label for="f-image">Enter Image Name</label>
            <input
              type="text"
              id="f-image"
              name="f-image"
              placeholder="1.jpg"
            />
            <div class="img-help">
              <small>Available images are 1.jpg, 2.jpg, 3.jpg, 4.jpg, 5.jpg</small>
            </div>
          </div>
          <div class="form-div">
            <label for="f-description">Image Description</label>
            <textarea
              name="f-description"
              id="f-description"
              type="text"
              placeholder="An awesome image description"
              
            ></textarea>
          </div>
          <input class="btn" type="submit" value="Submit" name="submit">
          <!-- <button class="btn">Submit</button> -->
        </form>
      </div>
    </main>
    <footer>
      <p>php<span class="dot">.</span> &copy; 2021</p>
    </footer>
  </body>
</html>
