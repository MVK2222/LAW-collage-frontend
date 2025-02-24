    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVD Siddhartha Law College</title>
       <!-- Link to external Google Fonts stylesheet -->
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
       <!-- Link to external CSS stylesheet -->
       <link rel="icon" href="Images/favicon.ico" type="image/x-icon">
           <link rel="stylesheet" href="home.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
    <header>
        <div class="container">
            <div class="header-content">
                <a href="index.php" class="logo">
                    <img src="Images/logo.png" alt="SVDSLC Logo">
                    <!-- <span>SVDSLC</span> -->
                </a>
                <nav>
                    <ul>
                        <li>
                            <a href="Index.php">Home</a>
                        </li>

                        <li>
                            <a href="#profile">Profile</a>
                            <div class="dropdown-content">
                                <h3>About the college</h3>
                                <a href="vision.php">Vision</a>
                                <a href="mission.php">Mission</a>
                                <a href="about_academy.php">About Academy</a>
                                <a href="principals-message.php">Principal's Message</a>
                                <a href="#Governing_Body">Governing Body</a>
                                <h3>Affiliations & credentials</h3>
                                <a href="#BCI">B.C.I</a>
                                <a href="#University">University</a>
                                <a href="#ISO">ISO</a>
                                <a href="#UGC">U.G.C</a>
                            </div>
                        </li>
                        <li>
                            <a href="#academics">Academic Programmes</a>
                            <div class="dropdown-content">
                                <h3>U.G & P.G</h3>
                                <a href="llb-3yrs.php"> 3 years programme</a>
                                <a href="2year.php">P.G. LL.M 2 YEAR</a>
                                <a href="5year.php">U.G. 5 YEAR B.A.LL.B</a>
                                <a href="about-pgm.php">About the programme</a>
                                <a href="eligilibity.php">Eligibility</a>
                                <a href="#Course-Objectives">Course Objectives</a>
                                <a href="curriculum.php">Curriculum</a>
                            </div>
                        </li>
                        <li>
                            <a href="#Infrastructure">Infrastructure</a>
                            <div class="dropdown-content">
                                <a href="#class-rooms">Class Rooms</a>
                                <a href="library.php">Library & Resources</a>
                                <a href="mootcourt.php">Moot Court & Seminar Spaces</a>
                                <a href="sports&hostel_facilities.php">Hostels</a>
                                <a href="#playgrounds">Playgrounds</a>
                                <a href="#moot-court-hall">Moot court hall</a>
                                <a href="#admin-office">Admin Office</a>
                                <a href="#canteen">Canteen</a>
                            </div>
                        </li>

                        <li>

                            <a href="faculty.php">Faculty</a>
                            <!--<div class="dropdown-content">
                                <a href="#faculty-profiles">Faculty profiles</a>
                            </div> -->   
                       
                        </li>

                        <li>

                            <a href="#placements">Research & Publications</a>
                            <div class="dropdown-content">
                                <a href="#projects">Socio Legal Projects</a>
                                <a href="#dissertations">Dissertations</a>
                                <a href="research_publications.php">Research Publications</a>
                            </div>    
                       
                        </li>

                        <li>

                            <a href="#student-corner">Student Corner</a>
                            <div class="dropdown-content">
                                <a href="#student-charter">Student Charter</a>
                                <a href="anti_ragging_cell.php">Anti Ragging Cell</a>
                                <a href="grievances_cell.php">Grieving Cell</a>
                                <a href="sexual_harassment_prevention_cell.php">Sexual Harassment Prevention Cell</a>
                                <a href="#achievements">Achievements</a>
                                <a href="support_services.php">Support Services</a>
                                <a href="#alumni">Alumni</a>
                                <a href="extension_activites.php">Extension Activities</a>
                            </div>    
                       
                        </li>

                        <li><a href="#contact">News & Events </a></li>

                        <li>

                            <a href="#iqac">IQAC</a>
                            <div class="dropdown-content">
                                <a href="#faculty-profiles">IQAC Cell</a>
                                <a href="#minutes">Minutes</a>
                                <a href="#quality">Quality Initiatives</a>
                                <a href="#quality">Feedback Mechanism</a>
                            </div>    
                       
                        </li>
                        

                        
                        <li><a href="contact.php">Contact </a></li>
                    </ul> 
                </nav>
                <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </header>
    <script>
                // Hamburger menu functionality
        const hamburger = document.querySelector('.hamburger');
        const nav = document.querySelector('nav ul');
        
        hamburger.addEventListener('click', function() {
            nav.classList.toggle('show');
        });
        
        // Dropdown functionality for mobile
        const dropdownLinks = document.querySelectorAll('nav ul li');
        
        dropdownLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                if (window.innerWidth <= 768) {
                    const dropdown = link.querySelector('.dropdown-content');
                    if (dropdown) {
                        e.preventDefault(); // Prevent default anchor click behavior
                        dropdown.classList.toggle('show'); // Toggle visibility
                    }
                }
            });
        });

        // Toggle the first-level dropdown (Profile)
        dropdownLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                if (window.innerWidth <= 768) {
                    const dropdown = link.querySelector('.dropdown-content');
                    if (dropdown) {
                        e.preventDefault();
                        link.classList.toggle('active');
                    }
                }
            });
        });
        
        // Toggle second-level dropdown (About the college, Affiliations & credentials)
        const dropdownHeaders = document.querySelectorAll('.dropdown-header');
        
        dropdownHeaders.forEach(header => {
            header.addEventListener('click', (e) => {
                const subcontent = header.nextElementSibling;
                if (subcontent) {
                    subcontent.classList.toggle('show');
                }
            });
        });
    </script>
