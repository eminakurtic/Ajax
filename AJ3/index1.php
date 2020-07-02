<?php
    include 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJ3.2</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }
        table, td, th{
            border: 1px solid black;
            padding: 5px;
        }
        th{
            text-align: left;
        }
    </style>
</head>
<body>
    <form>
        <select name="users" onchange="showUser(this.value)">
        <option value="" disabled>Select a person: </option>
        <?php
            $sql = "SELECT * FROM users";
            $result = mysqli_query($connection, $sql);
            while($row = mysqli_fetch_assoc($result)){
                echo "<option value='" . 
                $row['id'] . "'>" . 
                " " . 
                $row['lastname'] . 
                "</option>";
            }
        </select>
    </form>
    <script>
            function showUser(usser){
                if(window.XMLHttpRequest){
                    http = new XMLHttpRequest();
                }else{
                    http = new ActiveXObject ("Microsoft.XMLHTTP");
                }

                http.onreadystatechange = function(){
                    if(this.readyState = 4 && this.status == 200){
                        document.getElementById("userInfo");
                        .innerHTML = this.responseText;
                    }
                }

                http.open("POST", "userinfo1.php", true);
                http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                http.send("{'name':'" + user + "'}")
            }
            
    </script>
</body>
</html>