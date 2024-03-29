<!doctype html>
<html lang="en">


<!-- Mirrored from arasari.studio/wp-content/projects/forny/templates/03_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 07:06:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Authentication forms">
    <meta name="author" content="Arasari Studio">

    <title>As Suffah</title>
    <link href="{{asset('assets')}}/auth/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/auth/css/common.css" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
<link href="{{asset('assets')}}/auth/css/theme-03.css?{{ time() }}" rel="stylesheet">

</head>

<body>
    <div class="forny-container">

<div class="forny-inner">
    <div class="forny-form">
        <div class="mb-1 text-center forny-logo">
            <img src="{{ asset('assets')}}/admin/images/logo.png?{{ time() }}" height="100px" width="100px">
        </div>
        <div class="text-center">
            <p>Enter your information</p>

        </div>
        <form action="{{ route('submit_user_information') }}" method="POST">
            @csrf

    <div class="form-group">

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                        <g transform="translate(-61.127)">
                            <g transform="translate(61.127)">
                                <path d="M75.6,15.584A3.128,3.128,0,0,1,72.452,12.7a5.374,5.374,0,0,0,1.229-1.234,7.564,7.564,0,0,0,1.331-3.524.537.537,0,0,0,.134-.191,5.891,5.891,0,0,0,.445-2.264A5.275,5.275,0,0,0,70.574,0a4.6,4.6,0,0,0-2.088.5,3.62,3.62,0,0,0-.738.134,4.171,4.171,0,0,0-2.6,2.407,6.062,6.062,0,0,0-.292,3.924,6.386,6.386,0,0,0,.27.831.537.537,0,0,0,.125.185A6.772,6.772,0,0,0,67.8,12.7a3.129,3.129,0,0,1-3.146,2.885,3.689,3.689,0,0,0-3.53,3.706V23.46a.536.536,0,0,0,.532.54H78.595a.536.536,0,0,0,.532-.54V19.291A3.688,3.688,0,0,0,75.6,15.584ZM68.044,1.676a2.588,2.588,0,0,1,.61-.1.526.526,0,0,0,.224-.061,3.576,3.576,0,0,1,1.7-.433,4.2,4.2,0,0,1,3.951,4.41c0,.073,0,.146-.005.218A2.3,2.3,0,0,0,72.862,5H69.234a.974.974,0,0,1-.593-.2,1.006,1.006,0,0,1-.328-.432.649.649,0,0,0-.645-.413.656.656,0,0,0-.592.5,5.033,5.033,0,0,1-1.2,2.188C65.336,4.406,66.3,2.187,68.044,1.676Zm-.463,9.346a6.408,6.408,0,0,1-1.29-3.289,6.123,6.123,0,0,0,1.549-2.2A2.083,2.083,0,0,0,68,5.669a2.021,2.021,0,0,0,1.23.414h3.629a1.264,1.264,0,0,1,1.153.76s0,.008,0,.011c0,3.051-1.744,5.532-3.887,5.532A3.315,3.315,0,0,1,67.581,11.022ZM68.8,13.23a3.821,3.821,0,0,0,2.647,0A4.241,4.241,0,0,0,73,15.78l-2.8,4.041a.091.091,0,0,1-.151,0l-2.8-4.042A4.242,4.242,0,0,0,68.8,13.23Zm9.258,9.69H62.192V19.29a2.612,2.612,0,0,1,2.59-2.629,4.5,4.5,0,0,0,1.553-.333l2.846,4.114a1.153,1.153,0,0,0,.947.5h0a1.153,1.153,0,0,0,.947-.5l2.846-4.113a4.326,4.326,0,0,0,1.552.333,2.612,2.612,0,0,1,2.59,2.629Z" transform="translate(-61.127)"/>
                            </g>
                        </g>
                    </svg>

                </span>
            </div>

    <input required  class="form-control" name="name" type="username" placeholder="Name">

        </div>
    </div>






            <div>
                <button class="btn btn-primary btn-block" type="submit">Enter</button>
            </div>





        </form>
    </div>
</div>

    </div>

    <script src="{{asset('assets')}}/auth/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/auth/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/auth/js/main.js"></script>
    <script src="{{asset('assets')}}/auth/js/demo.js"></script>

</body>


<!-- Mirrored from arasari.studio/wp-content/projects/forny/templates/03_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 07:06:02 GMT -->
</html>
