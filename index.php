
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVD Siddhartha Law College</title>
       <!-- Link to external Google Fonts stylesheet -->
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
       <!-- Link to external CSS stylesheet -->
       <link rel="stylesheet" href="home.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php
        include('includes/header.php');
    ?>
    
    <main>
        <!-- Hero section -->
        <section class="hero">
            
            <div class="slider">
                <div class="slides">
                    <div class="slide" style="background-image: url('Images/slider1.jpg');"></div>
                    <div class="slide" style="background-image: url('Images/slider2.jpg');"></div>
                    <div class="slide" style="background-image: url('Images/slider3.jpg');"></div>
                    <div class="slide" style="background-image: url('Images/slider1.jpg');"></div> <!-- Duplicate first slide -->
                </div>
            </div>

            <div class="container">
                <h1>SVD Siddhartha Law College</h1>
                <h5>Affiliated to Krishna University, Recognised by Govt. of A.P. & Bar Council of India</h5>
                <p>Empowering future legal professionals since 1974</p>
                <a href="#about" class="btn btn-primary">Discover Our Legacy</a>
            </div>
        </section>
        
        <!-- About section -->
        <section id="about" class="fade-in">
            <div class="container_1">
                <h2>About SVD Siddhartha Law College</h2>            
                    <div class="main-content">
                        <p>Siddhartha Law College has been a premier institution for legal education since 1974. Renowned for its academic excellence, the college is recognized by the Bar Council of India and Andhra Pradesh State Council of Higher Education.</p>                    
                    </div>
                    <div class="habout-content">
                        <div class="sub-content">
                            <h3>Our Legacy</h3>
                                <p>Founded by the Siddhartha Academy of General & Technical Education, Siddhartha Law College has a rich history of excellence. In 1990, the college was renamed in honor of Smt. Velagapudi Durgamba. With permanent recognition from the Bar Council of India and Andhra Pradesh State Council of Higher Education, we have consistently been ranked among the top private law colleges in the region.</p>
                                <h3>Innovative Teaching Methods</h3>
                                <p>We believe in the power of practical education. Through moot court sessions, case studies, legal clinics, and internships, our students gain hands-on experience that is crucial for success in the legal field.</p>
                                <h3>Academic Excellence</h3>
                            <p>Our commitment to academic excellence is evident in our faculty, which includes experienced legal scholars, practitioners, and experts. Our curriculum integrates real-world scenarios and contemporary legal issues, preparing students for the complexities of the legal profession.</p>                            
                        </div>
                        <div class="side-content">
                            <img src="Images/court2.jpg" alt="SVD Siddhartha Law College Campus">                        
                        </div>
                    </div>
            </div>
        </section>

        <!-- New section for Affiliations & Credentials and College Convenor Committee -->
        <section id="affiliations-and-committee" class="fade-in">
            <div class="container_1">
                <h2>Affiliations, Credentials & College Convenor Committee</h2>
                <div class="grid">
                    <div class="card">
                        <h3>Affiliations & Credentials</h3>
                        <ul class="affiliations-list">
                            <li>
                                <i class="fas fa-balance-scale"></i>
                                <span><strong>B.C.I:</strong> Affiliated and Approved by Bar Council of India to conduct 3 year and 5 year LL.B Programmes</span>
                            </li>
                            <li>
                                <i class="fas fa-university"></i>
                                <span><strong>University:</strong> Affiliated by Krishna University, Machilipatnam, Andhra Pradesh.</span>
                            </li>
                            <li>
                                <i class="fas fa-certificate"></i>
                                <span><strong>ISO:</strong> Certified by I.S.O</span>
                            </li>
                            <li>
                                <i class="fas fa-award"></i>
                                <span><strong>UGC (2f):</strong> Obtained U.G.C recognition Under Section 2 (f) of the U.G.C Act</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <h3>College Convenor Committee</h3>
                        <ol>
                            <li><i class="fas fa-user-tie"></i>Sri Prabhas Parvathaneni, Convenor</li>
                            <li><i class="fas fa-user-tie"></i>Sri Vijaya Kumar Mummaneni</li>
                            <li><i class="fas fa-user-tie"></i>Sri Nagendra Prasad Veeramachaneni</li>
                            <li><i class="fas fa-user-tie"></i>Sri Suhakar Sureddy</li>
                            <li><i class="fas fa-user-tie"></i>Sri Ram Prasad V.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section id="gallery" class="fade-in">
            <h2>Infrastructure Gallery</h2>
            <div class="image-container">
                <div><img src="Images/Hostel.jpg">
                    <p>Hostel</p>
                </div>
                <div><img src="Images/library.jpg">
                    <p>Library</p>
                </div>
                <div><img src="Images/moot copy.jpg">
                    <p>Moot Court</p>
                </div>
            </div>
        </section>
        
        <!-- Courses section -->
        <section id="courses" class="fade-in">
            <div class="container">
                <h2>Courses Offered</h2>
                <div class="course-grid">
                    <div class="course-card" id="llb">
                        <h3>3-Year LL.B. Program</h3>
                        <p>Our flagship program designed for graduates from any discipline. This course provides comprehensive legal education and prepares students for various roles in the legal profession.</p>
                        <p><strong>Duration:</strong> 3 years</p>
                        <p><strong>Eligibility:</strong> Bachelor's degree in any discipline with minimum 45% marks</p>
                    </div>
                    <div class="course-card" id="ballb">
                        <h3>5-Year B.A. LL.B. (Hons.) Integrated Program</h3>
                        <p>An integrated program that combines the study of arts and law, providing a holistic approach to legal education right after 12th standard.</p>
                        <p><strong>Duration:</strong> 5 years</p>
                        <p><strong>Eligibility:</strong> 10+2 with minimum 45% marks</p>
                    </div>
                    <div class="course-card" id="llm">
                        <h3>LL.M. (Master of Laws)</h3>
                        <p>Advanced legal studies for law graduates who wish to specialize in specific areas of law or pursue academic and research careers.</p>
                        <p><strong>Duration:</strong> 1 year</p>
                        <p><strong>Eligibility:</strong> LL.B. degree with minimum 55% marks</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Admissions section -->
        <section id="admissions" class="fade-in">
            <div class="container">
                <h2>Admissions</h2>
                <div class="grid">
                    <div class="card" id="eligibility">
                        <h3>Eligibility & Procedure</h3>
                        <ul>
                            <li>Minimum 45% aggregate in qualifying examination</li>
                            <li>LSAT-India score for 5-year integrated program</li>
                            <li>Entrance exam conducted by Krishna University for 3-year LL.B</li>
                        </ul>
                    </div>
                    <div class="card" id="dates">
                        <h3>Important Dates</h3>
                        <p>Application Start Date: June 1, 2023</p>
                        <p>Application Deadline: July 31, 2023</p>
                        <p>Entrance Exam Date: August 15, 2023</p>
                    </div>
                </div>
            </div>
        </section>

         <!-- Career Counselling and Placements section -->
