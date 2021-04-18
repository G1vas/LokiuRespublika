<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maindatabase";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <section id="title" class="top">
        <div class="margins">
            <section class="showcase">
                <header>
                    <h2 class="logo">LOKIU Respublika</h2>
                    <div class="toggle">MENU</div>
                </header>

                <video src="introvid.mp4" muted loop autoplay preload="auto"></video>
                <div class="overlay"></div>
                <div class="text">
                    <h2>LOKIS</h2>
                    <h3>Video taken from <a class="none" href="https://www.youtube.com/watch?v=sRP8YXPdLR4&ab_channel=LietuvosNacionalinisDramosTeatras">Here</a></h3>
                    <p>
                        The images, video, or the special background effect are not mine. Everything was used to show what I learned during my Full Stack course.
                    </p>
                    <a href="#navbar">Explore</a>
                </div>

            </section>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#title">Title</a></li>
                <li><a href="#information">Information</a></li>
                <li><a href="#postComment">Post a comment</a></li>
                <li><a href="#comments">Comments</a></li>

            </ul>
        </div>
    </section>
    <nav id="navbar">
        <a href="#title">Title</a>
        <a href="#information">Information</a>
        <a href="#postComment">Post a comment</a>
        <a href="#comments">Comments</a>
    </nav>
    <section id="information" class="main-body">
        <p class="intro-text">
            I don't really remember from where I took the photos, but all of them can be googled or just searched by image. Some of the photos are from performance LOKIS, some are from Respublika. Both performances were built by Lukasz Twarkowski.
        </p>
        <div class="row orange">
            <img src="./images/lokis.jpg" alt="lokis" class="col" />
            <div style="background-color:#f55500" class="col col-txt">
                <h4 class="subheading">Lorem, ipsum.</h4>
                <h3 class="title">Photo from LOKIS</h3>
                <div class="hr"></div>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                    infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like).
                </p>
            </div>
        </div>
        <div class="row row-reverse red">
            <img src="./images/unnamed.jpg" alt="" class="col" />

            <div style="background-color:#7b0012" class="col col-txt">
                <h4 class="subheding">Raven</h4>
                <h3 class="title">Photo from Respublika's rehearsal</h3>
                <div class="hr"></div>
                <p>
                    During the creation of this play, actors lived in a secluded area, somewhere in the Lithuanian forest. They did that because they wanted to experience what is life living away from everyone. They created their own Respublika there, away from people. Because there were no phones, no bills, they had to work for themselves to build some of the things and to survive.
                </p>
                <p>
                    They soon found out that the thing that unites them the most is
					music.
                </p>
            </div>
        </div>
        <div class="row blue">
            <img src="./images/1.jpg" alt="" class="col" />

            <div style="background-color:#0064c8" class="col col-txt">
                <h4 class="subheding">Reality</h4>
                <h3 class="title">IMAGE IS EVERYTHING</h3>
                <div class="hr"></div>
                <p>
                    What is reality? is it something that you see?
                </p>
                <p>
                    Because if it's so, that image can be manipulated. During the play, you can watch the performance in three different ways - you can see it unfold live, you can see it through a big screen. Or you can be a part of it. And all of them provide different perspectives.
                </p>
            </div>
        </div>
        <div class="row row-reverse white">
            <img src="./images/2.jpg" alt="" class="col" />

            <div style="background-color: #dcdcdc;" class="col col-txt">
                <h4 class="subheding">Lights.</h4>
                <h3 class="title">They make you blind</h3>
                <div class="hr"></div>
                <p>
                    The dominant colors of both performances are red, white, and black.
                </p>
                <p>
                    Red hurts your eyes. White flashes too fast to make anything of your surroundings. Black is calm and relaxing.
                </p>
            </div>
        </div>
        <div class="row brown">
            <img src="./images/3.jpg" alt="" class="col" />

            <div style="background-color:#792f12" class="col col-txt">
                <h4 class="subheding">The moment of comfort</h4>
                <h3 class="title">Actors == audience</h3>
                <div class="hr"></div>
                <p>
                    The most amazing part of this spectacle is that you are also an actor, a participant.
                </p>
                <p>
                    You walk around the "stage" freely, you can interact witch the actors, and they can interact with you. You dance with them, and they dance with you.
                </p>
            </div>
        </div>
        <div class="row row-reverse other-red">
            <img src="./images/7.jpg" alt="" class="col" />

            <div style="background-color:#fd0002" class="col col-txt">
                <h4 class="subheding">A commune, if you will</h4>
                <h3 class="title">Too much to see in one go </h3>
                <div class="hr"></div>
                <p>
                    If you want the full experience, be ready to see, feel, and dance it at least three times.
                </p>
                <p>
                    The performance is not meant to be fully seen in one go. Even if it was, it would be really hard - it lasts for 6 hours. And if you choose, you almost never sit or relax there, you are always dancing and admiring the play. Not to mention that you can actually use a sauna there, and shower after it.
                </p>
            </div>
        </div>
        <article class="intro-text">
            <h2 class="title">About</h2>
            <p class="col col-txt">
			Taken from <a style=" color: white;" href="https://www.teatras.lt/lt/spektakliai/respublika/">here</a>.<br>
			„Respublika“ yra meninis projektas, kurio kūrėjai siekė išbandyti bazinių pajamų idėją. Kas nutiks, jei iš naujo apibrėšime darbo sąvoką? Ar darbu gali būti vadinama tik veikla, kuria siekiama padidinti BVP ir atlyginimą?
