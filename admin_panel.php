<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-8/0p9Dix4wboIuvj5FPJLNjzKrVRyG0LLbJhGuPzL+/GqKkJ7UAa60RFDuac/SzVvgLUVGq3iQfcfDbc5q+kAA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100%;
            background: #2c3e50;
            padding-top: 20px;
        }
        
        .sidebar h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        
        .sidebar ul li {
            padding: 10px;
            text-align: center;
        }
        
        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .sidebar ul li a:hover {
            background: #34495e;
        }
        
        .content {
            margin-left: 250px;
            padding: 20px;
            text-align: center; /* Shtimi: Qendra tekstin */
        }
        
        .content h2 {
            color: #333;
            margin-bottom: 20px;
        }
        
        .content p {
            color: #666;
        }
        
        .container {
            max-width: 100%; /* Shkalla maksimale e kontejnerit */
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        
        .btn-primary {
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: #fff;
            cursor: pointer;
            width: 100%; /* Ndryshimi: Butoni mbush tërësinë e prindit */
        }
        
        .btn-primary:hover {
            background-color: #45a049;
        }
        
        .response {
            margin-top: 20px;
            font-weight: bold;
        }
        
      .header {
        display: none;
      }

     .preloaderBg {
        position: fixed;
        z-index: 10;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
      }

      .preloader {
        position: absolute; /* Position the logo relative to its parent */
        top: 50%; /* Move the logo 50% from the top of its parent */
        left: 50%; /* Move the logo 50% from the left of its parent */
        transform: translate(-50%, -50%); /* Center the logo */
        background: url(images/post.png) no-repeat center;
        background-size: 150px;
        width: 150px; /* Adjusted width to fit inside the circle */
        height: 150px; /* Adjusted height to fit inside the circle */
      }

      .preloader2 {
        border: 5px solid #f3f3f3;
        border-top: 5px solid #f00;
        border-radius: 50%;
        width: 250px;
        height: 250px;
        animation: spin 1s ease-in-out infinite;
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }

    
    </style>
</head>

<body onload="preloader()">
  
  <div class="preloaderBg" id="preloader">
    <div class="preloader"></div>
    <div class="preloader2"></div>
  </div>

  <script>
    var preloadTime;

    function preloader() {
      preloadTime = setTimeout(showPage, 2000); // Adjusted delay to 1 second (1000 milliseconds)
    }

    function showPage() {
      document.getElementById("preloader").style.display = "none";
      document.querySelector("header").style.display = "flex"; 
    }
  </script>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="shto_postim.php">Add Post</a></li>
            <li><a href="edit_post.php">Edit Post</a></li>
            <li><a href="#">Delete Post</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="container">
            <h2><i class="fas fa-exclamation-circle"></i> Dashboard</h2>
            <p>Welcome to the admin panel. Here you can manage your website.</p>
            <img src="images/nit-removebg-preview.png" alt="">
        </div>
    </div>
</body>
</html>
