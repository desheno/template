<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
      font-weight: bold;
    }

    input, textarea {
      padding: 10px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      width: 100%;
    }

    button {
      background-color: #4caf50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
  <title>Contact Form</title>
</head>
<body>

  <div class="container">
    <h2>Contact Us</h2>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="phonenumber">Phone Number:</label>
      <input type="phonenumber" id="phonenumber" name="phonenumber" required>

      <label for="province">Province:</label>
      <select id="province" name="province" required>
        <option value="" disabled selected>Select Province</option>
        <option value="province1">Province 1</option>
        <option value="province2">Province 2</option>
        <!-- Add more options as needed -->
      </select>

      <label for="city">City:</label>
      <select id="city" name="city" required>
        <option value="" disabled selected>Select City</option>
        <option value="city1">City 1</option>
        <option value="city2">City 2</option>
        <!-- Add more options as needed -->
      </select>

      <label for="barangay">Barangay:</label>
      <select id="barangay" name="barangay" required>
        <option value="" disabled selected>Select Barangay</option>
        <option value="barangay1">Barangay 1</option>
        <option value="barangay2">Barangay 2</option>
        <!-- Add more options as needed -->
      </select>
      
      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>

</body>
</html>