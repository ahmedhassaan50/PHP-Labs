<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="parentDiv">
    <form class="formstyle" action="#" method="POST">
        <h2 style="text-align: center;">Application Registeration. <br>Fields marked with <span style="color: red;">*</span> are mandatory.</h2>
        <table>
            <tr>
                <td class="left"><label for="name"> Name:</label></td>
                <td><input type="text" name="name"><span style="color: red;">*</span></td>
                <td><?php if (isset($_POST ['submit'])) 
                        if (empty ($_POST ['name'])) echo "<span style='color: red;'>Name is required.</span>"?></td>
            <tr>
                <td class="left"><label for="email">E-Mail:</label></td>
                <td><input type="email" name="email"><span style="color: red;">*</span></td>
                <td><?php if (isset($_POST ['submit'])) 
                        if (empty ($_POST ['email'])) echo "<span style='color: red;'>E-Mail is required.</span>"?></td>
            </tr>
            <tr>
                <td class="left"><label for="groupnum">Group #:</label></td>
                <td><input type="number" name="groupnum"></td>
            </tr>
            <tr>
                <td class="left"> <label for="classdetails"> Class Details:</label></td>
                <td> <textarea name="classdetails" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td class="left"> <label for="gender"> Gender:</label></td>
                <td><input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female </label><span style="color: red;">*</span>
                </td>
                <td><?php if (isset($_POST ['submit'])) 
                        if (empty ($_POST ['gender'])) echo "<span style='color: red;'>Gender is required.</span>"?></td>
                
            </tr>
            <tr>
                <td class="left"> <label for="courseID"> Select Courses:</label></td>
                <td><select name="courses[]" id="courses" multiple>
                    <option value="" selected disabled >--Select one or more using ctrl--</option>
                    <option value="PHP">PHP</option>
                    <option value="JaveScript">JavaScript</option>
                    <option value="MySQL">MySQL</option>
                    <option value="HTML">HTML</option>
                    </select></td>
            </tr>
            <tr>
            <td></td>
                <td><input type="checkbox" name="checkAgree" />I accept the <a href="#" style="color: blue; text-decoration: underline;">Terms of use</a><span style="color: red;">*</span></td>
                <td><?php if (isset($_POST ['submit'])) 
                        if (empty ($_POST ['checkAgree'])) echo "<span style='color: red;'>Agreement check is required.</span>"?></td>
            </tr>
        </table>
        <input  type="submit" name="submit" value="Submit">
    </form>
    </div>
    <?php
    /*if (($_POST['submit'] == 'Submit') && empty($_POST["name"])) {
    echo $NameError= "Name is Required.";}*/
    
    if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["gender"])) {
        echo "Welcome ". $_POST['name']. "<br />";
        echo "Your Inputs are: "."<br>";
        echo "E-Mail: ". $_POST['email']. "<br />";
        echo "Group Number: ". $_POST ['groupnum']. "<br />";
        echo "Class Details: ". $_POST ['classdetails']. "<br />";
        echo "Gender: ". $_POST ['gender']. "<br />";
        /*echo "Selected Courses: ". $_POST ['courses']. "<br />";*/
        echo "Selected Courses: ". "<br />";
        foreach ($_POST['courses'] as $courses)
        print "$courses<br/>";
    }
    
?>
</body>
</html>