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
       <style>
        .container_tab {
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
            /* padding: 4rem 0 2rem;  */
            position: relative;
            overflow: hidden;
            max-height: 200px;
        }

        .hero h1  
        {font-size: 2.5rem !important; }
        
        .hero p 
        {font-size: 1.2rem !important;}
        
        header {
            position: fixed !important; 
        }


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

        .tabs {
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

        .tab-content {
            display: none;
        }

        .tab-content.active {
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

        .tab-card {
            background-color: var(--card-bg-color);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            justify-content: center;
            display: grid;
        }

        .tab-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .tab-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .tab-card ul {
            list-style-type: none;
            padding-left: 0;
        }

        .tab-card ul li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .tab-card ul li::before {
            content: "•";
            color: var(--secondary-color);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        @media screen and (max-width: 768px) {

            .tabs {
                flex-direction: column;
            }

            .tab-button {
                margin-bottom: 0.5rem;
            }

            header {
            position: relative !important; 
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
    
    <section class="hero">
        <div class="container">
            <h1>B.A. LL.B 5 Years Programme</h1>
            <p>Empowering future legal professionals with comprehensive education and practical skills</p>
        </div>
    </section>
<main>
    <section class="content-section">
        <div class="container_tab">
            <h2>Programme Details</h2>

            <!-- Tabs -->
            <div class="tabs">
                <button class="tab-button active" data-tab="about">About the Programme</button>
                <button class="tab-button" data-tab="eligibility">Eligibility Criteria</button>
                <button class="tab-button" data-tab="objectives">Programme Objectives</button>
            </div>

            <!-- Tab Contents -->
            <div class="tab-content active" id="about">
                <div class="tab-card">
                    <h3>About the Programme</h3>
                    <ul>
                        <li>The college offers a Bachelor of Law (B.L) three-year programme.</li>
                        <li>The total intake capacity for the programme is 120 students.</li>
                        <li>The programme is divided into 2 sections, with each section accommodating 60 students.</li>
                    </ul>
                </div>
            </div>

            <!-- Tab Content: Eligibility Criteria -->
            <div class="tab-content" id="eligibility">
                <div class="tab-card">
                    <h3>Eligibility Criteria</h3>
                    <ul>
                        <li>Candidates must have passed the 10+2 examination from the Board of Intermediate Education, Andhra Pradesh, or any recognized equivalent board.</li>
                        <li>General candidates need to achieve 45% aggregate marks in group subjects and languages.</li>
                        <li>SC/ST candidates must obtain 40% aggregate marks in group subjects and languages.</li>
                        <li>Candidates must qualify in the LAWCET conducted for that academic year.</li>
                    </ul>
                </div>
            </div>

            <div class="tab-content" id="objectives">
                <div class="tab-card">
                    <h3>Programme Objectives</h3>
                    <ul>
                        <li>To enable students to study law in the context of social sciences such as political science, sociology, economics, etc.</li>
                        <li>To groom students as professionally competent and socially conscious legal professionals.</li>
                        <li>To spread legal education and awareness in society.</li>
                        <li>To train students in both theoretical and practical aspects of law.</li>
                        <li>To promote clinical legal education and participative learning.</li>
                        <li>To involve students in legal literacy campaigns and legal aid services.</li>
                        <li>To develop analytical, logical, and communicative skills among students.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

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
