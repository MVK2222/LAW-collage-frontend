<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library - SVD Siddhartha Law College</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>

        .hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/library.jpg');
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
        


        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 2rem;
            animation: fadeInUp 1s ease-out 0.5s forwards;
            opacity: 0;
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
            padding: 2rem 0;
        }

        .library-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .info-card {
            background-color: var(--card-bg-color);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .info-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .info-card ul {
            list-style-type: none;
            padding-left: 0;
        }

        .info-card ul li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .info-card ul li::before {
            content: "•";
            color: var(--secondary-color);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .resources {
            background-color: var(--primary-color);
            color: #fff;
            padding: 4rem 0;
        }

        .resources h2 {
            color: #fff;
        }

        .resources-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .resource-card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 1.5rem;
            text-align: center;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .resource-card:hover {
            transform: translateY(-5px);
            background-color: rgba(255, 255, 255, 0.2);
        }

        .resource-card i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--secondary-color);
        }

        .resource-card h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .cta-section {
            text-align: center;
            padding: 4rem 0;
        }

        .cta-button {
            display: inline-block;
            background-color: var(--secondary-color);
            color: var(--primary-color);
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #a67c00;
        }

        @media screen and (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .library-info {
                grid-template-columns: 1fr;
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
                <h1>SVD Siddhartha Law College Library</h1>
                <p>Empowering legal minds with knowledge and resources</p>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <h2>Library Information</h2>
                <div class="library-info">
                    <div class="info-card">
                        <h3>Collection</h3>
                        <ul>
                            <li> Over 9,600 volumes of legal books, updated annually</li>
                            <li>Subscription to 19 national legal journals and 5 periodicals</li>
                            <li>Preserved archives of key legal references, including A.I.R, SCC, ALT, ALD, LLJ, Cr.LJ, CL, and ACC since 1950</li>
                            <li>Free access to Manu Patra for legal research and case law</li>
                        </ul>
                    </div>
                    <div class="info-card">
                        <h3>Facilities</h3>
                        <ul>
                            <li>Spacious reading halls</li>
                            <li>Computer lab with internet access</li>
                            <li>Photocopying and printing services</li>
                            <li>Discussion rooms for group study</li>
                            <li>Wi-Fi enabled premises</li>
                        </ul>
                    </div>
                    <div class="info-card">
                        <h3>Timings</h3>
                        <ul>
                            <li>Monday to Friday: 9:00 AM - 8:00 PM</li>
                            <li>Saturday: 10:00 AM - 6:00 PM</li>
                            <li>Sunday: Closed</li>
                            <li>Extended hours during exam periods</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="resources">
            <div class="container">
                <h2>Digital Resources</h2>
                <div class="resources-grid">
                    <div class="resource-card">
                        <i class="fas fa-book-open"></i>
                        <h3>Online Catalog</h3>
                        <p>Search and locate books in our collection</p>
                    </div>
                    <div class="resource-card">
                        <i class="fas fa-database"></i>
                        <h3>Legal Databases</h3>
                        <p>Access to LexisNexis, Westlaw, and more</p>
                    </div>
                    <div class="resource-card">
                        <i class="fas fa-newspaper"></i>
                        <h3>E-Journals</h3>
                        <p>Browse through digital law journals</p>
                    </div>
                    <div class="resource-card">
                        <i class="fas fa-laptop"></i>
                        <h3>Remote Access</h3>
                        <p>Access library resources from anywhere</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <h2>Explore Our Library</h2>
                <p>Discover a wealth of legal knowledge and resources at your fingertips.</p>
                <a href="#" class="cta-button">Visit the Library</a>
            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>