<!-- Replace the entire form in your register.php with this: -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>First Name*</label>
        <input type="text" name="firstname" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Middle Name</label>
        <input type="text" name="middlename" class="form-control">
    </div>
    <div class="form-group">
        <label>Last Name*</label>
        <input type="text" name="lastname" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Username*</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Password*</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Confirm Password*</label>
        <input type="password" name="confirm_password" class="form-control" required>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit">
        <input type="reset" class="btn btn-secondary ml-2" value="Reset">
    </div>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</form>