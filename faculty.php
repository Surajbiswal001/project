<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        /* Reset */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #00aaff, #aa00ff);

            color: #121212;
            width: 100%;
            height: 100%;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Header Styles */
        header {
            width: 100%;
            transition: background 0.3s ease;
            /*position: sticky; */
            top: 0;
            border-bottom: white solid 0.2rem;
        }

        .title {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 12vh;
            padding: 30px 0;
            background-color: black;
            color: #f5f5f5;
        }

        .name {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-family: serif;
        }

        p {
            font-family: "Century Gothic", sans-serif;
            letter-spacing: 2px;
            margin-top: 8px;
        }

        /* Navigation Styles */
        .nav-bar {
            background: linear-gradient(135deg, #ff0080, #ff3d00);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger span {
            height: 3px;
            width: 25px;
            background: #fff;
            margin: 4px;
            border-radius: 2px;
            transition: background 0.3s ease;
        }

        .nav-bar .content {
            position: relative;
            margin-left: 30px;
            padding-right: 10px;
        }

        .nav-bar a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1em;
            padding: 10px 0;
            transition: color 0.3s ease;
            position: relative;
            font-family: "Poppins", serif;
            font-weight: 500;
        }

        .nav-bar a:hover {
            color: gold;
        }

        .nav-bar a::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background: #00f7ff;
            bottom: -5px;
            left: 0;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .content-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #3a3a3a;
            min-width: 160px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            border-radius: 6px;
            z-index: 1001;
            opacity: 0;
            transition: opacity 0.3s ease, visibility 0.3s;
        }

        .content:hover .content-dropdown {
            display: block;
            opacity: 1;
            visibility: visible;
        }

        .content-dropdown a {
            padding: 10px 20px;
            display: block;
            color: #d1d1d1;
            transition: background-color 0.3s ease;
        }

        .content-dropdown a:hover {
            background: #000099;
            color: #ffffff;
        }

        /*end of header*/
        .faculty {
            text-align: center;
            margin: 2.5rem;
            color: white;
        }

        .profile-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
            margin: 3.5rem;
        }

        /* Profile Block Styling */
        .profile {
            width: 300px;
            height: 475px;
           
            background-color: #7898bd;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .profile-image {
            width: 100%;
            height: 250px;
            background-size: cover;
            background-position: center;
            border-radius: 8px;
        }

        .profile-content {
            text-align: center;
            padding: 15px;
        }

        .profile-content h3 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
        }

        .profile-content p.role {
            font-size: 18px;
            color: #095ab1;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .profile-content p.description {
            font-size: 14px;
            color: #fdfdfd;
            margin-bottom: 15px;
        }

        .profile-footer {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .profile-footer a {
            text-decoration: none;
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        .profile-footer a:hover {
            background-color: #0056b3;
        }

        /* footer Styles */
        footer {
            background: linear-gradient(10deg, #093085, rgb(0, 0, 0));
            height: 28rem;
            color: white;
            border-top: 0.15rem white solid;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            padding: 2rem;
            gap: 2rem;
        }

        .important a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
            display: block;
            padding: 0.5rem;
            font-family: sans-serif;
            font-size: 0.85rem;
            font-weight: bold;
        }

        .map {
            width: 30%;
            height: 18rem;
            background-image: url('map.jpg');
            background-size: cover;
            background-position: center;

        }

        .map iframe {
            height: 100%;
            width: 100%;
        }

        .copywrite {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            font-family: sans-serif;
        }

        .getintouch p {
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .getintouch h2 {
            margin-bottom: 1.2rem;
        }

        .important h2 {
            margin-bottom: 0.8rem;
        }

        .important a:hover {
            color: gold;

        }
    </style>
</head>

<body>
    <header>
        <div class="header">
            <div class="title">
                <a href="index.php">
                    <img src="img/logo.png" alt="cse-logo" height="100px" width="100px" margin="10px">
                </a>
                <div class="name">
                    <h1>COMPUTER SCIENCE & ENGINEERING</h1>
                    <p>Government Polytechnic Dhenkanal</p>
                </div>
                <a href="https://gpdhenkanal.org/" target="_blank">
                    <img src="img/GpdLogo.png" alt="GPD logo" width="115px">
                </a>
            </div>
            <!-- Hamburger Icon for Mobile -->
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav>
                <div class="nav-bar">

                    <div class="content">
                        <a href="index.php">HOME</a>
                    </div>
                    <div class="content">
                        <a href="#">STUDENT</a>
                        <div class="content-dropdown">
                            <a href="1styear.php">1st Year</a>
                            <a href="2ndyear.php">2nd Year</a>
                            <a href="3rdyear.php">3rd Year</a>
                        </div>
                    </div>
                    <div class="content">
                        <a href="faculty.php">FACULTY</a>
                    </div>
                    <div class="content">
                        <a href="#">COURSE</a>
                        <div class="content-dropdown">
                            <a href="note.php">Note</a>
                            <a href="syllabus.php">syllabus</a>
                            <a href="3rdyear.php">Academic Calendar</a>
                        </div>
                    </div>
                    <div class="content">
                        <a href="result.php">RESULT</a>
                    </div>
                    <div class="content">
                        <a href="#">INFORMTION BROWSER</a>
                        <div class="content-dropdown">
                            <a href="1styear.php">Admission</a>
                            <a href="2ndyear.php">Fee Structure</a>
                            <a href="3rdyear.php">Exam Information </a>
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">PASS OUT</a>
                    </div>
                    <div class="content">
                        <a href="#">CONTACT US</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <h1 class="faculty">Meet Our Faculty</h1>
    <div class="profile-container">

    <div class="profile" id="pre">
            <div class="profile-image" style="background-image: url('img/34.jpeg');"></div>
            <div class="profile-content">
                <h3>Mr. Ashok Kumar Rout</h3>
                <p class="role">Principal</p>
                
                <div class="profile-footer">
                    
                </div>
            </div>
        </div>
        <div class="profile" id="hod">
            <div class="profile-image" style="background-image: url('img/35.jpeg');"></div>
            <div class="profile-content">
                <h3>Mr. Girija Prasad Swain</h3>
                <p class="role">Head of Computer Science Department</p> <br>
                <p class="description">Email id: <a href="mailto:girija5feb@gmail.com" style = "text-decoration:none; color:white;">girija5feb@gmail.com</a></p>
                <p class="description">Phone No: 9861427995</p>
                <div class="profile-footer">
                    
                </div>
            </div>
        </div>

        <div class="profile" id="lec">
            <div class="profile-image" style="background-image: url('img/38.png');"></div>
            <div class="profile-content">
                <h3>Mr. Nalinikanta Mohapatra</h3>
                <p class="role">Senior Lecturer</p>
                <p class="description">Email id: <a href="mailto:nkm_wpd@rediffmail.com" style = "text-decoration:none; color:white;">nkm_wpd@rediffmail.com</a></p>
                <p class="description">Phone No: 9437156622</p>
                <div class="profile-footer">    
                </div>
            </div>
        </div>

        <div class="profile">
            <div class="profile-image" style="background-image: url('img/principal.jpg');"></div>
            <div class="profile-content">
                <h3>Mrs. Nushrat Bari</h3>
                <p class="role">Lecture</p>
                <p class="description">Email id: <a href="mailto:nushratbari999@gmail.com" style = "text-decoration:none; color:white;">nushratbari999@gmail.com</a></p>
                <p class="description">Phone No: 8249690097</p>
                 <div class="profile-footer">    
                </div>
            </div>
        </div>
        <div class="profile">
            <div class="profile-image" style="background-image: url('img/principal.jpg');"></div>
            <div class="profile-content">
                <h3>Mrs. Swarnalata Sahoo</h3>
                <p class="role">Lecture</p>
                <p class="description">Email id: <a href="mailto:swarnalata.sahoo96@gmail.com" style = "text-decoration:none; color:white;">swarnalata.sahoo96@gmail.com</a></p>
                <p class="description">Phone No: 9938249039</p>
                 <div class="profile-footer">
                    
                </div>
            </div>
        </div>
        <div class="profile">
            <div class="profile-image" style="background-image: url('img/principal.jpg');"></div>
            <div class="profile-content">
                <h3>Mrs. Priyanka Maharana</h3>
                <p class="role">Lecture</p>
                <p class="description">Email id: <a href="mailto:pinky.vrcx@gmail.com" style = "text-decoration:none; color:white;">pinky.vrcx@gmail.com</a></p>
                <p class="description">Phone No: 8763804428</p>
                 <div class="profile-footer">
                    
                </div>
            </div>
        </div>
        <div class="profile">
            <div class="profile-image" style="background-image: url('img/principal.jpg');"></div>
            <div class="profile-content">
                <h3>Mrs.  Jashaswini Satapathy </h3>
                <p class="role">Lecture</p>
                <p class="description">Email id: <a href="mailto:smruti6371@gmail.com" style = "text-decoration:none; color:white;">smruti6371@gmail.com</a></p>
                <p class="description">Phone No: 7327088235</p>
                 <div class="profile-footer">
                    
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="important">
                <h2 style="font-family: Century Gothic, sans-serif;">Important Links</h2>
                <div class="footer-links">
                    <ul>
                        <li><a href="https://gpdhenkanal.org/" target="_blank">Gp Dhenkanal</a></li>
                        <li><a href="https://sctevt.odisha.gov.in/" target="_blank">SCTE&VT</a></li>
                        <li><a href="https://www.aicte-india.org/" target="_blank">AICTE</a></li>
                        <li><a href="https://ojee.nic.in/" target="_blank">OJEE</a></li>
                        <li><a href="https://www.netacad.com/" target="_blank">CISCO</a></li>
                        <li><a href="https://scholarship.odisha.gov.in/website/home" target="_blank">State Scholarship
                                Portal</a></li>
                        <li><a href="https://www.northsouth.org/india-scholarships/" target="_blank">NSF Scholarship</a>
                        </li>
                        <li><a href="https://www.samsodisha.gov.in/" target="_blank">SAMS</a></li>
                    </ul>
                </div>
            </div>
            <div class="getintouch">
                <h2 style="font-family: Century Gothic, sans-serif;">Get In Touch</h2>
                <p>Contact Us: 123-456-7890</p>
                <p>Email: info@example.com</p>
                <p>Address: 123 Main St, City, State, ZIP</p>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4594.22067294098!2d85.59209537596277!3d20.640435901001556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a18e01bb30b066f%3A0x609a3e43254ae9a5!2sGovt.%20Polytechnic.%20Dhenkanal%20College!5e1!3m2!1sen!2sin!4v1738672071663!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="copywrite">
            <p>© 2025 [CSE Govt.Polytechnic Dhenkanal]. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>