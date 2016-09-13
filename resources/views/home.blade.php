<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LogIn - Coming Soon!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500" rel="stylesheet">

        <!-- Styles -->
        <style>
          body {
            font-family: 'Roboto', sans-serif;
          }

          .container {
            position: absolute;
            top: 0;
            bottom: 0;
            height: 700px;
            left: 0;
            right: 0;
            text-align: center;
            width: 40%;
            margin: auto;
          }

          .container img {
            width: 100%;
          }

          h1 {
            font-size: 60px;
            font-weight: 100;
            text-shadow: 0px 0px 10px #652c90;
            animation-name: text-anim;
            animation-iteration-count: infinite;
            animation-duration: 1s;
            animation-direction: alternate;

          }

          @keyframes text-anim {
            from {
              text-shadow: 0px 0px 15px #652c90;
            }
            to {
              text-shadow: 0px 0px 0px #652c90;
            }
          }

          /* Portrait */
          @media only screen
            and (min-device-width: 320px)
            and (max-device-width: 480px)
            and (-webkit-min-device-pixel-ratio: 2)
            and (orientation: portrait) {
              h1 {
                font-size: 25px;
                font-weight: 100;
              }

              .container {
                height: 180px;
              }
          }
        </style>
    </head>
    <body>

      <div class="container">
        <img src="img/logo.png" alt="LogIn logo" />
        <h1>Coming Soon!</h1>
      </div>


    </body>
</html>
