<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Now</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'figtree', sans-serif;
        }
        .bg-full {
            background-image: url('https://static.wixstatic.com/media/a2efaf_6ecd9ea07d3d4e779aab782d3208ff12~mv2.jpg/v1/fill/w_990,h_1024,al_c,q_85,enc_auto/a2efaf_6ecd9ea07d3d4e779aab782d3208ff12~mv2.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .form-header {
            text-align: center;
            margin-bottom: 1rem;
        }
        .form-header h1 {
            margin: 0;
            font-size: 1.5rem;
            color: #b14428;
        }
        .form-header p {
            margin: 0;
            font-size: 1rem;
            color: #333;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group label {
            display: block;
            font-size: 0.875rem;
            color: #333;
            margin-bottom: 0.5rem;
        }
        .form-group input {
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
        }
        .form-group button {
            width: 100%;
            padding: 0.75rem;
            font-size: 1rem;
            color: #fff;
            background-color: #f0c948;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #d4b03d;
        }
        .close-button {
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 1.5rem;
            color: #333;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="bg-full">
        <div class="form-container">
            <div class="close-button">&times;</div>
            <div class="form-header">
                <h1>Help End Hunger in Papua Today</h1>
                <p>Donate Now</p>
            </div>
            <form action="/" method="POST" id="registrationForm">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="donateInNameOf">Donate in the name of:</label>
                    <input type="text" id="donateInNameOf" name="donateInNameOf">
                </div>
                <div class="form-group">
                    <label for="howDidYouHear">How did you hear about us?</label>
                    <input type="text" id="howDidYouHear" name="howDidYouHear">
                </div>
                <div class="form-group">
                    <button type="submit">Donate</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.querySelector('.close-button').addEventListener('click', () => {
            window.history.back();
        });
    </script>
</body>
</html>
