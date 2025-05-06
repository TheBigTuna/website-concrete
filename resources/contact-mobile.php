<link href="/style/contact-mobile.css" rel="stylesheet">

<div id="contactMobileContainer">  
  <form id="contact" action="/handler/contactHandler.php" method="POST">
    <h5>Request a Free Estimate</h5>
    <h6>Contact us today, and get a reply no commitment quote by the next business day!</h6>
    <!-- <p><span style="color: red">*</span> Indicates required field</p> -->
    <fieldset>
      <input placeholder="Your Name" name="Name" type="text" tabindex="1" maxlength="50" autocomplete="off" required autofocus>
    </fieldset>
    <fieldset style="display: none;">
      <input placeholder="Your Email Address" name="Email" type="email" maxlength="50" autocomplete="off" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="Email" type="email" maxlength="50" autocomplete="off" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" name="PhoneNumber" type="tel" maxlength="20" autocomplete="off" tabindex="3" required>
    </fieldset>
      <textarea placeholder="Type your Message Here...." name="Message" maxlength="400" autocomplete="off" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send</button>
    </fieldset>
    <input type="hidden" name="currentPage" value="<?php echo $_SERVER['REQUEST_URI']; ?>-mobile">
  </form>
</div>