Projekto dalyviai, pasitraukę į Lietuvos gamtą, gaudavo nustatytą sumą pragyvenimui ir jų buvo prašoma sukurti bendruomenę, veikiančią už įprastų socialinių ir ekonominių struktūrų ribų. Jie tyrė darbą, kuris neatitinka 40 valandų per savaitę suvokimo. Netrukus paaiškėjo, kad žmones suvienijo ir jų bendra veikla tapo šokiai bei muzika. Ar muzikos kūrimas ir šokiai laukinėje gamtoje (nepaisant pramogų pasaulio primestų taisyklių) turi platesnę, ritualinę, suvienijančią prasmę?<br>

Po penkerių metų, kai supanti tikrovė tampa vis problemiškesnė ir didėja skilimo pavojus, jie pabandė grįžti prie savo mažo eksperimento, išmėginto praeityje. Būnant kartu įvyko kai kas, kas juos įtikino, kad eksperimentas, prasidėjęs nuo bazinių pajamų idėjos, gali būti jiems nerimą keliančių sudėtingesnių pasaulio problemų sprendimo būdas.<br>

Ar patirtis, neturinti finansinių matų, turi kokią nors vertę? Ar nuo seno žinomas ryšys tarp muzikos, šokio ir pasipriešinimo veikia šiais laikais? Ar muzika ir šokis turi ritualinę jėgą sustiprinti išsigandusį ir susirūpinusį žmogų? Padaryti jį ir ją ne tokį bejėgį? Atsakingesnį? Jautresnį? Ar respublikos ir jos komponentų idėja gali viršyti politinę struktūrą ir įgyti naujų egzistencinių prasmių?<br>

„Respublika“ yra nauja teatrinė patirtis erdvėje ir laike, jos režisierius – keturis „Auksinius scenos kryžius“ pelniusio „Lokio“ kūrėjas Lukaszas Twarkowskis. Spektaklį kuria tarptautinė komanda (dalis jos dirbo prie „Lokio“ spektaklio). Ypatingas Lietuvos teatro gyvenimo įvykis, kad šio spektaklio koprodiuseris yra garsusis Miuncheno Kammerspiele, aktorius Komi Togbonou iš šio teatro trupės vaidins „Respublikoje“.<br>
</p>

            <h3 class="title">Comments</h3>

            <form id="postComment" action="<!--proc.php-->" method="post">
                <input autocomplete="off" id="username" name="username" type="text" placeholder="Username" required
                    maxlength=25>
                <input autocomplete="off" id="email" name="email" type="text" placeholder="Email" required maxlength=30>
                <textarea id="comment" name="comment" placeholder="Comment" type="text" name="#" id="#" cols="30"
                    rows="5" required></textarea>
                <button onClick="refreshPage()" type="submit">Post comment</button>
            </form>
            <div id="out"></div>

			

            <script>
            const formEl = document.getElementById('postComment');
            const outEl = document.getElementById('out');

            formEl.addEventListener("submit", (event) => {
                event.preventDefault();

                const _formData = new FormData(formEl);

                sendFormWithFetch(_formData);
            });

            function sendFormWithFetch(dataToSend) {
                const options = {
                    method: 'post',
                    body: dataToSend
                };
                fetch('proc.php', options)
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(data) {
                        outEl.innerHTML = data;

                        if (data.emailErr) {
                            document.getElementById('email').style.borderColor = 'tomato';
                        }
                        // else {
                        //     document.getElementById('email').style.borderColor = 'green';
                        //     document.getElementById('email').style.borderWidth = 'thick';
                        // }

                        if (data.userErr) {
                            document.getElementById('username').style.borderColor = 'tomato';
                        }
                        // else {
                        //     document.getElementById('username').style.borderColor = 'green';
                        //     document.getElementById('username').style.borderWidth = 'thick';


                        // }
                        if (data.commentErr) {
                            document.getElementById('comment').style.borderColor = 'tomato';
                        }
                        // else {
                        //     document.getElementById('comment').style.borderColor = 'green';
                        //     document.getElementById('comment').style.borderWidth = 'thick';

                        // }

                    })
                    .catch(function(err) {
                        console.log(err);
                    })
            }
            </script>

            <div id="comments" class="comments">
                <div class="card">
                    <div class="name">random name</div>
                    <div class="email">randommail@org.ocm</div>
                    <div class="comment">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur molestias
                        laudantium a. Optio temporibus, ipsum inventore, minima quae, ad dolores quo dolor a saepe
                        beatae modi eaque dicta quam! Eligendi!m30</div>
                </div>

                <?php
