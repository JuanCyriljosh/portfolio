<!DOCTYPE html>
<html>
  <head>
    <title>PORTFOLIO</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <style>
        section{
            width: 100vw;
            height: 100vw;
            padding: 50px;
        }

        .cl_white{
            color: white;
        }

        img{
            width: 300px;
            transition: opacity is ease-in-out;
        }
        img:hover{
            opacity: .10;
        }

        .col-text{
            -webkit-column-count: 3;
        }
    </style>
   </head>
  <body data-spy="scroll" data-target=".navbar">
        <nav class = "navbar navbar-inverse navbar-fixed-bottom">
            <ul class = "nav navbar-nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#work">What I Do</a></li>
                <li><a href="#about">What about Me</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>
        </nav>

        <section id = "home" style = "background: url(images/header1.jpg); background-size: 100% 100%;" class = "cl_white text-center">
            <h1>My Portfolio</h1>
            <p class = "lead">Welcome to my world, The Life of a Programmer</p>
            <button class = "btn btn-default">Contact Me</button>
        </section>


        <section id = "work" class = "container">
            <div class = "page-header">
                <h1 class = "text-center">My Work</h1>
            </div>
            <div class = "text-center">
                <img src="images/port1.png" class = "img-thumbnail"/>
                <img src="images/port2.png" class = "img-thumbnail"/>
                <img src="images/port3.png" class = "img-thumbnail"/>
                <img src="images/port4.png" class = "img-thumbnail"/>
                <img src="images/port5.png" class = "img-thumbnail"/>
                <img src="images/port6.png" class = "img-thumbnail"/>
            </div>

        </section>


        <section id = "about" class ="container">
            <h2 class = "text-center">My Skills</h2>
            <div class = "col-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                 dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><br>
        
        
            <div class = "row">
                <div class = "col-md-6">
                    <div class = "panel panel-primary">
                        <div class = "panel-heading">
                            <h4>PHP Programmer</h4>

                        </div>
                        <div class = "panel-body">
                            <img src = "images/me.png" class = "img-circle center-block">
                            <p class = "lead text-center"> I Do PHP Programming</p>
                        </div>
                        <div class = "panel-footer"></div>

                    </div>

                </div>

                <div class = "col-md-6">
                    <div class = "panel panel-primary">
                        <div class = "panel-heading">
                            <h4>Web Designer</h4>

                        </div>
                        <div class = "panel-body">
                            <img src = "images/me2.jpg" class = "img-circle center-block">
                            <p class = "lead text-center"> I Do CSS Bootstrap Designing</p>
                        </div>
                        <div class = "panel-footer"></div>
                    </div>

                </div>
            </div>
        </section>

        <section id="contact" style="background: silver;">
            <div class="page-header">
                <h2 class="text-center">Contact Me</h2>
            </div>
            <form class="col-md-5 col-md-offset-4">
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your Name" type="text"></input>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your E-mail" type="email"></input>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Subject" type="text"></input>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="10">Comments</textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-success btn-block"  type="submit"></input>
                </div>
            </form>
        </section>
    </body>
</html>