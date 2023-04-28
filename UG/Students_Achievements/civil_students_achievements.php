<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
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

    .tab-heading {
        text-align: center;
        font-size: 3rem;
        font-weight: 200;
        margin-bottom: 20px;
    }

    .course-main-headng {
        margin-top: 5vh;
        font-size: 3rem;
        font-weight: 800;
    }

    .tb-main {
        margin: 0 auto;
        background: #fff;
        text-align: center;

        padding-left: 40px;
        padding-right: 40px;
    }

    @media screen and (max-width:600px) {
        .tb-main {
            padding-left: 0px;
            padding-right: 0px;
            margin-top: 80px;
            overflow: hidden;
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
        color: #888;
        cursor: pointer;
    }

    input:checked+label.brand-tabs {
        color: black;
        border-radius: 8px;
        background-color: #b34ee6;
    }

    #tab1:checked~#content1,
    #tab2:checked~#content2 {
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
            content: "2016-2017";
        }

        label.brand-tabs[for*="2"]:before {
            content: "2014-2015";
        }



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
            content: "2016-2017";
        }

        label.brand-tabs[for*="2"]:before {
            content: "2014-2015";
        }
    }

    /* Styling for Achivements Section */

    .achievements-container {
        height: 80vh;
        width: 100%;
        overflow-x: hidden;
        overflow-y: scroll;
        scroll-behavior: smooth;
        text-align: justify;
        padding: 10px;
    }

    .achievements-heading {
        font-weight: 600;
        text-align: center;

    }

    .achievements-container::-webkit-scrollbar {
        width: 10px;
    }

    .achievements-container::-webkit-scrollbar-track {

        border-radius: 27px;
    }

    .achievements-container::-webkit-scrollbar-thumb {
        background: #d4bbeb;
        border-radius: 27px;
    }

    .achievements-container::-webkit-scrollbar-thumb:hover {
        background: #d4bbeb;
    }
</style>

