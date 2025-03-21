<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Positions</title>
        <link rel="stylesheet" href="styles/jobs_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
            <?php
            include('menu.inc')
            ?>
            <hr>
            <h1 class="header">Available Positions</h1>
        <div class="container">
            <div class="back-end list">
            <h3>Back-end Developer</h3>
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
                <div class="job-description">
            <h3>About the Role</h3>
            <p>
                As an Entry-Level Back-End Developer at SFC, you’ll work behind the scenes to design, develop, and maintain the technology that powers our applications. This role is ideal for someone with a strong passion for logical problem-solving, a knack for scalability, and a love for creating seamless user experiences through efficient server-side architecture.
            </p>
        </div>
        <div class="job-responsibilities">
            <h3>Responsibilities</h3>
            <ul>
                <li><strong>Server-Side Development:</strong> Write clean, scalable, and efficient code using programming languages like Python, Java, Node.js, or Ruby.</li>
                <li><strong>Database Management:</strong> Design and manage databases (SQL and NoSQL) such as MySQL, PostgreSQL, or MongoDB.</li>
                <li><strong>API Development & Integration:</strong> Build and maintain APIs (RESTful or GraphQL) to enable seamless communication between servers and clients.</li>
                <li><strong>Security & Scalability:</strong> Implement encryption and other security measures while ensuring systems can handle increased user demands.</li>
                <li><strong>Troubleshooting & Maintenance:</strong> Monitor application performance, debug server-side issues, and make iterative improvements.</li>
            </ul>
        </div>
        <div class="job-importance">
            <h3>Why It’s Important</h3>
            <p>
                Back-end development is the engine that drives every web and mobile application. It ensures smooth data processing, transaction handling, and functionality that users depend on. Back-End Developers play a pivotal role in ensuring systems are secure, scalable, and high-performing—making them indispensable to any tech solution.
            </p>
        </div>
        <div class="job-applications">
            <h3>Applications Today</h3>
            <ul>
                <li><strong>E-commerce Giants:</strong> Platforms like Amazon and Shopify depend on robust back-end systems for order processing, payment handling, and real-time inventory management.</li>
                <li><strong>Social Media:</strong> Apps like Instagram and Twitter handle millions of interactions, media uploads, and notifications thanks to efficient back-end solutions.</li>
                <li><strong>Streaming Services:</strong> Platforms like Netflix and Spotify rely on back-end technologies to enable data-heavy operations like streaming and personalized recommendations.</li>
            </ul>
        </div>
        <div class="job-qualifications">
            <h3>Skills and Qualifications</h3>
            <h4>Required</h4>
            <ul>
                <li>1+ years of experience in back-end development or related fields.</li>
                <li>Proficiency in programming languages such as Python, Java, Ruby, or Node.js.</li>
                <li>Experience with databases (SQL and NoSQL) like MySQL or MongoDB.</li>
                <li>Understanding of API development and integration (RESTful or GraphQL).</li>
                <li>Excellent problem-solving skills and attention to detail.</li>
            </ul>
            <h4>Preferred</h4>
            <ul>
                <li>Familiarity with cloud platforms like AWS, Azure, or Google Cloud.</li>
                <li>Knowledge of containerization tools like Docker or Kubernetes.</li>
                <li>Experience with big data tools such as Hadoop or Spark.</li>
                <li>Passion for staying up to date with advancements in back-end technologies.</li>
            </ul>
        </div>
        <div class="job-benefits">
            <h3>Salary and Benefits</h3>
            <ul>
                <li>Salary range: $70,000 to $85,000 per year.</li>
                <li>4 weeks of paid vacation, with additional PTO options available.</li>
                <li>Comprehensive health, vision, and dental insurance.</li>
                <li>401k retirement plan with company match.</li>
                <li>Annual budget for professional development and certifications.</li>
                <li>Flexible work environment (remote or hybrid options available).</li>
            </ul>
        </div>
        <div class="job-additional-info">
            <h3>Additional Information</h3>
            <p>
                This position may require occasional travel for company events or client meetings. Weekend or after-hours work may be necessary based on project needs.
            </p>
        </div>
    </section>
                    <button type="button" onclick="closePopup(0)">Close</button>
                </div>
            <div class="full-stack list">
            <h3>Full-Stack Developer</h3>
            <img class="picture" src="styles/images/full-stack.jpg">
            <div class="content">
                <p>As a Full-Stack Developer, you will play a vital role in developing, deploying, and maintaining web applications that meet the dynamic needs of our clients. 
                    You’ll collaborate with cross-functional teams to deliver intuitive user interfaces, reliable back-end systems, and innovative solutions.</p>
            <button type="submit" class="btn" onclick="openPopup(1)">Read more</button>
            </div>
            </div>
                <div class="popup" id="popup1">
                <div class="job-title">
    <h2 class="job-heading">Full-Stack Developer – SFC</h2>
  </div>
  <div class="job-description">
    <h3 class="description-heading">About the company:</h3>
    <p class="description-text">
      At SFC, we are dedicated to empowering businesses through cutting-edge technology and tailored digital solutions. Our mission is to bridge the gap between user experiences and robust technologies, ensuring seamless functionality and high-impact results. Our collaborative team thrives on solving complex challenges while fostering a culture of learning and innovation.
    </p>
  </div>
  <div class="job-role">
    <h3 class="role-heading">About the role:</h3>
    <p class="role-text">
      As a Full-Stack Developer, you will play a vital role in developing, deploying, and maintaining web applications that meet the dynamic needs of our clients. You’ll collaborate with cross-functional teams to deliver intuitive user interfaces, reliable back-end systems, and innovative solutions.
    </p>
  </div>
  <div class="job-responsibilities">
    <h3 class="responsibilities-heading">Responsibilities:</h3>
    <ul class="responsibilities-list">
      <li class="responsibility-item">
        <strong>Front-End Development:</strong>
        <ul class="sub-responsibilities-list">
          <li class="sub-responsibility-item">Create interactive and responsive user interfaces using frameworks like <em>React</em>, <em>Angular</em>, or <em>Vue.js</em>.</li>
          <li class="sub-responsibility-item">Ensure compatibility across all devices with responsive design implementation.</li>
        </ul>
      </li>
      <li class="responsibility-item">
        <strong>Back-End Development:</strong>
        <ul class="sub-responsibilities-list">
          <li class="sub-responsibility-item">Build and maintain server-side applications using technologies such as <em>Node.js</em>, <em>Python</em>, or <em>Java</em>.</li>
          <li class="sub-responsibility-item">Design and optimize databases using <em>MySQL</em>, <em>PostgreSQL</em>, or <em>MongoDB</em>.</li>
        </ul>
      </li>
      <li class="responsibility-item">
        <strong>API Development & Integration:</strong> Develop and integrate RESTful APIs for seamless communication between the front-end and back-end.
      </li>
      <li class="responsibility-item">
        <strong>Testing & Debugging:</strong> Ensure application quality using testing frameworks like <em>Jest</em>, <em>Mocha</em>, or <em>Selenium</em>.
      </li>
      <li class="responsibility-item">
        <strong>Version Control:</strong> Use <em>Git</em> to track changes and collaborate effectively with the development team.
      </li>
    </ul>
  </div>
  <div class="job-skills">
    <h3 class="skills-heading">Skills and Qualifications:</h3>
    <ul class="skills-list">
      <li class="skill-item"><strong>Required:</strong></li>
      <ul class="sub-skills-list">
        <li class="sub-skill-item">2+ years of experience in Full-Stack Development or a related role.</li>
        <li class="sub-skill-item">Proficiency in front-end and back-end technologies (e.g., React, Node.js, SQL).</li>
        <li class="sub-skill-item">Familiarity with version control systems such as <em>Git</em>.</li>
        <li class="sub-skill-item">Strong problem-solving skills and attention to detail.</li>
      </ul>
      <li class="skill-item"><strong>Preferred:</strong></li>
      <ul class="sub-skills-list">
        <li class="sub-skill-item">Experience with cloud platforms like <em>AWS</em>, <em>Azure</em>, or <em>Google Cloud</em>.</li>
        <li class="sub-skill-item">Knowledge of CI/CD pipelines and containerization tools (e.g., <em>Docker</em>, <em>Kubernetes</em>).</li>
      </ul>
    </ul>
  </div>
  <div class="job-importance">
    <h3 class="importance-heading">Why this role is important:</h3>
    <p class="importance-text">
      At SFC, Full-Stack Developers are the driving force behind our web applications. Your ability to work across the technology stack ensures smoother collaboration, faster delivery, and exceptional quality for our clients.
    </p>
  </div>
  <div class="job-applications">
    <h3 class="applications-heading">Applications Today:</h3>
    <ul class="applications-list">
      <li class="application-item"><strong>Startups:</strong> Build complete solutions for businesses launching innovative products.</li>
      <li class="application-item"><strong>E-commerce:</strong> Create comprehensive platforms with features like payment gateways, product catalogs, and inventory management.</li>
      <li class="application-item"><strong>Social Media Platforms:</strong> Design and maintain systems for real-time chat, user profiles, and notifications.</li>
      <li class="application-item"><strong>Custom Web Applications:</strong> Collaborate with diverse clients to build tailored solutions that meet their specific goals.</li>
    </ul>
  </div>
  <div class="job-salary">
    <h3 class="salary-heading">Salary and Benefits:</h3>
    <ul class="salary-list">
      <li class="salary-item"><strong>Salary range:</strong> $75,000–$95,000 (based on experience).</li>
      <li class="salary-item">3 weeks of paid vacation with opportunities to earn additional PTO.</li>
      <li class="salary-item">Comprehensive health, dental, and vision insurance.</li>
      <li class="salary-item">401(k) retirement plan with company match.</li>
      <li class="salary-item">Flexible remote or hybrid work options.</li>
    </ul>
  </div>
