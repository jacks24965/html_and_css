
<?php include('header.php'); ?>

<section class="contact-section">

    <div class="contact-container">

        <div class="contact-header">
            <h1>Contact Me</h1>
            <p>Have a question, project idea, or just want to say hello? I'd love to hear from you!</p>
        </div>

        <div class="contact-content">

            <!-- Contact Information -->
            <div class="contact-info">

                <h2>Let's Connect</h2>
                <p>
                    Feel free to contact me through any of the following ways.
                    I am always happy to discuss new opportunities and ideas.
                </p>

                <div class="contact-card">
                    <div class="contact-icon">📧</div>
                    <div>
                        <h3>Email</h3>
                        <p>your-email@example.com</p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">📱</div>
                    <div>
                        <h3>Phone</h3>
                        <p>+60 12-345 6789</p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">📍</div>
                    <div>
                        <h3>Location</h3>
                        <p>Malaysia</p>
                    </div>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="contact-form-box">

                <h2>Send Me a Message</h2>

                <form action="#" method="POST">

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name"
                               placeholder="Enter your name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email"
                               placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject"
                               placeholder="Enter subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message"
                                  rows="6"
                                  placeholder="Write your message here..."
                                  required></textarea>
                    </div>

                    <button type="submit" class="send-btn">
                        Send Message ✈️
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<?php include('footer.php'); ?>
