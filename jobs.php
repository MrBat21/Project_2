<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="styles/jobs_style.css">
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
            <h1 class="header">Available Positions</h1>
        <div class="container">
            <div class="back-end list">
                <img class="picture" src="styles/images/back-end.jpg">
                <div class="content">
                    <p> At SFC Company, we’re driven by the mission to build scalable, secure, 
                        and high-performing digital solutions. 
                        Whether it's empowering e-commerce, enhancing social interactions, or creating tailored experiences for streaming services, 
                        our back-end development team forms the foundation of every innovation. Join us and be part of a team that turns ambitious ideas into reality.</p>
                <button type="submit" class="btn" onclick="openPopup(0)">Read more</button>
                </div>
                </div>
                <div class="popup" id="popup0">
                    <h2>As an Entry-Level Back-End Developer at SFC, you’ll work behind the scenes to design, develop, and maintain the technology that powers our applications. 
                        This role is ideal for someone with a strong passion for logical problem-solving, a knack for scalability, 
                        and a love for creating seamless user experiences through efficient server-side architecture. Your responsibilities will include writing clean, scalable, 
                        and efficient server-side code using programming languages like Python, Java, Node.js, or Ruby; 
                        designing and managing databases such as MySQL, PostgreSQL, or MongoDB; 
                        building and maintaining APIs (RESTful or GraphQL) to enable seamless communication between servers and clients; 
                        implementing security measures while ensuring system scalability; and monitoring application performance, debugging server-side issues, 
                        and making iterative improvements. Back-end development is the engine that drives every web and mobile application, ensuring smooth data processing, 
                        transaction handling, and functionality that users depend on. It plays a pivotal role in making systems secure, scalable, and high-performing. 
                        Today, back-end development powers applications across industries, 
                        from e-commerce platforms like Amazon and Shopify handling order processing and real-time inventory management, 
                        to social media apps like Instagram and Twitter managing millions of interactions and media uploads, 
                        and streaming services like Netflix and Spotify enabling seamless data-heavy operations.</h2>
                    <button type="button" onclick="closePopup(0)">Close</button>
                </div>
            <div class="full-stack list">
            <img class="picture" src="styles/images/full-stack.jpg">
            <div class="content">
                <p>As a Full-Stack Developer, you will play a vital role in developing, deploying, and maintaining web applications that meet the dynamic needs of our clients. 
                    You’ll collaborate with cross-functional teams to deliver intuitive user interfaces, reliable back-end systems, and innovative solutions.</p>
            <button type="submit" class="btn" onclick="openPopup(1)">Read more</button>
            </div>
            </div>
                <div class="popup" id="popup1">
                    <h2>At SFC, Full-Stack Developers play a crucial role in building and maintaining high-quality web applications. They work across both front-end and back-end technologies to create seamless, responsive, and interactive digital experiences. On the front end, they develop user interfaces using frameworks like React, Angular, or Vue.js while ensuring cross-device compatibility through responsive design. On the back end, they build and optimize server-side applications with technologies such as Node.js, Python, or Java, along with designing efficient databases using MySQL, PostgreSQL, or MongoDB. They also focus on API development and integration, ensuring smooth communication between the front-end and back-end systems. Quality assurance is a priority, with developers leveraging testing frameworks like Jest, Mocha, or Selenium to debug and enhance application performance. Additionally, version control using Git enables effective collaboration with the development team.
Candidates for this role should have at least two years of experience in Full-Stack Development, proficiency in front-end and back-end technologies, familiarity with Git for version control, and strong problem-solving skills. Preferred qualifications include experience with cloud platforms like AWS, Azure, or Google Cloud, as well as knowledge of CI/CD pipelines and containerization tools like Docker and Kubernetes. Full-Stack Developers are essential at SFC because their ability to work across the entire technology stack enhances collaboration, accelerates project delivery, and ensures high-quality results for clients.</h2>
                    <button type="button" onclick="closePopup(1)">Close</button>
                </div>
            <div class="data_sci list">
            <img class="picture" src="styles/images/data.jpg">
            <div class="content">
                    <p>At SFC Company, we believe data holds the power to drive innovation and make a lasting impact. 
                    From healthcare to finance, retail, and beyond, we work with industry leaders to uncover actionable insights that transform operations and enhance lives. 
                    Our expert team of data scientists, engineers, and business strategists collaborates to bridge the gap between complex data and meaningful decisions.</p>
            <button type="submit" class="btn" onclick="openPopup(2)">Read more</button>
            </div>
            </div>
                <div class="popup" id="popup2">
                    <h2>At SFC Company, we believe data holds the power to drive innovation and create lasting impact across industries such as healthcare, finance, and retail. 
                        Our team of data scientists, engineers, and business strategists work together to transform complex data into meaningful insights. 
                        As an entry-level Data Scientist, you will analyze vast datasets to uncover patterns and trends, enabling clients to make informed decisions. 
                        This role is ideal for those with a passion for data exploration, strong analytical skills, and the ability to turn numbers into valuable business solutions. 
                        Responsibilities include collecting and preparing data from various sources, cleaning and structuring it for analysis, and leveraging statistical and machine learning techniques to build predictive models using tools like Python, R, or SQL. You will also create visual dashboards with tools such as Tableau or Power BI and present findings to stakeholders effectively. 
                        Collaboration with cross-functional teams is essential to identifying business challenges and implementing data-driven solutions, while staying updated on advancements in AI and machine learning.</h2>
                    <button type="button" onclick="closePopup(2)">Close</button>
                </div>
        </div>
        <div class="popup-overlay" id="disableHover"></div>
        <script>
            function openPopup(index){
                document.getElementById(`popup${index}`).classList.add("open-popup");
                document.getElementById("disableHover").style.display = "block";   
            }
            function closePopup(index){
                document.getElementById(`popup${index}`).classList.remove("open-popup");
                document.getElementById("disableHover").style.display = "none";
            }
        </script>            
        </body>
        </html>