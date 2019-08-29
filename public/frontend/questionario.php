<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Simple register form</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />

    <link href="frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <form id="example-advanced-form" action="#">
        <h3>Account</h3>
        <fieldset>
            <legend>Account Information</legend>

            <label for="userName-2">User name *</label>
            <input id="userName-2" name="userName" type="text" class="required">
            <label for="password-2">Password *</label>
            <input id="password-2" name="password" type="text" class="required">
            <label for="confirm-2">Confirm Password *</label>
            <input id="confirm-2" name="confirm" type="text" class="required">
            <p>(*) Mandatory</p>
        </fieldset>

        <h3>Profile</h3>
        <fieldset>
            <legend>Profile Information</legend>

            <label for="name-2">First name *</label>
            <input id="name-2" name="name" type="text" class="required">
            <label for="surname-2">Last name *</label>
            <input id="surname-2" name="surname" type="text" class="required">
            <label for="email-2">Email *</label>
            <input id="email-2" name="email" type="text" class="required email">
            <label for="address-2">Address</label>
            <input id="address-2" name="address" type="text">
            <label for="age-2">Age (The warning step will show up if age is less than 18) *</label>
            <input id="age-2" name="age" type="text" class="required number">
            <p>(*) Mandatory</p>
        </fieldset>

        <h3>Warning</h3>
        <fieldset>
            <legend>You are to young</legend>

            <p>Please go away ;-)</p>
        </fieldset>

        <h3>Finish</h3>
        <fieldset>
            <legend>Terms and Conditions</legend>

            <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
        </fieldset>
    </form>
    <!-- partial -->
    <script src="js/questionario.js"></script>
</body>

</html>