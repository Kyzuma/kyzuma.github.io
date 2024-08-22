<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justin Bieber Fan Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff9966, #ff5e62), url('background.jpg'); /* Substitute with your desired image */
            color: #000;
            text-align: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-blend-mode: overlay;
        }
        header {
            background-color: rgba(255, 255, 255, 0.9);
            color: black;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            display: inline-block;
            width: 80%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 3em;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .gallery-item {
            margin: 10px;
            text-align: center;
        }
        .gallery img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .gallery img:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.5);
        }
        .surprise-text {
            margin-top: 10px;
            font-weight: bold;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        .comments {
            margin-top: 50px;
            text-align: left;
        }
        .comments form {
            display: flex;
            flex-direction: column;
        }
        .comments input, .comments textarea {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .comments button {
            padding: 10px;
            background-color: #ff5e62;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .comments button:hover {
            background-color: #ff9966;
        }
        .comment-list {
            margin-top: 20px;
        }
        .comment-item {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .location-section {
            margin-top: 50px;
            text-align: center;
        }
        .location-indicator {
            font-size: 1.2em;
            color: #ff5e62;
            margin-bottom: 20px;
        }
        .google-maps {
            margin-top: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Justin Bieber Fan Page! 🎤🎶</h1>
        <p><?php echo calculateAge('1994-03-01'); ?> since the world became a better place!</p>
    </header>

    <div class="container">
        <section class="about">
            <h2>About Justin Bieber</h2>
            <p>Justin Bieber is a Canadian singer, songwriter, and actor. Discovered at the age of 13 on YouTube, Bieber quickly rose to fame with his debut album "My World." He has since become one of the world's best-selling music artists, known for hits like "Baby," "Sorry," and "Love Yourself."</p>
        </section>

        <section class="gallery-section">
            <h2>Look at my Baby's daily activities 😍</h2>
            <div class="gallery">

                <div class="gallery-item">
                    <img src="Photo/justincook.jpg" alt="Justin Bieber Image 1" onclick="wink(this, 'Photo/justincook.gif', 'Photo/justincook.jpg')">
                    <div class="surprise-text">Cooking for me after a long day at work 🥹</div>
                </div>

                <div class="gallery-item">
                    <img src="Photo/justinstrip.jpg" alt="Justin Bieber Image 3" onclick="wink(this, 'Photo/justinstrip.gif', 'Photo/justinstrip.jpg')">
                    <div class="surprise-text">Fit as ever! 🥵</div>
                </div>

                <div class="gallery-item">
                    <img src="Photo/justinwink.jpg" alt="Justin Bieber Image 2" onclick="wink(this, 'Photo/justinwink.gif', 'Photo/justinwink.jpg')">
                    <div class="surprise-text">Eyes for me only!</div>
                </div>
            </div>
        </section>

        <section class="comments">
            <h2>Leave a Comment ✍️</h2>
            <form action="submit_comment.php" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <textarea name="comment" placeholder="Your Comment" rows="5" required></textarea>
                <button type="submit">Submit Comment 📨</button>
            </form>

            <div class="comment-list">
                <h3>Fan Comments 💬</h3>
                <?php
                // Include comments from a file or database
                $comments = file_get_contents('comments.txt');
                echo nl2br($comments);
                ?>
            </div>
        </section>

        <section class="location-section">
            <div class="location-indicator">
                <p>Live Location: <strong>Los Angeles, CA 📍</strong></p>
            </div>
            <img src="https://maps.googleapis.com/maps/api/staticmap?center=Los+Angeles,CA&zoom=13&size=600x300&maptype=roadmap&key=YOUR_GOOGLE_MAPS_API_KEY" alt="Google Maps of Los Angeles" class="google-maps">
        </section>
    </div>

    <script>
        function wink(imgElement, winkGif, originalImage) {
            imgElement.src = winkGif;
            setTimeout(function() {
                imgElement.src = originalImage;
            }, 2000); // Adjust the time to how long you want the wink gif to play
        }
    </script>
</body>
</html>

<?php
function calculateAge($birthdate) {
    $birthDate = new DateTime($birthdate);
    $now = new DateTime();
    $age = $now->diff($birthDate);

    return $age->y . " years, " . $age->m . " months, and " . $age->d . " days";
}
?>
