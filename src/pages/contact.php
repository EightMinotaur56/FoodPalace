<!DOCTYPE html>
<html lang="en">


<body>


    <div class="contact-container">
        <div class="contact-left">
            <div class="contact-info">
                <h2>Visit Us or <span>Call Us Today</span> </h2>
                <p class="opening-hours">Opening Hours:</p>
                <div class="days">
                    <h4>Tuesday - Thursday: 9am - 5pm</h4>
                    <h4>Friday: 9am - 7pm</h4>
                    <h4>Saturday: 8am - 4pm</h4>
                    <h4>Sunday - Monday: Closed</h4>
                </div>
            </div>
            <form class="contact-form" method="post">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone Number">
                <textarea name="message" placeholder="Message"></textarea>
                <button type="submit" name="submit">Submit</button>
            </form>
            <div class="contact-icons">
                <div class="icon">
                    <i class="fas fa-phone-alt"></i>
                    <p>Phone</p>
                </div>
                <div class="icon">
                    <i class="far fa-envelope"></i>
                    <p>Email</p>
                </div>
                <div class="icon">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Location</p>
                </div>
            </div>
        </div>
        <div class="contact-right">
            
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_database_name";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $stmt = $conn->prepare("INSERT INTO contact_entries (email, phone_number, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $phone, $message);

        if ($stmt->execute()) {
            echo "<p>Data inserted into database.</p>";
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>

</body>

</html>
