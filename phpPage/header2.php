    <header>
        <div id="headerImg">
            <div class="logoTitre">
                <h1>Thalasso</h1>
                <h2>ZEN</h2>
            </div>
            <div id="login">
                <a href="">Inscription</a>
                <p>ㅤ|ㅤ</p>
                <a href="">Connexion</a>
            </div>
        </div>
    </header>


    <style>
        #headerImg {
            background-image: url("../pictures/header/images6.jpg");
            height: 50vh;
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .logoTitre{
            position: absolute;
            left: 10%;
            display: flex;
            height: 100%;
            align-items: center;
            color: #4FF216;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logoTitre h1, .logoTitre h2{
            padding: 2rem 0;
            font-size: 3rem;
        }


        #login {
            display: flex;
            justify-content: space-between;
            position: absolute;
            right: 1rem;
            top: 1rem;
        }

        #login a {
            text-decoration: none;
            letter-spacing: 0.2rem;
            color: #4FF216;
        }

        #login p {
            color: #4FF216;
        }
    </style>