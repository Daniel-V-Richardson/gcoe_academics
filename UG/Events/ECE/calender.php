<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans");
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
        @import url("https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");

        * {
            font-family: "Open Sans", sans-serif;

        }

        body {
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            font-weight: 400;
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

        .calender {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            height: 100%;
            width: 100%;
            margin: auto;
            padding: auto;
        }

        @media screen and (max-width:900px) {
            .calender {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }

            .events-container {
                width: 100% !important;
            }
        }

        @media screen and (max-width:600px) {
            .calender {
                display: grid;
                grid-template-columns: auto;
            }

            .events-container {
                width: 100% !important;
            }
        }

        .events-container {
            height: fit-content;
            width: fit-content;
            max-width: fit-content;
            display: block;
            background-color: #be99e8;
            border-radius: 20px;
        }

        .event-top {
            display: flex;

        }

        .dates-container {
            display: flex;
            width: 50%;
            text-align: center;
            justify-content: center;
            padding: 10px;

        }

        .date {
            font-size: 2rem;
            font-weight: 900;
            margin-right: 10px;
        }

        .day {
            font-size: 2rem;
            font-weight: 400;
        }

        .year-container {
            display: flex;
            width: fit-content;
            background-color: #b282e8;
            margin: auto;
            padding: 10px;
            margin-right: 20px;
            border-radius: 27px;
            justify-content: flex-end;

        }

        .month {
            font-size: 1.2rem;
            font-weight: 900;
        }

        .year {
            font-size: 1.2rem;
            font-weight: 900;
        }

        .events-content {
            padding: 20px;
            padding-top: 5px;
            margin: auto;
        }

        .event-heading {
            font-size: 1.5rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 10px;
        }

        .event-desc {
            font-size: 1.2rem;
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="calender">
        <!-- Event 1 -->
        <a href="./Events_By_Date/3-9-22.php" class="link">
            <div class="events-container">
                <div class="event-top">
                    <div class="dates-container">
                        <div class="date">03</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="year-container">
                        <div class="month">Sept/</div>
                        <div class="year">2022</div>
                    </div>
                </div>
                <div class="events-content">
                    <div class="event-heading">
                        Association Activities
                    </div>
                    <div class="event-desc">
                    The association activities include Inter Department Technical Seminars, Guest Lectures, Project Contests and Workshops on various Emerging Trends.
                    </div>
                </div>
            </div>
        </a>
        <!-- Event 2 -->
        <a href="./Events_By_Date/10-9-22.php" class="link">
            <div class="events-container">
                <div class="event-top">
                    <div class="dates-container">
                        <div class="date">10</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="year-container">
                        <div class="month">Sept/</div>
                        <div class="year">2022</div>
                    </div>
                </div>
                <div class="events-content">
                    <div class="event-heading">
                        Association Activities
                    </div>
                    <div class="event-desc">
                    The association activities include Inter Department Technical Seminars, Guest Lectures, Project Contests and Workshops on various Emerging Trends.
                    </div>
                </div>
            </div>
        </a>
        <!-- Event 3 -->
        <a href="./Events_By_Date/17-9-22.php" class="link">
            <div class="events-container">
                <div class="event-top">
                    <div class="dates-container">
                        <div class="date">17</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="year-container">
                        <div class="month">Sept/</div>
                        <div class="year">2022</div>
                    </div>
                </div>
                <div class="events-content">
                    <div class="event-heading">
                        Association Activities
                    </div>
                    <div class="event-desc">
                    The association activities include Inter Department Technical Seminars, Guest Lectures, Project Contests and Workshops on various Emerging Trends.
                    </div>
                </div>
            </div>
        </a>
        <!-- Event 4 -->
        <a href="./Events_By_Date/24-9-22.php" class="link">
            <div class="events-container">
                <div class="event-top">
                    <div class="dates-container">
                        <div class="date">24</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="year-container">
                        <div class="month">Sept/</div>
                        <div class="year">2022</div>
                    </div>
                </div>
                <div class="events-content">
                    <div class="event-heading">
                        Association Activities
                    </div>
                    <div class="event-desc">
                    The association activities include Inter Department Technical Seminars, Guest Lectures, Project Contests and Workshops on various Emerging Trends.
                    </div>
                </div>
            </div>
        </a>
        <!-- Event 5 -->
        <a href="" class="link">
            <div class="events-container">
                <div class="event-top">
                    <div class="dates-container">
                        <div class="date">15</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="year-container">
                        <div class="month">Oct/</div>
                        <div class="year">2022</div>
                    </div>
                </div>
                <div class="events-content">
                    <div class="event-heading">
                        Association Activities
                    </div>
                    <div class="event-desc">
                    The association activities include Inter Department Technical Seminars, Guest Lectures, Project Contests and Workshops on various Emerging Trends.
                    </div>
                </div>
            </div>
        </a>
        <!-- Event 6 -->
        <a href="" class="link">
            <div class="events-container">
                <div class="event-top">
                    <div class="dates-container">
                        <div class="date">22</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="year-container">
                        <div class="month">Oct/</div>
                        <div class="year">2022</div>
                    </div>
                </div>
                <div class="events-content">
                    <div class="event-heading">
                        Association Activities
                    </div>
                    <div class="event-desc">
                    The association activities include Inter Department Technical Seminars, Guest Lectures, Project Contests and Workshops on various Emerging Trends.
                    </div>
                </div>
            </div>
        </a>
        <!-- Event 7 -->
        <a href="" class="link">
            <div class="events-container">
                <div class="event-top">
                    <div class="dates-container">
                        <div class="date">29</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="year-container">
                        <div class="month">Oct/</div>
                        <div class="year">2022</div>
                    </div>
                </div>
                <div class="events-content">
                    <div class="event-heading">
                        Association Activities
                    </div>
                    <div class="event-desc">
                    The association activities include Inter Department Technical Seminars, Guest Lectures, Project Contests and Workshops on various Emerging Trends.
                    </div>
                </div>
            </div>
        </a>
        <!-- Event 8 -->
        <a href="" class="link">
            <div class="events-container">
                <div class="event-top">
                    <div class="dates-container">
                        <div class="date">05</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="year-container">
                        <div class="month">Nov/</div>
                        <div class="year">2022</div>
                    </div>
                </div>
                <div class="events-content">
                    <div class="event-heading">
                        Association Activities
                    </div>
                    <div class="event-desc">
                    The association activities include Inter Department Technical Seminars, Guest Lectures, Project Contests and Workshops on various Emerging Trends.
                    </div>
                </div>
            </div>
        </a>
        <!-- Event 9 -->
        <a href="" class="link">
            <div class="events-container">
                <div class="event-top">
                    <div class="dates-container">
                        <div class="date">12</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="year-container">
                        <div class="month">Nov/</div>
                        <div class="year">2022</div>
                    </div>
                </div>
                <div class="events-content">
                    <div class="event-heading">
                        Association Activities
                    </div>
                    <div class="event-desc">
                    The association activities include Inter Department Technical Seminars, Guest Lectures, Project Contests and Workshops on various Emerging Trends.
                    </div>
                </div>
            </div>
        </a>
        <!-- Event 10 -->
        <a href="" class="link">
            <div class="events-container">
                <div class="event-top">
                    <div class="dates-container">
                        <div class="date">19</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="year-container">
                        <div class="month">Nov/</div>
                        <div class="year">2022</div>
                    </div>
                </div>
                <div class="events-content">
                    <div class="event-heading">
                        Association Activities
                    </div>
                    <div class="event-desc">
                    The association activities include Inter Department Technical Seminars, Guest Lectures, Project Contests and Workshops on various Emerging Trends.
                    </div>
                </div>
            </div>
        </a>
    </div>
</body>

</html>