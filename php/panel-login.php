<div class="adminFormContainer">
        <div class="adminForm bImage">
            <h2>ZSOiT PANEL</h2>
            <form>
                <input class="adminForm__input" type="uname" name=""login placeholder="login"> <br>
                <input class="adminForm__input" type="password" name="password" placeholder="hasło" required> <br>
                <input class="adminForm__btn" type="submit" value="Zaloguj się"><br>
                <input type="checkbox" class="adminForm__text" id="scales" name="remeber" checked>
                <label for="remeber">Zapamiętaj mnie</label> <br> <br>
                <a href="">Nie pamiętasz hasła?</a> <br>
                <a href="">Zarejestruj się</a> <br> <br>
                <p id="ip"> <?php  $status = json_decode(file_get_contents('https://api.ipify.org?format=json')); echo $status->ip ?> </p>
            </form>
        </div>
        <div class="adminForm__info bImage">
            <h2>Galeria ZSOiT Miastko</h2>
            <h4>UŻYTE TECHNOLOGIE</h4>
            <ul>
                <li>HTML/CSS</li>
                <ul>
                    <li>font-mfizz</li>
                    <li>SASS(SCSS)</li>
                </ul>
                <li>JavaScript</li>
                <ul>
                    <li>vanilla.js</li>
                    <li>lightbox.js</li>
                </ul>
                <li>PHP</li>
                <li>MySQL</li>
                <li>GIT</li>
            </ul>
            <div class="icon">
                    <i id="html-icon" class="icon-html5-alt"></i>
                    <i id="css-icon" class="icon-css3-alt"></i>
                    <i class="icon-sass"></i>
                    <i id="sass-icon" class="icon-sass-alt"></i>
                    <i id="js-icon" class="icon-javascript"> </i>
                    <i id="php-icon" class="icon-php"></i>
                    <i id="mysql-icon" class="icon-mysql-alt"></i>
                    <i class="icon-git"></i>
            </div>
            <p>Zespół Szkół Ogólnokształcących i Technicznych w Miastku</p>
            <p>Wsparcie merytoryczne i techniczne : <b>Eugeniusz Lisiecki</b></p>
            <p>Programowanie i grafika :  <b>Jakub Achtelik</b>  </p>
            <p>Kontakt : galeria@zsoitmiastko.pl</p>
        </div>
        <div class="adminForm__banner bImage">
            <h2>Spotted ZSOiT </h2>
            <h4>Forum szkolne</h4>
            <ul>
                <li>Możliwość rejstracji</li>
                <li>Najczesciej zadawana pytania i  odpowiedzi</li>
                <li>Tworzenia własnych wpisów</li>
                <li>Opis kierunków jakie znajdziemy w naszej szkole</li>
            </ul>
            <h4>Zobacz również: </h4>
            <p>
                <a href="">www.zsoitmiastko.pl</a> <br>
                <a href="">www.facebook.com/zsoitmiastko</a> <br>
                <a href="">www.spotted.zsoit.pl</a>
            </p>
        </div>
    </div>

