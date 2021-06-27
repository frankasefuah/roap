<?php include "includes/header.html" ?>
<?php include "includes/breadcrumbs.html" ?>

<div class="form-container">
    <div class="form-headers text-center">
        <h2>Log in</h2>

        <p><em><i class="fa fa-info-circle"></i>Don't have an account, <a href="signup.php" class="signup" rel="next">Sign up!</a></em></p>
    </div>
    <form action="">
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group form-btns">
            <button type="submit" class="btn btn-success btn-lg">Log in</button>
        </div>
    </form>
</div>
<?php include "includes/footer.html" ?>