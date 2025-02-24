<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty - SVD Siddhartha Law College</title>
    <!-- Link to external Google Fonts stylesheet -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .faculty-hero {
            background: linear-gradient(rgba(28, 46, 74, 0.8), rgba(28, 46, 74, 0.8)), url('Images/faculty.png');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 8rem 1rem;
        }

        .faculty-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .faculty-hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .faculty-section {
            padding: 5rem 0;
        }

        .faculty-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 3rem;
        }

        .tab-button {
            background-color: var(--card-bg-color);
            border: none;
            padding: 1rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            color: var(--primary-color);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-button.active {
            background-color: var(--secondary-color);
            color: #fff;
        }

        .faculty-grid {
            display: none;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
        }

        .faculty-grid.active {
            display: grid;
            
        }

        .faculty-member, .staff-member {
            background-color: var(--card-bg-color);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .faculty-member:hover, .staff-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .faculty-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 1.5rem;
            border: 3px solid var(--secondary-color);
            object-fit: cover;
        }

        .faculty-member h3, .staff-member h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .faculty-member p, .staff-member p {
            margin-bottom: 0.5rem;
            color: var(--text-color);
        }

        .role {
            font-weight: 600;
            color: var(--secondary-color);
        }

        
    </style>
</head>
<body>
    <?php
        include('includes/header.php');
    ?>

    <main>
        <section class="faculty-hero">
            <div class="container">
                <h1>Our Faculty</h1>
                <p>Meet the dedicated professionals shaping the future of legal education</p>
            </div>
        </section>

        <section class="faculty-section">
            <div class="container">
                <div class="faculty-tabs">
                    <button class="tab-button active" data-tab="regular">Regular Faculty</button>
                    <button class="tab-button" data-tab="part-time">Part-Time Faculty</button>
                    <button class="tab-button" data-tab="non-teaching">Non-Teaching Staff</button>
                </div>

                <div class="faculty-grid active" id="regular">
                    <div class="faculty-member">
                        <img src="Images/faculty/Ch.Divakar Babu.png" alt="Dr. Ch .Divakar Babu">
                        <h3>Dr. Ch .Divakar Babu</h3>
                        <p class="role">Principal</p>
                        <p class="qualifications">LL.M, Ph.D</p>
                        <p class="experience">Experience: 34 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/Jagadeeswara_Rao.png" alt="Dr . I . Jagadeeswara Rao">
                        <h3>Dr . I . Jagadeeswara Rao</h3>
                        <p class="role">Professor</p>
                        <p class="qualifications">LL.M, Ph.D</p>
                        <p class="experience">Experience: 33 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/G.V.Ramaiah.png" alt="Dr. G.V.Ramaiah">
                        <h3>Dr. G . V . Ramaiah</h3>
                        <p class="role">Assoc. Professor</p>
                        <p class="qualifications">LL.M, Ph.D</p>
                        <p class="experience">Experience: 36 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/B.Srinivasa Rao.png" alt="Dr. B.Srinivasa Rao">
                        <h3>Dr. B. Srinivasa Rao</h3>
                        <p class="role">Principal</p>
                        <p class="qualifications">LL.M, Ph.D</p>
                        <p class="experience">Experience: 34 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/Ch.Sreenivasa Rao.png" alt="Dr. Ch.Sreenivasa Rao">
                        <h3>Dr. Ch. Sreenivasa Rao</h3>
                        <p class="role">Assoc. Professor</p>
                        <p class="qualifications">M.A, LL.M, Ph.D</p>
                        <p class="experience">Experience: 23 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/Anuradha.png" alt="Dr. K.Anuradha">
                        <h3>Dr. K. Anuradha</h3>
                        <p class="role">Assoc. Professor</p>
                        <p class="qualifications">M.Sc. Psy, PGDHR, PGDWS, LL.M, Ph.D, (LL.D.), SET, NET</p>
                        <p class="experience">Experience: 10 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/B.Krishna Prasad.png" alt="Sri. B.Krishna Prasad">
                        <h3>Sri. B. Krishna Prasad</h3>
                        <p class="role">Asst. Professor</p>
                        <p class="qualifications">B.Com, LL.M</p>
                        <p class="experience">Experience: 31 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/M.Panduranga.png" alt="Sri. M.Panduranga">
                        <h3>Sri. M. Panduranga</h3>
                        <p class="role">Asst. Professor</p>
                        <p class="qualifications">M.A (Eng), LL.M</p>
                        <p class="experience">Experience: 16 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/L. Padmaja.png" alt="Smt. L. Padmaja">
                        <h3>Smt. L. Padmaja</h3>
                        <p class="role">Asst. Professor</p>
                        <p class="qualifications">M.Sc. Psy, LL.M</p>
                        <p class="experience">Experience: 5 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/J.Kiran.png" alt="Sri. J.Kiran">
                        <h3>Sri. J. Kiran</h3>
                        <p class="role">Asst. Professor</p>
                        <p class="qualifications">LL.M</p>
                        <p class="experience">Experience: 11 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/K.SURYAPRAKASA RAO.png" alt="Sri. K. Suryaprakesa Rao">
                        <h3>Sri. K. Suryaprakesa Rao</h3>
                        <p class="role">Asst. Professor</p>
                        <p class="qualifications">M.A</p>
                        <p class="experience">Experience: 30 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/M.S.R.Ch Prasad.png" alt="Sri. M.S.R.Ch Prasad">
                        <h3>Sri. M.S.R.Ch Prasad</h3>
                        <p class="role">Librarian</p>
                        <p class="qualifications">M.Sc, M.L.I.Sc, LL.B</p>
                        <p class="experience">Experience: 34 years</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/V.LEELA KRISHNA.png" alt="Sri. V. Leela Krishna">
                        <h3>Sri. V. Leela Krishna</h3>
                        <p class="role">Asst. Professor</p>
                        <p class="qualifications">LL.M, NET, SET, Ph.D (Pursuing)</p>
                        <p class="experience">Experience: 1 year</p>
                    </div>
                </div>
                        <!-- part-time faculty members -->
                <div class="faculty-grid" id="part-time">
                    <div class="faculty-member">
                        <img src="Images/faculty/Sri.Ch.V.Subba Rao.png" alt="Sri.Ch.V.Subba Rao">
                        <h3>Sri. Ch. V. Subba Rao</h3>
                        <p class="role">Asst. Professor</p>
                        <p class="qualifications">M.A (Economics)</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/Smt. K.N.V.L.Visali.png" alt="Smt. K.N.V.L.Visali">
                        <h3>Smt. K. N. V. L. Visali</h3>
                        <p class="role">Asst. Professor</p>
                        <p class="qualifications">B.A. LL.B, LL.M</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/Smt. N.Pushpa Latha.png" alt="Smt. N.Pushpa Latha">
                        <h3>Smt. N. Pushpa Latha</h3>
                        <p class="role">Asst. Professor</p>
                        <p class="qualifications">B.A. LL.B, LL.M</p>
                    </div>
                    <div class="faculty-member">
                        <img src="Images/faculty/Smt. Naaz Parveen.png" alt="Smt. Naaz Parveen">
                        <h3>Smt. Naaz Parveen</h3>
                        <p class="role">Asst. Professor</p>
                        <p class="qualifications">B.A. LL.B</p>
                    </div>

                </div>
                    <!--non-teaching staff members  -->
                    <div class="faculty-grid" id="non-teaching">
                        <div class="staff-member">
                            <h3>Sri Ch. Suresh</h3>
                            <p class="role">Office Assistant</p>
                        </div>
                        <div class="staff-member">
                            <h3>Smt. T.V. Naga Lakhsmi</h3>
                            <p class="role">Office Assistant cum Data Entry Operator</p>
                        </div>
                        <div class="staff-member">
                            <h3>Smt. R. Rupa Kiranmai</h3>
                            <p class="role">Data Entry Operator Cum Office Assistant</p>
                        </div>
                        <div class="staff-member">
                            <h3>Sri B. Seshadri</h3>
                            <p class="role">Library Assistant</p>
                        </div>
                    </div>
                </div>
         </section>
    </main>

    <?php include('includes/footer.php'); ?>

    <script>
    
        // Tab functionality
        const tabButtons = document.querySelectorAll('.tab-button');
        const facultyGrids = document.querySelectorAll('.faculty-grid');
        
        tabButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');
        
                // Remove active class from all buttons and grids
                tabButtons.forEach((btn) => btn.classList.remove('active'));
                facultyGrids.forEach((grid) => grid.classList.remove('active'));
        
                // Add active class to the clicked button and corresponding grid
                button.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });

    </script>
</body>
</html>