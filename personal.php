<?php include "includes/header.html" ?>
<?php include "includes/breadcrumbs.html" ?>

<h2>Personal Information</h2>
<div class="form-group">
    <Label>Title</Label>
    <Select class="form-control" aria-label="select title">
        <option disabled selected>Select One</option>
        <option value="Ms">Ms</option>
        <option value="Mrs">Mrs</option>
        <option value="Mr">Mr</option>
        <option value="Dr">Dr</option>
        <option value="Prof">Prof</option>
        <option value="Rev">Rev</option>
        <option value="Bishop">Bishop</option>
        <option value="ING">ING</option>
        <option value="other"></option>
    </Select>
    <label for="surname">Surname</label>
    <input type="text" name="surname" class="form-control">
</div>

<div class="form-group">
    <label for="otherName">Other Names</label>
    <input type="text" name="otherName" class="form-control">
</div>

<div class="form-group">
    <label for="gender">Gender</label>
    <div>
        <div class="form-check form-check-inline">
            <input type="radio" name="gender" class="form-check-input">
            <label for="Female" class="form-check-label">Female</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" name="gender" class="form-check-input">
            <label for="Male" class="form-check-label">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" name="gender" class="form-check-input">
            <label for="Other" class="form-check-label">Other</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" name="gender" class="form-check-input">
            <label for="preferNotToSay" class="form-check-label">Prefer not to say</label>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="countryOfOrigin">Country of Origin</label>
<select name="countryOfOrigin" class="selectpicker countrypicker">
    <!-- bootstrap country picker -->
</select>
</div>

<div class="form-group">
    <label for="countryOfResidence">Country of Residence</label>
<select name="countryOfResidence" class="selectpicker countrypicker">
    <!-- bootstrap country picker -->
</select></div>
<div class="form-group"></div>


<!-- pre filled with email from sign up -->
<label for="email">Email</label>
<input type="email" name="email" id="">
<label for="phoneNumber">Phone Number</label>
<input type="tel" name="phoneNumber" id="">

<?php include "includes/footer.html" ?>