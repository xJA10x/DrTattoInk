<!DOCTYPE html>
<html>
  <head>
    <title>D.R.Tatto Ink</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <header id="top" class="main-header">
      <!-- How to include files in php -->
       <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
      <?php include("include/header.html"); ?>
    </header>
    <div class="primary-content">
      <!-- Anchor for that scrolls down -->
      <div id="gallery">
        <?php include("gallery.html"); ?>
      </div>
      <div id="contact">
        <?php include("contact.html"); ?>
      </div>
    </div>
    <footer class="main-footer">
     <?php include("include/footer.html"); ?>
    </footer>
  </body>
</html>