/*
                $sql = "SELECT * FROM comments";
                $result = $con->query($sql);


                if ($result->num_rows > 0) {
            
                    while($row = $result->fetch_assoc()) {

                        echo "<div class='card'><div class='name'>" .$row["username"]. "</div><div class='email'>" .$row["email"]. "</div><div class='comment'>" .$row["comment"]."</div></div>";



                    }

                } else {
                    echo "0 results";
                }
*/
                ?>

            </div>



        </article>
    </section>


    <footer>
        <div class="center-text-footer">
            <div class="row">
                <div class="row-footer-left">
                    <h3 class="footer-title">About us</h3>
                    <p>As mentioned before, all images, the video and the background special effect belong to their respective owners. This project was made as my final exam during my Full Stack course. I chose to incorporate more of Frontend (the design, the video, the moving background) because I already did a project in my university, where I made a terrible design, but I did a lot more of Backend things - user registration, login, security checks, secure password storing and so on. During this project, I wanted to make something I would like to use and wouldn't be ashamed of showing to someone. In any case, if a site has a terrible user interface/design, no one is even going to use it. So I tried to make at least somewhat appealing :)
                    </p>
                </div>
                <div>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="copyright-stuff">
                <p>Copyright © 2021 All Rights Reserved by IJ and content owners.</p>
            </div>
        </div>
    </footer>





    <script>
    const menuToggle = document.querySelector(".toggle");
    const showcase = document.querySelector(".showcase");
    menuToggle.addEventListener("click", () => {
        menuToggle.classList.toggle("active");
        showcase.classList.toggle("active");
    });
    </script>

    <script>
    window.onscroll = function() {
        myFunction();
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }
    }
    </script>


	<script>
	function refreshPage(){
		window.location.reload();
	} 
	</script>


    <!-- THE SPECIAL EFFECTS========================================================================= -->
    <!-- THE SPECIAL EFFECTS========================================================================= -->
    <!-- THE SPECIAL EFFECTS========================================================================= -->
    <!-- THE SPECIAL EFFECTS========================================================================= -->
    <!-- THE SPECIAL EFFECTS========================================================================= -->
	<!-- TAKEN FROM https://www.csh.bz/2016/02/20/ -->
    <script type="text/javascript">
    // ellipse polyfill via https://github.com/google/canvas-5-polyfill/blob/master/canvas.js
    if (CanvasRenderingContext2D.prototype.ellipse == undefined) {
        CanvasRenderingContext2D.prototype.ellipse = function(x, y, radiusX, radiusY, rotation, startAngle, endAngle,
            antiClockwise) {
            this.save();
            this.translate(x, y);
            this.rotate(rotation);
            xo
            this.scale(radiusX, radiusY);
            this.arc(0, 0, 100, startAngle, endAngle, antiClockwise);
            this.restore();
        }
    }
    // end polyfill
    console.clear()
    var PI = Math.PI,
        TAU = Math.PI * 2,
        t = 0,
        startTime = Date.now()

    function sin(a) {
        return Math.sin(a)
    }

    function cos(a) {
        return Math.cos(a)
    }

    function sqrt(a) {
        return Math.sqrt(a)
    }

    function hypot(a, b) {
        return Math.sqrt(a * a + b * b)
    }

    function hsla(h, s, l, a) {
        return "hsla(" + h + "," + s + "%," + l + "%," + a + ")"
    }

    function rainbow(a, offset, mid, breadth) {
        var r = mid + (breadth / 2 | 0) * sin(a + 0 * offset),
            g = mid + (breadth / 2 | 0) * sin(a + 2 * offset),
            b = mid + (breadth / 2 | 0) * sin(a + 4 * offset)
        return "rgba(" + (r | 0) + "," + (g | 0) + "," + (b | 0) + ",0.3)"
    }

    function polygon(x, y, sides, radius, rotation) {
        ctx.save()
        ctx.translate(x, y)
        ctx.beginPath()
        ctx.moveTo(sin(0 + rotation) * radius, cos(0 + rotation) * radius)
        for (var i = TAU / sides; i < TAU; i += TAU / sides) {
            ctx.lineTo(sin(i + rotation) * radius, cos(i + rotation) * radius)
        }
        ctx.closePath()
        ctx.restore()
    }
    var canvas = document.createElement('canvas')
    var ctx = canvas.getContext('2d')
    document.body.appendChild(canvas)
    canvas.resizeHandler = function() {
        canvas.width = window.innerWidth // window.devicePixelRatio
        canvas.height = window.innerHeight // window.devicePixelRatio
        canvas.min = Math.min(canvas.width, canvas.height)
        canvas.max = Math.max(canvas.width, canvas.height)
        canvas.hyp = hypot(canvas.width, canvas.height)
    }
    canvas.resizeHandler()
    window.addEventListener('resize', canvas.resizeHandler, false)
    // class Point {
    // constructor(x, y, size, row, col){
    function Point(x, y, size, row, col) {
        this.x = x
        this.xPI = x / canvas.width * PI
        this.y = y
        this.yPI = this.y / canvas.height * PI
        this.size = size
        this.row = row
        this.col = col
        this.xOff = 0
        this.yOff = 0
        this.xScale = 1
        this.yScale = 1
        this.rotation = 0
    }
    Point.prototype.shape = function() {
        ctx.fillRect(-this.size / 2, -this.size / 2, this.size, this.size)
    }
    Point.prototype.square = function() {
        ctx.fillRect(-this.size / 2, -this.size / 2, this.size, this.size)
    };
    Point.prototype.polygon = function(sides, rotation) {
        polygon(0, 0, sides, this.size, rotation)
        // ctx.fill()
    }
    Point.prototype.circle = function() {
        ctx.beginPath()
        ctx.arc(0, 0, this.size / 2, 0, TAU, false)
        // ctx.closePath()
        ctx.fill()
    }
    Point.prototype.draw = function(fn) {
        ctx.save()
        ctx.translate(this.x + this.xOff, this.y + this.yOff)
        ctx.rotate(this.rotation)
        ctx.scale(this.xScale, this.yScale)
        // this.shape()
        fn()
        ctx.restore()
    }
    // TODO: add distance function, rotationTo
    // }

    var grid = []
    // Point.size = grid.stride = canvas.hyp / 20
    grid.populate = function() {
        grid.stride = canvas.hyp / 200
        grid.length = 0
        var row = 0,
            col = 0,
            height = grid.stride * 2,
            width = sqrt(3) / 2 * height,
            size = grid.stride
        for (var y = -grid.stride * 2; y < canvas.height + grid.stride * 2; y += height / 1.34) {
            col = 0
            for (var x = -grid.stride * 2; x < canvas.width + grid.stride * 2; x += width) {
                var p = new Point(x, y, size, row, col)
                grid.push(p)
                col++
            }
            row++
        }
    }
    grid.populate()

    window.addEventListener('resize', grid.populate)

    function animloop() {
        animloop.id = requestAnimationFrame(animloop)
        t = (Date.now() - startTime) / 2000
        ctx.clearRect(0, 0, canvas.width, canvas.height)
        ctx.strokeStyle = ctx.fillStyle = 'rgb(255,0,0)'
        ctx.fillRect(0, 0, canvas.width, canvas.height)
        ctx.fillStyle = 'rgb(0,0,0)'
        ctx.strokeStyle = 'rgb(0,0,0)'
        ctx.lineWidth = grid.stride * sqrt(3) / 2
        ctx.globalCompositeOperation = 'xor'
        for (var i = 0, p; p = grid[i]; i++) {
            // p.side = grid.stride/1.45
            p.xOff = 0
            if (p.row % 2) {
                p.xOff = p.size * sqrt(3) / 2
            } else {
                p.xOff = 0
            }
            p.xScale = p.yScale = sin(t / 4 + p.yPI / 9 * 0 - p.xPI / 11 * 0) / 2.25 + 1.45
            p.rotation = p.xScale - t / 8
            if ((p.row + p.col) % 2 == 0) {
                p.draw(function() {
                    p.polygon(6, PI / 3 * sin(PI / 2))
                    ctx.fill()
                    // ctx.stroke()
                })
            } else {
                p.draw(function() {
                    p.polygon(6, PI / 3 * sin(-PI / 2))
                    ctx.fill()
                    // ctx.stroke()
                })
            }
        }

    }
    animloop()
    // grid[0].draw(grid[0].square)
    </script>
</body>

</html>