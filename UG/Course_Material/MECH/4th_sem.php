<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Study Materials</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans");
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
        @import url("https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");

        * {
            font-family: "Open Sans", sans-serif;
        }



        body {
            width: 100%;
            height: 100%;
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            font-weight: 400;

            line-height: 1.5;
            -ms-overflow-style: none;
            scrollbar-width: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .link {
            text-decoration: none;
            color: black;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        .sem-container {
            width: 100%;
            height: 100%;
            display: flex;

        }

        .sem-left {
            width: 50%;
            margin-left: 100px;
        }

        .sem-right {
            width: 50%;
            margin-right: 100px;
        }

        li {
            font-size: 1.5rem;
            line-height: 50px;
        }

        .back-btn {
            border-radius: 12px;
            padding: 10px;
            margin-left: 45%;
            background-color: #823d77;
            text-decoration: none;
            font-size: 1.7rem;
            text-align: center;
            /* margin: auto; */
            justify-content: center;
            justify-items: center;
            align-items: center;
            color: white;
        }

        .my-float {
            height: 100%;
            width: 100%;
            margin-top: 10px;
            font-size: 3rem;
        }



        @media screen and (max-width:600px) {
            .sem-container {
                flex-direction: column;
                text-align: left;
            }

            .sem-left {
                width: 100% !important;
                margin: auto !important;
            }

            .sem-right {
                width: 100% !important;
                margin: auto !important;
            }

            li {
                font-size: 1rem;
                line-height: 50px;
            }
        }
    </style>
</head>

<body>
    <div class="sem-container">
        <div class="sem-left">
            <ul>
                <a href="../../../assets/doc/Syllabus/MECH/B.E. Mech.pdf" class="link">
                    <li>Syllabus</li>
                </a>
                <a href="./4thSemSubjects/S&NM.php" class="link">
                    <li>Statistics and Numerical Methods - MA8452</li>
                </a>
                <a href="./4thSemSubjects/KOM.php" class="link">
                    <li>Kinematics of Machinery - ME8492</li>
                </a>
                <a href="./4thSemSubjects/MT2.php" class="link">
                    <li>Manufacturing Technology – II - ME8451</li>
                </a>
                <a href="./4thSemSubjects/EM.php" class="link">
                    <li>Engineering Metallurgy - ME8491</li>
                </a>
            </ul>
        </div>
        <div class="sem-right">
            <ul>
                <a href="./4thSemSubjects/SOMFME.php" class="link">
                    <li>Strength of Materials for
                        Mechanical Engineers - CE8395</li>
                </a>
                <a href="./4thSemSubjects/TE1.php" class="link">
                    <li>Thermal Engineering- I - ME8493</li>
                </a>
                <a href="./4thSemSubjects/MT2_Lab.php" class="link">
                    <li>Manufacturing Technology
                        Laboratory – II - ME8462</li>
                </a>
                <a href="./4thSemSubjects/SOM&FM&M_Lab.php" class="link">
                    <li>Strength of Materials and Fluid
                        Mechanics and Machinery
                        Laboratory - CE8381</li>
                </a>
                <a href="#" class="link">
                    <li>Advanced Reading and
                        Writing - HS8461</li>
                </a>
            </ul>
        </div>
    </div>
    <a href="javascript:history.back()" class="back-btn">
        Go Back
    </a>
</body>

</html>