<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
            border-style: dashed;
            border-color: orangered;
        }

        h1 {
            text-align: center;
        }

        label {
            display: inline-flex;
            width: 200px;
            margin-bottom: 10px;
        }

        .row {
            display: grid;
            grid-template-columns: auto auto auto;
            margin-left: 200px;
            margin-top: -30px;
        }
        input[type="radio"]{
           width: 16px;
           height: 16px;
        }
        input[name="name"]{
            width: 300px;
            height: 25px;
        }
        select[name="club"]{
            width: 310px;
            height: 30px;
        }

        .checkbox-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .checkbox-grid-child1 {
            margin-left: 200px;
            margin-top: -25px;
        }

        .checkbox-grid-child2 {
            margin-left: 80px;
            margin-top: -25px;
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
            background-color: orangered;
        }

        div input[type="checkbox"] {
            display: none;
        }

        input[type="checkbox"]+label {
            position: relative;
            padding-left: 24px;
            cursor: pointer;
        }

        input[type="checkbox"]+label:before {
            content: "";
            position: absolute;
            top: 4px;
            left: 0;
            width: 16px;
            height: 16px;
            border: 1px solid black;
            background-color: none;
            box-sizing: border-box;

        }

        input[type="checkbox"]:checked+label:before {
            background-color: orangered;
        }

        div input[type="checkbox"]:checked+label {
            border: none;
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
                <div>
                    <input type="radio" name="time" value="Saturday mornings" id="time">
                    <label for="time">Saturday mornings</label>
                </div>
                <div>
                    <input type="radio" name="time" value="Saturday afternoons" id="time">
                    <label for="time">Saturday afternoons</label>
                </div>
            </div>
            <div class="col">
                <div>
                    <input type="radio" name="time" value="Sunday afternoons" id="time">
                    <label for="time">Sunday afternoons</label>
                </div>
            </div>
        </div>


        <label for="skills">Your Skills</label>
        <div class=checkbox-grid name="skills">
            <div class="checkbox-grid-child1">
                <div>
                    <input type="checkbox" value="the best coder" name="thebestcoder" id="thebestcoder" />
                    <label for="thebestcoder">the best coder</label>
                </div>

                <div>
                    <input type="checkbox" value="a super star" name="asuperstar" id="asuperstar" />
                    <label for="asuperstar">a super star</label>
                </div>

                <div>
                    <input type="checkbox" value="singer" name="singer" id="singer" />
                    <label for="singer">singer</label>
                </div>

                <div>
                    <input type="checkbox" value="the best eater" name="thebesteater" id="thebesteater" />
                    <label for="thebesteater">the best eater</label>
                </div>
            </div>
            <div class="checkbox-grid-child2">
                <div>
                    <input type="checkbox" value="good in arts" name="goodinarts" id="goodinarts" />
                    <label for="goodinarts">good in arts</label>
                </div>

                <div>
                    <input type="checkbox" value="a crazy dancer" name="acrazydancer" id="acrazydancer" />
                    <label for="acrazydancer">a crazy dancer</label>
                </div>

                <div>
                    <input type="checkbox" value="good in design" name="goodindesign" id="goodindesign" />
                    <label for="goodindesign">good in design</label>
                </div>

                <div>
                    <input type="checkbox" value="good in speeches" name="goodinspeeches" id="goodinspeeches" />
                    <label for="goodinspeeches">good in speeches</label>
                </div>
            </div>
        </div>


        <button type="submit" name="submit">SUBMIT!</button>
    </form>
</body>

</html>