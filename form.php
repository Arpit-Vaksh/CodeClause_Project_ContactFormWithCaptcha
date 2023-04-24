<!-- Error messages -->
<?php if(!empty($response)) {?>
<div class="form-group col-12 text-center">
  <div class="alert text-center <?php echo $response['status']; ?>">
    <?php echo $response['message']; ?>
  </div>
</div>
<?php }?>

<!-- Form -->
<form action="" name="contactForm" id="contactForm" method="post" enctype="multipart/form-data" novalidate>
                    <h2>Contact Me</h2>
                    <div class="inputbox">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" class="form-control" name="name" id="name" required>
                        <label for="text">Name</label>
                    </div>
                    <div class="inputbox">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" class="form-control" name="email" id="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <i class="fa-solid fa-phone"></i>
                        <input type="text" class="form-control" name="phone-number" id="phone-number" required>
                        <label for="number">Phone number</label>
                    </div>

                    <div class="inputbox">
                        <i class="fa-solid fa-message"></i>
                        <textarea name="message" name="message" id="message" rows="2" required></textarea>
                        <label class="messagelabel" for="message">Your Message</label>
                    </div>



                    <div class="inputbox captcha">
                        <div id="preview"></div>
                            <!-- Google reCAPTCHA block -->
                            <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe"></div>
                    </div>
                    

                    <div id="submit-btn">
                        <button id="submit-btn" type="submit">Submit</button>
                    </div>
                </form>