</section>
                    <button type="button" onclick="closePopup(1)">Close</button>
                </div>
            <div class="data_sci list">
            <h3 class="name">Data Scientist</h3>
            <img class="picture" src="styles/images/data.jpg">
            <div class="content">
                    <p>At SFC Company, we believe data holds the power to drive innovation and make a lasting impact. 
                    From healthcare to finance, retail, and beyond, we work with industry leaders to uncover actionable insights that transform operations and enhance lives. 
                    Our expert team of data scientists, engineers, and business strategists collaborates to bridge the gap between complex data and meaningful decisions.</p>
            <button type="submit" class="btn" onclick="openPopup(2)">Read more</button>
            </div>
            </div>
                <div class="popup" id="popup2">
                <section class="job-section data-scientist">
  <div class="job-title">
    <h2 class="job-heading">Entry-Level Data Scientist – SFC Company</h2>
  </div>
  <div class="job-description">
    <h3 class="description-heading">About the Company</h3>
    <p class="description-text">
      At SFC Company, we believe data holds the power to drive innovation and make a lasting impact. From healthcare to finance, retail, and beyond, we work with industry leaders to uncover actionable insights that transform operations and enhance lives. Our expert team of data scientists, engineers, and business strategists collaborates to bridge the gap between complex data and meaningful decisions.
    </p>
  </div>
  <div class="job-role">
    <h3 class="role-heading">About the Role</h3>
    <p class="role-text">
      As an entry-level Data Scientist, you’ll explore massive datasets to uncover hidden patterns, trends, and actionable insights that empower our clients. This role is perfect for someone with a passion for data exploration, a sharp analytical mind, and a talent for turning complex numbers into valuable business solutions. You’ll partner with cross-functional teams and play a critical role in delivering impactful, data-driven results.
    </p>
  </div>
  <div class="job-responsibilities">
    <h3 class="responsibilities-heading">Responsibilities include:</h3>
    <ul class="responsibilities-list">
      <li class="responsibility-item">
        <strong>Data Collection & Preparation:</strong>
        <ul class="sub-responsibilities-list">
          <li class="sub-responsibility-item">Gather and organize data from diverse sources, such as databases, APIs, web scraping, or IoT sensors.</li>
          <li class="sub-responsibility-item">Clean, preprocess, and structure data for analysis, addressing issues like missing or inconsistent values.</li>
        </ul>
      </li>
      <li class="responsibility-item">
        <strong>Data Analysis & Modeling:</strong>
        <ul class="sub-responsibilities-list">
          <li class="sub-responsibility-item">Leverage statistical and machine learning techniques to identify trends, predict outcomes, and solve real-world problems.</li>
          <li class="sub-responsibility-item">Build predictive and descriptive models using tools like Python, R, or SQL.</li>
        </ul>
      </li>
      <li class="responsibility-item">
        <strong>Visualization & Communication:</strong>
        <ul class="sub-responsibilities-list">
          <li class="sub-responsibility-item">Create clear, visual dashboards with tools like Tableau or Power BI to communicate insights effectively.</li>
          <li class="sub-responsibility-item">Present findings to stakeholders in a compelling and concise manner.</li>
        </ul>
      </li>
      <li class="responsibility-item">
        <strong>Collaboration & Innovation:</strong>
        <ul class="sub-responsibilities-list">
          <li class="sub-responsibility-item">Partner with cross-departmental teams to identify and address business challenges through data-driven solutions.</li>
          <li class="sub-responsibility-item">Stay informed about emerging trends in AI, machine learning, and data technologies.</li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="job-skills">
    <h3 class="skills-heading">Skills and Qualifications:</h3>
    <ul class="skills-list">
      <li class="skill-item"><strong>Required:</strong></li>
      <ul class="sub-skills-list">
        <li class="sub-skill-item">1+ years of experience in data analysis, statistical modeling, or a related field.</li>
        <li class="sub-skill-item">Proficiency in programming languages like Python, R, or SQL.</li>
        <li class="sub-skill-item">Strong grasp of statistical techniques and machine learning algorithms.</li>
        <li class="sub-skill-item">Experience with data visualization tools such as Tableau, Power BI, or Matplotlib.</li>
        <li class="sub-skill-item">Ability to manage large datasets and deliver insights promptly.</li>
        <li class="sub-skill-item">Excellent problem-solving skills and attention to detail.</li>
      </ul>
      <li class="skill-item"><strong>Preferred:</strong></li>
      <ul class="sub-skills-list">
        <li class="sub-skill-item">Familiarity with cloud platforms like AWS, Azure, or Google Cloud.</li>
        <li class="sub-skill-item">Knowledge of big data tools like Hadoop or Spark.</li>
        <li class="sub-skill-item">Experience in industries such as healthcare, finance, or retail.</li>
        <li class="sub-skill-item">Passion for staying current with advancements in data science and AI.</li>
      </ul>
    </ul>
  </div>
  <div class="job-importance">
    <h3 class="importance-heading">Why it is Important:</h3>
    <p class="importance-text">
      In today’s data-driven world, organizations are often overwhelmed by information. Data Scientists are the key to making sense of it all, enabling companies to predict trends, streamline operations, and deliver tailored customer experiences. At SFC Company, you’ll not only analyze data but also help shape the future of industries through your insights.
    </p>
  </div>
  <div class="job-applications">
    <h3 class="applications-heading">Applications Today:</h3>
    <ul class="applications-list">
      <li class="application-item"><strong>Healthcare Innovation:</strong> Predicting disease outbreaks, personalizing treatments, and optimizing patient care with AI-driven insights.</li>
      <li class="application-item"><strong>Finance:</strong> Identifying fraudulent activities, improving investment strategies, and conducting credit risk analyses.</li>
      <li class="application-item"><strong>Retail & Marketing:</strong> Analyzing customer behavior to offer personalized recommendations, optimize inventory, and create impactful marketing campaigns.</li>
      <li class="application-item"><strong>Transportation:</strong> Data powers companies like Uber and Lyft to predict demand, optimize routes, and reduce costs.</li>
    </ul>
  </div>
  <div class="job-salary">
    <h3 class="salary-heading">Salary and Benefits:</h3>
    <ul class="salary-list">
      <li class="salary-item">Salary range: $70,000 to $85,000 per year.</li>
      <li class="salary-item">4 weeks of paid vacation, with additional PTO options available.</li>
      <li class="salary-item">Comprehensive health, vision, and dental insurance.</li>
      <li class="salary-item">401k retirement plan with company match.</li>
      <li class="salary-item">Annual budget for professional development and certifications.</li>
      <li class="salary-item">Flexible work environment (remote or hybrid options available).</li>
    </ul>
  </div>
