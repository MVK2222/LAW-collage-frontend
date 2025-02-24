<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal's Message - SVD Siddhartha Law College</title>
    <!-- Link to external Google Fonts stylesheet -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
       <!-- Link to external CSS stylesheet -->
       <link rel="stylesheet" href="home.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        .page-hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/about-image.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            text-align: center;
            padding: 8rem 0 4rem;
            position: relative;
            overflow: hidden;
        }

        .message-section {
            padding: 4rem 0;
        }

        .message-content {
            display: flex;
            align-items: flex-start;
            gap: 2rem;
            background-color: var(--card-bg-color);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        .principal-image {
            flex: 0 0 300px;
        }

        .principal-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .principal-image img:hover {
            transform: scale(1.05);
        }

        .message-text {
            flex: 1;
        }

        .message-text h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .message-text h2::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        .message-text p {
            margin-bottom: 1rem;
            text-align: justify;
        }

        .signature {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            text-align: right;
            margin-top: 2rem;
            color: var(--primary-color);
        }

        @media (max-width: 768px) {
            .message-content {
                flex-direction: column;
            }

            .principal-image {
                flex: 0 0 100%;
                margin-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
    <?php
        include('includes/header.php');
    ?>

    <main>
        <section class="page-hero">
            <div class="container">
                <h1>Principal's Message</h1>
            </div>
        </section>

        <section class="message-section">
            <div class="container_1">
                <div class="message-content">
                    <div class="principal-image">
                    <img src="Images/profile.png" alt="Principal Prof (Dr) Ch.Divakar Babu">
                    </div>
                    <div class="message-text">
                        <h2>Dear members of present and future legal fraternity,</h2>
                        <p>Warm and hearty greetings,</p>
                        <p>Smt. Velagapudi Durgamba Siddhartha Law College was established in the year 1986 by the Siddhartha Academy of General and Technical Education, Vijayawada with the avowed object of providing quality legal education blended with social responsibility. It is one of the renowned institutes of legal learning, offering 5 year B.A.LL.B and 3 year LL.B courses and 2 year LL.M post-graduate course in Constitutional and Administrative Laws with a total intake of 22 students and Intellectual Property Rights and Cyber Laws with a total intake of 22 students.</p>
                        <p>At Siddhartha we always ardently believe, practice and uphold that "Excellence is a ceaseless and relentless process and there is no pause to it". Our teaching methodology lays thrust on encouraging and nurturing students to think out of the box for sharpening and enhancing their creative, comprehensive, analytical, research and advocacy skills. It has always been our earnest endeavor to make the student to deduce the inter-face between law and society in order to enable the student to grasp the foundational principles at the base of law and functional aspects of law in a society.</p>
                        <p>Thus, we always plan and execute our teaching methodology beyond academics by giving equal importance on co-curriculum activities and more particularly to train students in moot – court competitions so as to expose them to understand the judicial process of adjudication. We have also a novel method of encouraging our senior students to engage in teaching, when a staff member is on leave. Apart from all this, we conduct a host of seminars, symposiums and workshops in each academic year to broaden the horizons of knowledge of students on contemporary socio- economic and legal topics by inviting renowned lawyers, public activists, academicians, law officers, Judges etc., to expose the students to get the immense benefit of their accumulated knowledge, experience and wisdom.</p>
                        <p>We have proud Alumnae occupying coveted positions as Judges, legal offices, academicians, eminent lawyers etc and all of them eloquently speak out about our remarkable and splendid achievements. All this is feasible owing to our entrenched belief and practice that ours is a classic example for team work in splendid action. Apart from all this, our students testify about quality of teaching, active participative learning, imparting of training for upgradation of their skills and broadening horizons of their knowledge being imparted to them to fulfill our goal of producing best legal talent responding to the changing needs and demands of the society so as to transform them as best social engineers.</p>
                        <p>However, we are never complacent of the past glory as we always believe that the best is yet to come and excellence is a continuous phenomenon.</p>
                        <p class="signature">With warm and personal regards,<br>Prof (Dr) Ch.Divakar Babu</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>