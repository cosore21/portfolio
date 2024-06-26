<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cosore</title>
    <link rel="stylesheet" href="./portfolio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="./scripts.js"></script>
    <link rel="shortcut icon" href="images/me.jpg" type="image/x-icon">
</head>

<body>

    <header>
        <a href="portfolio.php" class="logo-holder">
            <div class="logo">
                CO ORE
            </div>
            <div class="logo-text">S</div>
        </a>

        <nav class="sidebar">

            <ul id="menu">
                <a href="#" style="margin-top:10px;" onclick=toggleCancel();>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
</svg>
                </a>
                <li><a href="#hero">Home</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="mailto:clementosore2020@gmail.com">Contact</a></li>
            </ul>
        </nav>


        <nav>
            <ul id="menu">
                <li><a href="#hero" id="hideon-mobile">Home</a></li>
                <li><a href="#skills" id="hideon-mobile">Skills</a></li>
                <li><a href="#projects" id="hideon-mobile">Projects</a></li>
                <li><a href="mailto:clementosore2020@gmail.com" id="hideon-mobile">Contact</a></li>

            </ul>
            <a href="#" id="hideon-bigscreen" onclick=toggleMobileMenu();>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
</svg>

        </nav>
    </header>

    <main>
        <section class="hero container">
            <div class="hero-texts">
                <div class="hero-description">
                    <h1><small>Hi It's Me,</small> Clement. </h1>
                    <p class="outer-wrapper">
                    <p class="wrapper">
                    <p class="text static-text">I'm a</p>
                    <p class="text dynamic-texts"><span></span></p>
                    </p>
                    </p>

                    <div class="call-to-action">
                        <a href="./images/osresume.pdf" class="button black"><button>View Resume</button></a>
                        <a href="mailto:clementosore2020@gmail.com" class="button white"><button>Contact
                                Me</button></a>
                    </div>
                    <div class="social-links">
                        <i class="bi bi-github"></i>
                        <!-- <a href=""><img src="images/linkedin.png" alt=""></a>
                        <a href=""><img src="images/x.png" alt=""></a>
                        <a href=""><img src="images/github.png" alt="" ></a> -->
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="images/me.jpg" alt="" width="100%">
            </div>
        </section>

        <section class=" logos container">
            <div class="marquee">
                <div class="track">
                    <img src="images/html.png" alt="HTML">
                    <img src="images/css.png" alt="CSS">
                    <img src="images/saas.png" alt="Saas">
                    <img src="images/bootstrap1.jpg" alt="bootstrap">
                    <img src="images/vs code.jpg" alt="VsCode">
                    <img src="images/js.png" alt="Javascript">
                    <img src="images/tailwind.png" alt="tailwind">
                    <img src="images/git.png" alt="GIT">

                    <img src="images/html.png" alt="HTML">
                    <img src="images/css.png" alt="CSS">
                    <img src="images/saas.png" alt="Saas">
                    <img src="images/bootstrap1.jpg" alt="bootstrap">
                    <img src="images/vs code.jpg" alt="VsCode">
                    <img src="images/js.png" alt="Javascript">
                    <img src="images/tailwind.png" alt="tailwind">
                    <img src="images/git.png" alt="GIT">
                </div>
            </div>
        </section>



        <section id="skills" class="skills ">
            <h2>
                <small>My</small>
                Skills
            </h2>
            <div class="skill-area">
                <div class="skill-holder container">
                    <div class="left-column">

                        <div class="progress-area">

                            <div class="div-one">

                                <h2>Html</h2>
                                <div class="progress">
                                    <div class="html">
                                        <span>90%</span>
                                    </div>
                                </div>
                                <h2>Figma</h2>
                                <div class="progress">
                                    <div class="figma">
                                        <span>88%</span>
                                    </div>
                                </div>


                                <h2>Css </h2>
                                <div class="progress">
                                    <div class="css">
                                        <span>84%</span>
                                    </div>
                                </div>

                                <h2>Bootstrap</h2>
                                <div class="progress">
                                    <div class="bootstrap">
                                        <span>80%</span>
                                    </div>
                                </div>

                            </div>


                            <div class="div-two">
                                <h2>Tailwind</h2>
                                <div class="progress">
                                    <div class="tailwind">
                                        <span>70%</span>
                                    </div>
                                </div>

                                <h2>Javascript</h2>
                                <div class="progress">
                                    <div class="js">
                                        <span>68%</span>
                                    </div>
                                </div>
                                <h2>React.Js</h2>
                                <div class="progress">
                                    <div class="react">
                                        <span>64%</span>
                                    </div>
                                </div>
                            </div>





                        </div>

                    </div>
                    <div class="right-column">
                        <h3>A bit about Me</h3>
                        <p>Hi I'm Clement, a Designer and a Developer who developes real world solutions products to
                            various
                            problems. Much interested in Web Development and Product Design.</p>
                    </div>
                </div>
            </div>
        </section>



        <section class="work-experience container">
            <h2>
                <small>Recent</small>
                Work Experience
            </h2>
            <div class="jobs">
                <article>
                    <figure>
                        <div>
                            <img src="images/main.jpg" alt="workplace 1">
                            <figcaption>Apollo Childrens Science Park</figcaption>
                        </div>
                    </figure>
                    <h3>Apollo Children's Science Park</h3>
                    <div class="date">2024-2024</div>
                    <p>System Admin, System Support, Software Developer.</p>

                </article>

                <article>
                    <figure>
                        <div>
                            <img src="images/me.jpg" alt="workplace 2">
                            <figcaption>Workplace -2</figcaption>
                        </div>
                    </figure>
                    <h3>Workplace - 2</h3>
                    <div class="date">2022-2023</div>
                    <p>This is a Description of the Workplace</p>

                </article>

                <article>
                    <figure>
                        <div>
                            <img src="images/image2.jpg" alt="workplace 3">
                            <figcaption>Workplace -3</figcaption>
                        </div>
                    </figure>
                    <h3>Workplace - 3</h3>
                    <div class="date">2023-2024</div>
                    <p>This is a Description of the Workplace</p>

                </article>
            </div>
        </section>

        <section id="projects" class="bento container">
            <h2>
                <small>Previous</small>
                Completed Projects
            </h2>
            <div class="bento-grid">
                <a href="" class="bento-item">
                    <img src="images/project0.png" alt="Apollo1">
                </a>
                <a href="" class="bento-item">
                    <img src="images/project1.png" alt="Apollo2">
                </a>
                <a href="" class="bento-item">
                    <img src="images/project2.png" alt="cosore1">
                </a>
                <a href="" class="bento-item">
                    <img src="images/project3.png" alt="cosore2">
                </a>
                <a href="" class="bento-item">
                    <img src="images/project6.png" alt="cosore3">
                </a>
                <a href="" class="bento-item">
                    <img src="images/project7.png" alt="Apollo3">
                </a>
            </div>
        </section>
        <section class="chatbot container">
            <h2>
                <small>Get in Touch With Me</small>
            </h2>
            <div class="mychatbot">
                <div class="chat-info">
                    <h3>Let's talk and Get Your idea into Work</h3>
                    <p>Please ask me some Questions to Get a better idea of whom i am and what i have done.</p>
                    <p>You can also download my Resume if you need to have a look at it. I'M currently longing for new
                        opportunities,in any case you have a project we can engage towards it.</p>
                    <a href="./images/osresume.pdf" class="button-download">Download Resume</a>
                </div>
                <div class="chat-box">
                    <div class="scroll-area">
                        <ul id="chat-log">
                            <li>
                                <span class="avatar bot">Chatbot</span>
                                <div class="messages">Hi, I'm a fronted developer and product designer, How can I help
                                    you?</div>
                            </li>
                            <li>
                                <span class="avatar user">User</span>
                                <div class="messages">Hi,i have a question to ask you about this resume.</div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-message">
                        <input type="text" placeholder="Hi Clement, which skills are you best at?">
                        <button class="button-send">Send</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="container ">
                <center class="footer-text">&copy;<a href="mailto:clementosore2020@gmail.com" id="hideon-mobile">cosoreLTD</a></center>
            </div>

        </section>
    </main>

    <!-- js -->
    <script>

        //sidebar

        function toggleMobileMenu() {
            const sidebar = document.querySelector('.sidebar ul')
            sidebar.style.display = 'flex'
        }


        function toggleCancel() {
            const sidebar = document.querySelector('.sidebar ul')
            sidebar.style.display = 'none'
        }


        //sidebar

        const text = document.querySelector(".dynamic-texts span");
        const textload = () => {
            setTimeout(() => {
                text.textContent = "Designer";
            }, 1000);
            setTimeout(() => {
                text.textContent = "Developer";
            }, 4000);

            setTimeout(() => {
                text.textContent = "Freelancer";
            }, 8000);
        }
        textload();

        setInterval(textload, 12000)

    </script>
</body>

</html>