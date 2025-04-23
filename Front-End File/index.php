<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Index</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
</head>

<body>
  <div class="page-wrapper">
    <header>
      <h2><img src="logo/logo1.png" alt="Logo" class="logo"> WELCOME TO C!RTs</h2>
      <nav>
        <a href="#">HOME</a>
        <a href="#" onclick="popup('contact-popup')">CONTACT</a>
        <a href="#">ABOUT US</a>
        <a href="#" onclick="popup('feedback-popup')">FEEDBACK</a>
      </nav>

      <div class='sign-in-up'>
        <button type='button' onclick="popup('login-popup')">SIGN IN</button>
        <button type='button' onclick="popup('signup-popup')">SIGN UP</button>
      </div>
    </header>

    <div class="rating-display">
      ⭐ 4.5 / 5 from 120 reviews
    </div>

    <div class="home-image">
      <img src="image/img1.jpg" alt="Welcome Image">
    </div>
  </div>

  <div class="popup-container" id="login-popup" style="display: none;">

    <div class="signin-title">
      <span>SIGN IN FORM</span>
    </div>

    <div class="popup login">
      <div class="signin-close-btn-wrapper">
        <button type="reset" class="signin-close-btn" onclick="popup('login-popup')">✖</button>
      </div>

      <form method="POST" action="#">
        <div class="form-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email_username" placeholder="E-mail or Username" required>
        </div>

        <div class="form-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password_1" id="login-password" placeholder="Password" required>
          <i class="fa fa-eye toggle-password" onclick="togglePassword('login-password', this)"></i>
        </div>

        <div class="remember-recover-row">
          <div class="remember-me">
            <input type="checkbox" name="remember_me" id="remember_me">
            <label for="remember_me">Remember me</label>
          </div>
          <a href="#reset" class="recover">Recover Password</a>
        </div>

        <div class="form-group-submit">
          <button type="submit" class="signin-btn" name="login">Sign in</button>
        </div>
      </form>

      <p class="or">----- Or sign in with -----</p>
      <div class="icons">
        <i class="fab fa-github"></i>
        <i class="fab fa-c"></i>
        <i class="fab fa-twitter"></i>
      </div>
    </div>

    <div class="signin-link">
      <p>New to CIRTs? <a href="#signup">Create an account</a></p>
    </div>

  </div>

  <div class="popup-container" id="signup-popup" style="display: none;">
    <div class="signup-title">
      <span>SIGN UP FORM</span>
    </div>

    <div class="signup popup">
      <div class="signup-close-btn-wrapper">
        <button type="reset" class="signup-close-btn" onclick="popup('signup-popup')">✖</button>
      </div>

      <form method="POST" action="signup.php">
        <div class="form-group">
          <i class="fas fa-user"></i>
          <input type="text" name="fullname" placeholder="Full Name" required>
        </div>

        <div class="form-group">
          <i class="fa-solid fa-id-badge"></i>
          <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="form-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" placeholder="Enter Email" required>
        </div>

        <div class="form-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password_1" id="signup-password" placeholder="Password" required>
          <i class="fa fa-eye toggle-password" onclick="togglePassword('signup-password', this)"></i>
        </div>

        <div class="form-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password_2" id="signup-confirm-password" placeholder="Confirm Password" required>
          <i class="fa fa-eye toggle-password" onclick="togglePassword('signup-confirm-password', this)"></i>
        </div>

        <div class="form-group">
          <button type="submit" class="signup-btn" name="signup">Sign up</button>
        </div>
      </form>

      <p class="or">
        ----- Or sign up with -----
      </p>
      <div class="icons">
        <i class="fab fa-github"></i>
        <i class="fab fa-c"></i>
        <i class="fab fa-twitter"></i>
      </div>
    </div>

    <div class="signup-link">
      <p>Already have an account? <a href="#login">Sign in</a></p>
    </div>
  </div>

  <div class="popup-container" id="feedback-popup" style="display: none;">
    <div class="feedback-title">
      <span>FEEDBACK FORM</span>
    </div>

    <div class="popup feedback">
      <div class="feedback-close-btn-wrapper">
        <button type="button" class="feedback-close-btn close-btn">✖</button>
      </div>

      <span>We'd Love Your Feedback</span>

      <form action="feedback.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>

        <div class="rating-container">
          <label class="rating-label">On a scale of 1 to 5, How happy are you with CIRTs?</label>
          <div class="star-rating">
            <input type="radio" name="rating" value="5" id="star5" required><label for="star5">★</label>
            <input type="radio" name="rating" value="4" id="star4"><label for="star4">★</label>
            <input type="radio" name="rating" value="3" id="star3"><label for="star3">★</label>
            <input type="radio" name="rating" value="2" id="star2"><label for="star2">★</label>
            <input type="radio" name="rating" value="1" id="star1"><label for="star1">★</label>
          </div>
        </div>

        <textarea name="message"
          placeholder=".......Share your experience or suggestions....... We appreciate every word!..............."
          rows="4" required></textarea>

        <button type="submit" class="feedback-btn">Submit</button>
      </form>
    </div>

    <div class="feedback-link">
      <p>Need support? <a href="#contact">Contact us here</a></p>
    </div>
  </div>

  <div class="popup-container" id="contact-popup" style="display: none;">
    <div class="contact-title">
      <span>Contact FORM</span>
    </div>

    <div class="popup contact">
      <div class="contact-close-btn-wrapper">
        <button type="button" class="contact-close-btn close-btn">✖</button>
      </div>

      <span>Contact Our Team</span>

      <form action="contact.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>

        <select name="preferred_contact" required>
          <option value="" disabled selected>Select Preferred Response</option>
          <option value="Email">Email</option>
          <option value="Phone">Phone</option>
          <option value="No reply needed">No reply needed</option>
        </select>

        <select name="subject" required>
          <option value="" disabled selected>Select Subject</option>
          <option value="General Inquiry">General Inquiry</option>
          <option value="Technical Issue">Technical Issue</option>
          <option value="Account Problem">Account Problem</option>
          <option value="Other">Other</option>
        </select>

        <textarea name="message"
          placeholder="...Need help, got ideas, or just wanna chat?... ....Reach out—we’re just a message away!...."
          rows="5" required></textarea>

        <button type="submit" class="contact-btn">Submit</button>
      </form>
    </div>

    <div class="contact-link">
      <p>Spotted something? <a href="#feedback">Feedback here</a></p>
    </div>
  </div>


  <div class="popup-container" id="reset-popup" style="display: none;">

    <div class="reset-password-title">
      <span>RESET PASSWORD</span>
    </div>
    <div class="popup reset-password">

      <div class="reset-password-close-btn-wrapper">
        <button type="reset" class="reset-password-close-btn" onclick="popup('reset-popup')">✖</button>
      </div>

      <form method="POST" action="">
        <div class="form-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email_username" placeholder="E-mail or Username" required>
        </div>

        <div class="form-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="new_password" placeholder="New password" required id="reset-password">
          <i class="fa fa-eye toggle-password" onclick="togglePassword('reset-password', this)"></i>
        </div>

        <div class="form-group-submit">
          <button type="submit" class="reset-password-btn">Reset</button>
        </div>

      </form>
    </div>
    <div class="reset-password-link">
      <p>Remembered your password? <a href="#login">Sign in</a></p>
    </div>
  </div>

  <div id="login-popup" class="popup">
  </div>

  <div id="signup-popup" class="popup">
  </div>

  <div id="feedback-popup" class="popup">
  </div>

  <div id="contact-popup" class="popup">
  </div>

  <div id="reset-password-popup" class="popup">
  </div>

  <script src="script.js"></script>

  <footer>
    <div class="footer-container">
      <div class="footer-center">
        <li>&copy; 2025 C!RTs, Inc</li>
        <li>• DEVELOPED BY CYBERBOY_SANN & BUNN ☺</li>
        <a href="#"><i class="material-icons-round" style="color:#FF5722;">lock</i> Privacy</a> |
        <a href="#"><i class="material-icons-round" style="color:#1b0bfa;">gavel</i> Terms & Conditions</a> |
        <a href="#"><i class="material-icons-round" style="color:#06f3b0;">info</i> What is C!RTs?</a> |
        <a href="#"><i class="material-icons-round" style="color:#4CAF50;">copyright</i> Copyright</a> |
        <a href="#"><i class="material-icons-round" style="color:#eb8806;">cookie</i> Cookie Policy</a>
      </div>

      <div class="footer-right social-links">
        <a href="#" class="tooltip" data-tooltip="github"><i class="fab fa-github"></i></a>
        <a href="#" class="tooltip" data-tooltip="C!RTs"><i class="fab fa-c"></i></a>
        <a href="#" class="tooltip" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </footer>
</body>

</html>
