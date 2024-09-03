<h2>Registration Form</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile No:</label>
            <input type="text" name="mobile" value="<?php echo $mobile;?>">
            <span class="error">* <?php echo $mobileErr;?></span>
        </div>
        <div class="form-group">
            <label for="website">Website:</label>
            <input type="text" name="website" value="<?php echo $website;?>">
            <span class="error"><?php echo $websiteErr;?></span>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="male"
                <?php if (isset($gender) && $gender=="male") echo "checked";?>> Male
            <input type="radio" name="gender" value="female"
                <?php if (isset($gender) && $gender=="female") echo "checked";?>> Female
            <input type="radio" name="gender" value="other"
                <?php if (isset($gender) && $gender=="other") echo "checked";?>> Other
            <span class="error">* <?php echo $genderErr;?></span>
        </div>
        <div class="form-group">
            <label for="terms">Agree to Terms of Service:</label>
            <input type="checkbox" name="terms" value="accepted"
                <?php if (isset($terms) && $terms=="accepted") echo "checked";?>>
            <span class="error">* <?php echo $termsErr;?></span>
        </div>
        <input type="submit" class="submit" name="submit" value="Submit">
    </form>

</body>

</html>