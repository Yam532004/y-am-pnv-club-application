<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        form {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        h1{
            text-align: center;
        }

        label {
            display: inline-flex;
            width: 200px;
            margin-bottom: 10px;
            text-align: right;
        }
        .row{
            margin-top: -25px;
        }
        .col{
            margin-left: 217px;
        }
        .times{
            display: grid;
            grid-template-columns: auto auto;

        }
        .checkbox-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }
        .checkbox-grid-child{
            margin-left: 200px;
            margin-top: -25px;
        }
        input[type="checkbox"]:checked {
            background-color: blue;
        }
        button {
            margin-top: 20px;
            padding: 10px 0;
            background-color: #ffc107;
            color: #fff;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #e0a800;
        }
    </style>
</head>

<body>

    <form action="result.php" method="post">
        <h1>PNV Club application!</h1>
        <label for="name">Name</label>
        <input type="text" name="name"><br>

        <label for="club">Club you want to apply</label>
        <select name="club">
            <option value="Robotic Club">Robotic Club</option>
            <option value="English Club">English Club</option>
            <option value="Football Club">Football Club</option>
        </select><br>

        <label for="times">Be time for you</label>
        <div name="times" class="row">
            <div class="col">
                <input type="radio" name="time" value="Saturday mornings">Saturday mornings
                <input type="radio" name="time" value="Saturday afternoons">Saturday afternoons
            </div>
            <div class="col">
            <input type="radio" name="time" value="Sunday afternoons">Sunday afternoons<br>

            </div>
        </div>


        <label for="skills">Your Skills</label>
        <div class=checkbox-grid name="skills">
            <div class ="checkbox-grid-child">
                <input type="checkbox" value="the best coder" name="thebestcoder" />the best coder <br>
                <input type="checkbox" value="a super star" name="asuperstar" />a super star<br>
                <input type="checkbox" value="singer" name="singer" />singer<br>
                <input type="checkbox" value="the best eater" name="thebesteater" />the best eater<br>
            </div>
            <div class ="checkbox-grid-child">
                <input type="checkbox" value="good in arts" name="goodinarts" />good in arts<br>
                <input type="checkbox" value="a crazy dancer" name="acrazydancer" />a crazy dancer<br>
                <input type="checkbox" value="good in design" name="goodindesign" />good in design<br>
                <input type="checkbox" value="good in speeches" name="goodinspeeches" />good in speeches<br>
            </div>
        </div>


        <button type="submit" name="submit">SUBMIT!</button>
    </form>
</body>

</html>