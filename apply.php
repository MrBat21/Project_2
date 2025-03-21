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
        <div class="grid">
            <div class="contact-text">
                <h3 class="White-text">We always listen to you</h3>
                <h2 class="Gold-text">Contact us</h2>
            </div>
            <div class="contact-pic">
                <a class="facebook" href="https://www.facebook.com/profile.php?id=100072274716909">
                <span class="facebook">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg>
                </span>
                Our Facebook page</a>
                <a class="mail" href="swinburnefootballclub.hcmc@gmail.com">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                    </svg>
                    </span>
                Our Mail
                </a>
            </div>
        </div>

        <footer>
        <div class="footer">&#169; 2025 SFC, All rights reserved.</div>
        <div class="contact">Contact Us: example@gmail.com</div>
        </footer>
</body>
</html>