

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Body and overall page styling */
    body {
        margin-top: 50px;
      background-color: #e9ecef;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #343a40;
    }

    /* Profile Card Styling */
    .profile-card {
      margin-top: 40px;
      background-color: #ffffff;
      border-radius: 10px;
      padding: 25px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .profile-img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 3px solid #6c757d;
    }

    .upload-btn {
      margin-top: 15px;
      background-color: #495057;
      border: none;
      color: #ffffff;
      padding: 10px 20px;
      border-radius: 8px;
      font-size: 14px;
    }

    .upload-btn:hover {
      background-color: #343a40;
    }

    .edit-form {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    .form-control {
      border-radius: 5px;
      border-color: #ced4da;
      box-shadow: none;
    }

    .form-control:focus {
      border-color: #495057;
      box-shadow: none;
    }

    h4 {
      margin-bottom: 25px;
      font-size: 22px;
      font-weight: 500;
      color: #495057;
      border-bottom: 2px solid #dee2e6;
      padding-bottom: 10px;
    }

    h5 {
      margin-top: 30px;
      font-size: 18px;
      font-weight: 500;
      color: #495057;
    }

    .btn-primary {
      background-color: #495057;
      border-color: #495057;
      padding: 10px 20px;
      border-radius: 8px;
    }

    .btn-primary:hover {
      background-color: #343a40;
      border-color: #343a40;
    }

    .btn-primary:focus {
      box-shadow: none;
    }

    .btn-primary:active {
      background-color: #23272b;
      border-color: #23272b;
    }

    /* Fine-tuning text styling */
    .profile-card h3, .profile-card p {
      font-weight: 600;
      color: #343a40;
    }

    .profile-card p {
      margin-top: 5px;
      color: #6c757d;
      font-size: 14px;
    }

    small {
      color: #6c757d;
      font-size: 12px;
    }

    /* Social inputs */
    .social-input {
      border-color: #ced4da;
      border-radius: 5px;
    }

    .social-input:focus {
      border-color: #495057;
      box-shadow: none;
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <!-- Profile Picture and Info -->
      <div class="col-md-4 text-center profile-card">
        <img src="https://via.placeholder.com/120" alt="Profile Picture" class="profile-img">
        <h3>NAME</h3>
        <p>@username</p>
        <button class="btn upload-btn">Upload New Photo</button>
        
      </div>

      <!-- Edit Form Section -->
      <div class="col-md-8">
        <form class="edit-form">
          <h4>Edit Profile</h4>

          <!-- Name and Username -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="fullName">Full Name</label>
              <input type="text" class="form-control" id="fullName" >
            </div>
            <div class="form-group col-md-6">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" >
            </div>
          </div>

          <!-- Password and Confirm Password -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <div class="form-group col-md-6">
              <label for="confirmPassword">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" >
            </div>
          </div>

          <!-- Email and Confirm Email -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" >
            </div>
            <div class="form-group col-md-6">
              <label for="confirmEmail">Confirm Email Address</label>
              <input type="email" class="form-control" id="confirmEmail" >
            </div>
          </div>

          <!-- Social Profiles -->
          <h5>Social Profile</h5>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="facebookUsername">Facebook Username</label>
              <input type="text" class="form-control social-input" id="facebookUsername" placeholder="Facebook Username">
            </div>
            <div class="form-group col-md-6">
              <label for="twitterUsername">Twitter Username</label>
              <input type="text" class="form-control social-input" id="twitterUsername" placeholder="Twitter Username">
            </div>
          </div>

          <!-- Update Info Button -->
          <button type="submit" class="btn btn-primary">Update Info</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
