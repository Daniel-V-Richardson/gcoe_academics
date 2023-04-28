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

        .tab-heading {
            text-align: center;
            font-size: 3rem;
            font-weight: 200;

        }

        .tb-main {
            margin: 0 auto;
            background: #fff;
            text-align: center;
            margin-top: -150px;
        }

        @media screen and (max-width:600px) {
            .tb-main {
                padding: 0px;
                margin-top: 80px;
            }
        }

        section {
            display: none;
            padding: 20px 0 0;

        }

        input.brand-tabs {
            display: none;
        }

        label.brand-tabs {
            display: inline-block;
            margin: 0 0 -1px;
            padding: 10px 25px;
            font-weight: 600;
            text-align: center;
            color: black;
            background-color: #d4bbeb;
            border-radius: 8px;
        }


        label.brand-tabs:hover {
            color: black;
            cursor: pointer;

        }

        input:checked+label.brand-tabs {
            color: black;
            border-radius: 8px;
            background-color: #b34ee6;
        }

        #tab1:checked~#content1,
        #tab2:checked~#content2,
        #tab3:checked~#content3,
        #tab4:checked~#content4,
        #tab5:checked~#content5,
        #tab6:checked~#content6,
        #tab7:checked~#content7 {
            display: block;

        }

        @media screen and (max-width: 650px) {
            label.brand-tabs {
                font-size: 0;
            }

            label.brand-tabs:before {
                font-family: fontawesome;
                font-weight: normal;
                margin-right: 10px;
            }

            label.brand-tabs[for*="1"]:before {
                content: "2017 Regulation";
            }

            label.brand-tabs[for*="2"]:before {
                content: "2021 Regulation";
            }

            /* 
            label.brand-tabs[for*="3"]:before {
                content: "Independence Day";
            } */

            /* label.brand-tabs[for*="4"]:before {
                content: "Events";
            }

            label.brand-tabs[for*="5"]:before {
                content: "Gallery";
            }

            label.brand-tabs[for*="6"]:before {
                content: "Students Achievements";
            }

            label.brand-tabs[for*="7"]:before {
                content: "Course Material";
            } */


            label.brand-tabs:before {
                margin: 0;
                font-size: 18px;
            }
        }

        @media screen and (max-width: 400px) {
            label.brand-tabs {
                padding: 15px;
            }

            label.brand-tabs:before {
                font-family: fontawesome;
                font-weight: normal;
                margin-right: 10px;
            }

            label.brand-tabs[for*="1"]:before {
                content: "2017 Regulation";
            }

            label.brand-tabs[for*="2"]:before {
                content: "2021 Regulation";
            }

            /* label.brand-tabs[for*="3"]:before {
                content: "Independence Day";
            } */

            /* label.brand-tabs[for*="4"]:before {
                content: "Events";
            }

            label.brand-tabs[for*="5"]:before {
                content: "Gallery";
            }

            label.brand-tabs[for*="6"]:before {
                content: "Students Achievements";
            }

            label.brand-tabs[for*="7"]:before {
                content: "Course Material";
            } */

        }

        /* Semester Section Starts */

        .course-material-container {
            height: 100%;
            width: 100%;

        }

        .course-material-cards {
            height: 100%;
            width: 100%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            row-gap: 20px;
            margin: auto;
            padding: auto;
            justify-items: center;
            align-items: center;
            text-align: center;
        }

        .course-material-card {
            height: 150px;
            width: 150px;
            cursor: pointer;
            border-radius: 50%;
            justify-items: center;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1),
                0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1),
                0 16px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .course-material-card img {
            width: 100%;
            height: 100%;
            object-fit: fill;
        }

        .course-material-title {
            font-size: 1.5rem;
            font-weight: 600;
        }
    </style>

</head>

<body>
    <div class="tb-main">


        <input class="brand-tabs" id="tab1" type="radio" name="tabs" checked>
        <label class="brand-tabs" for="tab1">2017 Regulation</label>

        <input class="brand-tabs" id="tab2" type="radio" name="tabs">
        <label class="brand-tabs" for="tab2">2021 Regulation</label>

        <section id="content1">
            <div class="course-material-container">
                <div class="course-material-cards">
                    <a class="link" href="./1st_sem.php">
                        <div class="course-material-card">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664892729/Assets/Course%20Materials/semester-1_we2w44.png">

                        </div>
                    </a>

                    <a class="link" href="./2nd_sem.php">
                        <div class="course-material-card">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664893076/Assets/Course%20Materials/227-2279280_semester-semester-2_uf0bt6.png">

                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- 2022 Regulation -->

        <section id="content2">
            <div class="course-material-container">
                <div class="course-material-cards">
                    <a class="link" href="./1st_sem.php">
                        <div class="course-material-card">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664892729/Assets/Course%20Materials/semester-1_we2w44.png">

                        </div>
                    </a>

                    <a class="link" href="./2nd_sem.php">
                        <div class="course-material-card">
                            <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664893076/Assets/Course%20Materials/227-2279280_semester-semester-2_uf0bt6.png">

                        </div>
                    </a>
                </div>
            </div>
        </section>
</body>

</html>