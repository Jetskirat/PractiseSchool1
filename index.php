<!DOCTYPE html>
<html>
<head>
  <title>Student Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group input[type="file"] {
      margin-top: 5px;
    }

    .form-group .error {
      color: red;
      font-size: 14px;
      margin-top: 5px;
    }

    .submit-btn {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .submit-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Student Registration Form</h2>
    <form action="submit_form.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="first_name">First Name*</label>
        <input type="text" id="first_name" name="first_name" required>
      </div>
      <div class="form-group">
        <label for="last_name">Last Name*</label>
        <input type="text" id="last_name" name="last_name" required>
      </div>
      <div class="form-group">
        <label for="parent_name">Parent Name</label>
        <input type="text" id="parent_name" name="parent_name">
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="class">Class</label>
        <input type="text" id="class" name="class">
      </div>
      <div class="form-group">
        <label for="student_id">Student ID</label>
        <input type="text" id="student_id" name="student_id">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" id="dob" name="dob">
      </div>
      <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" id="photo" name="photo">
      </div>
      <div class="form-group">
        <label for="father_photo">Father's Photo</label>
        <input type="file" id="father_photo" name="father_photo">
      </div>
      <div class="form-group">
        <label for="mother_photo">Mother's Photo</label>
        <input type="file" id="mother_photo" name="mother_photo">
      </div>
      <div class="form-group">
        <input type="submit" class="submit-btn" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>
