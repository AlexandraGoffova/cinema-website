<?php include_once "../partials/headerLogin.php"; ?>

<!-- CONTACT PAGE -->
    <main class="login register">
        <div class="register-container">
        <h2 class="header">Contact Us</h2>
            <!-- Form for contact, with the same styling as login form -->
        <section class="login-form">
            <form action="contact.php" method="post" class="">
                <label for="name">Name</label>
                <input type="text" class="" name="name" id="name" placeholder="" required>
                <label for="email">Email</label>
                <input type="email" class="" name="email" id="email" placeholder="" required>
                <label for="feedback">Give us your feedback</label>
                <textarea id="feedback" name="feedback" class="feedback" rows="10" required></textarea>
                <!-- Submit Button -->
                <input type="submit" class="submit-button" value="Send">
            </form>

            <div class="msg"></div>
        </section>
        </div>


    </main>
<!-- Script for message -->
    <script>
        let form = document.querySelector('.register form');
        form.onsubmit = function(event) {
            event.preventDefault();
            let form_data = new FormData(form);
            let xhr = new XMLHttpRequest();
            xhr.open('POST', form.action, true);
            xhr.onload = function () {
                document.querySelector('.msg').innerHTML = this.responseText;
                document.querySelector('.msg').classList.add('show');
                let close = document.querySelector('.close');
                close.addEventListener("click", function(){
                    document.querySelector('.msg').classList.remove('show');
                });

            };

            xhr.send(form_data);
        };
    </script>
<?php include_once '../partials/footer.php';