</section>
                    <button type="button" onclick="closePopup(2)">Close</button>
                </div>
        </div>
        <div class="container2">
        <div class="front-end list">
        <h3 class="name">Front-End Developer</h3>
        <img class="picture" src="styles/images/front-end.jpeg">
        <div class="content">
                    <p>SFC's front-end development focuses on delivering a seamless and visually appealing user experience. Using the latest web technologies like HTML, CSS, and JavaScript, we ensure that our digital platforms are responsive, intuitive, and interactive.</p>
        <button type="submit" class="btn" onclick="openPopup(3)">Read more</button>
        </div>
        </div>
                <div class="popup" id="popup3">
                <h2>Front-End Development</h2>
        <h2>At SFC, we offer competitive salaries and comprehensive benefits to attract top front-end development talent. Our goal is to provide a supportive and rewarding work environment where developers can thrive and innovate.</h2>
        <h2>Offerings:</h2>
    <ul>
        <li><strong>Salary:</strong> Competitive, based on experience and skill level (Exact range provided during the hiring process).</li>
        <li><strong>Bonuses:</strong> Performance-based incentives and annual bonuses.</li>
        <li><strong>Health Benefits:</strong> Comprehensive medical, dental, and vision coverage.</li>
        <li><strong>Flexible Work:</strong> Hybrid or remote work options, depending on the role.</li>
        <li><strong>Career Growth:</strong> Opportunities for professional development, training programs, and certifications.</li>
        <li><strong>Paid Leave:</strong> Generous vacation days, sick leave, and paid holidays.</li>
        <li><strong>Work Environment:</strong> Collaborative culture with modern tools and technologies.</li>
    </ul>

    <h2>Requirements:</h2>
    <ul>
        <li><strong>Experience:</strong> 1-5+ years in front-end development (React, Vue, or Angular preferred).</li>
        <li><strong>Skills:</strong> Proficiency in HTML, CSS, JavaScript, and responsive design.</li>
        <li><strong>Problem-Solving:</strong> Ability to debug, optimize, and enhance UI/UX experiences.</li>
        <li><strong>Collaboration:</strong> Strong communication skills and teamwork mindset.</li>
        <li><strong>Portfolio:</strong> A solid portfolio showcasing front-end projects and expertise.</li>
    </ul>

    <p>At SFC, we value innovation, creativity, and technical excellence, offering a dynamic space for developers to grow and make an impact.</p>            
        <button type="button" onclick="closePopup(3)">Close</button>
                </div>
                <div class="data-egineer list">
        <h3 class="name">Data Engineering</h3>
        <img class="picture" src="styles/images/data-engineer.jpg">
        <div class="content">
                    <p>At SFC Company, focuses on designing, building, and maintaining data pipelines and infrastructure. Requires expertise in SQL, Python, cloud platforms (AWS, GCP), and big data technologies like Hadoop or Spark</p>
        <button type="submit" class="btn" onclick="openPopup(4)">Read more</button>
        </div>
                <div class="popup" id="popup4">
                    <h2>At SFC Company, we believe data holds the power to drive innovation and create lasting impact across industries such as healthcare, finance, and retail. 
                        Our team of data scientists, engineers, and business strategists work together to transform complex data into meaningful insights. 
                        As an entry-level Data Scientist, you will analyze vast datasets to uncover patterns and trends, enabling clients to make informed decisions. 
                        This role is ideal for those with a passion for data exploration, strong analytical skills, and the ability to turn numbers into valuable business solutions. 
                        Responsibilities include collecting and preparing data from various sources, cleaning and structuring it for analysis, and leveraging statistical and machine learning techniques to build predictive models using tools like Python, R, or SQL. You will also create visual dashboards with tools such as Tableau or Power BI and present findings to stakeholders effectively. 
                        Collaboration with cross-functional teams is essential to identifying business challenges and implementing data-driven solutions, while staying updated on advancements in AI and machine learning.</h2>
                        <h3>Offerings:</h3>
    <ul>
        <li><strong>Salary:</strong> Competitive and performance-based.</li>
        <li><strong>Bonuses:</strong> Incentives for key contributions.</li>
        <li><strong>Health Benefits:</strong> Extensive health and wellness plans.</li>
        <li><strong>Remote Work:</strong> Flexible work environment.</li>
        <li><strong>Career Growth:</strong> Learning and certification support.</li>
        <li><strong>Paid Leave:</strong> PTO and company-wide holidays.</li>
    </ul>
    <h3>Requirements:</h3>
    <ul>
        <li><strong>Experience:</strong> 3+ years in data engineering.</li>
        <li><strong>Skills:</strong> Proficiency in Python, SQL, and Spark.</li>
        <li><strong>ETL & Big Data:</strong> Experience with ETL tools, Hadoop, or Kafka.</li>
        <li><strong>Cloud Platforms:</strong> Knowledge of AWS, GCP, or Azure.</li>
    </ul>
                    <button type="button" onclick="closePopup(4)">Close</button>
                </div>
                </div>
                <div class="automation list">
        <h3 class="name">Automation engineer</h3>
        <img class="picture" src="styles/images/Automation.jpg">
        <div class="content">
                    <p>At SFC Company, we develops and maintains automated testing frameworks to ensure software quality. Requires knowledge of Selenium, Java, Python, and CI/CD tools for seamless deployment and testing.</p>
        <button type="submit" class="btn" onclick="openPopup(5)">Read more</button>
        </div>
                <div class="popup" id="popup5">
                    <h2>At SFC Company, we believe data holds the power to drive innovation and create lasting impact across industries such as healthcare, finance, and retail. 
                        Our team of data scientists, engineers, and business strategists work together to transform complex data into meaningful insights. 
                        As an entry-level Data Scientist, you will analyze vast datasets to uncover patterns and trends, enabling clients to make informed decisions. 
                        This role is ideal for those with a passion for data exploration, strong analytical skills, and the ability to turn numbers into valuable business solutions. 
                        Responsibilities include collecting and preparing data from various sources, cleaning and structuring it for analysis, and leveraging statistical and machine learning techniques to build predictive models using tools like Python, R, or SQL. You will also create visual dashboards with tools such as Tableau or Power BI and present findings to stakeholders effectively. 
                        Collaboration with cross-functional teams is essential to identifying business challenges and implementing data-driven solutions, while staying updated on advancements in AI and machine learning.</h2>

                        <h3>Offerings:</h3>
    <ul>
        <li><strong>Salary:</strong> Competitive based on experience.</li>
        <li><strong>Bonuses:</strong> Performance-based incentives.</li>
        <li><strong>Health Benefits:</strong> Full medical, dental, and vision plans.</li>
        <li><strong>Remote Work:</strong> Hybrid work options.</li>
        <li><strong>Career Growth:</strong> Professional training and skill enhancement.</li>
        <li><strong>Paid Leave:</strong> PTO and personal days.</li>
    </ul>
    <h3>Requirements:</h3>
    <ul>
        <li><strong>Experience:</strong> 2+ years in automation engineering.</li>
        <li><strong>Skills:</strong> Selenium, Python, Java, or C# for automation.</li>
        <li><strong>Testing Tools:</strong> Experience with CI/CD pipelines.</li>
        <li><strong>Problem-Solving:</strong> Debugging and test automation expertise.</li>
    </ul>
                    <button type="button" onclick="closePopup(5)">Close</button>
                </div>
        </div>
        </div>
        <footer>
        <div class="footer">&#169; 2025 SFC, All rights reserved.</div>
        <div class="contact">Contact Us: example@gmail.com</div>
        </footer>
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