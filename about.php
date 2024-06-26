<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Nephyy</title>
    <link rel="stylesheet" href="rabout.css">
    <link rel="stylesheet" href="media.css">
</head>


<body>

    <nav id="desktop-nav">
        <div class="logo"> About Me </div>
        <div>
            <ul class="nav-links">
                <li><a href="index.php"> Back To Home </a></li>
                <li><a href="experience.php"> Experience </a></li>
                <li><a href="projects.php"> Projects </a></li>
                <li><a href="contacts.php"> Contact </a></li>
            </ul>

        </div>
    </nav>

    <nav id="hamborger-nav"> <!-- Menu Nav po ito for responsive site heheh-->
        <div class="logo"> Nephyy</div>
        <div class="hamborger-menu">
            <div class = "hamborger-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li><a href="index.php" onclick="toggleMenu()"> Back To Home</a></li>
                <li><a href="experience.php" onclick="toggleMenu()"> Experience</a></li>
                <li><a href="projects.php" onclick="toggleMenu()"> Projects</a></li>
                <li><a href="contacts.php" onclick="toggleMenu()"> Contact</a></li>
            </div>
        </div>
    </nav>

    <section id="intro">
        <div class="section_image_container">
            <img src="./assets/img/abouts.png" alt="image nephyy about">
        </div>

        <div class="section__text">
            <h1 class="title"> Nice to meet you! </h1>
            <p class="section__text__p1">"The nature of portfolio is that it's always a work in progress"</p>
        
            <div class="arrow">
            <img src="./assets/img/arrow.png">
            </div>
        
        </div>
    </section>


    <section id="skills">

        <div class="skills__text">
            <h1 class="skills_title"> Skills and Competencies </h1>

            <div class="details-container">

                <div class="article-container">

                    <article>
                        <img
                        src="./assets/abt/imac.png"
                        alt="Experience Icon"
                        class="icon"
                        />
                        <div>
                            <h3> Computer Literate </h3>
                        </div>
                    </article>

                    <article>
                        <img
                        src="./assets/abt/office.png"
                        alt="Experience Icon"
                        class="icon"
                        />
                        <div>
                            <h3> Microsoft Proficiency </h3>
                        </div>
                    </article>

                    <article>
                        <img
                        src="./assets/abt/drawing.png"
                        alt="Experience Icon"
                        class="icon"
                        />
                        <div>
                            <h3> Digital & Traditional Drawing </h3>
                        </div>
                    </article>

                    <article>
                        <img
                        src="./assets/abt/chat.png"
                        alt="Experience Icon"
                        class="icon"
                        />
                        <div>
                            <h3> Verbal & Written Communication Skills </h3>
                        </div>
                    </article>

                    <article>
                        <img
                        src="./assets/abt/ux.png"
                        alt="Experience Icon"
                        class="icon"
                        />
                        <div>
                            <h3> Basic UI/UX Designing </h3>
                        </div>
                    </article>

                    <article>
                        <img
                        src="./assets/abt/buy.png"
                        alt="Experience Icon"
                        class="icon"
                        />
                        <div>
                            <h3> Experienced in Selling Goods Online </h3>
                        </div>
                    </article>

                    <article>
                        <img
                        src="./assets/abt/customer.png"
                        alt="Experience Icon"
                        class="icon"
                        />
                        <div>
                            <h3> Experience in Dealing with Online Customers </h3>
                        </div>
                    </article>

                </div>
            
            </div>
  
        </div>

        <div class="row">
            <h1 class="row_title"> Education 
                <img
                src="./assets/abt/edu.png"
                alt="Experience Icon"
                class="icon"
                />
            </h1>
            

            <div class="col">

                <div class="edu_card card1">
                <div class="cont">
                <h3> Nursery </h3>
                <p> Bakud Elementary School </p>
                </div>

                <a href="https://www.facebook.com/groups/135091723204632" target="_blank">
                <button class="btn btn-color-2 experience-btn">
                    Visit FB Page
                </button>
                </a>
                </div>

                <div class="edu_card card2">
                
                <div class="cont">
                <h3> Kindergarten </h3>
                <p> A.B Simpsons Memorial School  </p>
                </div>

                <a href="https://www.facebook.com/absmsjolo" target="_blank">
                <button class="btn btn-color-2 experience-btn">
                    Visit FB Page
                </button>
                </a>
                </div>

                <div class="edu_card card3">
                
                <div class="cont">
                <h3> Elementary School </h3>
                <p> NDJFG Elementary Department </p>
                </div>

                <a href="https://www.facebook.com/ndjfg" target="_blank">
                <button class="btn btn-color-2 experience-btn">
                    Visit FB Page
                </button>
                </a>
                </div>

                <div class="edu_card card4">
                <div class="cont">
                <h3> Junior High School </h3>
                <p> NDJFG Highschool Department </p>
                </div>

                <a href="https://www.facebook.com/ndjfg" target="_blank">
                <button class="btn btn-color-2 experience-btn">
                    Visit FB Page
                </button>
                </a>
                </div>

                <div class="edu_card card5">

                <div class="cont">
                <h3> Senior Highschool</h3>
                <p> Baliwasan SHS Stand-Alone </p>
                </div>

                <a href="https://www.facebook.com/baliwasanshs" target="_blank">
                <button class="btn btn-color-2 experience-btn">
                    Visit FB Page
                </button>
                </a>
                </div>

                <div class="edu_card card6">

                <div class="cont">
                <h3> College </h3>
                <p> Western Mindanao State University </p>
                </div>
                
                <a href="https://www.facebook.com/wmsu.edu.ph" target="_blank">
                <button class="btn btn-color-2 experience-btn">
                    Visit FB Page
                </button>
                </a>
                </div>
                
            </div>
        </div>


    </section>
    
    <footer>
        <nav>
             <div class="nav-links-container">
                 <ul class="nav-links">
                    <li><a href="index.php"> Back To Home </a></li>
                    <li><a href="experience.php"> Experience </a></li>
                    <li><a href="projects.php"> Projects </a></li>
                    <li><a href="contacts.php"> Contact </a></li>
                 </ul>
             </div>
        </nav>
        <p> Copyright &#169; 2024 Nephyy. All Rights Reserve CHAR HAHA</p>
         
     </footer>





    <script src="script.js"> </script>

</body>



</html>