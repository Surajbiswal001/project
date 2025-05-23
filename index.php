<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE gpdhenkanal</title>
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

        .imgslider {
            width: 100%;
            height: 630px;
            
            background-size: cover;
            background-position: center;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            animation: changeImage 20s infinite;
        }

        @keyframes changeImage {
            0% {
                background-image: url('img/29.jpg');
            }
            10% {
                background-image: url('img/30.jpg');
            }

            20% {
                background-image: url('img/15.jpeg');
            }
            30% {
                background-image: url('img/8.jpeg');
            }
            40% {
                background-image: url('img/32.png'); 
            }
            60% {
                background-image: url('img/20.jpeg');
            }
            70% {
                background-image: url('img/11.jpeg');
            }
            80%{
                background-image: url('img/25.jpeg');
            }
            100% {
                background-image: url('img/13.jpeg');
            }
        }

        #a {
            background: linear-gradient(10deg, #004ff9, rgb(0, 0, 0));
            height: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .our {
            width: 100%;
            padding: 5rem;
            display: flex;
            gap: 5rem;
        }

        .our .img {
            width: 30.5rem;
            height: 30.3rem;
            /*border-radius: 50%;*/
            box-shadow: 0px -1px 18px 10px hsl(0deg 0% 0% / 0.41);
            background-color: white;
        }

        .img img {
            width: 30rem;
            height: 30rem;
            object-fit: cover;
        }

        .card-container {
            width: 60rem;

        }

        .mission {
            width: 100%;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: left;
            background-color: #b3e0ff;
            margin-bottom: 3rem;
        }

        .mission:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .mission h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .vission {
            width: 100%;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: left;
            background-color: #c2f0c2;
            font-family: "Century Gothic", sans-serif;
        }

        .vission h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .vission:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .img:hover {
            animation: animate 1.5s ease-in-out 1;
        }

        @keyframes animate {
            0% {
                scale: 1;
            }

            50% {
                scale: 1.05;
            }

            100% {
                scale: 1;
            }
        }

        .vission ul li {
            padding: 0.3rem;
        }

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
            height: 500px;
            padding: 20px;
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

        .student-activity {
            font-family: 'Arial', sans-serif;

            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 79vh;
            padding: 20px;
            width: 100%;
        }



        .student-activity p {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 30px;
            text-align: center;
        }

        /* Container for activities */
        .activities-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 20px;
        }

        /* Individual activity styling */
        .activity {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            width: 300px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            cursor: pointer;
            position: relative;
            backdrop-filter: blur(10px);
        }

        .activity:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.3);
        }

        .activity h3 {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .activity p {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .activity a {
            display: inline-block;
            background: linear-gradient(135deg, #ff4b5c, #ff9b2e);
            color: #fff;
            padding: 14px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .activity a:hover {
            background: linear-gradient(135deg, #ff9b2e, #ff4b5c);
            transform: scale(1.1);
        }

        ::-webkit-scrollbar {
            width: 10px;
            box-shadow: 0 0 10px linear-gradient(135deg, #3498db, #9b59b6);
        }



        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #00aaff, #aa00ff);
            border-radius: 12px;
            transition: all 0.3 ease;

        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #00aaff, #aa00ff);
        }

        img {
            vertical-align: middle;


        }

        .image-container {
            position: relative;
            width: 40rem;
            margin: auto;

        }

        .mySlides {
            display: none;
            box-shadow: 0px -1px 20px 8px hsl(0deg 0% 0% / 0.41);
            border-radius: 4%;
        }

        .cursor {
            cursor: pointer;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .caption-container {
            text-align: center;
            background: linear-gradient(10deg, #004ff9, rgb(0, 0, 0));
            ;
            padding: 2px 16px;
            color: white;
            height: 1.3rem;

            margin: 1rem;
        }


        .row:after {
            content: "";
            display: table;
            clear: both;
            margin-bottom: 10rem;
        }

        .column {
            float: left;
            width: 16.66%;
        }

        .demo {
            opacity: 0.6;

        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        .caption {
            margin-bottom: 1rem;
            text-align: center;
            margin-top: 0.2rem;

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
    <!-- Header Section -->
    <header>
        <div class="header">
            <div class="title">
                <a href="index.php">
                    <img src="img/logo.png" alt="cse-logo" height="100px" width="100px" margin="10px">
                </a>
                <div class="name">
                    <h1>DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING</h1>
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
                            <a href="academic.pdf">Academic Calendar</a>
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
                        <a href="contact.php">CONTACT US</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="imgslider"></div>
    

    <div id="a">
        <marquee fontstyle="bold" scrolldelay="100">
            <font size="4" face="serif">
                <font color="white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe illum facere
                    aperiam blanditiis. Praesentium dolorem voluptas tempore tenetur. Perspiciatis similique
                    earum molestias rerum.
        </marquee>
    </div>

    <div class="our">
        <div class="img">
            <img src="img/logo1.png" alt="logo">
        </div>
        <div class="card-container">
            <div class="mission">
                <h2>Our Vission</h2>
                <p>To be a centre of Excellence for transforming students into skilled computer professionals
                    through sustainable practice.</p>
            </div>
            <div class="vission">
                <h2>Our Mission</h2>
                <ul>
                    <li>To provide strong fundamental and Technical Skill for Computer Sc & Engineering through
                        effective teaching learning methodology.</li>
                    <li>To prepare students to meet the socio economic needs of the industry and Society.</li>
                    <li>To inculcate learning of the emerging technology to pursue higher studies leading to
                        lifelong learning.</li>
                </ul>
            </div>
        </div>
    </div>

    <h1 class="faculty">Meet Our Faculty</h1>

    <div class="profile-container">

        <div class="profile">
            <div class="profile-image" style="background-image: url('img/34.jpeg');"></div>
            <div class="profile-content">
                <h3>Mr. Ashok Kumar Rout</h3>
                <p class="role">Principal</p>
                
                <div class="profile-footer">
                    <a href="faculty.php#pre" style="margin-top:1.8rem;">View Profile</a>
                </div>
            </div>
        </div>


        <div class="profile">
            <div class="profile-image" style="background-image: url('img/12.jpeg');"></div>
            <div class="profile-content">
                <h3>Mr. Girija Prasad Swain</h3>
                <p class="role">Head of Computer Science Department</p>
               
                <div class="profile-footer">
                    <a href="faculty.php#hod" style="margin-top:11px;">View Profile</a>
                </div>
            </div>
        </div>


        <div class="profile">
            <div class="profile-image" style="background-image: url('img/37.png');"></div>
            <div class="profile-content">
                <h3>Mr. Nalinikanta Mohapatra</h3>
                <p class="role">Senior Lecturer</p>
              
                <div class="profile-footer">
                    <a href="faculty.php#lec" style="margin-top:1.8rem;">View Profile</a>
                </div>
            </div>
        </div>
    </div>
    <div class="student-activity">
        <div class="activities-container">
            <!-- Check Results Activity -->
            <div class="activity">
                <h3>Check Results</h3>
                <p>View your academic results for the latest semester.</p>
                <a href="result.php">View Results</a>
            </div>

            <!-- Biometrics Activity -->
            <div class="activity">
                <h3>Academic Clender</h3>
                <p>Download current academic celender.</p>
                <a href="academic.pdf">Download Celender</a>
            </div>

            <!-- Download Notes Activity -->
            <div class="activity">
                <h3>Download Notes</h3>
                <p>Download study materials and notes for your courses.</p>
                <a href="note.php">Download Notes</a>
            </div>
            <div class="activity">
                <h3>Download Syllabus</h3>
                <p>Download syllabus for your courses.</p>
                <a href="syllabus.php">Download syllabus</a>
            </div>
        </div>
    </div>

    <div class="all">
        <h2 style="text-align:center; margin:2rem; color: white;">Photo Gallery</h2>

        <div class="image-container">
            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="img/13.jpeg" style="width:100%; border-radius:4%;">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img src="img/20.jpeg" style="width:100%; border-radius:4%;">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img src="img/25.jpeg" style="width:100%; border-radius:4%;">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img src="img/7.jpeg" style="width:100%; border-radius:4%;">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img src="img/8.jpeg" style="width:100%; border-radius:4%;">
            </div>

            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <img src="img/17.jpeg" style="width:100%; border-radius:4%;">
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

            
                <p id="caption" class="caption" style="color:white; margin:0.9rem;"></p>
            

            <div class="row">
                <div class="column">
                    <img class="demo cursor" src="img/13.jpeg" style="width:100%" onclick="currentSlide(1)"
                        alt="CSE Class Room">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/20.jpeg" style="width:100%" onclick="currentSlide(2)"
                        alt="Annual Cultural function 2024">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/25.jpeg" style="width:100%" onclick="currentSlide(3)"
                        alt="Teacher's Day">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/7.jpeg" style="width:100%" onclick="currentSlide(4)"
                        alt="Batch 2022-25">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/8.jpeg" style="width:100%" onclick="currentSlide(5)"
                        alt="All Teachers">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/17.jpeg" style="width:100%" onclick="currentSlide(6)"
                        alt="Study Tour">
                </div>
            </div>
        </div>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
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
