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
    #tab2:checked~#content2, 
    #tab3:checked~#content3 {
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
            content: "2009-2010";
        }

        label.brand-tabs[for*="2"]:before {
            content: "2010-2011";
        }
        label.brand-tabs[for*="3"]:before {
            content: "2011-2012";
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
            content: "2009-2010";
        }

        label.brand-tabs[for*="2"]:before {
            content: "2010-2011";
        }
        label.brand-tabs[for*="3"]:before {
            content: "2011-2012";
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
            <label class="brand-tabs" for="tab1">2009-2010</label>

            <input class="brand-tabs" id="tab2" type="radio" name="tabs">
            <label class="brand-tabs" for="tab2">2010-2011</label>
            
            <input class="brand-tabs" id="tab3" type="radio" name="tabs">
            <label class="brand-tabs" for="tab3">2011-2012</label>


        <section id="content1">
            <div class="achievements-container">
                <h2 class="achievements-heading">ACADEMIC YEAR :2009-2010</h2>
                <ul class="achievements"> 
                    <li>Freshers Day was celebrated on Sep 08th, 2009.</li> 
                    <li>Seminar on “analytic functions” by Dr.T. Balasubramanian, Professor, Kamaraj College, Thoothukudi.</li> 
                    <li>Seminar on “Laplace Transforms” by Mr. Meenakshi Sundaram, Professor, V.O.C College, Thoothukudi.</li> 
                    <li>The Faculty Development programme was conducted by Dr.A.Jeya poovan.</li> 
                    <li>The Orientation Class was conducted by Mr.Victor Thangadurai during April 2010.</li> 
                    <li>Parents Teachers Meeting was conducted at the end of the year.</li>
                </ul>
            </div>
        </section>
        <section id="content2">
            <div class="achievements-container">
                <h2 class="achievements-heading">ACADEMIC YEAR: 2010-2011</h2>
                <ul class="achievements"> 
                    <li>Induction Day was celebrated on August 23rd, 2010.</li> 
                    <li>The Association was inaugurated by Mr.Patturaj. B.E.,M.B.A.,(TTPS) followed by a talk on “The Junction” presented by Mr.J. Paulraj Kamalesh M.Sc.,M.Phil., (Sodexo ,Kakinada) on 29th September 2010.</li> 
                    <li>The events like Singing, Dancing, Essay writing, Elocution competition were conducted.</li> 
                    <li>Engineering Physics-I book was published by Mrs.J.Jini Kamal Eastro M.Sc.,M.Phil.,(HOD/Physics)</li> 
                    <li>Parents Teachers Meeting was conducted at the end of the year.</li>
                </ul>
            </div>
        </section>
        <section id="content3">
            <div class="achievements-container">
                <h2 class="achievements-heading">ACADEMIC YEAR: 2011-2012</h2>
                <ul class="achievements"> 
                    <li>Induction Day was celebrated on August 23rd, 2010.</li> 
                    <li>The Association was inaugurated by Mr.Patturaj. B.E.,M.B.A.,(TTPS) followed by a talk on “The Junction” presented by Mr.J. Paulraj Kamalesh M.Sc.,M.Phil., (Sodexo ,Kakinada) on 29th September 2010.</li> 
                    <li>The events like Singing, Dancing, Essay writing, Elocution competition were conducted.</li> 
                    <li>Engineering Physics-I book was published by Mrs.J.Jini Kamal Eastro M.Sc.,M.Phil.,(HOD/Physics)</li> 
                    <li>Parents Teachers Meeting was conducted at the end of the year.</li>
                </ul>
            </div>
        </section>

</body>

</html>