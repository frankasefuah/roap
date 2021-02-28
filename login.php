<?php include "includes/header.html" ?>
<?php include "includes/breadcrumbs.html" ?>

<h1>Log in</h1>

<p><i class="fa fa-info-circle"></i>Don't have an account, <a href="signup.php" class="signup" rel="next">Sign up!</a></p>
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
        <button type="submit" class="btn btn-success">Log in</button>
    </div>
</form>

<?php include "includes/footer.html" ?>