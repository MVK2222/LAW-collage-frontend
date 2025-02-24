<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - SVD Siddhartha Law College</title>
        <!-- Link to external Google Fonts stylesheet -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <!-- Link to external CSS stylesheet -->
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/about-image.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            text-align: center;
            /* padding: 8rem 0 4rem; */
            max-height: 200px;
            position: relative;
            overflow: hidden;
        }

        
        .hero h1  
        {font-size: 2.5rem !important; 
         margin-bottom: 1rem;
        }
        
        .hero p 
        {font-size: 1.2rem !important;}

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .content-section {
            max-width: 95%;
            margin: 0 auto;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: center;
        }

        .about-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .about-image:hover {
            transform: scale(1.05);
        }

        .about-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .about-content p {
            margin-bottom: 1rem;
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 0;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--secondary-color);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: var(--background-color);
            border: 4px solid var(--secondary-color);
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .right::after {
            left: -16px;
        }

        .timeline-content {
            padding: 20px 30px;
            background-color: var(--card-bg-color);
            position: relative;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .timeline-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .value-card {
            background-color: var(--card-bg-color);
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-5px);
        }

        .value-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .value-icon {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        @media screen and (max-width: 768px) {
            .hero
            {
                max-height: 400px;
            }
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item::after {
                left: 15px;
            }

            .right {
                left: 0%;
            }
        }
    </style>
</head>
<body>
    <?php
        include('includes/header.php');
    ?>

<main>
        <section class="hero">
            <div class="container">
                <h1>About SVD Siddhartha Law College</h1>
                <p>Empowering legal minds and shaping the future of justice since 1987</p>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <div class="about-grid">
                    <img src="Images/court.jpg" alt="SVD Siddhartha Law College" class="about-image">
                    <div class="about-content">
                        <h3>Our Legacy</h3>
                        <p>SVD Siddhartha Law College, established in 1987, has been a beacon of legal education in Andhra Pradesh for over three decades. Founded by the Siddhartha Academy of General & Technical Education, our institution has consistently ranked among the top private law colleges in the region.</p>
                        <p>In 1990, the college was renamed in honor of Smt. Velagapudi Durgamba, reflecting our commitment to education and social progress. With permanent recognition from the Bar Council of India and Andhra Pradesh State Council of Higher Education, we continue to shape the future of legal professionals.</p>
                        <p>Our college is affiliated with Acharya Nagarjuna University and has been at the forefront of legal education, producing numerous successful lawyers, judges, and legal scholars who have made significant contributions to the field of law.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <h2>Our Journey</h2>
                <div class="timeline">
                    <div class="timeline-item left">
                        <div class="timeline-content">
                            <h3>1987</h3>
                            <p>Establishment of Siddhartha Law College by the Siddhartha Academy of General & Technical Education</p>
                        </div>
                    </div>
                    <div class="timeline-item right">
                        <div class="timeline-content">
                            <h3>1990</h3>
                            <p>Renamed as SVD Siddhartha Law College in honor of Smt. Velagapudi Durgamba</p>
                        </div>
                    </div>
                    <div class="timeline-item left">
                        <div class="timeline-content">
                            <h3>1995</h3>
                            <p>Introduction of 5-year integrated B.A. LL.B. program, expanding our educational offerings</p>
                        </div>
                    </div>
                    <div class="timeline-item right">
                        <div class="timeline-content">
                            <h3>2000</h3>
                            <p>Received permanent recognition from the Bar Council of India, solidifying our status as a premier law institution</p>
                        </div>
                    </div>
                    <div class="timeline-item left">
                        <div class="timeline-content">
                            <h3>2005</h3>
                            <p>Establishment of Legal Aid Clinic to provide free legal assistance to the underprivileged</p>
                        </div>
                    </div>
                    <div class="timeline-item right">
                        <div class="timeline-content">
                            <h3>2015</h3>
                            <p>Inauguration of state-of-the-art moot court hall for practical legal training</p>
                        </div>
                    </div>
                    <div class="timeline-item left">
                        <div class="timeline-content">
                            <h3>2020</h3>
                            <p>Introduction of online learning platforms and digital library resources</p>
                        </div>
                    </div>
                    <div class="timeline-item right">
                        <div class="timeline-content">
                            <h3>2022</h3>
                            <p>Launch of LL.M. program, offering specialized postgraduate legal education</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <h2>Our Values</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">📚</div>
                        <h3>Academic Excellence</h3>
                        <p>We strive for the highest standards of legal education and scholarship, fostering critical thinking and analytical skills in our students.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">⚖️</div>
                        <h3>Ethical Practice</h3>
                        <p>We instill strong ethical values and professional responsibility in our students, preparing them to uphold the integrity of the legal profession.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🌍</div>
                        <h3>Social Justice</h3>
                        <p>We are committed to promoting equality, fairness, and access to justice for all, encouraging our students to contribute to societal well-being.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🔬</div>
                        <h3>Innovation</h3>
                        <p>We embrace new technologies and teaching methods to prepare students for the future of law, adapting to the evolving legal landscape.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🤝</div>
                        <h3>Community Engagement</h3>
                        <p>We actively participate in community service and legal awareness programs, bridging the gap between legal education and societal needs.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🌱</div>
                        <h3>Holistic Development</h3>
                        <p>We focus on the overall growth of our students, nurturing their intellectual, personal, and professional development.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <h2>Our Achievements</h2>
                <div class="about-grid">
                    <div class="about-content">
                        <h3>Academic Excellence</h3>
                        <p>Our college has consistently produced top-ranking students in university examinations and competitive legal exams. Many of our alumni have secured prestigious positions in the judiciary, corporate law firms, and government services.</p>
                        <h3>Research and Publications</h3>
                        <p>Our faculty and students have contributed significantly to legal research, with numerous publications in reputed law journals. We also publish our own annual law review, showcasing original legal scholarship.</p>
                        <h3>Moot Court Achievements</h3>
                        <p>Our moot court teams have won several national and international competitions, bringing laurels to the institution and demonstrating the practical legal skills of our students.</p>
                    </div>
                    <div class="about-content">
                        <h3>Community Impact</h3>
                        <p>Through our Legal Aid Clinic, we have provided free legal assistance to thousands of underprivileged individuals, making a significant impact on access to justice in our community.</p>
                        <h3>Collaborations</h3>
                        <p>We have established collaborations with leading law schools and legal institutions both nationally and internationally, facilitating student and faculty exchange programs.</p>
                        <h3>Infrastructure Development</h3>
                        <p>Our campus has seen continuous improvement, with state-of-the-art facilities including a modern library, computer labs, and a technologically advanced moot court hall.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
</body>
</html>