<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <?php include 'inc/head.php';?>
    </head>
    <body>
        <!-- Header including the logo and the main navigation -->
        <header class="page-header">
            <?php include 'inc/nav.php';?>
        </header>
        <div>
            <h1>Contact</h1>

            <div>
                Josh Reiber<br>
                123 Main Street<br>
                10021 New York<br>
                New York, US<br>
                <br>
                Tel <a href="tel:4196021234" alt="Telephone contact Number">419-602-1234</a><br>
                Skype <a href="skype:hello.jreiber"> hello.jreiber</a><br>
                <a href="mailto:jreiber9@gmail.com">jreiber9@gmail.com</a>
                <a href="mailto:jreiber9@gmail.com">Contact me</a>
            </div>
            <form action="" method="post" id="contact-form">
                <label class="standar-label" for="contact-email">E-mail: </label>
                <input type="email" id="contact-email" required>
              
                <label class="standard-label" for="contact-tel">Telephone: </label>
                <input type="tel" id="contact-tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}">
              
                <label class="standard-label" for="contact-message">Message: </label>
                <textarea maxlength="240" required=""></textarea>
                <input type="submit" id="contact-message" value="Send message">
            </form>
        </div>
        <?php include 'inc/footer.php';?>
        <script src="js/tota11y.min.js"></script>

    </body>
</html>