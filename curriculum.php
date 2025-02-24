<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum - SVD Siddhartha Law College</title>
    <!-- Link to external Google Fonts stylesheet -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

        .container_2 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/Curriculum.png');
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
        

        

        .curriculum-section {
            padding: 4rem 0;
        }

        .curriculum-section h2 {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 2rem;
            text-align: center;
        }

        .program {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            overflow: hidden;
        }

        .program-header {
            background-color: var(--primary-color);
            color: #fff;
            padding: 1rem;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .program-content {
            padding: 1rem;
        }

        .semester {
            margin-bottom: 1.5rem;
        }

        .semester h4 {
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
        }

        .courses {
            list-style-type: none;
            padding-left: 1rem;
        }

        .courses li {
            margin-bottom: 0.5rem;
            position: relative;
        }

        .courses li::before {
            content: "•";
            color: var(--accent-color);
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

          @media screen and (max-width: 768px) {

            .tabs {
                flex-direction: column;
            }

            .tab-button {
                margin-bottom: 0.5rem;
            }
            
            .hero
            {
                max-height: 400px;

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
                <h1>Curriculum</h1>
                <p>Explore our comprehensive law programs</p>
            </div>
        </section>

        <section id="curriculum" class="curriculum-section">
            <div class="container_2">
                <h2>Our Law Programs</h2>

                <div class="program">
                    <div class="program-header">3-Year LL.B. Program</div>
                    <div class="program-content">
                        <div class="semester">
                            <h4>Semester I</h4>
                            <ul class="courses">
                                <li>Law of Contracts - I</li>
                                <li>Law of Crimes</li>
                                <li>Constitutional Law - I</li>
                                <li>Law of Torts</li>
                                <li>Legal Methods</li>
                            </ul>
                        </div>
                        <div class="semester">
                            <h4>Semester II</h4>
                            <ul class="courses">
                                <li>Law of Contracts - II</li>
                                <li>Family Law - I</li>
                                <li>Constitutional Law - II</li>
                                <li>Law of Evidence</li>
                                <li>Environmental Law</li>
                            </ul>
                        </div>
                        <!-- Additional semesters would be added here -->
                    </div>
                </div>

                <div class="program">
                    <div class="program-header">5-Year B.A. LL.B. (Hons.) Program</div>
                    <div class="program-content">
                        <div class="semester">
                            <h4>Semester I</h4>
                            <ul class="courses">
                                <li>Political Science - I</li>
                                <li>Sociology - I</li>
                                <li>Economics - I</li>
                                <li>English - I</li>
                                <li>Legal Methods</li>
                            </ul>
                        </div>
                        <div class="semester">
                            <h4>Semester II</h4>
                            <ul class="courses">
                                <li>Political Science - II</li>
                                <li>Sociology - II</li>
                                <li>Economics - II</li>
                                <li>English - II</li>
                                <li>Law of Torts</li>
                            </ul>
                        </div>
                        <!-- Additional semesters would be added here -->
                    </div>
                </div>

                <div class="program">
                    <div class="program-header">LL.M. Program</div>
                    <div class="program-content">
                        <div class="semester">
                            <h4>Semester I</h4>
                            <ul class="courses">
                                <li>Research Methods and Legal Writing</li>
                                <li>Comparative Public Law</li>
                                <li>Law and Justice in a Globalizing World</li>
                                <li>Constitutional Law: New Challenges</li>
                            </ul>
                        </div>
                        <div class="semester">
                            <h4>Semester II</h4>
                            <ul class="courses">
                                <li>Judicial Process</li>
                                <li>Legal Education and Pedagogy</li>
                                <li>Human Rights</li>
                                <li>Dissertation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>