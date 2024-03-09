<!DOCTYPE html>
<html lang="en">
<?php include('../common/head.php'); ?>
<body>
  <div class="flex flex-col w-full min-h-screen">
    <?php include('../common/navbar.php'); ?>
    <div class="flex justify-center flex-grow">
      <div class="flex flex-col w-full max-w-6xl gap-6 text-tgray p-6">
        <div class="prose max-w-none">
          <h1>Register</h1>
          <p>
            If you dont already have an account with us, please fill out this form to sign up!
          </p>
        </div>
        <form class="form-control flex flex-col w-full bg-slate-200 rounded-lg my-6 p-4 gap-4" action="#" method="post" novalidate>
          <div class="flex flex-col md:flex-row w-full gap-4">
            <div class="flex flex-1 gap-4">
              <select class="form-field max-w-28 w-full" name="prefix" required>
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
            <div class="flex flex-1 gap-4">
              <input class="form-field max-w-28" type="text" name="middleInitial" placeholder="Initial">
              <div class="flex-col flex-1">
                <input class="form-field w-full" type="text" name="lastName" required pattern="^[A-Z][A-Za-z '-]*$" placeholder="Last Name">
                <span class="form-error">Please input a valid last name</span>
              </div>
            </div>
          </div>
          <div class="flex flex-col md:flex-row w-full gap-4">
            <div class="flex flex-1 gap-4">
              <select class="form-field max-w-28 w-full" name="gender" required>
                <option value="" selected disabled hidden>
                  Gender
                </option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
              <div class="flex-col flex-1">
                <input class="form-field w-full" type="text" name="phone" pattern="^(\d{3}-)?\d{3}-\d{4}$" placeholder="Phone Number">
                <span class="form-error">Please input a valid phone number</span>
              </div>
            </div>
            <div class="flex-col flex-1">
              <input class="form-field w-full" type="text" name="email" required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$" placeholder="Email">
              <span class="form-error">Please input a valid email</span>
            </div>
          </div>
          <div class="flex flex-col md:flex-row w-full gap-4">
            <div class="flex-col flex-1">
              <input class="form-field w-full" type="text" name="address" required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$" placeholder="Address">
              <span class="form-error">Please input a valid address</span>
            </div>
            <div class="flex flex-1 gap-4">
              <div class="flex-col flex-1">
                <input class="form-field w-full" type="text" name="city" pattern="^(\d{3}-)?\d{3}-\d{4}$" placeholder="City">
                <span class="form-error">Please input a valid city</span>
              </div>
              <div class="flex-col flex-1">
                <input class="form-field w-full" type="text" name="region" pattern="^(\d{3}-)?\d{3}-\d{4}$" placeholder="Region">
                <span class="form-error">Please input a valid region</span>
              </div>
            </div>
          </div>
          <div class="flex flex-col md:flex-row w-full gap-4">
            <div class="flex-col flex-1">
              <input class="form-field w-full" type="text" name="postalCode" required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$" placeholder="Postal Code">
              <span class="form-error">Please input a valid Postal Code</span>
            </div>
            <div class="flex-col flex-1">
              <input class="form-field w-full" type="text" name="userName" required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$" placeholder="Username">
              <span class="form-error">Please input a valid Username</span>
            </div>
          </div>
          <div class="flex flex-col md:flex-row w-full gap-4">
            <div class="flex-col flex-1">
              <input class="form-field w-full" type="text" name="password" required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$" placeholder="Password">
              <span class="form-error">Please input a valid Password</span>
            </div>
            <div class="flex-col flex-1">
              <input class="form-field w-full" type="text" name="confirmPassword" required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$" placeholder="Confirm Password">
              <span class="form-error">Passwords do not match</span>
            </div>
          </div>
          <div class="flex flex-col md:flex-row w-full justify-end gap-4">
            <div class="flex gap-4">
              <input class="form-field bg-tblue2 text-twhite py-1 px-3" type="reset" value="Reset Form">
              <input class="form-field bg-tblue2 text-twhite py-1 px-3" type="submit" value="Sign Up">
            </div>
          </div>
        </form>
      </div>
    </div>
    <?php include('../common/footer.php'); ?>
  </div>
</body>
</html>