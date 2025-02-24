<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eligibility - SVD Siddhartha Law College</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .container_eligible {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/eligibility.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            text-align: center;
            /* padding: 8rem 0 4rem; */
            position: relative;
            overflow: hidden;
            max-height: 200px
        }

        .hero h1  
        {font-size: 2.5rem !important; }
        
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
            padding: 5rem 0;
        }
        
        h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            color: var(--primary-color);
        }

        .eligibility-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .tab-button {
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .tab-button:hover {
            background-color: var(--secondary-color);
        }

        .tab-button.active {
            background-color: var(--secondary-color);
        }

        .eligibility-content {
            display: none;
        }

        .eligibility-content.active {
            display: block;
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .eligibility-card {
            background-color: var(--card-bg-color);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            justify-content: center;
            display: grid;
        }

        .eligibility-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .eligibility-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .eligibility-card ul {
            list-style-type: none;
            padding-left: 0;
        }

        .eligibility-card ul li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .eligibility-card ul li::before {
            content: "•";
            color: var(--secondary-color);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        @media screen and (max-width: 768px) {

            .eligibility-tabs {
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
                <h1>Eligibility Criteria</h1>
                <p>Discover the requirements for joining our esteemed law programs</p>
            </div>
        </section>

        <section class="content-section">
            <div class="container_eligible">
                <h2>Program Eligibility</h2>
                <div class="eligibility-tabs">
                    <button class="tab-button active" data-tab="llb">3-Year LL.B.</button>
                    <button class="tab-button" data-tab="ballb">5-Year B.A. LL.B.</button>
                    <button class="tab-button" data-tab="llm">LL.M.</button>
                </div>
                <div class="eligibility-content active" id="llb">
                    <div class="eligibility-card">
                        <h3>3-Year LL.B. Program</h3>
                        <ul>
                            <li>Bachelor's degree in any discipline from a recognized university</li>
                            <li>Minimum 45% aggregate marks (40% for SC/ST candidates)</li>
                            <li>Valid score in LSAT-India or other recognized law entrance exams</li>
                            <li>Age limit: As per BCI norms</li>
                            <li>Proficiency in English language</li>
                            <li>Clearance of the college's admission interview process</li>
                        </ul>
                    </div>
                </div>
                <div class="eligibility-content" id="ballb">
                    <div class="eligibility-card">
                        <h3>5-Year B.A. LL.B. (Hons.) Program</h3>
                        <ul>
                            <li>10+2 or equivalent from a recognized board</li>
                            <li>Minimum 45% aggregate marks (40% for SC/ST candidates)</li>
                            <li>Valid score in LSAT-India or other recognized law entrance exams</li>
                            <li>Age limit: As per BCI norms</li>
                            <li>Proficiency in English language</li>
                            <li>Clearance of the college's admission interview process</li>
                            <li>Strong analytical and communication skills</li>
                        </ul>
                    </div>
                </div>
                <div class="eligibility-content" id="llm">
                    <div class="eligibility-card">
                        <h3>LL.M. Program</h3>
                        <ul>
                            <li>LL.B. degree from a recognized university</li>
                            <li>Minimum 55% aggregate marks (50% for SC/ST candidates)</li>
                            <li>Entrance exam conducted by the university</li>
                            <li>Preference given to candidates with relevant work experience</li>
                            <li>Research proposal submission may be required</li>
                            <li>Proficiency in legal research and writing</li>
                            <li>Clearance of the college's admission interview process</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.eligibility-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const tabId = button.getAttribute('data-tab');
                    
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));

                    button.classList.add('active');
                    document.getElementById(tabId).classList.add('active');
                });
            });
        });
    </script>
</body>
</html> 