<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #003366;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin: 10px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #3f5c94;
        }
        .success-icon {
            color: #003366;
            font-size: 48px;
            margin-bottom: 20px;
        }
        h1 {
            color: #000c3b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">✓</div>
        <h1>Payment Success</h1>
        <p>Thank you for your payment. Click below to return to the app.</p>
        <a href="goldengoal://payment/success" class="button" id="openApp">Return to App</a>
    </div>

    <script>
        function getQueryParams() {
            const params = new URLSearchParams(window.location.search);
            let queryString = '';
            for(const [key, value] of params) {
                queryString += `/${key}/${value}`;
            }
            return queryString;
        }

        function openApp() {
            const queryParams = getQueryParams();
            const appUrl = `goldengoal://payment/success${queryParams}`;
            window.location.href = appUrl;
            
            setTimeout(function() {
                window.location.href = 'market://details?id=com.goldengoal.myanmar';
            }, 2500);
        }

        window.onload = function() {
            openApp();
        };

        document.getElementById('openApp').addEventListener('click', function(e) {
            e.preventDefault();
            openApp();
        });
    </script>
</body>
</html>