<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Apply</title>
        <link rel="stylesheet" href="styles/apply_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
            <?php
            include('menu.inc')
            ?>
        <hr>
        <div class="intro">
            <div class="text-box">
            <h1>Application Form</h1>
            <p>Are you looking for an exciting opportunity to grow your career? 
            Our company is hiring passionate and talented individuals to join our dynamic team! <br>We offer a supportive work environment, 
            endless learning opportunities, and a chance to make a real impact.<br> Whether you're an experienced professional or just starting out, 
            there's a place for you here.<br> Don’t miss this chance to be part of something great—apply today and take the next step toward your future!</p>
            </div>
        </div>

        <div class="apply">
        <div class="container">
            <form action="process_eoi.php" method="POST" novalidate=”novalidate” >
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Job reference number</span>
                        <input type="text" name="reference_number" pattern="[A-Za-z0-9]{5}" title="Must be exactly 5 alphanumeric characters" required id="reference_number">
                    </div>
                    <div class="input-box">
                        <span class="details">First name</span>
                        <input type="text" name="f_name" pattern="[A-Za-z]{1,20}" title="Maximux 20 letters" required id="f_name">
                    </div>
                    <div class="input-box">
                        <span class="details">Last name</span>
                        <input type="text" name="l_name" pattern="[A-Za-z]{1,20}" title="Maximux 20 letters" required id="l_name">
                    </div>
                    <div class="input-box">
                        <span class="details">Date of birth</span>
                        <input type="date" name="dob" required id="dob">
                    </div>
                    <div class="input-box">
                        <fieldset class="gender-fieldset">
                        <legend>Gender</legend>
                        <div class="gender-options">
                        <label > <i id="gender"></i>Male<input type="radio" name="gender" value="male" required="required" checked></label>
                        <label > <i id="gender"></i>Female<input type="radio" name="gender" value="female" required="required"></label>
                        </div>
                        </fieldset>
                    </div>
                    <div class="input-box">
                        <span class="details">Street Address</span>
                        <input type="text" name="street" maxlength="40" id="street">
                    </div>
                    <div class="input-box">
                        <span class="details">Suburb/town</span>
                        <input type="text" name="suburb" maxlength="40" id="suburb">
                    </div>
                    <div class="input-box">
                        <span class="details">State</span>
                        <select name="state" id="state" required>
                        <option value="Please select" disabled selected id="state">Please select</option>
                        <option value="VIC" id="state">VIC</option>
                        <option value="NSW" id="state">NSW</option>
                        <option value="QLD" id="state">QLD</option>
                        <option value="NT" id="state">NT</option>
                        <option value="WA" id="state">WA</option>
                        <option value="SA" id="state">SA</option>
                        <option value="TAS" id="state">TAS</option>
                        <option value="ACT" id="state">ACT</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Postcode</span>
                        <input type="text" name="postcode" pattern="\d{4}" minlength="4" maxlength="4" title="Must be exactly 4 digits" required id="postcode">
                    </div>
                    <div class="input-box">
                        <span class="details">Email address</span>
                        <input type="email" name="email" required id="email" >
                    </div>
                    <div class="input-box">
                        <span class="details">Phone number </span>
                        <input type="tel" name="phone" pattern="[0-9 ]{8,12}" minlength="8" maxlength="12" title="Must be 8-12 digits or spaces" required id="phone">
                    </div>
                    <div class="input-box">
                        <span class="details">Skill list</span>
                    <div class="checkbox-container">
                        <label class="skill-label">Technical Skill<input type="checkbox" name="skills[]" value="Technical Skill" checked="checked" id="skills"></label>
                        <label class="skill-label">Soft Skill<input type="checkbox" name="skills[]" value="Soft Skill"  id="skills"></label>
                    </div>
                    <div class="checkbox-container">
                        <label class="skill-label">Others<input type="checkbox" name="skills[]" value="Others"  id="skills"></label>
                    </div>
                    </div>
                    <div class="input-box">
                        <span class="details">Other skills</span>
                        <textarea name="other-skills" rows="5" cols="20" id="other_skills"></textarea>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Apply">
                    </div>
                </div>
            </form>
        </div>
        <?php
            include('footer.inc')
            ?>
</body>
</html>