<?php

$page = 'contact'

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="description" content="" />

   <!-- Site Title -->
   <title>Devendra Mali | Your fame With Our Art</title>

   <?php include "include/header-include.php" ?>
</head>

<body>
   <!-- Preloader Area Start -->
   <?php include "include/header.php" ?>
   <!-- HEADER END -->

   <main class="site-content" id="content">
      <!-- START: Breadcrumb Area -->
      <section class="breadcrumb_area" data-bg-image="./assets/img/breadcrumb/breadcrumb-bg.jpg"
         data-bg-color="#140C1C">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="breadcrumb_content d-flex flex-column align-items-center">
                     <h2 class="title wow fadeInUp" data-wow-delay=".3s">Contact</h2>
                     <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                        <span><a href="index.php">Home</a></span>
                        <i class=" far fa-solid fa-arrow-right"></i>
                        <span class="current-item">Contact</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- END: Breadcrumb Area -->

      <!-- start: Contact Area -->
      <section class="contact-section" id="contact-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-7 order-2 order-md-1">
                  <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                     <div class="section-header">
                        <h2 class="section-title">Let’s work together!</h2>
                        <p>I design and code beautifully simple things and i love what i do. Just simple like that!</p>
                     </div>
                     <div class="tj-contact-form">
                     <form id="contact-form" onsubmit="sendEmail();">
                        <div class="row gx-3">
                           <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="text" name="conName" id="conName" placeholder="First name" autocomplete="off" required />
                                 </div>
                           </div>
                           <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="text" name="conLName" id="conLName" placeholder="Last name" autocomplete="off" required />
                                 </div>
                           </div>
                           <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="email" name="conEmail" id="conEmail" placeholder="Email address" autocomplete="off" required />
                                 </div>
                           </div>
                           <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="tel" name="conPhone" id="conPhone" placeholder="Phone number" autocomplete="off" />
                                 </div>
                           </div>
                           <div class="col-12">
                                 <div class="form_group">
                                    <textarea id="message" name="message" placeholder="Message" required></textarea>
                                 </div>
                           </div>
                           <div class="col-12">
                                 <div class="form_btn">
                                    <button type="submit" class="btn tj-btn-primary">Send Message</button>
                                 </div>
                           </div>
                        </div>
                     </form>

                     </div>
                  </div>
               </div>
               <div class="col-lg-5 offset-lg-1 col-md-5 d-flex flex-wrap align-items-center order-1 order-md-2">
                  <div class="contact-info-list">
                     <ul class="ul-reset">
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                           data-wow-delay=".4s">
                           <div class="icon-box">
                           <i class="fa-solid fa-phone"></i>
                           </div>
                           <div class="text-box">
                              <p>Phone</p>
                              <a href="tel:8698396653">8698396653</a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                           data-wow-delay=".5s">
                           <div class="icon-box">
                           <i class="fa-solid fa-envelope"></i>
                           </div>
                           <div class="text-box">
                              <p>Email</p>
                              <a href="mailto:devendramali241201@gmail.com">devendramali241201@gmail.com</a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                           data-wow-delay=".6s">
                           <div class="icon-box">
                           <i class="fa-solid fa-location-dot"></i>
                           </div>
                           <div class="text-box">
                              <p>Address</p>
                              <a href="#">At. Kakarde <br>
                                 Tal dist Nandurbar 425412</a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end: Contact Area -->
   </main>

   <!-- FOOTER AREA START -->

   <?php include "include/footer.php" ?>
   <!-- FOOTER AREA END -->

   <?php include "include/footer-include.php" ?>
   <!-- JSS here -->
   

</body>

</html>