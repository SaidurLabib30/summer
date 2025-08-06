<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task3</title>
    <link rel="stylesheet" href="http://localhost/SummerWTB/Mid/Task3/CSS/patient.css">
    <script src="Validation.js"></script>
</head>

<body>

    <form action="submit" onsubmit="validateForm()">

        
        <h3>Clinic Patient Registration</h3>

        <label>First Name: </label>
        <br>
        <input type="text" name="first_name" id="first_name">
        <br>
        
        <label>Age: </label>
        <br>
        <input type="text" name="age" id="age">
        <br>
        
        <label>Phone: </label>
        <br>
        <input type="tel" name="phone" id="phone">
        <br>
        <label>Email: </label>
        <br>
        <input type="email" name="email" id="email">
        <br>
        <label>Insurance Provider: </label> 
        <br>
        <select name="" id="">
            <option value="">Select a provider</option>
            
        </select>
        <br>
        <label> Insurance Policy Number: </label>
        <br>
        <input type="text" name="insurance_policy_number" id="insurance_policy_number">
        <br>

        <h2>Additional Information</h2>

        <label>Username: </label>
        <br>
        <input type="text" name="username" id="username">
        <br>

        <label>Password : </label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <label> Confirm Password: </label>
        <br>
        <input type="password" name=" password" id="password">
        <br>
        

        <button type="submit">Submit</button>

    </form>

</body>
</html>