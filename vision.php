<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision - SVD Siddhartha Law College</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .container_vision {
            max-width: 1100px;
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
            padding: 6rem 0 ;
            position: relative;
            overflow: hidden;
            max-height: 250px;
        }

        .hero h1 {
            font-size: 2.5rem !important;
        }
        
        .hero p {
            font-size: 1.2rem !important;
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

        .vision-content {
            font-size: 1.2rem;
            line-height: 1.8;
            text-align: center;
            color: #333;
        }

        .vision-content p {
            margin-bottom: 2rem;
        }

        @media screen and (max-width: 768px) {
            .hero {
                max-height: 400px;
            }
        }
    </style>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Our Vision</h1>
                <p>Transforming students to be legally conscious, socially responsive, and morally compliant.</p>
            </div>
        </section>

        <section class="content-section">
            <div class="container_vision">
                <h2>Vision Statement</h2>
                <div class="vision-content">
                    <p>We believe in imparting knowledge blended with wisdom and nurturing a zeal and enthusiasm for learning. Creativity and innovative thinking are encouraged to transform our students into legally conscious, socially responsive, and morally compliant individuals. Through the creation of an intellectually stimulating environment, our students earn esteem not only for themselves but also for their alma mater.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>
