<?php
// Include the cityguide class file
include 'cityguide.php';  // Include the class file here

// Create an instance of the CityGuide class
$guide = new CityGuide(isset($_GET['city']) ? $_GET['city'] : 'Tokyo');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Guide</title>
    <style>
        /* Base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            padding: 0 10%;
        }

        /* Header */
        header {
            text-align: center;
            padding: 40px 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 3rem;
            color: #333;
            letter-spacing: 2px;
            border: 3px solid #333;  /* Border around the text */
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
        }

        /* City Buttons */
        .city-buttons {
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }

        .city-buttons button {
            background-color: #fff;
            border: 2px solid #333;
            color: #333;
            font-size: 1.1rem;
            font-weight: bold;
            padding: 15px 25px;
            margin: 0 10px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .city-buttons button:hover {
            background-color: #333;
            color: #fff;
        }

        .city-buttons button:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        /* Main content */
        main {
            text-align: center;
            padding: 50px 0;
        }

        main h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            border: 2px solid #333;  /* Border around the city title */
            padding: 10px 20px;
            display: inline-block;
            border-radius: 5px;
        }

        main p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        /* Resize images for better aesthetics */
        main img {
            width: 100%;
            max-width: 500px;  /* Set a max-width to prevent large images */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 30px 0;
            background-color: #333;
            color: #fff;
        }

        footer p {
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>City Guide</h1>
    </header>

    <!-- Display city selection buttons -->
    <?php $guide->displayCityButtons(); ?>

    <main>
        <!-- Render the selected city's content -->
        <?php $guide->renderCityPage(); ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> City Guide. All rights reserved.</p>
    </footer>
</body>
</html>