<section id="career-counselling" class="career-counselling fade-in">
    <div class="container">
        <h2>Career Counselling and Placements</h2>
        <div class="career-grid">
            <div class="career-card info-card">
                <div class="card-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Our Approach</h3>
                <p>We conduct regular career counselling programmes by inviting senior and expert Legal Professionals. This enables our students to explore multiple career opportunities in the field of Law.</p>
            </div>
            <div class="career-card placement-card">
                <div class="card-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Placement Cell</h3>
                <p>Our dedicated placement cell actively collaborates with Legal Firms and Companies to provide excellent placement opportunities for our students.</p>
            </div>
            <div class="career-card committee-card">
                <div class="card-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Committee Members</h3>
                <ul>
                    <li><i class="fas fa-user-tie"></i> Dr. B. Srinivasa Rao, Associate Professor</li>
                    <li><i class="fas fa-user-tie"></i> Sri B. Krishna Prasad, Assistant Professor</li>
                    <li><i class="fas fa-user-tie"></i> Dr. Ch. Sreenivasa Rao, Associate Professor</li>
                    <li><i class="fas fa-user-tie"></i> Mr. J. Kiran, Assistant Professor</li>
                </ul>
            </div>
        </div>
    </div>
</section>
        
        <!-- Contact section -->
                <section id="contact" class="fade-in">
            <div class="container">
                <h2>Contact Us</h2>
                <div class="grid">
                    <div class="card">
                        <h3>Get in Touch</h3>
                        <p><i class="fas fa-phone"></i> +91 8662582592</p>
                        <p><i class="fas fa-envelope"></i>  svdsiddharthalawcollege@gmail.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> Kanuru, Vijayawada, Andhra Pradesh - 520007</p>
                        
                    </div>
                    <div class="card">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.8611570878857!2d80.68939537519039!3d16.482566584258418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35fb3d15555553%3A0x6d32ae8baeb86ac2!2sSmt.Velagapudi%20Durgamba%20Siddhartha%20Law%20College!5e0!3m2!1sen!2sin!4v1724217224709!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
				    
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>