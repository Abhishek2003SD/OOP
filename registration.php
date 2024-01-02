<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    >
</head>

<body>
    <div class="container">
        <div class="title">COURSE add</div>
        <form action="Include/oop1.php" method="post" name="myForm" onsubmit="return validateForm()">
            <div class="user-details">

                <div class="input-box">
                    <span class="details">Course ID</span>
                    <input type="text" name="courseId">
                    </select>

                    <div class="input-box">
                        <span class="details">Course Name</span>
                        <select name="cName">
                            <option ></option>
                            <option >Software</option>
                            <option >Hardware</option>
                            <option >Multimedia</option>
                            <option >ICT NVQ IV</option>
                            <option >Electronic</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Duration</span>
                        <input type="text" name="duration">
                    </div>

                    <div class="input-box">
                        <span class="details">Course fees</span>
                        <select name="cFees">
                        <option ></option>
                            <option >Rs 16000</option>
                            <option >Rs 12000</option>
                            <option >Rs 5000</option>
                            <option >Rs 17000</option>
                            <option >Rs 11000</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Registration fees</span>
                        <input type="text" name="RegistrationFees">
                    </div>

                    <div class="input-box">
                        <span class="details">Course type</span>
                        <select name="cType">
                        <option ></option>
                            <option >full time</option>
                            <option >part time</option>
                        </select>


                        <div class="input-box">
                            <span class="details">Start date</span>
                            <input type="date" name="StartDate">
                        </div>

                        <div class="input-box">
                            <span class="details">Lecture name</span>
                            <input type="text" placeholder="" name="lName">
                        </div>

                    </div>

                    <div class="button">
                        <input type="submit" value="Courses Add" name="submit">
                    </div>
                    <h4 id="abc" style="color:red; background:yellow; margin-top:5;"></h4>
        </form>
    </div>
    <script>
        function validateForm() {
            let y = document.getElementById('abc');
            let cid = document.forms["myForm"]["courseId"].value;
            let cname = document.forms["myForm"]["cName"].value;
            let cd = document.forms["myForm"]["duration"].value;
            let cf = document.forms["myForm"]["cFees"].value;
            let cr = document.forms["myForm"]["RegistrationFees"].value;
            let ct = document.forms["myForm"]["cType"].value;
            let sd = document.forms["myForm"]["StartDate"].value;
            let ln = document.forms["myForm"]["lName"].value;
            let check = false;

            if (cid == "" || cname == "" || cd == "" || cf == "" || cr == "" || ct == "" || sd == "" || ln == "") {
                if (cid == "") {
                    y.innerText = "course id not";
            } else
                if (cname == "") {
                        y.innerText = "course name not";
            } else
                if (cd == "") {
                    y.innerText = "course duration not";
            } else
                if (cf == "") {
                     y.innerText = "course fees not";
            } else
                if (cr == "") {
                    y.innerText = "registration fees not";
            } else
                if (ct == "") {
                    y.innerText = "course type not";
            } else

                if (sd == "") {
                    y.innerText = "start date not";
            } else
                if (ln == "") {
                    y.innerText = "instructor name not";
                }

            } else {
                check = true;
            }

            return check;
        }
    </script>
</body>

</html>