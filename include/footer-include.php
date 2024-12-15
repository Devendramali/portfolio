<script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/nice-select.min.js"></script>
   <script src="assets/js/backToTop.js"></script>
   <script src="assets/js/appear.min.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/gsap.min.js"></script>
   <script src="assets/js/ScrollTrigger.min.js"></script>
   <script src="assets/js/lenis.min.js"></script>
   <script src="assets/js/lightcase.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/swiper.min.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/odometer.min.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/validate.min.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="https://smtpjs.com/v3/smtp.js"></script>
   <script src="assets/js/main.js"></script>
   <script>
   function sendEmail() {
      const firstName = document.getElementById('conName').value;
      const lastName = document.getElementById('conLName').value;
      const email = document.getElementById('conEmail').value;
      const phone = document.getElementById('conPhone').value;
      const message1 = document.getElementById('message').value;

      // Construct the email body
      const emailBody = `
         <h3>Form Submission Details</h3>
         <p><strong>First Name:</strong> ${firstName}</p>
         <p><strong>Last Name:</strong> ${lastName}</p>
         <p><strong>Username:</strong> ${email}</p>
         <p><strong>City:</strong> ${phone}</p>
         <p><strong>Message:</strong> ${message1}</p>
      `;

      // Use smtp.js to send the email
      Email.send({
         Host: "smtp.elasticemail.com", // Your SMTP server
         Port: "2525", // SMTP port
         Username: "sagarmali6546@gmail.com", // Your email address
         Password: "3E3EAA8059C4546DA467465E958CB260983B", // SMTP password or API key
         To: "sagarmali6546@gmail.com", // Recipient email address
         From: "sagarmali6546@gmail.com", // Sender email address (capital "F")
         Subject: "Form Submission Details",
         Body: emailBody
      }).then(
         message => {
            // alert(`Email sent successfully: ${message}`);
            // document.getElementById("form-container").innerHTML = "New Content!";
            window.location.href = "./thank-you.php";
         }
      ).catch(
         error => {
            console.error("Error sending email:", error);
            alert("Failed to send email. Please check the console for details.");
         }
      );


   }
</script>