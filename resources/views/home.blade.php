<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://kit.fontawesome.com/626fb14978.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{asset('storage/logo2.png')}}">
    <style>
        /**************************************************************************************/
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Mohave:wght@700&family=Montserrat:wght@100;200;300;400;500;600;700&family=Nothing+You+Could+Do&display=swap');

        * {
            padding: 0px;
            margin: 0px;
            box-sizing: boder-box;
            font-family: 'Montserrat', sans-serif;
        }


        a {
            text-decoration: none;
        }


        ul li {
            list-style: none;
        }

        .header {
            display: flex;
            justify-content: space-between;
            position: fixed;
            top: 0px;
            left: 0;
            width: 100%;
            height: 60px;
            z-index: 100;
        }

        .header_left {
            margin: 0 50px;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .header_left img {
            width: 110px;
        }


        .header_mid ul {
            display: flex;
            height: 100%;
            justify-content: space-around;
            align-items: center;
        }


        .header_mid ul li {
            /*background-color:transparent;*/
            border-radius: 10px;
            transition: .3s;
        }

        .header_mid ul li:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .header_mid ul li a {
            color: #171a20;
            margin: 0px 8px;
            padding: 6px 8px;
            font-size: 14px;
            font-weight: 600;
            display: block;
        }

        .header_right {
            margin-right: 32px;
        }

        .header_right ul {
            display: flex;
            height: 100%;
            justify-content: space-around;
            align-items: center;
        }


        .header_right ul li {
            /*background-color:transparent;*/
            border-radius: 10px;
            transition: .3s;
        }

        .header_right ul li:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .header_right ul li a {
            color: #171a20;
            margin: 0px 8px;
            padding: 6px 8px;
            font-size: 14px;
            font-weight: 600;
            display: block;
        }

        /* header end */

        /*******************************************************************************************/

        .section {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            z-index: 9;
        }



        .section_1 {
            background-image: url(https://www.kayak.co.uk/c/wp-content/uploads/sites/198/2020/09/insurance-gettyimages-1030408008-scaled-e1605783960415.jpg);
            position: relative;
        }


        .section_2 {
            background-image: url(https://media.drivingelectric.com/image/private/s--W8t2EDTq--/v1597770319/drivingelectric/2018-10/smart-forfour-eq-ev_09.jpg);
            position: relative;
        }

        .section_3 {
            background-image: url(https://www.diariomotor.com/imagenes/2020/06/fiat-500e-hatchback-0620-016.jpg);
            position: relative;
        }

        .section_4 {
            background-image: url(https://elbil.no/content/uploads/2021/01/6137e5e1930e5.jpeg);
            position: relative;
        }


        .section_5 {
            background-image: url(https://media.motorbox.com/image/vespa-elettrica-70/6/9/1/691422/691422-16x9-lg.jpg);
            position: relative;
        }

        .section_6 {
            background-image: url(https://thatanjan.github.io/tesla-clone-yt/media/6.avif);
            position: relative;
        }

        .section_7 {
            position: relative;
        }

        .text_box {
            width: 100%;
            margin-top: 120px;
            text-align: center;
        }

        .heding {
            font-weight: 600;
            font-size: 40px;
            color: #181b21;
        }

        .sub_heding {
            font-size: 14px;
            color: #000;
        }


        .sub_heding a {
            font-size: 14px;
            color: #000;
            border-bottom: 1px solid #000;
        }

        .sub_heding a:hover {
            border-bottom: 2px solid #000;
        }


        .btn_box {
            position: absolute;
            bottom: 16%;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .btn_box button {
            width: 250px;
            padding: 12px 24px;
            border-radius: 20px;
            margin: 0 20px;
            border: none;
            outline: none;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 500;
        }

        .form_box {
            /* position: absolute; */
            /* bottom: 40%; */
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .primary_btn {
            color: #fff;
            background-color: rgba(0, 0, 0, .7);
            cursor: pointer;
        }

        .secondary_btn {
            color: #000;
            background-color: rgba(255, 255, 255, .7);
            cursor: pointer;
        }


        /************************footer********************************/


        .footer {
            position: absolute;
            z-index: 100;
            bottom: 0;
            width: 100%;
        }

        .footer ul {
            width: 80%;
            margin: 20px auto;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .footer ul li {
            margin: 0 10px;
            margin-top: 16px;
            text-transform: capitalize;
            font-weight: 600;
        }

        .footer ul li a {
            font-size: 12px;
            color: #817a7a;
        }


        /* responsive */

        @media screen and (max-width: 1200px) {
            .header_mid {
                display: none;
            }

            .hide_manu {
                display: none;
            }

            .header_right ul li {
                background-color: rgba(0, 0, 0, 0.1);
            }
        }

        @media screen and (max-width: 600px) {

            .btn_box {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 0px 20px;
                box-sizing: border-box;
            }

            .btn_box button {
                width: 100%;
                margin: 10px;
            }

            #smart_div {
                height: 10000px;
                display: block;
            }

        }

        /* FORM */

        .lgnBody {
            display: flex;
            background-size: 100% 100%;
            height: 100vh;
            justify-content: center;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            background-color: rgb(255, 255, 255);
        }

        .lgnMain {
            display: flex;
            height: 90vh;
            width: 60vw;
            margin: 7vh 0px;
            /* background-color: rgb(90, 172, 131); */
            border-radius: 1%;


        }

        .lgnH1 {
            display: flex;
            justify-content: center;
            width: 60vw;
            margin-bottom: 11vh;
        }

        .lbl {
            display: block;
            margin: 0.8vh 0px;
            color: rgb(88, 88, 88);
            /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */

        }

        .ipt {
            width: 55vw;
            border: transparent;
            background-color: transparent;
            border-bottom: solid black;
            outline: none;
        }

        form section {
            width: 60vw;
            margin: 4vh 2vw 0px;
        }

        .check {
            width: 8px;
            height: 15px;
            margin: 0.8vh 0px 6vh 2vw;
            border-radius: 100%;
        }

        .lgnBtn {
            display: flex;
            width: 20vw;
            height: 6vh;
            margin: 6vh 20vw 10vh;
            justify-content: center;
            align-items: center;
            background-color: rgb(255, 255, 255);
            border: solid;
        }

        .linkRgst {
            font-family: 'Times New Roman', Times, serif;
            margin: 7vh 0vw 0vh 2vw;
            margin-right: auto;
            font-weight: 500;
            color: rgb(112, 112, 112);
        }

        .linkPsw {
            display: flex;
            justify-content: flex-end;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 500;
            margin: 7vh 6vw 0vh 0vw;
            margin-left: auto;
            color: rgb(112, 112, 112);

        }

        /* @property --num {
  syntax: '<integer>';
  initial-value: 0;
  inherits: false;
}

#num{
    transition: --num 1s;
    counter-reset: num var(--num);
}

#num:hover{
    --num: 10000;
}

#num::before {
    --num: 10000;
    font-weight: bold;
    content: counter(num);
} */

        i {
            color: #F55A13
        }

        .count {
            color: #F55A13;
            font-size: 2.25rem
        }

    </style>

<body>

    @if ($errors->any())
        @foreach ($errors as $message)
            {{ $message }}
        @endforeach
    @endif

    <div class="header">
        <div class="header_left">
        </div>
        <div class="header_mid">
            <ul>
                <li><a href="#carby">CARBY</a></li>
                <li><a href="#smart">Smart</a></li>
                <li><a href="#fiat">Fiat</a></li>
                <li><a href="#citroen">Citroën</a></li>
                <li><a href="#vespa">Vespa</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="header_right">

        </div>
    </div>

    <!-- ***************** header end ******************** -->

    <section id="fullpage">
        <section class="section section_1" id="carby">
            <div class="text_box">
                <h1 class="heding"><b>CARBY</b></h1>
                <p class="sub_heding">
                    <span>Welcome to the car revolution</span>
                </p>
            </div>
            <div class="btn_box">
                <a href="#contact"><button class="primary_btn">Contact Us</button></a>
                <a href="https://play.google.com/store/apps"><button class="secondary_btn">Download App</button></a>
            </div>
        </section>

        <section class="section">
            <div class="row ml-5">
                <div class="col-md-7" style="margin-top: 15vh">
                    <h1 style="font-size: 3.75rem" id="test"><b>Welcome to the car revolution</b></h1>
                    <br><br><br>
                    <p>At Carby, all vehicles are low emission, thus favoring the use of renewable energy and causing
                        the least possible impact on the environment.</p>
                    <p>The main Spanish cities implement a low emission system, reducing mobility to high emission
                        vehicles. At Carby all our vehicles are electric and do not have any type of restriction to
                        access the main cities.</p>
                    <p class="mb-0">The main Spanish cities implement a low emission system, reducing mobility
                        to high emission vehicles. At Carby all our vehicles are electric and do not have any type of
                        restriction to access the main cities.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7" style="margin-top: 150px">
                    <div class="row m-5 text-center" style="font-size: 1.5rem" id="numbers">
                        <div class="col-md-4"><b class="count" data-target="12762">0</b> DOWNLOADS</div>
                        <div class="col-md-4"><b class="count" data-target="1550">0</b> VEHICLES</div>
                        <div class="col-md-4"><b class="count" data-target="3">3</b> ZONES</div>
                    </div>
                </div>
                <div class="col-md">
                    {{-- <img src="https://media.istockphoto.com/vectors/car-vector-id1341156511?b=1&k=20&m=1341156511&s=170667a&w=0&h=Fne1pKwpbriFYPvV5vZydzAgEOkZELu0ziKaxhmaCok=" alt="" style="height: 450px"> --}}
                    <img src="https://media.istockphoto.com/vectors/friends-going-on-road-trip-together-vector-id1327746564?b=1&k=20&m=1327746564&s=170667a&w=0&h=BSz2zGCV-A2pfE4ABA8EZxualZ00qfO1xu_uqA6MqI8="
                        alt="" style="height: 450px">
                </div>
            </div>
        </section>

        <section class="section section_2" id="smart">
            <div class="text_box">
                <h1 class="heding">SMART</h1>
                <p class="sub_heding">
                    <span>EQ ForFour</span>
                </p>
            </div>
            <div class="btn_box">
                <button class="secundary_btn" onclick="smartToggle()">Learn More</button>
            </div>
        </section>

        <section class="section"
            style="transition: height 1s, visibility 1s, opacity 0.5s ease-out; height: 0; visibility: hidden; position: relative;"
            id="smart_div">
            <div class="row" style="margin: 3vh 4vh 3vh 4vh; padding: 3vh 0vh 3vh 0vh">
                <div class="col-md text-center">
                    <i class="fa-solid fa-user-group fa-5x"></i>
                    <h4 class="mt-4">4 seats</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-battery-full fa-5x"></i>
                    <h4 class="mt-4">129 km autonomy</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-door-open fa-5x"></i>
                    <h4 class="mt-4">4 doors</h4>
                </div>
            </div>
            <div class="row" style="margin: 0vh 4vh 4vh 4vh; padding-bottom: 5vh">
                <div class="col-md text-center">
                    <i class="fa-solid fa-horse-head fa-5x"></i>
                    <h4 class="mt-4">82 horse power</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-gear fa-5x"></i>
                    <h4 class="mt-4">Manual</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-euro-sign fa-5x"></i>
                    <h4 class="mt-4">0.25€/min</h4>
                </div>
            </div>
        </section>

        <section class="section section_3" id="fiat">
            <div class="text_box">
                <h1 class="heding">FIAT</h1>
                <p class="sub_heding">
                    <span>500e</span>
                </p>
            </div>
            <div class="btn_box">
                <button class="secundary_btn" onclick="fiatToggle()">Learn More</button>
            </div>
        </section>

        <section class="section" id="fiat_div"
            style="transition: height 1s, visibility 1s, opacity 0.5s ease-out; height: 0; visibility: hidden">
            <div class="row" style="margin: 3vh 4vh 3vh 4vh; padding: 3vh 0vh 3vh 0vh">
                <div class="col-md text-center">
                    <i class="fa-solid fa-user-group fa-5x"></i>
                    <h4 class="mt-4">4 seats</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-battery-full fa-5x"></i>
                    <h4 class="mt-4">320 km autonomy</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-door-open fa-5x"></i>
                    <h4 class="mt-4">3 doors</h4>
                </div>
            </div>
            <div class="row" style="margin: 0vh 4vh 4vh 4vh; padding-bottom: 5vh">
                <div class="col-md text-center">
                    <i class="fa-solid fa-horse-head fa-5x"></i>
                    <h4 class="mt-4">95 horse power</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-gear fa-5x"></i>
                    <h4 class="mt-4">Automatic</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-euro-sign fa-5x"></i>
                    <h4 class="mt-4">0.30€/min</h4>
                </div>
            </div>
        </section>

        <section class="section section_4" id="citroen">
            <div class="text_box">
                <h1 class="heding">CITROËN</h1>
                <p class="sub_heding">
                    <span>ë-C4</span>
                </p>
            </div>
            <div class="btn_box">
                <button class="secundary_btn" onclick="citroenToggle()">Learn More</button>
            </div>
        </section>

        <section class="section" id="citroen_div"
            style="transition: height 1s, visibility 1s, opacity 0.5s ease-out; height: 0; visibility: hidden">
            <div class="row" style="margin: 3vh 4vh 3vh 4vh; padding: 3vh 0vh 3vh 0vh">
                <div class="col-md text-center">
                    <i class="fa-solid fa-user-group fa-5x"></i>
                    <h4 class="mt-4">5 seats</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-battery-full fa-5x"></i>
                    <h4 class="mt-4">351 km autonomy</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-door-open fa-5x"></i>
                    <h4 class="mt-4">5 doors</h4>
                </div>
            </div>
            <div class="row" style="margin: 0vh 4vh 4vh 4vh; padding-bottom: 5vh">
                <div class="col-md text-center">
                    <i class="fa-solid fa-horse-head fa-5x"></i>
                    <h4 class="mt-4">136 horse power</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-gear fa-5x"></i>
                    <h4 class="mt-4">Automatic</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-euro-sign fa-5x"></i>
                    <h4 class="mt-4">0.40€/min</h4>
                </div>
            </div>
        </section>

        <section class="section section_5" id="vespa">
            <div class="text_box">
                <h1 class="heding">VESPA</h1>
                <p class="sub_heding">
                    <span>Elettrica</span>
                </p>
            </div>
            <div class="btn_box">
                <button class="secundary_btn" onclick="vespaToggle()">Learn More</button>
            </div>
        </section>

        <section class="section hide"
            style="transition: height 1s, visibility 1s, opacity 0.5s ease-out; height: 0; visibility: hidden"
            id="vespa_div">
            <div class="row" style="margin: 3vh 4vh 3vh 4vh; padding: 3vh 0vh 3vh 0vh">
                <div class="col-md text-center">
                    <i class="fa-solid fa-user-group fa-5x"></i>
                    <h4 class="mt-4">2 seats</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-battery-full fa-5x"></i>
                    <h4 class="mt-4">40 km autonomy</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-door-open fa-5x"></i>
                    <h4 class="mt-4">0 doors</h4>
                </div>
            </div>
            <div class="row" style="margin: 0vh 4vh 4vh 4vh; padding-bottom: 5vh">
                <div class="col-md text-center">
                    <i class="fa-solid fa-horse-head fa-5x"></i>
                    <h4 class="mt-4">48 horse power</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-gear fa-5x"></i>
                    <h4 class="mt-4">Automatic</h4>
                </div>
                <div class="col-md text-center">
                    <i class="fa-solid fa-euro-sign fa-5x"></i>
                    <h4 class="mt-4">0.15€/min</h4>
                </div>
            </div>
        </section>

        <section class="section section_7" id="contact">
            <div class="text_box">
                <h1 class="heding">CONTACT US</h1>
            </div>

            <main class="form_box" style="margin-top: 5rem">
                <form action="https://m.carby.info/contact" method="get">
                    <section>
                        <label for="name" class="lbl">
                            NAME
                        </label>
                        <input type="text" class="ipt" name="name" required>
                    </section>
                    <section>
                        <label for="name" class="lbl">
                            EMAIL
                        </label>
                        <input type="email" class="ipt" name="email" required>
                    </section>
                    <section>
                        <label for="psw" class="lbl">
                            MESSAGE
                        </label>
                        <textarea type="text" class="ipt" style="resize: none;" name="message" required></textarea>
                    </section>
                    </button>
            </main>
            <div class="btn_box" style="bottom: 20%">
                <button class="primary_btn">
                    SEND
                </button>
            </div>
            </form>

            <div class="footer">
                <ul>
                    <li><a href="https://m.carby.info/storage/terms.pdf">Terms & Conditions</a></li>
                    <li><a href="">CARBY © {{ date('Y') }}</a></li>
                    <li><a href="https://m.carby.info/storage/privacy.pdf">Privacy & Legal</a></li>
                </ul>
            </div>
        </section>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"
        integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(window).on('scroll', function() {
            if (inited) {
                return
            }

            if (el.offsetTop >= window.innerHeight + document.body.scrollTop) {
                inited = true
                init()
            }
        })
        const counters = document.querySelectorAll(".count");
        const speed = 200;

        counters.forEach((counter) => {
            const updateCount = () => {
                const target = parseInt(+counter.getAttribute("data-target"));
                const count = parseInt(+counter.innerText);
                const increment = Math.trunc(target / speed);

                if (count < target) {
                    counter.innerText = count + increment;
                    setTimeout(updateCount, 1);
                } else {
                    count.innerText = target;
                }
            };
            updateCount();
        });

        function smartToggle() {
            var x = document.getElementById("smart_div");
            if (x.style.visibility == 'hidden') {
                x.style.visibility = 'visible';
                x.style.height = '50vh';
            } else {
                x.style.visibility = 'hidden';
                x.style.height = '0';
            }
        }

        function fiatToggle() {
            var x = document.getElementById("fiat_div");
            if (x.style.visibility == 'hidden') {
                x.style.visibility = 'visible';
                x.style.height = '50vh';
            } else {
                x.style.visibility = 'hidden';
                x.style.height = '0';
            }
        }

        function citroenToggle() {
            var x = document.getElementById("citroen_div");
            if (x.style.visibility == 'hidden') {
                x.style.visibility = 'visible';
                x.style.height = '50vh';
            } else {
                x.style.visibility = 'hidden';
                x.style.height = '0';
            }
        }

        function vespaToggle() {
            var x = document.getElementById("vespa_div");
            if (x.style.visibility == 'hidden') {
                x.style.visibility = 'visible';
                x.style.height = '50vh';
            } else {
                x.style.visibility = 'hidden';
                x.style.height = '0';
            }
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

</body>

</html>
