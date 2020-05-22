
<!DOCTYPE html>
<html>

<head>

    <title>Axels forum</title>
        <link rel="stylesheet" href="labbish.css"
            type="text/css">
            <?php

include 'db_connect.php';
include 'feed.php';
setComments($db);

 ?>
</head>

<body>

    <div id="container">
        <div id="header">
            <h1>Axels forum</h1>
            <hr />
        </div>

        <div id="content">
            <div id="upload">
                <h3>Lägg upp ett inlägg:</h3>
                <form name="info" id="info" action="labb.php" onsubmit="return validateForm()" method="post">
                    <label for="name">Namn:</label><br>
                    <input type="text" id="Namn" name="Namn"><br>
                    <label for="email">E-mailadress:</label><br>
                    <input type="text" id="Email" name="Email"><br>
                    <label for="Inlägg">Meddelande:</label><br>
                    <textarea id="Inlägg" name="Inlägg" type="text">  </textarea>
                    <button id="submitbtn" onclick ="validateForm()" type="submit" href="feed.php" input name="submit_data"
                    value="skicka">Publicera!  </button>
        
                </form>
            </div>
            <div id="posts">
                <h3>Upplagda inlägg:</h3>
                <?php
                getComments($db);
                ?>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var submitbtn = document.getElementById('submitbtn');
        submitbtn.addEventListener("click", validateForm);
        function validateForm() {
            var jname = document.info.iname.value;
            var jemail = document.info.imail.value;
            var jmessage = document.message.imessage.value;

            if (jname.value == "") {
                alert("You must write a name!")
                console.log("This is not a valid name");
            }
            else {
                console.log("This is a valid name")
            }

            ValidateEmail(jemail);

        }


  


    </script>
</body>

</html>
