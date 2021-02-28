<?php include "includes/header.html" ?>
<?php include "includes/breadcrumbs.html" ?>

<h1>Sign Up</h1>

<p><i class="fa fa-info-circle"></i>Already created an account, <a href="login.php" class="login" rel="next">Sign in!</a></p>

<form action="">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="vpassword">Verify Password</label>
        <input type="password" name="vPassword" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Sign up</button>
    </div>
</form>

<?php include "includes/footer.html" ?>