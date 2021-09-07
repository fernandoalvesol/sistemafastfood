@extends('Templates.template')

@section('main_container')

    <div id="header">
        <div class="bg-overlay"></div>
        <div class="center text-center">
            <div class="banner">
                <h1 class="">Your Food</h1>
            </div>
            <div class="subtitle"><h4>SEU CARDÁPIO ONLINE</h4></div>
        </div>
        <div class="bottom text-center">
            <a id="scrollDownArrow" href="#"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <!-- /#header -->
    <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h2>Your Food</h2></a>
            </div><!-- navbar-header -->
            <div id="navbar" class="navbar-collapse collapse">
                <div class="hidden-xs" id="logo"><a href="#header">
                        <img src="{{url('site/assets/img/logo.png')}}" alt="YourFood" width="150%" height="150%">
                    </a></div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#facts">Cadastre Seu Restaurante</a></li>
                    <li><a href="#chefs">Nossa Equipe</a></li>
                    <li><a href="#story">Como Funciona?</a></li>
                    <li><a href="#food-menu">Escolha onde Quer Comer</a></li>
                    <li><a href="#special-offser">Ofertas Especiais</a></li>

                    <!--fix for scroll spy active menu element-->
                    <li style="display:none;"><a href="#header"></a></li>

                </ul>
            </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

<div id="story" class="light-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
        <h2 class="section-title text-center">Como Funciona?</h2>
        <p class="lead main text-center">Pedir em Delivery nunca foi tão fácil, Escolha seu Restaurante, Monte seu pedido e Pronto! </p>
        <div class="row text-center story">
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper"> <i class="fas fa-utensils"></i> </div>
                    <h3>1. Escolha Onde Quer Comer</h3>
                    <p>Aqui você escolhe qual estabelecimento quer comer, restaurantes, lanchonetes de sua
                    preferência.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper"> <i class="fas fa-hamburger"></i> </div>
                    <h3>2. Escolha o Seu Pedido</h3>
                    <p>Você terá o cardápio completo do estabelecimento à sua disposição,
                        então monte seu pedido.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper"> <i class="fas fa-shipping-fast"></i></div>
                    <h3>Pronto!</h3>
                    <p>3. Pronto! Finalizou seu pedido, agora é só esperar um pouquinho.</p>
                </div>
            </div>
        </div>
        <!-- /.services -->
    </div>
    <!-- /.container -->
    <section class="ss-style-bottom"></section>
</div><!-- #story -->


<div id="facts" class="parallax parallax2 facts">
    <div class="container inner">
        <div class="row text-center services-3">
            <div class="col-sm-12">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-users"></i> </div>
                    <h4>CADASTRE SEU RESTAURANTE AGORA!</h4>
                    <p>Cadastre seu restaurante em nossa plataforma e aumente seu faturamento.<br>
                    Nos ajudamos você a vender mais, ganhar mais e se modernizar mais ainda.</p>
                </div>
                <div class="row text-center botao-cadastre">
                    <div class="col-sm-12">
                        <a href="" class="btn btn-cadastrar">QUERO CADASTRAR AGORA!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div><!-- #facts -->

<div id="food-menu" class="light-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
        <h2 class="section-title text-center">Escolha Onde Quer Comer</h2>
        <p class="lead main text-center">
            Aqui você encontra os melhores lugares para comer
        e se alimentar com toda a família.
        </p>

        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="menu-images "><a href="{{url('cli01')}}"><img src="{{url('site/assets/img/menu/logomarca_kanpeki.png')}}" alt="Hot Drinks"></a></div>
                <div class="menu-titles">
                    <a href="{{url('cli01')}}"><h1 class="">Kanpeki</h1></a>
                </div>
                <div class="menu-items ">
                    <ul>
                        <li>Espresso</li>
                        <li>Americano</li>
                        <li>Capuccino</li>
                        <li>Latte</li>
                        <li>Mocha</li>
                        <li>Hot Chocolate</li>
                        <li>Yummie Cafee</li>
                        <li>Fruit Tea</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="menu-images "><img src="{{url('site/assets/img/menu/logo_souza.png')}}" alt="Ice Drinks"></div>
                <div class="menu-titles"><h1 class="">Pizzaria Souza</h1></div>
                <div class="menu-items ">
                    <ul>
                        <li>Ice Coffee</li>
                        <li>Americano</li>
                        <li>Latte</li>
                        <li>Vanilla Frappe</li>
                        <li>Espresso Frappe</li>
                        <li>Choco Frappe</li>
                        <li>Iced Chai</li>
                        <li>Fruit Fresh</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="menu-images "><img src="{{url('site/assets/img/menu/logo_pizza.png')}}" alt="Smoothies"></div>
                <div class="menu-titles"><h1 class="">Pizzaria Logo</h1></div>
                <div class="menu-items ">
                    <ul>
                        <li>Mango</li>
                        <li>Strawberry</li>
                        <li>Blue Berry</li>
                        <li>Peach</li>
                        <li>Pineapple</li>
                        <li>Banana</li>
                        <li>Milkshake</li>
                        <li>Greens</li>
                    </ul>
                </div>
            </div>

    <!-- /.container -->
    <section class="ss-style-bottom"></section>
</div>
    </div>
</div><!--/#food-menu-->




