<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Spark Bank</title>
    <!-- links  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
</head>

<body>
    <div class="section1">
        <div class="wraper">
            <div class="name" data-aos="zoom-in">
                <span class="headingtext">Spark<span class="bank">Bank</span></span>
            </div>
            <div class="navcon">
                <ui class="nav_bar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutUs.php">About</a></li>
                    <li><a href="hover.php">Contact Us</a></li>
                </ui>
            </div>


            <div class="textCon">
                <div class="wel_text" data-aos="fade-right">
                    <p id="one">Welcome</p>
                    <p class="two">Transfer money at your finger tip.
                        <br>
                        We're here for risk takers and adventure seeker.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="section2">
        <h1>Banking Function</h1>
    </div>

    <div class="row">
        <div class="user" id="colum">
            <a href="user.php"><img src="img/users.svg" alt="" style="width:100%" data-aos="fade-up"></a>
            <h3>User Detail</h3>
        </div>
        <div class="make_trans" id="colum">
            <a href="transact.php"><img src="img/transaction2.jpeg" alt="" style="width:100%" data-aos="fade-up"></a>
            <h3>Make a Transaction</h3>
        </div>
        <div class="trans_history" id="colum">
            <a href="transactionh.php"><img src="img/transaction_history.jpg" alt="" style="width:100%"
                    data-aos="fade-up"></a>
            <h3>Transaction History </h3>
        </div>
    </div>
    <footer class="foot">
        <div class="foottext">
            <p class="ftext">Powered By Chetas||The Spark Foundation Intern<br>
                Basic Banking System|| Copyright ?? 2021|| FAQ ||All rightes reserved </p>
        </div>
    </footer>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
    </script>
</body>

</html>