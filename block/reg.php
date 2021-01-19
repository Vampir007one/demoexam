<?php  
    include("connect.php");
   
    // echo "Логин: {$login} | Имя пользователя: {$username} | Мыло: {$email} | Пароль: {$password} | Подтверждение: {$confirmPassword}";
?>
<div class="col2">
            <h2 class="heading" >Регистрация</h2>
            <form method="post">
                <input type="text" name="login" id="" placeholder = "Введите логин">
                <input type="text" name="username" id="" placeholder = "Введите имя">
                <input type="email" name="email" id="" placeholder = "Введите E-mail">
                <input type="password" name="password" id="" placeholder = "Введите пароль">
                <input type="password" name="confirmPassword" id="" placeholder = "Подтвердите пароль">
                <input type="submit" value="Зарегистрироваться">
            </form>
            <?php
                 $login = $_POST['login'];
                 $username = $_POST['username'];
                 $email = $_POST['email'];
                 $password = $_POST['password'];
                 $confirmPassword = $_POST['confirmPassword'];

                // check fill inputs
                if(isset($login) && isset($password) && isset($email) && isset($confirmPassword) && isset($username) )
                {
                    // check on empty inputs
                    if($login != '' && $password != '' && $email != '' && $confirmPassword != '' && $username != '')
                    {
                        if($password == $confirmPassword)
                        {
                            // check user
                            $getDataUser = $db->query("SELECT * FROM `users` WHERE `email` = '$email' ");
                            $dataUser = mysqli_fetch_array($getDataUser);
                            if($dataUser['email'] == $email)
                            {
                                echo "Данный пользователь уже есть в системе";
                            }
                            else
                            {
                                // Insert into 
                                $db->query("
                                INSERT INTO `users`(
                                    `id`,
                                    `login`,
                                    `email`,
                                    `username`,
                                    `role`,
                                    `password`
                                )
                                VALUES(
                                    NULL,
                                    '$login',
                                    '$email',
                                    '$username',
                                    '0',
                                    '$password'
                                    );
                                ");
                                echo "Регистрация прошла успешно";
                            }
                            
                        }
                        else
                        {
                            echo "Пароли не совпадают";
                        }
                    }
                    else
                    {
                        echo "Заполните поля";
                    }                   
                }
               
            ?>
            <div class="sideblock">
                <ul>
                    <li class="first"> <a href="#"><img src="images/feature_listing1.gif"  alt="" /></a> </li>
                    <li><a href="#"><img src="images/feature_listing2.gif"  alt="" /></a> </li>
                    <li><a href="#"><img src="images/feature_listing3.gif"  alt="" /></a> </li>
                    <li><a href="#"><img src="images/feature_listing4.gif"  alt="" /></a> </li>
                    <li class="first"> <a href="#"><img src="images/feature_listing5.gif"  alt="" /></a> </li>
                    <li><a href="#"><img src="images/feature_listing6.gif"  alt="" /></a> </li>
                    <li><a href="#"><img src="images/feature_listing7.gif"  alt="" /></a> </li>
                    <li><a href="#"><img src="images/feature_listing8.gif"  alt="" /></a> </li>
                    <li class="first"> <a href="#"><img src="images/feature_listing9.gif"  alt="" /></a> </li>
                    <li><a href="#"><img src="images/feature_listing10.gif"  alt="" /></a> </li>
                    <li><a href="#"><img src="images/feature_listing11.gif"  alt="" /></a> </li>
                    <li><a href="#"><img src="images/feature_listing12.gif"  alt="" /></a> </li>
                </ul>
            <div class="clear"></div>
        </div>
        <!--ADS -->
        <div class="ads">
        <a href="#"><img src="images/kfc.gif"  alt="" /></a>
        </div>
        <!--Feature Vedio -->
        <div class="sideblock2">
        <h2>Featured Vedio</h2>
        <ul>
            <li>
                <div class="thumb">
                    <a href="detail.html">
                        <img src="images/featurevedio1.gif"  alt="" />
                        <span class="addtoplaylist"><img src="images/plusicon.png"  alt="" /></span>    
                        <span class="time">2.30</span>
                    </a>
                    </div>
                    <div class="description">
                    <p><a class="colr2"  href="#"> Black Ops: 30-0 - Notch &amp; Facebook</a></p>
                    <p class="viewcounts">241,699 views</p>
                    <p class="stat">By: <a href="#"><u>SeaNanners</u></a></p> 
                    </div>
            </li>
            <li>
                <div class="thumb">
                    <a href="detail.html">
                        <img src="images/featurevedio2.gif"  alt="" />
                        <span class="addtoplaylist"><img src="images/plusicon.png"  alt="" /></span>    
                        <span class="time">2.30</span>
                    </a>
                    </div>
                    <div class="description">
                    <p><a class="colr2"  href="#"> Black Ops: 30-0 - Notch &amp; Facebook</a></p>
                    <p class="viewcounts">241,699 views</p>
                    <p class="stat">By: <a href="#"><u>SeaNanners</u></a></p> </div>
            </li>
            <li>
                <div class="thumb">
                    <a href="detail.html">
                        <img src="images/featurevedio3.gif"  alt="" />
                        <span class="addtoplaylist"><img src="images/plusicon.png"  alt="" /></span>    
                        <span class="time">2.30</span>
                    </a>
                    </div>
                    <div class="description">
                    <p><a class="colr2"  href="#"> Black Ops: 30-0 - Notch &amp; Facebook</a></p>
                    <p class="viewcounts">241,699 views</p>
                    <p class="stat">By: <a href="#"><u>SeaNanners</u></a></p> </div>
            </li>
            <li>
                <div class="thumb">
                    <a href="detail.html">
                        <img src="images/featurevedio3.gif"  alt="" />
                        <span class="addtoplaylist"><img src="images/plusicon.png"  alt="" /></span>    
                        <span class="time">2.30</span>
                    </a>
                    </div>
                    <div class="description">
                    <p><a class="colr2"  href="#"> Black Ops: 30-0 - Notch &amp; Facebook</a></p>
                    <p class="viewcounts">241,699 views</p>
                    <p class="stat">By: <a href="#"><u>SeaNanners</u></a></p> </div>
            </li>
        </ul>
        <div class="clear"></div>
        </div>
        <div class="sideblock3">
        <h2>Tags</h2>
            <div class="tag">
                <a href="#">Anne Roumanoff</a> 
                <a  href="#" > Caméra caché  Cauet </a>
                <a href="#"> Eric et Ramzy</a>
                <a href="#"> Florence</a>
                <a href="#">Foresti</a>
                <a href="#">Franck Dubosc</a>
                <a href="#">Francois</a>
                <a href="#">Damiens </a>
                <a href="#">Anthony</a>
                <a href="#">Kavanagh</a>
                <a href="#">Jamel </a>
                <a href="#">Debbouze </a>
                <a href="#">Laurent</a>
                <a href="#"> Ruquier</a>
                <a href="#">Les Nuls</a>
                <a href="#">Michaël Youn</a>
                <a href="#"> Omar et Fred</a>
                <a href="#">Patrick Timsit</a>
                <a href="#">Rémi Gaillard</a>
                <a href="#">Gad ElMaleh </a>
                <a href="#">Stéphane Guillon</a>
                <a href="#">TF1 Replay </a>
                <a href="#">chatroulette</a>
            </div>
        <div class="clear"></div>
    </div> 	   
</div>
<div class="clear"></div>