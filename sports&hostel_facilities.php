<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports and Hostel Facilities - SVD Siddhartha Law College</title>
    <!-- Link to external Google Fonts stylesheet -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    
        .hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/sports.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            text-align: center;
            padding: 8rem 0 4rem;
            position: relative;
            overflow: hidden;
        }
        

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
            padding: 5rem 0;
        }

        h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            color: var(--primary-color);
        }

        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .facility-card {
            background-color: var(--card-bg-color);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .facility-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .facility-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .facility-content {
            padding: 1.5rem;
        }

        .facility-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .facility-content ul {
            list-style-type: none;
            padding-left: 0;
        }

        .facility-content ul li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .facility-content ul li::before {
            content: "•";
            color: var(--secondary-color);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .testimonials {
            background-color: var(--primary-color);
            color: #fff;
            padding: 4rem 0;
        }

        .testimonials h2 {
            color: #fff;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 1.5rem;
            text-align: center;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            background-color: rgba(255, 255, 255, 0.2);
        }

        .testimonial-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }

        .testimonial-card p {
            font-style: italic;
            margin-bottom: 1rem;
        }

        .testimonial-card .student-name {
            font-weight: bold;
        }

        @media screen and (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .facilities-grid,
            .testimonial-grid {
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
                <h1>Sports and Hostel Facilities</h1>
                <p>Nurturing holistic development through state-of-the-art amenities</p>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <h2>Our Facilities</h2>
                <div class="facilities-grid">
                    <div class="facility-card">
                        <img src="Images/sports_facilities.png" alt="Sports Facilities" class="facility-image">
                        <div class="facility-content">
                            <h3>Sports Facilities</h3>
                            <ul>
                                <li>Multi-purpose indoor stadium</li>
                                <li>Outdoor cricket and football grounds</li>
                                <li>Basketball and volleyball courts</li>
                                <li>Fully equipped gymnasium</li>
                                <li>Table tennis and carrom facilities</li>
                            </ul>
                        </div>
                    </div>
                    <div class="facility-card">
                        <img src="Images/hostel_facilities.png" alt="Hostel Facilities" class="facility-image">
                        <div class="facility-content">
                            <h3>Hostel Facilities</h3>
                            <ul>
                                <li>Separate hostels for boys and girls</li>
                                <li>Well-furnished rooms with attached bathrooms</li>
                                <li>24/7 security and CCTV surveillance</li>
                                <li>Wi-Fi enabled premises</li>
                                <li>Hygienic mess with nutritious meals</li>
                            </ul>
                        </div>
                    </div>
                    <div class="facility-card">
                        <img src="Images/faciity.jpg" alt="Recreation Facilities" class="facility-image">
                        <div class="facility-content">
                            <h3>Recreation Facilities</h3>
                            <ul>
                                <li>Common rooms with TV and indoor games</li>
                                <li>Reading rooms and study areas</li>
                                <li>Yoga and meditation center</li>
                                <li>Cultural activity spaces</li>
                                <li>Outdoor seating and garden areas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <h2>What Our Students Say</h2>
                <div class="testimonial-grid">
                    <div class="testimonial-card">
                        <img src="Images/profile.png" alt="Student 1">
                        <p>"The sports facilities at SVDSLC are top-notch. They've helped me maintain a perfect balance between academics and physical fitness."</p>
                        <span class="student-name">- Priya S., 3rd Year LL.B.</span>
                    </div>
                    <div class="testimonial-card">
                        <img src="Images/profile.png" alt="Student 2">
                        <p>"Living in the hostel has been a great experience. The facilities are excellent, and it feels like a home away from home."</p>
                        <span class="student-name">- Rahul M., 2nd Year B.A. LL.B.</span>
                    </div>
                    <div class="testimonial-card">
                        <img src="Images/profile.png" alt="Student 3">
                        <p>"The recreation facilities provide the perfect environment to unwind after a long day of studies. It's been crucial for my mental well-being."</p>
                        <span class="student-name">- Anjali K., 4th Year B.A. LL.B.</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>