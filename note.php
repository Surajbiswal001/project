<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
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
        .container {
            padding: 15px 9%;
            padding-bottom: 100px;
        }

        .container .heading {
            text-align: center;
            padding-bottom: 15px;
            color: #fff;
            text-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            font-size: 50px;
        }

        .box-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;

        }

        .container .box-container .box {
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            border-radius: 5px;
            background: #ffffff;
            text-align: center;
            padding: 30px 20px;
            border: 1px solid #f0ad4e;
        }

        .container .box-container .box img {
            height: 80px;
        }

        .container .box-container .box h3 {
            color: #444;
            font-size: 22px;
            padding: 10px 0;
        }

        .container .box-container .box p {
            color: #777;
            font-size: 15px;
            line-height: 1.8;
        }

        .container .box-container .box .btn {
            margin-top: 10px;
            display: inline-block;
            background: #333;
            color: #fff;
            font-size: 17px;
            border-radius: 5px;
            padding: 8px 25px;
        }

        .container .box-container .box .btn:hover {
            letter-spacing: 1px;
        }

        .container .box-container .box:hover {
            box-shadow: 0 10px 15px rgba(0, 0, 0, .3);
            transform: scale(1.03);
        }

        @media (max-width:768px) {
            .container {
                padding: 20px;
            }
        }

        semester {
            border: 1px solid #f0a500;
            padding: 20px;
            margin: 20px;
            font-family: Arial, sans-serif;
        }

        .semester h2 {
            text-align: left;
            font-size: 24px;
            color: #f0a500;
            margin-bottom: 15px;
        }

        .course {
            border-bottom: 1px solid #1b0808;
            padding: 10px 0;
            text-align: left
        }

        .course:last-child {
            border-bottom: #f0a500;
        }

        .course-name {
            font-size: 16px;
            color: #333;
            text-align: left;
            text-decoration: none;
        }

        .course-name:hover {
            color: #f0a500;
            cursor: pointer;
        }

        .toggle {
            background-color: #fff;
            color: #f0ad4e;
            border: 1px solid #f0ad4e;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            line-height: 28px;
        }

        .toggle:hover {
            background-color: #f0ad4e;
            color: #fff;
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
                        <a href="#">FACULTY</a>
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
    <div class="container">
        <h1 class="heading">Our Notes</h1>
        <div class="box-container">
            <div class="box">
                <div class="semester">
                    <h2>1st Semester</h2>
                    <div class="course">
                        <a class="course-name" href="notes/COMMUNICATION.pdf">Communicative English</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/engineeringmathematics1.pdf">Engineering Mathematics-1</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/CHEMISTRY.pdf">Engineering Chemistry</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/Mechanics.pdf">Engineering Mechanics</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="semester">
                    <h2>2nd Semester</h2>
                    <div class="course">
                        <a class="course-name" href="notes/COMPUETRAPPLICATION.pdf">Computer Application</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/be and bee.pdf">Basic Electrical & Electronics</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/Engineering-Math2.pdf">Engineering Mathematics-2</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/physics.pdf">Engineering physics</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="semester">
                    <h2>3rd Semester</h2>
                    <div class="course">
                        <a class="course-name" href="notes/csa.pdf">Computer System Architecture</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/DATA STRUCTURE.pdf">Data Structure</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/DIGITAL ELECTRONIC.pdf">Digital Electronic</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/EVS.pdf">Environmental Studies</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/Mechanics.pdf">Object Oriented Methodology</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="semester">
                    <h2>4th Semester</h2>
                    <div class="course">
                        <a class="course-name" href="notes/dccn.pdf">Data Communication & Computer Network</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/DBMS.pdf">Database Management System</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/mppmc.pdf">Microprocessor & Microcontrollery</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/OS.pdf">Operating System</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="semester">
                    <h2>5th Semester</h2>
                    <div class="course">
                        <a class="course-name" href="notes/CHM.pdf">Computer Hardware & Maintenance</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/EM.pdf">Entrepreneurship and Management & Smart Technology</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/IWT-1.pdf">Internet & Web Technology</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/MC-1.pdf">Mobile Computing</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/software-engineering-notes-compressed-5-Copy.pdf">Software
                            Engineering</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="semester">
                    <h2>6th Semester</h2>
                    <div class="course">
                        <a class="course-name" href="notes/cc.pdf">Cloud Computing</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/cns.pdf">Cryptography & Network Security</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/iot.pdf">Internet of Things</a>
                    </div>
                    <div class="course">
                        <a class="course-name" href="notes/e commerce.pdf">E-Commerce</a>

                    </div>
                </div>
            </div>
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
                        <li><a href="https://scholarship.odisha.gov.in/website/home" target="_blank">State
                                Scholarship
                                Portal</a></li>
                        <li><a href="https://www.northsouth.org/india-scholarships/" target="_blank">NSF
                                Scholarship</a>
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