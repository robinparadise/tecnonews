<?php
function connectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tecnonews";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {      
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database if it doesn't exist
    try {
      $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
      if (mysqli_query($conn, $sql)) {
          // echo "Database created successfully<br>";
      } else {
          echo "Error creating database: " . mysqli_error($conn) . "<br>";
      }
    } catch (Exception $e) {
      echo "Error creating database: " . $e->getMessage() . "<br>";
    }

    // Connect to the database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    try {
      // Create table if it doesn't exist
      $sql = "CREATE TABLE IF NOT EXISTS `articles` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `category` varchar(255) NOT NULL,
          `title` varchar(255) NOT NULL,
          `description` text NOT NULL,
          `image_url` varchar(255) NOT NULL,
          PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
      if (mysqli_query($conn, $sql)) {
          // echo "Table created successfully<br>";
      } else {
          echo "Error creating table: " . mysqli_error($conn) . "<br>";
      }
    } catch (Exception $e) {
      echo "Error creating table: " . $e->getMessage() . "<br>";
    }

    try {
      // DROP table `users`
      $sql = "DROP TABLE IF EXISTS `users`";
      if (mysqli_query($conn, $sql)) {
          // echo "Table dropped successfully<br>";
      } else {
          echo "Error dropping table: " . mysqli_error($conn) . "<br>";
      }
    } catch (Exception $e) {
      echo "Error dropping table: " . $e->getMessage() . "<br>";
    }
    try {
      // Create table if it doesn't exist
      $sql = "CREATE TABLE IF NOT EXISTS `users` (
          `id` INT AUTO_INCREMENT PRIMARY KEY,
          `name` VARCHAR(50) NOT NULL,
          `email` VARCHAR(100) NOT NULL,
          `bio` text
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
      if (mysqli_query($conn, $sql)) {
          // echo "Table created successfully<br>";
      } else {
          echo "Error creating table: " . mysqli_error($conn) . "<br>";
      }
    } catch (Exception $e) {
      echo "Error creating table: " . $e->getMessage() . "<br>";
    }

    return $conn;
}

