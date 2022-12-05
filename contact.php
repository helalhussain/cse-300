<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
    
    <link rel="stylesheet" href="./css/normalize.css" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    
  <?php include('header.php');  ?>
    
    <main class="page">
     <section class="contact-container">
          <article class="contact-info">
            <h3>Want To Get In Touch?</h3>
            <p>
             Our team is eager to answer any questions you may have regarding our memberships and recipes. 
			 Fill out the form below and a customer service representative will get back to you shortly.
            </p>
          </article>
          <article>
            <form class="form contact-form">
              <div class="form-row">
                <label html="name" class="form-label">your name</label>
                <input type="text" name="name" id="name" class="form-input" />
              </div>
              <div class="form-row">
                <label html="email" class="form-label">your email</label>
                <input type="text" name="email" id="email" class="form-input" />
              </div>
              <div class="form-row">
                <label html="message" class="form-label">message</label>
                <textarea name="message" id="message" class="form-textarea"></textarea>
              </div>
              <button type="submit" class="btn btn-green">
                submit
              </button>
            </form>
          </article>
        </section>
     
       <section class="featured-recipes">
        <h5 class="featured-title">Look At This Awesomeness!</h5>
        
      </section>
    </main>
    
    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">Recipe Bangladesh</span> Built by Wazad Akhlak Choudhury
      </p>
    </footer>
    <script src="./js/app.js"></script>
  </body>
</html>
