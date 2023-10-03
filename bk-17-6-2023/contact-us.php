<?php 
    $title = "Contact Best Book Writers Team Now!";
    $descripion = "Best Book Writers company always make sure to deliver #1 writing services to our customers. Our dedicated team is working 24/7 to tackle our client’s needs.  ";
    $canonical = "https://bestbookwriters.com/contact-us";
?> 
<?php include('include/head.php');?>
<?php include('include/header.php');?>
<main>
<section class="banner">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<div class="banner-content">
<h5>Contact Us</h5>
<p>Connect with our support staff!</p>
</div>
</div>
</div>
</div>
</section>
<section class="contact-us">
<div class="container">
<div class="contact-us-heading">
<p class="line-before-after">Get to know more about our services!</p>
<h5>GET IN TOUCH, CONNECT WITH US!</h5>
<p>Our support agents will assist you and address all your queries!</p>
</div>
<div class="ways-to-connect">
<div class="ways-to-connect-connect">
<i class="fa fa-phone"></i>
<div class="ways-to-connect-para">
<p>Call Us Now</p>
<a href="tel:+1-737-881-7227">+1-737-881-7227</a>
</div>
</div>
<div class="ways-to-connect-connect">
<i class="fa fa-envelope"></i>
<div class="ways-to-connect-para">
<p>Mail Us</p>
<a href="mailto:info@bestbookwriters.com">info@bestbookwriters.com</a>
</div>
</div>
<div class="ways-to-connect-connect">
<i class="fa fa-map-marker" aria-hidden="true"></i>

<div class="ways-to-connect-para">
<p>Address</p>
<p><strong>Head Office</strong>  21103 Reynolds Dr a Torrance, CA 90503  </p>
<p><strong>Branch Office</strong> 13209 Kirkglen Dr Austin, TX 78727, USA</p>
</div>
</div>
</div>
<div class="row ">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">

          <form data-noinfo="true" data-customcallback="querycallback" class="CrudForm cmxform" id="package_form" method="POST" action="include/sendmail.php">
                        <input type="hidden" required name="page_url" value="https://bestbookwriter.com" />  
          <div class="alert alert-danger error" style="display: none;"></div>
<div class="ways-to-connect-top-form-heading">
<h5>Leave Us A Message</h5>
<p>Fill in your details along with your query, and our agent will get back to you shortly.
</p>
</div>
<div class="input-row1">
<input type="text" placeholder="First Name" name="First Name" required>
<input type="text" placeholder="Last Name" name="Last Name">
</div>
<div class="input-row1">
<input type="email" placeholder="Email" name="Email" required>
<input type="number" placeholder="Phone Number" name="Phone Number" required>
</div>
<div class="text-area">
<textarea name="" id="" cols="30" rows="10" placeholder="Comment" name="description"></textarea>
</div>
<div class="form-button">
<button type="submit" class="btn2 hvr-grow tc-image-effect-shine">Submit</button>
</div>
</form>
</div>


</div>
</div>
</section>
</main>


<?php include('include/footer.php');?>