<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVD Siddhartha Law College</title>
    <!-- Link to external Google Fonts stylesheet -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
        
        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            background-image: url("Images/moot.png");
                background-size: cover;
            background-position: center;
            border-radius: 15px;
            color: white;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        header {
            position: relative !important; 
        }
        
        .moot-court-section, .seminar-hall-section {
            margin-bottom: 40px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white for contrast */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Slight shadow around sections */
        }
        
        .section-title {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem; /* Slightly larger for emphasis */
            color: #213753; /* Gold accent for headings */
            margin-bottom: 15px;
            text-transform: uppercase;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Add shadow for better visibility */
        }
        
        .section-description {
            font-family: 'Poppins', sans-serif;
            color: #333;
            line-height: 1.6;
            font-size: 1.1rem;
            margin-bottom: 15px;
            text-align: justify; /* Justify for a clean layout */
        }
        
        .section-description:last-child {
            margin-bottom: 0; /* Remove bottom margin from last paragraph */
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .content-wrapper {
                padding: 20px; /* Reduced padding on smaller screens */
            }
        
            .section-title {
                font-size: 2rem; /* Smaller title font size for smaller screens */
            }
        
            .section-description {
                font-size: 1rem; /* Adjust description font size for better readability */
            }
        
            .moot-court-section, .seminar-hall-section {
                padding: 15px; /* Adjust padding for sections */
            }
        }
        
        @media (max-width: 480px) {
            .section-title {
                font-size: 1.5rem; /* Even smaller title font size for mobile screens */
            }
        
            .section-description {
                font-size: 0.9rem; /* Adjust description font size further for mobile */
            }
        }
</style>

</head>
<body>
    <?php
        include('includes/header.php');
    ?>


    <div class="content-wrapper">
        <div class="moot-court-section">
            <h2 class="section-title">Moot Court Hall</h2>
            <p class="section-description">
                Moot court training is regularly imparted to students. Students are constantly and continuously encouraged and motivated to enhance and sharpen their argumentative, reasoning, and analytical skills. Hypothetical moot problems are given in order to enable and encourage students to make their presentations at the Moot court hall under the guidance and supervision of faculty members.
            </p>
            <p class="section-description">
                Intra-mural moot court competitions are conducted periodically to instill competitive spirit among the students in order to kindle their interest for harnessing and honing their advocacy skills.
            </p>
        </div>
    
        <div class="seminar-hall-section">
            <h2 class="section-title">Seminar Hall</h2>
            <p class="section-description">
                The College has a spacious seminar hall to accommodate around three hundred participants. Seminars and symposiums are regularly organized on diverse topics of contemporary legal, social, and economic importance to broaden the understanding levels of students.
            </p>
        </div>
    </div>
    
    


     <!-- Footer -->
     <?php include('includes/footer.php'); ?>