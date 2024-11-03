<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
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
            color: #28a745;
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
            background-color: #28a745;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            border: 0;
        }
        .container .button:hover {
            background-color: #218838;
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
        <h1>Payment Successful</h1>
        <p>Thank you for your payment. Your transaction has been processed successfully.</p>
        <!-- <a onclick="dingerPaymentSuccess()" class="button">Back to Home</a> -->
        <!-- <button onclick="dingerPaymentSuccess()" class="button">Back to Home</button> -->
        <button onclick="window.location.href='https://goldengoalmyanmar.com/payment/success'" class="button">Back to Home</button>

    </div>
    <script type="text/javascript">
      function dingerPaymentSuccess() {
          // Call Android's navigateToMainActivity() method
          Android.dingerPaymentSuccess();
      }
  </script> 
</body>
</html>
