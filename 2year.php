<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master of Laws (LL.M.) - 2 Year Program</title>
    <link rel="stylesheet" href="home.css"> <!-- Link to your existing CSS file -->
<style>

.hero {
    background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/eligibility.png');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: #fff;
    text-align: center;
    padding: 2rem;
    position: relative;
    overflow: hidden;
    max-height: 200px;

}

.hero h1  
        {font-size: 2.5rem !important; }
        
        .hero p 
        {font-size: 1.2rem !important;}
        

        .course-section {
    padding: 3rem 0;
    background-color: var(--background-color);
}

.course-card p {
    color: #213753 !important;
}

.course-section h2 {
    color: var(--primary-color);
    text-align: center;
    margin-bottom: 2rem;
}

.course-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.course-card {
    background-color: var(--card-bg-color);
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    margin-left: 5%;
    margin-right: 5%;
}

.course-card h3 {
    color: var(--secondary-color);
    font-size: 1.8rem;
    margin-bottom: 1rem;
}

.course-card p, .course-card ul {
    font-size: 1.1rem;
    color: var(--text-color);
}

.course-card ul {
    padding-left: 1.5rem;
}

.course-card ul li {
    list-style-type: none;
    margin-bottom: 0.5rem;
}

/* Updated styles for links with PDF icon */
.course-card ul li a {
    color: var(--primary-color);
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
    padding-bottom: 2px;
    display: inline-flex;
    align-items: center;
}

.course-card ul li a i {
    margin-right: 0.5rem;
}

.course-card ul li a::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: var(--secondary-color);
    transform: scaleX(0);
    transform-origin: bottom right;
    transition: transform 0.3s ease;
}

.course-card ul li a:hover {
    color: red;
}

.course-card ul li a:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

.course-card ul li a:hover i {
    transform: scale(1.1);
}

@media screen and (max-width: 768px) {
    .tabs {
        flex-direction: column;
    }

    .tab-button {
        margin-bottom: 0.5rem;
    }

    .hero {
        max-height: 400px;
    }
}

</style>


</head>
<body>
<?php include 'includes/header.php'; ?>
    <main>
        
    <section class="hero">
            <div class="container">
                <h1>Eligibility Criteria</h1>
                <p>Discover the requirements for joining our esteemed law programs</p>
            </div>
        </section>
        
        <section id="post-graduate-law" class="course-section">
            <div class="container">
                <h2>Post Graduate: Master of Laws (LL.M.)</h2>
                <div class="course-grid">
                <div class="course-card">
                    <h3>Specializations</h3>
                    <p>The college offers an LL.M. degree in two specialized groups:</p>
                    <ul>
                        <li>
                            <a href="uploads/Constitutional Law and Administrative Law.pdf" target="_blank">
                                <i class="fa-solid fa-file-arrow-down"></i> Constitutional and Administrative Law
                            </a>
                        </li>
                        <li>
                            <a href="uploads/Intellectual Property and Cyber Laws.pdf" target="_blank">
                                <i class="fa-solid fa-file-arrow-down"></i> Intellectual Property and Cyber Laws
                            </a>
                        </li>
                    </ul>
                    <p>Each group has an intake capacity of <strong>20 students</strong>.</p>
                </div>
                    <div class="course-card">
                        <h3>Eligibility</h3>
                        <p>To apply, candidates must:</p>
                        <ul>
                            <li>Hold a Bachelor of Law degree from Krishna University or an equivalent university.</li>
                            <li>Qualify in the AP PG LAWCET (Entrance Test) conducted for the year they seek admission.</li>
                        </ul>
                    </div>
                    <div class="course-card">
                        <h3>Programme Objectives</h3>
                        <ul>
                            <li>Develop analytical, critical, and logical approaches to law.</li>
                            <li>Encourage research aptitude among students.</li>
                            <li>Foster participative learning through seminars and projects.</li>
                            <li>Promote teaching skills for careers in academia.</li>
                            <li>Encourage attendance at seminars, conferences, and paper presentations.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>

</body>
</html>