function populateData() {
    // Connect to the database
    $conn = connectDB();

    // Clean the articles table
    try {
        $sql_clean = "DELETE FROM articles";
        if (mysqli_query($conn, $sql_clean)) {
            // echo "Table cleaned successfully<br>";
        } else {
            echo "Error cleaning table: " . mysqli_error($conn) . "<br>";
        }
    } catch (Exception $e) {
        echo "Error cleaning table: " . $e->getMessage() . "<br>";
    }

    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis, purus ac sodales luctus, libero libero luctus libero, non luctusShoes apophenia jeans sunglasses kanji boy human fetishism face forwards singularity sensory fluidity corrupted Chiba artisanal numinous monofilament. Tanto drone geodesic faded sentient military-grade 3D-printed jeans order-flow nano-cartel wonton soup Tokyo systema gang smart-pre. Dissident nodality pre-corrupted office woman disposable otaku car sub-orbital footage man into euro-pop long-chain hydrocarbons hacker. Computer pre-man singularity franchise-space corrupted sprawl sign math-Legba carbon nodality monofilament human receding long-chain hydrocarbons. Stimulate market gang Kowloon computer tube DIY. Military-grade dead range-rover advert denim Kowloon neural table hacker BASE jump monofilament free-market into woman. Spook tube order-flow woman sign warehouse urban city sentient Shibuya dissident drugs San Francisco advert tiger-team-space. ";

    // Sample data array
    $sample_data = array(
        array("AI", 1, "Top 10 AI Innovations of 2023", "Discover the most groundbreaking AI innovations of the year! " . $lorem, "https://picsum.photos/id/201/640/640"),
        array("Gadgets", 2, "Must-Have Gadgets for Tech Enthusiasts", "Check out the latest gadgets that every tech lover should have! " . $lorem, "https://picsum.photos/id/202/640/640"),
        array("Mobile", 3, "Best Smartphones of 2023", "Find out which smartphones are dominating the market this year! " . $lorem, "https://picsum.photos/id/203/640/640"),
        array("Security", 4, "Cybersecurity Tips for 2023", "Stay safe online with these essential cybersecurity tips! " . $lorem, "https://picsum.photos/id/204/640/640"),
        array("Software", 5, "Top 10 Productivity Software", "Boost your productivity with these top software picks! " . $lorem, "https://picsum.photos/id/305/640/640"),
        array("AI", 6, "AI in Healthcare: Transforming Medicine", "Explore how AI is revolutionizing the healthcare industry! " . $lorem, "https://picsum.photos/id/206/640/640"),
        array("Gadgets", 7, "Review: Latest Wearable Tech", "Read our review of the newest wearable technology! " . $lorem, "https://picsum.photos/id/307/640/640"),
        array("Mobile", 8, "5G Network Expansion: What to Expect", "Learn about the expansion of 5G networks and what it means for you! " . $lorem, "https://picsum.photos/id/208/640/640"),
        array("Security", 9, "The Future of Cyber Threats", "Get insights into the future of cyber threats and how to prepare! " . $lorem, "https://picsum.photos/id/209/640/640"),
        array("Software", 10, "New Trends in Software Development", "Discover the latest trends in software development! " . $lorem, "https://picsum.photos/id/210/640/640"),
        array("AI", 11, "AI-Powered Home Automation", "Make your home smarter with AI-powered automation! " . $lorem, "https://picsum.photos/id/211/640/640"),
        array("Gadgets", 12, "Top Tech Gifts for 2023", "Find the perfect tech gift for your loved ones! " . $lorem, "https://picsum.photos/id/212/640/640"),
        array("Mobile", 13, "Mobile App Development: What's New?", "Stay updated with the latest in mobile app development! " . $lorem, "https://picsum.photos/id/213/640/640"),
        array("Security", 14, "Protecting Your Data in the Digital Age", "Learn how to protect your personal data online! " . $lorem, "https://picsum.photos/id/214/640/640"),
        array("Software", 15, "Open Source Software: Benefits and Risks", "Understand the benefits and risks of using open source software! " . $lorem, "https://picsum.photos/id/215/640/640"),
        array("AI", 16, "Ethics in AI: Navigating the Challenges", "Explore the ethical challenges of AI and how to navigate them! " . $lorem, "https://picsum.photos/id/216/640/640"),
        array("Gadgets", 17, "Smart Home Devices: A Guide", "Upgrade your home with these smart home devices! " . $lorem, "https://picsum.photos/id/217/640/640"),
        array("Mobile", 18, "Best Mobile Games of 2023", "Check out the top mobile games you should play this year! " . $lorem, "https://picsum.photos/id/218/640/640"),
        array("Security", 19, "Biometric Security: Pros and Cons", "Learn about the pros and cons of biometric security! " . $lorem, "https://picsum.photos/id/219/640/640"),
        array("Software", 20, "The Future of Cloud Computing", "Discover the future trends of cloud computing! " . $lorem, "https://picsum.photos/id/220/640/640"),
        array("AI", 21, "AI and Mental Health: Innovations and Challenges", "Discover how AI is impacting mental health care! " . $lorem, "https://picsum.photos/id/221/640/640"),
        array("Gadgets", 22, "Top Virtual Reality Headsets", "Explore the best VR headsets available today! " . $lorem, "https://picsum.photos/id/222/640/640")
    );

    // Insert sample data into the articles table
    foreach ($sample_data as $post) {
        $category = mysqli_real_escape_string($conn, $post[0]);
        $title = mysqli_real_escape_string($conn, $post[2]);
        $description = mysqli_real_escape_string($conn, $post[3]);
        $image_url = mysqli_real_escape_string($conn, $post[4]);

        try {
            $sql_insert = "INSERT INTO articles (category, title, description, image_url) VALUES ('$category', '$title', '$description', '$image_url')";
            if (mysqli_query($conn, $sql_insert)) {
                // echo "Record inserted successfully<br>";
            } else {
                echo "Error inserting record: " . mysqli_error($conn) . "<br>";
            }
        } catch (Exception $e) {
            echo "Error inserting record: " . $e->getMessage() . "<br>";
        }
    
    }

    // Insert a user with fake data
    $sql = "INSERT INTO `users` (`id`, `name`, `email`, `bio`) VALUES
        (1, 'John Doe', 'john.doe@example.com', 'This is a sample bio for John Doe.')";

    if (mysqli_query($conn, $sql)) {
        // echo "User inserted successfully<br>";
    } else {
        echo "Error inserting user: " . mysqli_error($conn) . "<br>";
    }

    // Close connection
    mysqli_close($conn);
}

// Populate data
// populateData();
?>