<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>

    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="" method="post" action="/webparenting/index.php/login" >
        <div class="flex-direction: column">
            <label for="">Username</label> <br>
            <input type="text"><br>

            <label for="">Password</label> <br>
            <input type="password"><br>

            <label for="">Repeat password</label> <br>
            <input type="password"><br>
        </div>

        <div class="addInfo">
            <label for="">Gender</label>
            <select name="gender" id="#">
                <option value="">Male</option>
                <option value="">Female</option>
                <option value="">Rather not SAY</option>
            </select>
        
        
        </div>
        <br>
        <div class="submit">
            <span>
                <input type="checkbox" id="##">
                <label for="">Agree terms and Services</label>
            <br>  
            </span>  
            <button type="submit">Submit</button>
        </div>

    </form>
</body>
</html>