<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SVD Siddhartha Law College</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="home.css">
    <style>
        .hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/contact.jpg');
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

        .contact-section {
            padding: 5rem 0;
            background-color: var(--background-color);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .contact-card {
            background-color: var(--card-bg-color);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .contact-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .contact-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-right: 1rem;
        }

        .contact-card h2 {
            color: var(--primary-color);
            font-size: 2rem;
            margin: 0;
        }

        .contact-info {
            margin-bottom: 1.5rem;
        }

        .contact-info h3 {
            color: var(--secondary-color);
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .contact-info p {
            color: var(--text-color);
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 0.5rem;
        }

        .contact-info a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-info a:hover {
            color: red;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            color: var(--primary-color);
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--secondary-color);
        }

        .map-container {
            width: 100%;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
        }

        @media screen and (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .map-container {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Contact Us</h1>
                <p>Get in touch with SVD Siddhartha Law College</p>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-card">
                        <div class="contact-header">
                            <i class="fas fa-address-card contact-icon"></i>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-info">
                            <h3><i class="fas fa-map-marker-alt"></i> Address</h3>
                            <p>SVD Siddhartha Law College<br>Kanuru, Vijayawada<br>Andhra Pradesh - 520007<br>India</p>
                        </div>
                        <div class="contact-info">
                            <h3><i class="fas fa-phone"></i> Phone</h3>
                            <p><a href="tel:+918662582592">+91 86625 82592</a></p>
                        </div>
                        <div class="contact-info">
                            <h3><i class="fas fa-envelope"></i> Email</h3>
                            <p><a href="mailto:svdsiddharthalawcollege@gmail.com">svdsiddharthalawcollege@gmail.com</a></p>
                        </div>
                        <div class="contact-info">
                            <h3><i class="fas fa-clock"></i> Office Hours</h3>
                            <p>Monday - Friday: 9:00 AM - 5:00 PM<br>Saturday: 9:00 AM - 1:00 PM<br>Sunday: Closed</p>
                        </div>
                        <div class="social-links">
                            <a href="https://www.facebook.com/svdlawcollege" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.twitter.com/svdlawcollege" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/school/svdlawcollege" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/svdlawcollege" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-header">
                            <i class="fas fa-map-marked-alt contact-icon"></i>
                            <h2>Location</h2>
                        </div>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.8611570878857!2d80.68939537519039!3d16.482566584258418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35fb3d15555553%3A0x6d32ae8baeb86ac2!2sSmt.Velagapudi%20Durgamba%20Siddhartha%20Law%20College!5e0!3m2!1sen!2sin!4v1724217224709!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>