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
                <button type="submit" class="btn" onclick="openPopup()">Read more</button>
                </div>
                </div>
                <div class="popup" id="popup">
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
                    <button type="button" onclick="closePopup()">Close</button>
                </div>
            <div class="full-stack list">
            <img class="picture" src="styles/images/full-stack.jpg">
            <div class="content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore aliquid nulla vero minima consequuntur voluptas esse autem, voluptates dicta temporibus beatae quis totam est fuga animi odio, nostrum necessitatibus! Doloremque!</p>
            <button type="submit" class="btn" onclick="openPopup()">Read more</button>
            </div>
            </div>
                <div class="popup" id="popup">
                    <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis odit voluptate, aut quos sed temporibus quasi, nemo facilis praesentium saepe laudantium modi cupiditate, officiis harum! Quasi non veniam unde rerum.</h2>
                    <button type="button" onclick="closePopup()">Close</button>
                </div>
            <div class="data_sci list">
            <img class="picture" src="styles/images/data.jpg">
            <div class="content">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore aliquid nulla vero minima consequuntur voluptas esse autem, voluptates dicta temporibus beatae quis totam est fuga animi odio, nostrum necessitatibus! Doloremque!</p>
            <button type="submit" class="btn" onclick="openPopup()">Read more</button>
            </div>
            </div>
                <div class="popup" id="popup">
                    <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis odit voluptate, aut quos sed temporibus quasi, nemo facilis praesentium saepe laudantium modi cupiditate, officiis harum! Quasi non veniam unde rerum.</h2>
                    <button type="button" onclick="closePopup()">Close</button>
                </div>
        </div>
        <div class="popup-overlay" id="disableHover"></div>
        <script>
            let popup =document.getElementById("popup");
            function openPopup(){
                popup.classList.add("open-popup");
                document.getElementById("disableHover").style.display = "block";   
            }
            function closePopup(){
                popup.classList.remove("open-popup");
                document.getElementById("disableHover").style.display = "none";
            }
        </script>            
        </body>
        </html>