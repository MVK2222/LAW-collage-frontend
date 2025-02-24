<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anti Ragging Cell - SVD Siddhartha Law College</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="home.css">
    <style>
        .hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/anti-ragging.jpg');
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

        .anti-ragging-section {
            padding: 5rem 0;
            background-color: var(--background-color);
        }

        .anti-ragging-card {
            background-color: var(--card-bg-color);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-bottom: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .anti-ragging-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .anti-ragging-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .anti-ragging-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-right: 1rem;
        }

        .anti-ragging-card h2 {
            color: var(--primary-color);
            font-size: 2rem;
            margin: 0;
        }

        .anti-ragging-card p {
            color: var(--text-color);
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .member-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .member-card {
            background-color: rgba(28, 46, 74, 0.05);
            border-radius: 8px;
            padding: 1.5rem;
            transition: background-color 0.3s ease;
        }

        .member-card:hover {
            background-color: rgba(28, 46, 74, 0.1);
        }

        .member-card h3 {
            color: var(--secondary-color);
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .member-card p {
            color: var(--text-color);
            font-size: 1rem;
            margin-bottom: 0;
        }

        @media screen and (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .anti-ragging-card {
                padding: 1.5rem;
            }

            .member-list {
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
                <h1>Anti Ragging Cell</h1>
                <p>Ensuring a safe and respectful environment for all students</p>
            </div>
        </section>

        <section class="anti-ragging-section">
            <div class="container">
                <div class="anti-ragging-card">
                    <div class="anti-ragging-header">
                        <i class="fas fa-shield-alt anti-ragging-icon"></i>
                        <h2>Anti Ragging Cell</h2>
                    </div>
                    
                    <h3>Cell Members</h3>
                    <div class="member-list">
                        <div class="member-card">
                            <h3>Dr. Ch. Sreenivasa Rao</h3>
                            <p>Associate Professor</p>
                        </div>
                        <div class="member-card">
                            <h3>Mr. M.S.R.Ch. Prasad</h3>
                            <p>Librarian</p>
                        </div>
                        <div class="member-card">
                            <h3>K. Visali</h3>
                            <p>Assistant Professor</p>
                        </div>
                        <div class="member-card">
                            <h3>Mr. Surya Prakasa Rao</h3>
                            <p>Assistant Professor</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>