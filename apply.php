<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="styles/apply_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
        <a href="index.php"><img loading="lazy" class="logo" src="styles/images/logo sfc (1).png" alt="SFC_Logo"></a>
        <nav>
            <div class="menu">
            <ul>
                    <li>
                    <span><i class="fa fa-home" aria-hidden="true"></i></span>   
                    <span><a href="index.php">Home</a></span>
                    </li>
                    <li>
                    <span><i class="fa fa-sitemap" aria-hidden="true"></i></span>
                    <span><a href="about_us.php">About</a></span>
                    </li>
                    <li>
                    <span><i class="fa fa-code" aria-hidden="true"></i></span>
                    <span><a href="jobs.php">Job</a></span>
                    </li>
                    <li>
                    <span><i class="fa fa-cogs" aria-hidden="true"></i></span>
                    <span><a href="management.php">Management</a></span>
                    </li>
                    <li>
                    <span><i class="fa fa-desktop" aria-hidden="true"></i></span>
                    <span><a href="apply.php">Apply</a></span>
                    </li>
                    <li>
                    <span><i class="fa fa-edit" aria-hidden="true"></i></span>
                    <span><a href="enhancements.php">Enhancement</a></span>
                    </li>
            </ul>
            </div>
        </nav>
        </header>
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
                        <input type="text" name="reference_number" pattern="[A-Za-z0-9]{5}" title="Must be exactly 5 alphanumeric characters" required >
                    </div>
                    <div class="input-box">
                        <span class="details">First name</span>
                        <input type="text" name="f_name" pattern="[A-Za-z]{1,20}" title="Maximux 20 letters" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last name</span>
                        <input type="text" name="l_name" pattern="[A-Za-z]{1,20}" title="Maximux 20 letters" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date of birth</span>
                        <input type="date" name="dob" required>
                    </div>
                    <div class="input-box">
                        <fieldset class="gender-fieldset">
                        <legend>Gender</legend>
                        <div class="gender-options">
                        <label >Male<input type="radio" name="gender" value="male" required="required" checked></label>
                        <label >Female<input type="radio" name="gender" value="female" required="required"></label>
                        </div>
                        </fieldset>
                    </div>
                    <div class="input-box">
                        <span class="details">Street Address</span>
                        <input type="text" maxlength="40">
                    </div>
                    <div class="input-box">
                        <span class="details">Suburb/town</span>
                        <input type="text" maxlength="40">
                    </div>
                    <div class="input-box">
                        <span class="details">State</span>
                        <select name="state" id="state" required>
                        <option value="Please select" disabled selected>Please select</option>
                        <option value="VIC">VIC</option>
                        <option value="NSW">NSW</option>
                        <option value="QLD">QLD</option>
                        <option value="NT">NT</option>
                        <option value="WA">WA</option>
                        <option value="SA">SA</option>
                        <option value="TAS">TAS</option>
                        <option value="ACT">ACT</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Postcode</span>
                        <input type="text" pattern="\d{4}" minlength="4" maxlength="4" title="Must be exactly 4 digits" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Email address</span>
                        <input type="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone number </span>
                        <input type="tel" pattern="[0-9 ]{8,12}" minlength="8" maxlength="12" title="Must be 8-12 digits or spaces" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Skill list</span>
                    <div class="checkbox-container">
                        <label class="skill-label">Technical Skill<input type="checkbox" name="skillset" value="Technical Skill" checked="checked"></label>
                        <label class="skill-label">Soft Skill<input type="checkbox" name="skillset" value="Soft Skill"></label>
                    </div>
                    <div class="checkbox-container">
                        <label class="skill-label">Others<input type="checkbox" name="skillset" value="Others"></label>
                    </div>
                    </div>
                    <div class="input-box">
                        <span class="details">Other skills</span>
                        <textarea name="other-skills" rows="5" cols="20"></textarea>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Apply">
                    </div>
                </div>
            </form>
        </div>
        <div class="grid">
            <div class="contact-text">

            </div>
            <div class="contact-pic">
            
            </div>
        </div>

        <footer>
        <div class="footer">&#169; 2025 SFC, All rights reserved.</div>
        <div class="contact">Contact Us: example@gmail.com</div>
        </footer>
</body>
</html>