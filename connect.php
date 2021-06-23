<?php

if(isset($_GET['submit'])) {
  $name = $_GET['name'];
  $email = $_GET['email'];
  $subject = $_GET['subject'];
  $message = $_GET['message'];
  }

?>
<html>
  
  <?php include('partials/header.php')?>
 
<section>
 
  <div class="black-box">
<p><?php echo $name ?></p>
<p><?php echo $email ?></p>
<p><?php echo $subject ?></p>
<p><?php echo $message ?></p>
  </div>
  <div id="sub-box">
  
    <h1>Connect</h1>
    <form class="contact-form" action="connect.php" method="GET">
      <label>Name:
      <input class="contact-form__input" type="text" name="name" placeholder="name"><br/>
      <label>Email: 
      <input class="contact-form__input" type="text" name="email" placeholder="example@test.com"><br/>
      <label>Subject:
      <input  class="contact-form__input" type="text" name="subject" placeholder="subject"><br/>
      <textarea name="message" placeholder="type your message..."></textarea><br/>
      <input class="btn" type="submit" name="submit" value="submit">
    </form>

  </div>
</section>
<?php include('partials/footer.php')?>
</html>