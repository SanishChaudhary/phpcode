<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <head>
        <style>
            h3 {
                color: #0ef;
            }

            body {
                color: #0ef;
                font-size: 30px;
                border-color: #0ef;
                width: 70%;
                height: 200%;


            }

            button {
                color: red;
                font-size: 20px;
                
            }

            button:hover {
                background-color: #0ef;
            }
        </style>

    </head>

<body>
    <center>

        <h3>Registration Form</h3>
        <form action="insert.php" method="POST">

            <label for="name">Name: </label>
            <input type="name" id="name" placeholder="Enter name" name="name">
            <p><label for="addsress">Address:</label>
                <input type="address" id="address" placeholder="Enter address" name="address">
            <p><label for="contact">Contact:</label>
                <input type="contact" id="contact" placeholder="Enter contact" name="contact">


            <p><button type="submit">Submit</button>
        </form>

    </center>

    </form>
</body>

</html>