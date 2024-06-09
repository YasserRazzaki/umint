<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us !</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <?php
    include './menu.html';
    ?>
  <style>
    body section {
      background-color: #edf2f7;
    }
    .contact-container {
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.1);
      height: 600px; /* Hauteur fixe */
    }
    .contact-img {
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
      height: 600px; /* Hauteur fixe */
      width: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body>

<section class="border-red-500 bg-gray-200 min-vh-100 d-flex align-items-center justify-content-center">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-container p-5 rounded-lg shadow-lg">
          <h2 class="text-2xl font-bold text-primary">Contact Us</h2>
          <p class="text-sm mt-4">Please fill in the form below to get in touch with us</p>

          <form class="mt-4">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="First Name" required>
              </div>
              <div class="form-group col-md-6">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" required>
              </div>
            </div>
            <div class="form-group">
            <label>Subject</label>
            <select class="form-select form-select-arrow">
              <option selected>-- Choose a subject --</option>
              <option>Support</option>
              <option>Feedback</option>
              <option>Others</option>
              <option>General Inquiry</option>
            </select>
          </div>  
            <div class="form-group">
              <label>Message</label>
              <textarea class="form-control" rows="5" placeholder="Your message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-md-6 d-none d-md-block">
        <img src="https://images.unsplash.com/photo-1614741118887-7a4ee193a5fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" class="img-fluid contact-img rounded-lg" alt="page img">
      </div>
    </div>
  </div>
</section>
</body>
</html>

<?php
    include './footer.html';
    ?>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
    const submitButton = document.querySelector('button[type="submit"]');
    const firstNameInput = document.querySelector('input[placeholder="First Name"]');
    const lastNameInput = document.querySelector('input[placeholder="Last Name"]');
    const subjectSelect = document.querySelector('.form-select-arrow');
    const messageTextarea = document.querySelector('textarea[placeholder="Your message"]');

    submitButton.addEventListener("click", function (event) {
        event.preventDefault();

        const firstName = firstNameInput.value.trim();
        const lastName = lastNameInput.value.trim();
        const subject = subjectSelect.value;
        const message = messageTextarea.value.trim();

        if (firstName === "") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Please enter your first name.',
                timer: 1500
            });
        } else if (lastName === "") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Please enter your last name.',
                timer: 1500
            });
        } else if (subject === "-- Choose a subject --") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Please select a subject.',
                timer: 1500
            });
        } else if (message === "") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Please enter your message.',
                timer: 1500
            });
        } else {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "We'll contact you back soon!",
                timer: 1500
            });
            // Reset form after successful submission
            firstNameInput.value = "";
            lastNameInput.value = "";
            subjectSelect.value = "-- Choose a subject --";
            messageTextarea.value = "";
        }
    });
});

    </script>