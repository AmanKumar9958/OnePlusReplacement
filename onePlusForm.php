<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnePlus-Replacement</title>
    <style>
        body{
            height: 100vh;
            width: 100%;
            /* background-color: lightgreen; */
        }
        #form{
            width: 20%;
            border: 2px solid black;
            border-radius: 25px;
            margin: auto;
            padding: 10px;
        }
        h2{
            border: 2px solid black;
            border-radius: 15px;
            text-align: center;
            background-color: red;
        }
        input{
            border: none;
            border-bottom: 1px solid black;
        }
        #button{
            border: 1px solid black;
        }
        @media screen and (max-width: 803px){
            body{
                width: max-content;
                height: 100vh;
            }
            h2{
                width: 90vw;
                font-size: 4vw;
            }
            #form{
                /* width: 100%; */
                width: max-content;
                height: max-content;
            }
        }
    </style>
</head>
<body>
    <div id="form">
        <form action="database.php" method="post">
            <h2>OnePlus-Replacement</h2>
            <input type="text" name="userName" id="userName" placeholder="User Name"> <br>
            <input type="text" name="billName" id="billName" placeholder="Bill Name"> <br>
            <input type="text" name="billNo" id="billNo." placeholder="Bill Number"> <br>
            <input type="number" name="mobNo" id="mobNo." placeholder="Mobile Number"> <br>
            <input type="date" name="date" id="date" placeholder="Date"> <br>
            <input type="text" name="color" id="color" placeholder="Color"> <br> <br>
            <textarea name="address" id="address" cols="21" rows="7" placeholder="Address.."></textarea> <br>
            <input type="submit" value="Submit" onclick="refreshEntry()" id="button">
        </form>
    </div>
    <!-- <script>
        function refreshEntry(){
            var input = document.getElementById('form').getElementsByTagName('input');
            for(var i = 0; i<input.length; i++){
                input[i].value = "";
            }
        }
    </script> -->
</body>
</html>