<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col w-full min-h-screen">
    <?php include('../common/navbar.php'); ?>
    <div class="flex justify-center flex-grow">
      <div class="flex flex-col w-full max-w-6xl gap-6 text-tgray p-6">
        <div class="prose max-w-none">
          <h1>Feedback</h1>
          <p>
            Welcome to our feedback hub! Use this form to share your thoughts,
            suggestions, and questions about Timewarp Consoles. We value your input and
            strive to continuously improve your experience.
          </p>
        </div>
        <form class="form-control flex flex-col w-full bg-slate-200 rounded-lg my-6 p-4 gap-4" action="scripts/formFeedback.php" method="post" novalidate>
          <div class="flex flex-col md:flex-row w-full gap-4">
            <div class="flex flex-1 gap-4">
              <select class="form-field" name="salutation" required>
                <option value="" selected disabled hidden>
                  Prefix
                </option>
                <option value="Mrs.">Mrs.</option>
                <option value="Ms.">Ms.</option>
                <option value="Mr.">Mr.</option>
                <option value="Dr.">Dr.</option>
              </select>
              <div class="flex-col w-full">
                <input class="form-field w-full" type="text" name="firstName" required pattern="^[A-Z][A-Za-z '-]*$" placeholder="First Name">
                <span class="form-error">Please input a valid first name</span>
              </div>
            </div>
            <div class="flex-col flex-1">
              <input class="form-field w-full" type="text" name="lastName" required pattern="^[A-Z][A-Za-z '-]*$" placeholder="Last Name">
              <span class="form-error">Please input a valid last name</span>
            </div>
          </div>
          <div class="flex flex-col md:flex-row w-full gap-4">
            <div class="flex-col flex-1">
              <input class="form-field w-full" type="text" name="email" required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$" placeholder="Email">
              <span class="form-error">Please input a valid email</span>
            </div>
            <div class="flex-col flex-1">
              <input class="form-field w-full" type="text" name="phone" pattern="^(\d{3}-)?\d{3}-\d{4}$" placeholder="Phone Number">
              <span class="form-error">Please input a valid phone number</span>
            </div>
          </div>
          <div class="flex-col">
            <input class="form-field w-full" type="text" name="subject" required placeholder="Subject">
            <span class="form-error">Subject is required</span>
          </div>
          <div class="flex-col">
            <textarea class="w-full form-field" name="message" rows="6" required placeholder="Enter your feedback here..."></textarea>
            <span class="form-error">Message is required</span>
          </div>
          <div class="flex flex-col md:flex-row w-full justify-between gap-4">
            <div class="flex items-center">
              <label for="reply">Follow&nbsp;up?&nbsp;</label>
              <input id="reply" class="rounded-md border-slate-400" type="checkbox" name="reply">
            </div>
            <div class="flex gap-4">
              <input class="form-field bg-tblue2 text-twhite py-1 px-3" type="reset" value="Reset Form">
              <input class="form-field bg-tblue2 text-twhite py-1 px-3" type="submit" value="Send Feedback">
            </div>
          </div>
        </form>
        <script src="scripts/form_control.js"></script>
      </div>
    </div>
    <?php include('../common/footer.php'); ?>
  </div>
</body>
</html>