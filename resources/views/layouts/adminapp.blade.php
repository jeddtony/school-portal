<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <style>
        .big-top-margin{
            margin-top: 100px;
        }
        /* Fixed sidenav, full height */
        .sidenav {
            height: 100%;
            width: 200px;
            /* position: fixed; */
            z-index: 0;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }

        /* On mouse-over */
        .sidenav a:hover, .dropdown-btn:hover {
            color: #f1f1f1;
        }

        /* Main content */
        .main {
            /* margin-left: 200px; Same as the width of the sidenav */
            font-size: 20px; /* Increased text to enable scrolling */
            /* padding: 0px 10px; */
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: green;
            color: white;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
            display: none;
            background-color: #262626;
            padding-left: 8px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 8px;
        }


        .top-margin{
            margin-top: 50px;
        }
        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {
            /* .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;} */
            .sidenav{
                display: none;
                /* visibility: hidden; */
            }

        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="sidenav">
                <a href="#about">Home</a>
                {{--<a href="#services">Services</a>--}}
                {{--<a href="#clients">Clients</a>--}}
                {{--<a href="#contact">Contact</a>--}}
                <button class="dropdown-btn">Create
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="/create/student">Student</a>
                    <a href="/create/teacher">Teacher</a>
                    <a href="/create/subject">Subject</a>
                </div>
                <button class="dropdown-btn">Edit Records
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#">Teacher</a>
                    <a href="#">Student</a>
                    <a href="#">Subject</a>
                </div>
                <button class="dropdown-btn">Print
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <a href="#contact">Search</a>
            </div>
        </div>

        <div class="col-md-10">
            @if(session('status'))
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="alert alert-success alert-dismissible fade show"
                             role="alert" >
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{session('status')}}
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            @endif

            @yield('content')
        </div>
    </div>


        <script>
            /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                    } else {
                        dropdownContent.style.display = "block";
                    }
                });
            }
        </script>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


<script>
    new Vue({
        el: '#app',
        data:{
            showSenior: false
        },
        methods: {
            showView(){
               this.showSenior = true;
            },
            hideView(){
                this.showSenior = false;
            }
        }
    })
</script>
</body>
</html>

