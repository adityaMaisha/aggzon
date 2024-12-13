<?php include('include/header.php') ?>

<style>
  .privacy-policy-section {
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    color: #333;
    padding: 30px;
    margin: 120px auto 20px auto;
    max-width: 900px;
    border-radius: 15px;
    /* Added rounded corners */
    /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); */
    border: 1px solid #dadada;
    /* Subtle border for structure */
  }

  .privacy-policy-section h2 {
    text-align: center;
    color: #ff5252;
    font-size: 2.5em;
    margin-bottom: 20px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    /* Added subtle text shadow */
  }

  .privacy-policy-section h3 {
    color: #333;
    font-size: 1.8em;
    margin-top: 20px;
    font-weight: bold;
    border-left: 4px solid #ff5252;
    /* Accent bar */
    padding-left: 10px;
    /* Spacing after the bar */
  }

  .privacy-policy-section ul {
    padding-left: 30px;
    margin-top: 10px;
  }

  .privacy-policy-section li {
    margin-bottom: 15px;
    line-height: 1.8;
    color: #555;
    font-size: 1em;
    position: relative;
  }

  .privacy-policy-section li::before {
    content: '\2022';
    /* Bullet point symbol */
    color: #fff;
    /* Highlighted bullet color */
    font-size: 1.5em;
    position: absolute;
    left: -20px;
    top: 0;
  }

  .privacy-policy-section .content {
    margin-top: 20px;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .privacy-policy-section {
      padding: 20px;
    }

    .privacy-policy-section h2 {
      font-size: 2.2em;
    }

    .privacy-policy-section h3 {
      font-size: 1.6em;
    }
  }

  @media (max-width: 480px) {
    .privacy-policy-section {
      padding: 15px;
    }

    .privacy-policy-section h2 {
      font-size: 1.8em;
    }

    .privacy-policy-section h3 {
      font-size: 1.4em;
    }

    .privacy-policy-section li {
      font-size: 0.9em;
    }
  }

</style>

<div class="container">

  <div class="privacy-policy-section">
    <h2>Privacy Policy</h2>

    <br>

    <div class="content">
      <h3>1. Introduction</h3>
      <ul>
        <li>We value your privacy and are committed to protecting your personal data. This Privacy Policy outlines how we collect, use, and safeguard your information.</li>
      </ul>

      <br>

      <h3>2. Information We Collect</h3>
      <ul>
        <li>Personal information you provide to us, such as your name, email address, and contact details.</li>
        <li>Automatically collected information, including your IP address, browser type, and usage data.</li>
      </ul>

      <br>

      <h3>3. How We Use Your Information</h3>
      <ul>
        <li>To provide, maintain, and improve our services.</li>
        <li>To communicate with you regarding updates, promotions, or customer support.</li>
        <li>To ensure security and prevent fraudulent activities.</li>
      </ul>

      <br>

      <h3>4. Data Sharing</h3>
      <ul>
        <li>We do not sell or share your personal information with third parties, except as required by law or to provide our services.</li>
        <li>We may share data with trusted partners for analytics or technical support purposes.</li>
      </ul>

      <br>

      <h3>5. Your Rights</h3>
      <ul>
        <li>You have the right to access, modify, or delete your personal data.</li>
        <li>You can opt out of marketing communications at any time by following the unsubscribe link in our emails.</li>
      </ul>

      <br>

      <h3>6. Security Measures</h3>
      <ul>
        <li>We implement strict security measures to protect your data from unauthorized access, loss, or misuse.</li>
      </ul>

      <br>

      <h3>7. Updates to This Policy</h3>
      <ul>
        <li>We reserve the right to update this Privacy Policy periodically. Changes will be communicated via this page, so please review it regularly.</li>
      </ul>
    </div>
  </div>

</div>



<?php include('include/footer.php') ?>