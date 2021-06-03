<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/header.php"; ?>
<div class="wrapper">
    <div class="logo">
        <div>
            <p><a href="#">YOUR</a></p>
            <p><a href="#">LOGO</a></p>
        </div>
    </div>
    <?php if ($_SESSION["auth"] == true): ?>
        <div class="pa">
            <a href="/routes/personal_area/index.php">
                <img src="/resources/img/icons/user_icon-icons.com_66546.svg" alt="">
            </a>
        </div>
    <?php endif; ?>
    <div class="open">
        <span class="cls"></span>
        <span>
		<ul class="sub-menu">
            <?php if ($_SESSION["auth"] == false): ?>
                <li>
				<a href="/routes/register/index.php" title="Registration">Registration&Authorization</a>
			</li>
            <? else: ?>
                <li>
				<a href="/routes/authorization/index.php?exit=true" title="Registration">Exit</a>
			</li>
            <?php endif; ?>
			<li>
				<a href="#adv" title="Personal Area">Personal Area</a>
			</li>
			<li>
				<a href="#masters" title="Works">Ours masters!</a>
			</li>
			<li>
				<a href="#ourLocation" title="Book an appointment">Book an appointment</a>
			</li>

		</ul>
	</span>
        <span class="cls"></span>
    </div>
    <div class="main-page-cont">
        <div class="main-text">
            <div class="slogan">
                <p class="front-text">
                    Feel
                    <br/>
                    The art
                </p>
            </div>
            <div class="main-page-descr">
                <p>
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Laborum libero cupiditate
                    tempora dolorem sunt, alias perferendis nostrum
                    voluptatem molestiae debitis beatae eaque repudiandae
                    et a velit similique voluptatum accusantium.
                    Fugit, sunt perspiciatis,
                    quos ex explicabo possimus officia
                    repellat debitis, incidunt repudiandae
                    earum praesentium laudantium blanditiis
                    laborum inventore harum odio quo?
                </p>
            </div>
            <div class="soc-net">
                <div>
                    <img src="/resources/img/icons/icon-vk.png" alt="vk">
                    <a href="#">VK</a>
                </div>
                <div>
                    <img src="/resources/img/icons/inst-icon.png" alt="inst">
                    <a href="#">Inst</a>
                </div>
            </div>
        </div>

        <div class="feel-the-art-image">
            <img src="/resources/img/FeelTheArt.png" alt="FeelTheArt">
        </div>
    </div>
</div>
<div class="section-table">
    <a id="adv">
        <h1>Our advantages!</h1>
    </a>
</div>
<div class="advantages-box">
    <div class="advantages">
        <div class="icon">
            <img class="clock" src="/resources/img/icons/clock.svg" alt="clock">
        </div>
        <div class="adv-descr">
            <span>Lorem lorem libero, efficitur malesuada venenatis eget amet, dapibus vitae malesuada in dictum pellentesque amet, dolor eleifend sed vitae est. Sit dolor nulla libero, pulvinar sapien mauris accumsan vestibulum odio. Sit nisi orci, ornare et luctus in sit sapien pulvinar sed aenean vulputate efficitur et quam, nec leo, malesuada sapie.</span>
        </div>
    </div>
    <div class="advantages">
        <div class="icon">
            <img class="highlevel" src="/resources/img/icons/highlevel.png" alt="highlevel">
        </div>
        <div class="adv-descr">
            <span>Lorem lorem libero, efficitur malesuada venenatis eget amet, dapibus vitae malesuada in dictum pellentesque amet, dolor eleifend sed vitae est. Sit dolor nulla libero, pulvinar sapien mauris accumsan vestibulum odio. Sit nisi orci, ornare et luctus in sit sapien pulvinar sed aenean vulputate efficitur et quam, nec leo, malesuada sapie.</span>
        </div>
    </div>
</div>
<div class="section-table">
    <a id="masters"><h1>Our masters!</h1></a>
</div>
<section class="s-masters">
    <div class="masters">
        <div class="master-cards">
            <div class="master">
                <img src="/resources/img/icons/faebd7.png" alt="frame">
                <div class="master-desc">
                    <ul>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
                <button class="masters-btn">Записаться</button>
            </div>
        </div>
        <div class="master-cards">
            <div class="master">
                <img src="/resources/img/icons/faebd7.png" alt="frame">
                <div class="master-desc">
                    <ul>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
                <button class="masters-btn">Записаться</button>
            </div>
        </div>
        <div class="master-cards">
            <div class="master">
                <img src="/resources/img/icons/faebd7.png" alt="frame">
                <div class="master-desc">
                    <ul>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
                <button class="masters-btn">Записаться</button>
            </div>
        </div>
    </div>
</section>
<div class="section-table">
    <a id="ourLocation"><h1>Our location!</h1></a>
</div>
<!--MAP-->
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25772.51915611851!2d61.335402833633125!3d55.183438060154245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc7fc99a577aeae73!2z0KLQsNGC0YMt0YHRgtGD0LTQuNGPICJJbmsuUm9hZCIg0KfQtdC70Y_QsdC40L3RgdC6!5e0!3m2!1sru!2sru!4v1622471182127!5m2!1sru!2sru"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!--FOOTER-->
<footer class="contact-form">
    <div class="container">
        <h3 class="title">Связаться <span>с нами</span></h3>
        <div class="col-md-6 contact-right wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
            <form action="#" method="post">
                <input type="text" name="Name" value="Name" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Name';}" required="">
                <input type="email" name="Email" value="Email" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
                <textarea name="Message..." onfocus="this.value = '';"
                          onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="col-md-6 contact-left wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
            <h2>Контактная информация</h2>
            <p>"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting
                industriescommon name dummy text often used in the design, printing, and type setting industries Lorem
                Ipsum"is the common name dummy text often used in the design, printing, and type setting industries
                "</p>
            <ul class="contact-list">
                <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Your Adress: Russia,Chelyabinsk
                </li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a
                            href="mailto:example@mail.com">mail@example.com</a></li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 2222 222</li>
            </ul>
            <ul class="icons-list footer-bottom">
                <li><a href="#" class="use1"><span>VK</span><i class="fa fa-vk" aria-hidden="true"></i></a>
                </li>
                <li><a href="#" class="use2"><span>Twitter</span><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <p class="copy-right text-center">&copy; 2020 Name Site. All rights reserved | Design by <a href="#">YANCX</a>
        </p>
    </div>
</footer>
</body>

</html>