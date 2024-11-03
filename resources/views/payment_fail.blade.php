<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Failed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffefef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
            max-width: 500px;
            width: 100%;
            text-align: center;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            color: #dc3545;
            font-size: 28px;
            margin-bottom: 15px;
        }
        .container p {
            color: #333;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .container .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            color: #fff;
            background-color: #dc3545;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .container .button:hover {
            background-color: #c82333;
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
            .container h1 {
                font-size: 24px;
            }
            .container p {
                font-size: 14px;
            }
            .container .button {
                padding: 8px 16px;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Failed</h1>
        <p>We're sorry, but your transaction could not be completed. Please try again or contact support if the issue persists.</p>
        <a onclick="dingerPaymentFail()" class="button">Contact Support</a>
    </div>

    <script type="text/javascript">
      function dingerPaymentFail() {
          // Call Android's navigateToMainActivity() method
          Android.dingerPaymentFail();
      }
  </script> 
</body>

</html>
