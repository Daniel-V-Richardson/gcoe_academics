<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCOE: 4rd Sem Materials</title>
    <style>
        html {
            background: #f5f7f8;
            font-family: "Open Sans", sans-serif;
            -webkit-font-smoothing: antialiased;
            padding: 20px 0;
        }

        .support-grid {
            height: 100%;
            top: 0;
            margin-top: 5vh;
            width: 100%;
            justify-items: center;
            align-items: center;
            text-align: center;
        }

        .support-grid button {
            background-color: #d4bbeb;
            font-size: 2rem;
            padding: 1.5vh;
            border-radius: 27px;
            border: none;
            font-weight: 600;
            cursor: pointer;
        }

        .band {
            width: 90%;
            max-width: 1240px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            grid-gap: 20px;
        }

        @media only screen and (min-width: 500px) {
            .band {
                grid-template-columns: 1fr 1fr;
            }

            .item-1 {
                grid-column: 1 / span 2;
            }

            .item-1 h1 {
                font-size: 30px;
            }
        }

        @media only screen and (min-width: 850px) {
            .band {
                grid-template-columns: 1fr 1fr 1fr 1fr;
            }
        }

        /* card */

        .card {
            min-height: 350px;
            background: white;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1),
                0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1),
                0 16px 16px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: #444;
            position: relative;
            top: 0;
            border-radius: 15px;
            transition: all 0.1s ease-in;
        }

        .card:hover {
            top: -2px;
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.2);
        }

        .card article {
            padding: 20px;
            display: flex;
            flex: 1;
            justify-content: center;
            flex-direction: column;
        }

        .card .thumb {
            border-radius: 15px;
            padding-bottom: 60%;
            background-size: cover;
            background-position: center center;
        }

        /* typography */
        h1 {
            font-size: 20px;
            margin: 0;
            color: #333;
        }

        .card span {
            font-size: 12px;
            font-weight: bold;
            color: #999;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin: 2em 0 0 0;
        }
    </style>
</head>

<body>
    <div class="band">
        <div class="item-2 ">
            <a href="" class="card">
                <div class="thumb" style="background-image: url(https://res.cloudinary.com/gracecoe/image/upload/v1660530034/Assets/Course%20Materials/3rdSem/syllabus-icon-14_yvrexu.png);"></div>
                <article>
                    <h1>Syllabus</h1>
                    <span>5th Sem</span>
                </article>
            </a>
        </div>
        <div class="item-2">
            <a href="" class="card">
                <div class="thumb" style="background-image: url(https://res.cloudinary.com/gracecoe/image/upload/v1660529147/Assets/Course%20Materials/3rdSem/067ff19d-c5b0-41a0-bcf1-4c47c9c04b14_mm3jag.png);"></div>
                <article>
                    <h1>Discrete
                        Mathematics</h1>
                    <span>5th Sem</span>
                </article>
            </a>
        </div>
        <div class="item-3">
            <a href="" class="card">
                <div class="thumb" style="background-image: url(https://res.cloudinary.com/gracecoe/image/upload/v1660529284/Assets/Course%20Materials/3rdSem/5-Principles-39_wrsasa.png);"></div>
                <article>
                    <h1>Digital
                        Principles and
                        Design</h1>
                    <span>5th Sem</span>
                </article>
            </a>
        </div>
        <div class="item-4">
            <a href="" class="card">
                <div class="thumb" style="background-image: url(https://res.cloudinary.com/gracecoe/image/upload/v1660529384/Assets/Course%20Materials/3rdSem/4539048568815616_xnbesc.png);"></div>
                <article>
                    <h1>Data Structures</h1>
                    <span>5th Sem</span>
                </article>
            </a>
        </div>
        <div class="item-5">
            <a href="" class="card">
                <div class="thumb" style="background-image: url(https://res.cloudinary.com/gracecoe/image/upload/v1660529466/Assets/Course%20Materials/3rdSem/object-oriented-programming-acronym-vector-id1334767635_jqplts.jpg);"></div>
                <article>
                    <h1>Object Oriented
                        Programming</h1>
                    <span>5th Sem</span>
                </article>
            </a>
        </div>
        <div class="item-6">
            <a href="" class="card">
                <div class="thumb" style="background-image: url(https://res.cloudinary.com/gracecoe/image/upload/v1660529760/Assets/Course%20Materials/3rdSem/Repairing-Electronic-Circuits-big_paetjj.jpg);"></div>
                <article>
                    <h1>Communication
                        Engineering
                    </h1>

                    <span>5th Sem</span>
                </article>
            </a>
        </div>
        <div class="item-7">
            <a href="" class="card">
                <div class="thumb" style="background-image: url(https://res.cloudinary.com/gracecoe/image/upload/v1660529920/Assets/Course%20Materials/3rdSem/7-Benefits-That-Highlight-The-Importance-Of-Soft-Skills-In-The-Workplace_reevur.png);"></div>
                <article>
                    <h1>Interpersonal
                        Skills/Listening
                        &Speaking</h1>
                    <span>5th Sem</span>
                </article>
            </a>
        </div>
    </div>
    <div class="support-grid">
        <button onclick="history.back()">Go Back</button>
    </div>
</body>

</html>