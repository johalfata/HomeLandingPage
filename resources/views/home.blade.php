<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Helpdesk</title>
    <style>
      .body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center" style="padding-top: 10%">
          <div class="col-md-4 col-sm-2 text-center align-self-center mt-5 ">
                <h1>Welcome to the HelpDesk</h1>
                <p class="mt-3 ps">If you're having trouble with any of our products or services, you've come to the right place. Our team is here to help you resolve any issues you may be experiencing.</p>
                <p>Sincerely,</p>
                <p>The Helpdesk Team</p>
                
                <button type="button" class="btn btn-info">
                  <a href="{{ route('login') }}" class="text-decoration-none text-dark">login</a>
                </button>
                <button type="button" class="btn btn-info ml-2">
                  <a href="{{ route('register') }}" class="text-decoration-none text-dark"> register</a>
                </button>
        </div>
          <div class="col-md-4 col-sm-2 mt-5">
            <!--?xml version="1.0" standalone="no"?-->              
            <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">                    <defs>                         <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">                            <stop id="stop1" stop-color="rgba(248, 117, 55, 1)" offset="0%"></stop>                            <stop id="stop2" stop-color="rgba(251, 168, 31, 1)" offset="100%"></stop>                        </linearGradient>                    </defs>                <path fill="url(#sw-gradient)" d="M20.8,-26.5C25,-21.3,25,-12.9,27.8,-3.9C30.6,5.1,36.2,14.6,33.7,20C31.2,25.4,20.7,26.6,11.5,28.8C2.3,31,-5.7,34.2,-12.8,32.6C-19.9,31.1,-26.2,24.9,-30.1,17.6C-34,10.3,-35.5,1.9,-33.7,-5.5C-31.9,-13,-26.8,-19.4,-20.6,-24.2C-14.5,-29,-7.2,-32.2,0.5,-32.9C8.3,-33.5,16.7,-31.6,20.8,-26.5Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;"></path>              </svg>     
          </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
