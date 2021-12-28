<!DOCTYPE html>
<html lang="en">
<head>
    <title>Orphanage Home | Contact</title>
    <?php include('./includes/header.php') ?>
</head>
<body>
   <!-- HEADER -->
   <?php include('./includes/nav2.php') ?>

   <!-- SUBHEADER -->
  <section id="subheader">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>Contact</h1>
              </div>
          </div>
      </div>
  </section>

  <!-- MAIN PAGE -->
  <section id="page" class="contact">
      <div class="container">
          <div class="row center-xs center-sm center-md center-lg">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2><span class="primary-text">Get</span> In Touch</h2>
                <p>Please use this form to contact us</p>
                <form>
                    <div>
                        <label for="name">Name</label><br>
                        <input type="text" name="name">
                    </div>
                    <div>
                        <label for="email">Email</label><br>
                        <input type="text" name="email">
                    </div>
                    <div>
                        <label for="message">Message</label><br>
                        <textarea name="message"></textarea>
                    </div>
                    <button type="submit" name="button">Submit</button>
                </form>
            </div>
          </div>
      </div>
  </section>

   <!-- COMPANY -->
   <?php include('./includes/newsletter.php') ?>

   <!-- FOOTER -->
   <?php include('./includes/footer.php') ?>
</body>
</html>