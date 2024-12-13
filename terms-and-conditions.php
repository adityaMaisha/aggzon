<?php include('include/header.php') ?>

<style>
  .terms-conditions-section {
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    color: #333;
    padding: 30px;
    margin: 120px auto 20px auto;
    max-width: 900px;
    border-radius: 15px;
    /* Added rounded corners */
    /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); */
    border: 1px solid #dadada;
    /* Subtle border for structure */
  }

  .terms-conditions-section h2 {
    text-align: center;
    color: #ff5252;
    font-size: 2.5em;
    margin-bottom: 20px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    /* Added subtle text shadow */
  }

  .terms-conditions-section h3 {
    color: #333;
    font-size: 1.8em;
    margin-top: 20px;
    font-weight: bold;
    border-left: 4px solid #ff5252;
    /* Accent bar */
    padding-left: 10px;
    /* Spacing after the bar */
  }

  .terms-conditions-section ul {
    padding-left: 30px;
    margin-top: 10px;
  }

  .terms-conditions-section li {
    margin-bottom: 15px;
    line-height: 1.8;
    color: #555;
    font-size: 1em;
    position: relative;
  }

  .terms-conditions-section li::before {
    content: '\2022';
    /* Bullet point symbol */
    color: #fff;
    /* Highlighted bullet color */
    font-size: 1.5em;
    position: absolute;
    left: -20px;
    top: 0;
  }

  .terms-conditions-section .content {
    margin-top: 20px;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .terms-conditions-section {
      padding: 20px;
    }

    .terms-conditions-section h2 {
      font-size: 2.2em;
    }

    .terms-conditions-section h3 {
      font-size: 1.6em;
    }
  }

  @media (max-width: 480px) {
    .terms-conditions-section {
      padding: 15px;
    }

    .terms-conditions-section h2 {
      font-size: 1.8em;
    }

    .terms-conditions-section h3 {
      font-size: 1.4em;
    }

    .terms-conditions-section li {
      font-size: 0.9em;
    }
  }
</style>

<div class="container">

  <div class="terms-conditions-section">
    <h2>Terms and Conditions</h2>

    <br>

    <div class="content">
      <h3>1. Introduction</h3>
      <ul>
        <li>Welcome to our website! By accessing and using this website, you agree to comply with and be bound by the following terms and conditions. Please read them carefully before using our website.</li>
      </ul>

      <br>

      <h3>2. General Terms</h3>
      <ul>
        <li>These terms apply to all users of this website.</li>
        <li>By accessing this website, you confirm that you are at least 18 years old or have the consent of a legal guardian.</li>
        <li>We reserve the right to modify or update these terms at any time without prior notice.</li>
      </ul>

      <br>

      <h3>3. User Conduct</h3>
      <ul>
        <li>You agree to use this website in a lawful manner and not engage in any activity that could harm or disrupt the site.</li>
        <li>Users are prohibited from submitting false or misleading information.</li>
        <li>You agree not to copy, modify, or distribute any content from this website without permission.</li>
      </ul>

      <br>

      <h3>4. Privacy Policy</h3>
      <ul>
        <li>Your privacy is important to us. Please refer to our Privacy Policy for detailed information on how we collect and use your data.</li>
      </ul>

      <br>

      <h3>5. Limitation of Liability</h3>
      <ul>
        <li>We do not accept responsibility for any damages or losses arising from the use of this website.</li>
        <li>We make no guarantees regarding the accuracy or reliability of the information presented on this website.</li>
      </ul>

      <br>

      <h3>6. Governing Law</h3>
      <ul>
        <li>These terms and conditions are governed by the laws of [Country Name]. Any disputes will be resolved under the jurisdiction of [Country Name] courts.</li>
      </ul>

      <br>

      <h3>7. Changes to Terms</h3>
      <ul>
        <li>We reserve the right to update these terms and conditions at any time. It is your responsibility to regularly review this page for changes.</li>
      </ul>
    </div>
  </div>

</div>



<?php include('include/footer.php') ?>