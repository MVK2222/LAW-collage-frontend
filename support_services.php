<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Services - SVD Siddhartha Law College</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="home.css">
    <style>
        .hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/support_services.jpg');
            background-size: cover;
            background-position: bottom !important;
            background-attachment: fixed;
            color: #fff;
            text-align: center;
            padding: 8rem 1rem !important;
            position: relative;
            overflow: hidden;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .services-section {
            padding: 5rem 0;
            background-color: var(--background-color);
        }

        .service-card {
            background-color: var(--card-bg-color);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-bottom: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .service-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-right: 1rem;
        }

        .service-card h2 {
            color: var(--primary-color);
            font-size: 2rem;
            margin: 0;
        }

        .service-card p {
            color: var(--text-color);
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        @media screen and (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .service-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Support Services</h1>
                <p>Empowering students through financial assistance and support</p>
            </div>
        </section>

        <section class="services-section">
            <div class="container">
                <div class="service-card">
                    <div class="service-header">
                        <i class="fas fa-graduation-cap service-icon"></i>
                        <h2>Scholarship Programs</h2>
                    </div>
                    <p>The College provides scholarships to merit students and economically weaker students through its parent association. Our scholarship programs aim to support and encourage academic excellence while ensuring that financial constraints do not hinder a student's educational journey.</p>
                    <h3>Types of Scholarships:</h3>
                    <ul>
                        <li>Merit-based Scholarships</li>
                        <li>Scholarships for Economically Weaker Students</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>