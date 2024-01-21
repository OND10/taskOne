<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Abbreviator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        label {

            margin-left: 280px;
            display: block;
            margin-bottom: 8px;
        }

        input {
            margin-left: 280px;
            width: 50%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 540px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <?php
    // Function to generate a random abbreviation for the link
    include('main.php');
    // Handle form submission


    if (isset($_POST['click'])) {
        // Validate and process the input
        if (isset($_POST['original_link']) && !empty($_POST['original_link'])) {
            $originalLink = $_POST['original_link'];


            $originalLinkPath = explode('.', $originalLink);
            $originalLinkExtension = end($originalLinkPath);
            $randlinkabbreviation = LinkAbbreviation::linkMaker();
            $familinkabbreviation = LinkAbbreviation::subLink($originalLink);

            //This a unique random link from the link you provided with keeping same ex
            $abbreviatedrandLink = "https://$randlinkabbreviation.$originalLinkExtension/";

            //This also a unique familiar link from your original link
            $abbreviateduniqdLink = "https://$familinkabbreviation.$originalLinkExtension/";

            echo "<br><br><p style='margin-left:520px;'>Original Link: <a href='$originalLink' target='_blank'>$originalLink</a></p><br>";
            echo "<p style='margin-left:520px;'>RandAbbreviated Link: <a href='$abbreviatedrandLink' target='_blank'>$abbreviatedrandLink</a></p><br>";
            echo "<p style='margin-left:520px;'>SubAbbreviated Link: <a href='$abbreviateduniqdLink' target='_blank'>$abbreviateduniqdLink</a></p><br>";
        } else {
            echo "<p style='color: red;'>Please enter a valid original link.</p>";
        }
    }
    ?>

    <form method="post" action="">
        <label for="original_link">Original Link:</label>
        <input type="url" name="original_link" id="original_link" required>
        <br>
        <button name="click" type="submit">Abbreviate Link</button>
    </form>

</body>

</html>