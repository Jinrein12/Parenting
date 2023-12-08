<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>

    <link rel="stylesheet" href="login.css">
</head>
<body>

    
    <form method="post" action="/webparenting/index.php/login">  
        <section class="login-title">
                <h3>Login</h3>
                <h2>Parenting Seminar Attendance</h2>
                
                
        </section>
        <br>
        <br>
        <div class="form-group">
            <input placeholder="Username" type="text" name="username" value="<?= isset($username) ? $username:""?>"> <br>
        </div>

        <div class="form-group">
            <input placeholder="Password" type="password" name="username" value="<?= isset($password) ? $password:""?>"><br>
        </div>
<!-- 
        <div class="addInfo">
            <label for="">Gender</label>
            <select name="gender" id="#">
                <option value="">Male</option>
                <option value="">Female</option>
                <option value="">Rather not SAY</option>
            </select>
        </div> 
-->
        <br>
        <div class="submit">
            <!-- <span>
                <input type="checkbox" id="##">
                <label for="">Agree terms and Services</label>
            <br>  
            </span>   -->
            <button type="submit">Submit</button>
        </div>

    </form>
</body>
</html>