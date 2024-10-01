<?php include 'header.php'; ?>
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/weddingreservation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<body>
        <div class="guest">
        <div class="image-container">
            <img src="images/stickers/wedding.png">
        </div>
        <div class="form-container">
            <h2>Wedding Reservation</h2>
            <form >
                <label for="Name">Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter name">

                <label for="Email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter email">

                <label for="Contact-No">Contact No:</label>
                <input type="tel" id="contact-no" name="contact-no" required placeholder="Enter contact no">

                <label for="venue">Venue:</label>
                <select id="venue" name="venue" required placeholder="venue">
                <option value="" disabled selected>Select Venue</option>
                <option value="Beachfront Paradise">Beachfront Paradise</option>
                <option value="Garden Oasis">Garden Oasis</option>
                <option value="Luxury Ballroom">Luxury Ballroom</option>
                <option value="Rooftop Terrace">Rooftop Terrace</option>
                </select>

                <label for="wedding-date">Date:</label>
                <input type="date" id="wedding-date" name="wedding-date" required placeholder="wedding date">

                <label for="guests">Number of Guests:</label>
                <input type="number" id="guests" name="guests" min="1" required placeholder="number of guests">

                <button type="submit" class="submit-btn">Submit</button>
                
            </form>
        </div>
    </div>
<br><br>
<?php include 'footer.php'; ?>