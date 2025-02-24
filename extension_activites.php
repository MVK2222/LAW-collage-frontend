<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extension Activities - SVD Siddhartha Law College</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="home.css">
    <style>
        .hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/extension-activities.jpg');
            background-size: cover;
            background-position: center;
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

        .activities-section {
            padding: 5rem 0;
            background-color: var(--background-color);
        }

        .activity-card {
            background-color: var(--card-bg-color);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-bottom: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .activity-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .activity-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .activity-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-right: 1rem;
        }

        .activity-card h2 {
            color: var(--primary-color);
            font-size: 2rem;
            margin: 0;
        }

        .activity-card p {
            color: var(--text-color);
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .activity-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .activity-item {
            background-color: rgba(28, 46, 74, 0.05);
            border-radius: 8px;
            padding: 1rem;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .activity-item:hover {
            background-color: rgba(28, 46, 74, 0.1);
        }

        .activity-item i {
            color: var(--secondary-color);
            margin-right: 0.5rem;
        }

        @media screen and (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .activity-card {
                padding: 1.5rem;
            }

            .activity-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Extension Activities</h1>
                <p>Engaging our students in community development and social service</p>
            </div>
        </section>

        <section class="activities-section">
            <div class="container">
                <div class="activity-card">
                    <div class="activity-header">
                        <i class="fas fa-hands-helping activity-icon"></i>
                        <h2>NSS (National Service Scheme)</h2>
                    </div>
                    <p>Our college's NSS Unit, sanctioned by Krishna University, comprises 100 student volunteers. We motivate and train NSS Volunteers to actively engage in community development and social service activities, fostering socially responsive and conscientious citizens.</p>
                    <p>Participation in these programs broadens students' knowledge about community service and demonstrates its importance in advancing societal welfare and well-being.</p>
                    <h3>Our Initiatives</h3>
                    <div class="activity-list">
                        <div class="activity-item"><i class="fas fa-seedling"></i> Sapling plantation</div>
                        <div class="activity-item"><i class="fas fa-broom"></i> Clean and Green initiatives</div>
                        <div class="activity-item"><i class="fas fa-ban"></i> Plastic-free campaigns</div>
                        <div class="activity-item"><i class="fas fa-flag"></i> National day celebrations</div>
                        <div class="activity-item"><i class="fas fa-chalkboard-teacher"></i> Teachers Day observations</div>
                        <div class="activity-item"><i class="fas fa-tree"></i> World Environment Day</div>
                        <div class="activity-item"><i class="fas fa-tint"></i> Blood Donation camps</div>
                        <div class="activity-item"><i class="fas fa-book-reader"></i> Literacy awareness</div>
                        <div class="activity-item"><i class="fas fa-handshake"></i> Volunteers Day events</div>
                        <div class="activity-item"><i class="fas fa-globe-americas"></i> World AIDS Day campaigns</div>
                        <div class="activity-item"><i class="fas fa-dove"></i> Non-violence Day</div>
                        <div class="activity-item"><i class="fas fa-balance-scale"></i> Human Rights Day</div>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="activity-header">
                        <i class="fas fa-gavel activity-icon"></i>
                        <h2>Legal Aid Clinic</h2>
                    </div>
                    <p>Our Legal Aid Clinic promotes Access to Justice for the poor and needy while serving as a vital component of our clinical legal education programme. We aim to bridge the gap between legal knowledge and those who need it most.</p>
                    <h3>Our Services</h3>
                    <div class="activity-list">
                        <div class="activity-item"><i class="fas fa-bullhorn"></i> Legal literacy campaigns</div>
                        <div class="activity-item"><i class="fas fa-users"></i> Education for marginalized groups</div>
                        <div class="activity-item"><i class="fas fa-comments"></i> Free legal counseling</div>
                        <div class="activity-item"><i class="fas fa-hand-holding-heart"></i> Pro bono legal aid</div>
                        <div class="activity-item"><i class="fas fa-shopping-cart"></i> Consumer grievance assistance</div>
                        <div class="activity-item"><i class="fas fa-home"></i> Family dispute resolution</div>
                        <div class="activity-item"><i class="fas fa-briefcase"></i> Service matter consultations</div>
                    </div>
                    <p>These activities are carried out with the involvement of our faculty, students, and alumni-advocates, in collaboration with the local bar.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>