<div id="special-offser" class="parallax pricing">
    <div class="container inner">

        <h2 class="section-title text-center">Special Offers</h2>
        <p class="lead main text-center">There is no sincerer love than the love of food!</p>

        <div class="row">
            <div class="col-md-6 col-sm-6">

                <div class="pricing-item">

                    <a href="#"><img class="img-responsive img-thumbnail" src="{{url('site/assets/img/dish/dish3.jpg')}}" alt=""></a>

                    <div class="pricing-item-details">

                        <h3><a href="#">Chicken Fried Rice</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <a class="btn btn-danger" href="#">Order now</a>
                        <div class="clearfix"></div>
                    </div>
                    <!--price tag-->
                    <span class="hot-tag br-red">$26</span>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">

                <div class="pricing-item">

                    <a href="#"><img class="img-responsive img-thumbnail" src="{{url('site/assets/img/dish/dish2.jpg')}}" alt=""></a>

                    <div class="pricing-item-details">

                        <h3><a href="#">Hot Fried Chicken</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <a class="btn btn-danger" href="#">Order now</a>
                        <div class="clearfix"></div>
                    </div>
                    <!--price tag-->
                    <span class="hot-tag br-lblue">$37</span>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix visible-md"></div>
            <div class="col-md-6 col-sm-6">

                <div class="pricing-item">

                    <a href="#"><img class="img-responsive img-thumbnail" src="{{url('site/assets/img/dish/dish4.jpg')}}" alt=""></a>

                    <div class="pricing-item-details">

                        <h3><a href="#">Thi Chicken Momo</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <a class="btn btn-danger" href="#">Order now</a>
                        <div class="clearfix"></div>
                    </div>
                    <!--price tag-->
                    <span class="hot-tag br-green">$54</span>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">

                <div class="pricing-item">

                    <a href="#"><img class="img-responsive img-thumbnail" src="{{url('site/assets/img/dish/dish1.jpg')}}" alt=""></a>

                    <div class="pricing-item-details">

                        <h3><a href="#">Cocktail Sushi</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <a class="btn btn-danger" href="#">Order now</a>
                        <div class="clearfix"></div>
                    </div>
                    <!--price tag-->
                    <span class="hot-tag br-red">$27</span>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
</div><!-- /#special-offser -->




<div id="reservation" class="light-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
        <h2 class="section-title text-center">Reservation</h2>
        <p class="lead main text-center">Reserve your table &amp; enjoy lorem Ipsum</p>
        <div class="row">
            <div class="col-md-6">
                <form class="form form-table" method="post" name="">
                    <div class="form-group">
                        <h4>Fill the form for table reservation (all fields required)</h4>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="first_name1">first name</label>
                            <input class="form-control hint" type="text" id="first_name1" name="first_name" placeholder="First name" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="last_name1">last name</label>
                            <input class="form-control hint" type="text" id="last_name1" name="last_name" placeholder="Last name" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email1">email</label>
                            <input class="form-control hint" type="email" id="email1" name="email" placeholder="Email@domain.com" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">phone</label>
                            <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Phone" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">reservation date</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="reserv_date1" name="reserv_date" placeholder="Reservation date" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">number of guests</label>
                            <input class="form-control hint" type="text" id="numb_guests1" name="numb_guests" placeholder="Number of guests" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="alt_reserv_date1">time from</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="alt_reserv_date1" name="alt_reserv_date" placeholder="Time from" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="time1">time</label>
                            <input class="form-control timepicker ui-timepicker-input hint" type="text" id="time1" name="time" placeholder="Time to" required="" autocomplete="off">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg">Reserve!</button>
                        </div>
                    </div>
                </form>
            </div><!-- col-md-6 -->
            <div class="col-md-5 col-md-offset-1">

                <h3><i class="fa fa-clock-o fa-fw"></i>Hours</h3>
                <h4>Breakfast</h4>
                <p>Mon to Fri: 7:30 AM - 11:30 AM<br>Sat &amp; Sun: 8:00 AM - 9:00 AM</p>
                <h4>Lunch</h4>
                <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                <h4>Dinner</h4>
                <p>Mon to Sat: 6:00 PM -  1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

                <h3><i class="fa fa-map-marker fa-fw"></i>Directions</h3>
                <p>4120 Lenox Avenue, New York, NY, 10035 76 Saint Nicholas Avenue</p>

                <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                <p>Email: <a href="mailto:yourname@meatking.com">yourname@meatking.com</a></p>
                <p>Phone: +234 3456 678</p>

            </div><!-- col-md-6 -->
        </div>
        <!-- /.services -->
    </div>
    <!-- /.container -->
    <section class="ss-style-bottom"></section>
</div><!-- #reservation -->



<div id="chefs" class="parallax pricing">
    <div class="container inner">

        <h2 class="section-title text-center">Our Chefs</h2>
        <p class="lead main text-center">There is no sincerer love than the love of food!</p>

        <div class="row text-center chefs">
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper">
                        <img src="img/chefs/1.jpg">
                    </div>
                    <h3>Saransh Goila</h3>
                    <p>Vivamus sagittis lacuson augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum ultricies vehicula.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper">
                        <img src="img/chefs/3.jpg">
                    </div>
                    <h3>Jane Doe</h3>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient monte nascetur ultricies vehicula. </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-wrapper">
                    <div class="icon-wrapper">
                        <img src="img/chefs/2.jpg">
                    </div>
                    <h3>Anton Mosimann</h3>
                    <p>Curabitur blandit matti tempus porttitor. Donec id elit non mi porta ut gravida at eget metus. Consectetur adipiscing elit ultricies vehicula.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
</div><!-- /#chefs -->

@endsection
