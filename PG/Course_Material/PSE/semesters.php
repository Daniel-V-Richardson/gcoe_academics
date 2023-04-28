<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .link {
            text-decoration: none;
            color: black;
        }

        body {
            display: grid;
            place-items: center;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        .course-material-container {
            height: 100%;
            width: 100%;
            
        }

        .course-material-cards {
            height: 100%;
            width: 100%;
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            row-gap: 20px;
            justify-items: center;
            align-items: center;
            text-align: center;
        }

        .course-material-card {
            height: 250px;
            width: 200px;
            cursor: pointer;
            border-radius: 27px;
            justify-items: center;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1),
                0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1),
                0 16px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .course-material-card img {
            width: 100%;
            height: 80%;
            object-fit: cover;
        }

        .course-material-title {
            font-size: 1.5rem;
            font-weight: 600;
        }
    </style>

</head>

<body>
    <div class="course-material-container">
        <div class="course-material-cards">
            <a class="link" href="./3rd_sem.php">
            <div class="course-material-card">
                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1660525691/Assets/Course%20Materials/sem-3-230x230w_pkdxed.png">
                <div class="course-material-title">
                    Odd Semester
                </div>
            </div>
            </a>

            <a class="link" href="./4th_sem.php">
            <div class="course-material-card">
                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1660525717/Assets/Course%20Materials/sem-4-230x230w_e9aef2.png">
                <div class="course-material-title">
                    Even Semester
                </div>
            </div>
            </a>

            <a class="link" href="./5th_sem.php">
            <div class="course-material-card">
                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1660525778/Assets/Course%20Materials/sem-5-230x230w_me40r7.png">
                <div class="course-material-title">
                    Odd Semester
                </div>
            </div>
            </a>

            <a class="link" href="./6th_sem.php">
            <div class="course-material-card">
                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1660525800/Assets/Course%20Materials/sem-6-120x120h_xnmqth.png">
                <div class="course-material-title">
                    Even Semester
                </div>
            </div>
            </a>

            <a class="link" href="./7th_sem.php">
            <div class="course-material-card">
                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1660525817/Assets/Course%20Materials/sem-7-120x120h_ogl5eq.png">
                <div class="course-material-title">
                    Odd Semester
                </div>
            </div>
            </a>

            <a class="link" href="./8th_sem.php">
            <div class="course-material-card">
                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1660525829/Assets/Course%20Materials/sem-8-120x120h_k6pgms.png">
                <div class="course-material-title">
                    Even Semester
                </div>
            </div>
            </a>
        </div>
    </div>
</body>

</html>