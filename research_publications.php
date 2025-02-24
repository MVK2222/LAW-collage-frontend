<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Publications - SVD Siddhartha Law College</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="home.css">
    <style>
        .hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/research-publications.jpg');
            background-size: cover;
            background-position: bottom !important  ;
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

        .publications-section {
            padding: 5rem 0;
            background-color: var(--background-color);
        }

        .publications-card {
            background-color: var(--card-bg-color);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-bottom: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .publications-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .publications-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .publications-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-right: 1rem;
        }

        .publications-card h2 {
            color: var(--primary-color);
            font-size: 2rem;
            margin: 0;
        }

        .publications-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
        }

        .publications-table th,
        .publications-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .publications-table th {
            background-color: var(--primary-color);
            color: #fff;
            font-weight: 600;
        }

        .publications-table tr:nth-child(even) {
            background-color: rgba(28, 46, 74, 0.05);
        }

        .publications-table tr:hover {
            background-color: rgba(28, 46, 74, 0.1);
        }

        @media screen and (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .publications-card {
                padding: 1.5rem;
            }

            .publications-table {
                font-size: 0.9rem;
            }

            .publications-table th,
            .publications-table td {
                padding: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Research Publications</h1>
                <p>Exploring the frontiers of legal knowledge through scholarly work</p>
            </div>
        </section>

        <section class="publications-section">
            <div class="container">
                <div class="publications-card">
                    <div class="publications-header">
                        <i class="fas fa-book-open publications-icon"></i>
                        <h2>Faculty Research Publications</h2>
                    </div>
                    <p>Our esteemed faculty members contribute significantly to the field of law through their research and publications. Below is a summary of their academic achievements:</p>
                    <div class="table-responsive">
                        <table class="publications-table">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name of the Faculty</th>
                                    <th>Designation</th>
                                    <th>Research Degree</th>
                                    <th>International Journal Publications</th>
                                    <th>National Journal Publications</th>
                                    <th>Seminars and Workshops Attended</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Prof. Ch.Divakar Babu</td>
                                    <td>Professor</td>
                                    <td>M.L., Ph. D</td>
                                    <td>02</td>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Prof. I. Jagadeeswara Rao</td>
                                    <td>Professor</td>
                                    <td>M.L., Ph. D</td>
                                    <td>06</td>
                                    <td>06</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr.G.V. Ramaiah</td>
                                    <td>Associate Professor</td>
                                    <td>M.L., Ph. D</td>
                                    <td>-</td>
                                    <td>05</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dr.B. Srinivasa Rao</td>
                                    <td>Associate Professor</td>
                                    <td>M.L., Ph. D</td>
                                    <td>-</td>
                                    <td>03</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Dr.Ch.Sreenivasa Rao</td>
                                    <td>Associate Professor</td>
                                    <td>LL.M., Ph. D</td>
                                    <td>07</td>
                                    <td>03</td>
                                    <td>05</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dr.K. Anuradha</td>
                                    <td>Associate Professor</td>
                                    <td>LL.M., Ph. D</td>
                                    <td>14</td>
                                    <td>11</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Smt.L.Padmaja</td>
                                    <td>Assistant Professor</td>
                                    <td>LL.M</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Sri V.Leela Krishna</td>
                                    <td>Assistant Professor</td>
                                    <td>LL.M</td>
                                    <td>01</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>