
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

<style>

    .contact-section {
        min-height: 100vh;
        padding: 80px 20px;
        background: linear-gradient(135deg, #667eea, #764ba2, #f093fb);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contact-container {
        width: 100%;
        max-width: 1100px;
    }

    .contact-header {
        text-align: center;
        color: white;
        margin-bottom: 45px;
    }

    .contact-header h1 {
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .contact-header p {
        font-size: 18px;
        max-width: 700px;
        margin: auto;
    }

    .contact-content {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 30px;
        align-items: stretch;
    }

    .contact-info,
    .contact-form-box {
        background: rgba(255, 255, 255, 0.95);
        padding: 35px;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .contact-info h2,
    .contact-form-box h2 {
        color: #5a3d9c;
        margin-bottom: 15px;
    }

    .contact-info > p {
        color: #666;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .contact-card {
        display: flex;
        align-items: center;
        gap: 18px;
        padding: 18px;
        margin-bottom: 18px;
        border-radius: 15px;
        background: linear-gradient(135deg, #f5f7ff, #fdf2ff);
        transition: 0.3s ease;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(118, 75, 162, 0.15);
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea, #764ba2);
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 23px;
        flex-shrink: 0;
    }

    .contact-card h3 {
        margin: 0 0 5px;
        color: #333;
    }

    .contact-card p {
        margin: 0;
        color: #777;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 600;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid #e5e5e5;
        border-radius: 12px;
        font-size: 15px;
        outline: none;
        transition: 0.3s ease;
        box-sizing: border-box;
        font-family: inherit;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #764ba2;
        box-shadow: 0 0 0 3px rgba(118, 75, 162, 0.1);
    }

    .form-group textarea {
        resize: vertical;
    }

    .send-btn {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        font-size: 17px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .send-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(118, 75, 162, 0.35);
    }

    @media (max-width: 768px) {

        .contact-section {
            padding: 50px 15px;
        }

        .contact-header h1 {
            font-size: 36px;
        }

        .contact-content {
            grid-template-columns: 1fr;
        }

        .contact-info,
        .contact-form-box {
            padding: 25px;
        }
    }

</style>
<?php include('footer.php'); ?>