<body>
    <div class="tb-main">
        <input class="brand-tabs" id="tab1" type="radio" name="tabs" checked>
        <label class="brand-tabs" for="tab1">2016-2020</label>

        <input class="brand-tabs" id="tab2" type="radio" name="tabs">
        <label class="brand-tabs" for="tab2">2020-2021</label>


        <section id="content1">
            <div class="achievements-container">
                <h2 class="achievements-heading">ACADEMIC YEAR :2016-2020</h2>
                <ul class="achievements">
                    <li>Benjamin.M, & Arul Raj, ( 2016-2020 batch) received first prize in “ Brick Modelling” conducted by National Engineering College, Kovilpatti on 6th September 2018</li><br>
                    <li>Vigneswaran.M, &surenthar.A( 2016-2020 batch) gained second prize in “ Brick Modelling” , conducted by National Engineering College, Kovilpatti on 6th September 2018</li><br>
                    <li>S.Dineshkumar, ( 2015-2019 batch)won first prize in paper presentation conducted by Holy Cross Engineering College, Thoothukudi on 25th September 2018</li><br>
                    <li>E.Mazana Muthu,( 2015-2019 batch)got Second prize in Connection, conducted by Holy Cross Engineering College, Thoothukudi on 25th September 2018</li><br>
                    <li>S.Dinesh Kumar, V.Pattu Raja, S.Ganapaty, E.Mazana Muthu, M.Divya Barathi (2015-2019 batch) participated in Revit Architecture workshop conducted by National Engineering College, Kovilpatti On 3rd August 2018</li><br>
                    <li>Ganapathy S ( 2015-2019 batch) attended Application of Modern Surveying in Hostel Zone Management conducted by Dr.Sivanthi Adithanar College of Engineering, on 27th March 2018</li><br>
                    <li>S.Dinesh Kumar, M.Divya Barathi attended the event, paper presentation conducted by National Engineering College, on 6th September 2018</li><br>
                    <li>Ganapathy S ( 2015-2019 batch) attended the event, Fundamento held in National Engineering College, on 7th September 2018</li><br>
                    <li>E.Mazana Muthu and M.Divya Barathi participated the event, held in Holy Cross Engineering College, Thoothukudi on 25th September 2018</li><br>
                    <li>S.Dinesh Kumar, K. Ponselvam, attended Paper Presentation conducted by VV College of Engineering, on 8th September 2018</li><br>
                    <li>U.Karthiga, Krishna veni.J, attended Quiz, conducted by VV College of Engineering, on 8th September 2018</li><br>
                    <li>M.Divya Barathi attended the event, Tech War conducted by National Engineering College, on 6th September 2018</li><br>
                </ul>
            </div>
        </section>
        <section id="content2">
            <div class="achievements-container">
                <h2 class="achievements-heading">ACADEMIC YEAR: 2020-2021</h2>
                <ul class="achievements">
                    <li>S.Parthiban, (2019-2023 batch), Attended the “Webinar- Unsymmetrical bending of beams- Strength of Materials II” on 17.06.2021, organized by
                        Dhanalakshmi Srinivasan College of Engineering, Coimbatore. </li><br>
                    <li>S.Adithya Ranjan, (2019-2023 batch), Attended the “Webinar- Unsymmetrical bending of beams- Strength of Materials II” on 17.06.2021,
                        organized by Dhanalakshmi Srinivasan College of Engineering, Coimbatore. </li><br>
                    <li>S.Parthiban, (2019-2023 batch), Attended the webinar on “Sustainable Development in Construction Materials” on 15.06.2021, organized by
                        Hindusthan College of Engineering and Technology, Coimbatore. </li><br>
                    <li>S.Parthiban, (2019-2023 batch), Attended the webinar on “Advances in Concrete Technology” on 09.06.2021, organized by Arjun College
                        Technology, Chennai.</li><br>
                    <li>S.Parthiban, (2019-2023 batch), participated the webinar on “Science behind vastu” on 08.06.2021, organized by Nehru Institute of Technology,
                        Coimbatore. </li><br>
                    <li>S.Thirumani Selvam, (2019-2023 batch), participated the webinar on “Science behind vastu” on 08.06.2021, organized by Nehru Institute of
                        Technology, Coimbatore. </li><br>
                    <li>S.Parthiban, (2019-2023 batch), participated the webinar on “Recent Development in Fiber Reinforced Concrete” on 05.06.2021, organized by
                        Dr.N.G.P. Institute of Technology, Coimbatore.
                    </li><br>
                    <li>S.Parthiban, (2019-2023 batch), Attended the “Code crack IS 800:2007, General Construction in Steel- code of practice” on 30.05.2021, organized
                        by Rathinam Technical Campus, Coimbatore.</li><br>
                    <li>S.George Hamilton, (2019-2023 batch), Attended the “Code crack IS 800:2007, General Construction in Steel- code of practice” on 30.05.2021,
                        organized by Rathinam Technical Campus, Coimbatore.
                    </li><br>
                    <li>S.Adithya Ranjan, S.George Hamilton, S.Parthiban, S.Thirumani Selvam, (2019-2023 batch), participated the “ Fibre Reinforced Concrete
                        Rowboat Competition” on 10.05.2021, organized by PSG Institute of Technology and Applied Research,Coimbatore.</li><br>
                    <li>S.Parthiban, (2019-2023 batch), participated the webinar on “Plastic Waste Management in India” on 08.05.2021, organized by PSNA College
                        of Engineering and Technology, Dindigul.
                    </li><br>
                    <li>S.Thirumani Selvam, (2019-2023 batch), participated the webinar on “Plastic Waste Management in India” on 08.05.2021, organized by PSNA
                        College of Engineering and Technology, Dindigul</li><br>
                    <li>S.Thirumani Selvam, (2019-2023 batch), participated the webinar on “Plastic Waste Management in India” on 08.05.2021, organized by PSNA
                        College of Engineering and Technology, Dindigul</li><br>
                    <li>S.Thirumani Selvam, (2019-2023 batch), Attended the “Code crack IS 2386 – Methods of tests for aggregate for concrete” on 23.01.2021,
                        organized by Rathinam Technical Campus, Coimbatore.
                    </li><br>
                    <li>S.Adithya Ranjan, S.George Hamilton, S.Parthiban, S.Thirumani Selvam, (2019-2023 batch), participated the “ Fibre Reinforced Concrete
                        Rowboat Competition” on 10.05.2021, organized by PSG Institute of Technology and Applied Research,Coimbatore.
                    </li><br>
                    <li>S.Parthiban, (2019-2023 batch), participated the Quiz programme on “Highway Engineering on account of National Road Safety Work” on
                        18.01.2021, organized by Rathinam Technical Campus, Coimbatore</li><br>
                    <li>S.George Hamilton, (2019-2023 batch), participated the Quiz programme on “Highway Engineering on account of National Road Safety Work”
                        on 18.01.2021, organized by Rathinam Technical Campus, Coimbatore.</li><br>
                    <li>S.Thirumani Selvam, (2019-2023 batch), Attended the webinar on “Emerging Technologies in Cinstruction Industry” on 31.12.2020, organized
                        by Dr.N.G.P. Institute of Technology, Coimbatore. </li><br>
                    <li>S.George Hamilton, (2019-2023 batch), participated the Quiz programme on “Basics of Civil Engineering on 28.12.2020, organized by St.Peters
                        College of Engineering and Technology.
                    </li><br>
                </ul>
            </div>
        </section>

</body>

</html>