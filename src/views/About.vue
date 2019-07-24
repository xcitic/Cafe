<template>
  <div class="about">
    <header>

        <!--Navbar-->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar">

            <div class="container">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <strong>Navbar</strong>
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">

                    <!--Links-->
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#about" data-offset="100">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#intro" data-offset="100">Intro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#specials" data-offset="100">Specials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#menu" data-offset="100">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#testimonials" data-offset="100">Opinions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#modal-contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#modal-reservation">Reserve Now</a>
                        </li>
                    </ul>

                    <!--Social Icons-->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!--/Navbar-->

        <!--Mask-->
        <div class="view intro" id="home">
            <div class="hm-black-strong-1">
                <div class="full-bg-img flex-center">
                    <div class="container">
                        <div class="row smooth-scroll">
                            <div class="col-md-12 white-text text-center">
                                <div class="wow fadeInDown" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                                    <h2 class="brand-name font-bold mb-2">Restaurant</h2>
                                    <hr class="hr-light">
                                    <h4 class="subtext-header mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <p> Deleniti consequuntur, nihil voluptatem modi nobis veniam.</p></h4>
                                </div>
                                <a class="btn btn-lg btn-outline-white wow fadeInUp waves-effect waves-light" data-wow-delay="0.2s" data-toggle="modal" data-target="#modal-reservation" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <i class="fa fa-calendar"></i>
                                    <span>Make a reservation</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--/Mask-->

        <!--Modal Reservation-->
        <div class="modal fade modal-ext" id="modal-reservation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="w-100 mt-1 mb-1">Reservation Form</h4>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <div class="md-form">
                            <input type="text" id="form22" class="form-control">
                            <label for="form42">Your Full Name</label>
                        </div>

                        <div class="md-form">
                            <input type="text" id="form32" class="form-control">
                            <label for="form34">Your Email</label>
                        </div>

                        <div class="md-form">
                            <input type="text" id="form32" class="form-control">
                            <label for="form34">Your Phone Number</label>
                        </div>

                        <div class="select-wrapper mdb-select colorful-select dropdown-warning"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-d2b06084-00f4-0a83-c000-e7eb9be5a6a7" value="One Person"><ul id="select-options-d2b06084-00f4-0a83-c000-e7eb9be5a6a7" class="dropdown-content select-dropdown "><li class=""><span class="filtrable">One Person</span></li><li class=""><span class="filtrable">Two Persons</span></li><li class=""><span class="filtrable">Three Persons</span></li><li class=""><span class="filtrable">More</span></li></ul><select class="mdb-select colorful-select dropdown-warning initialized">
                            <option value="1">One Person</option>
                            <option value="2">Two Persons</option>
                            <option value="3">Three Persons</option>
                            <option value="4">More</option>
                        </select></div>

                        <div class="text-center">
                            <button class="btn btn-lg btn-info waves-effect">Send Information</button>
                            <p class="text-muted">*Some dummy text goes here.</p>

                            <div class="call">
                                <p>Or you prefer book a table by phone? <span class="cf-phone"><i class="fa fa-phone"></i>+01 234 565 280</span></p>
                            </div>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-green waves-effect waves-light" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!--/Content-->
            </div>
        </div>
        <!--/Modal Reservation-->

        <!--Modal Contact-->
        <div class="modal fade modal-ext" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="w-100" id="myModalLabel">Write to us</h4>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <p>We like to receive a messages.</p>
                        <br>
                        <div class="md-form">
                            <i class="fa fa-user prefix"></i>
                            <input type="text" id="form22" class="form-control">
                            <label for="form42">Your name</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="form32" class="form-control">
                            <label for="form34">Your email</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-tag prefix"></i>
                            <input type="text" id="form32" class="form-control">
                            <label for="form34">Subject</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix"></i>
                            <textarea type="text" id="form8" class="md-textarea"></textarea>
                            <label for="form8">Textarea</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-lg btn-info waves-effect">Submit</button>

                            <div class="call">
                                <p>Or would you prefer to call? <span class="cf-phone"><i class="fa fa-phone"></i>+01 234 565 280</span></p>
                            </div>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-green waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!--/Content-->
            </div>
        </div>
        <!--/Modal Contact-->

    </header>

    <main>

    <!--First container-->
        <div class="container">

            <!--Section: About-->
            <section id="about" class="section about mt-3 mb-4">

                <!--Secion heading-->
                <div class="row">
                <div class="col-md-12 div-color-2">
                  <div class="divider-new">
                     <h3 class="text-center font-up font-bold mr-3 ml-3 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">about us</h3>
                    </div>
                </div>
       <!--First row-->

                <div class="row mt-4">

                  <!--First column-->
                    <div class="col-lg-5 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                        <!--Image-->
                         <img src="https://mdbootstrap.com/img/Others/food2.jpg" alt="" class="z-depth-0">

                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-lg-6 offset-lg-1 col-md-12 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                        <!--Title-->
                        <h4 class=" mb-2 text-center">We make good food and friendly atmosphere</h4>

                        <!--Description-->
                        <p class="grey-text mb-6 ml-3 mr-3" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                    </div>
                    <!--/Second column-->

                </div>
                <!--/First row-->

            </div></section>
            <!--/Section: About-->

        </div>
        <!--/First container-->

        <!--Streak-->
        <div class="streak streak-photo streak-large view photo-1" id="home">
            <div class="hm-black-strong-1">
                <div class="mask flex-center">
                    <div class="container">
                        <ul class="white-text smooth-scroll wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                            <li><h2 class="h2-responsive"><i class="fa fa-quote-left" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <i class="fa fa-quote-right" aria-hidden="true"></i></h2></li>
                            <li><h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">~ Erich Fromm</h5></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/Streak-->

        <!--Second container-->
        <div class="container">

            <!--Section: Menu intro-->
            <section id="intro" class="section mt-3 mb-4">

                <!--Section heading-->

                 <div class="row mt-4">
                    <div class="col-md-12 mb-3">
                      <div class="divider-new">
                         <h3 class="text-center font-up font-bold mr-3 ml-3 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Discover our delights</h3>
                      </div>
                    </div>
                 </div>


                <!--First row-->
                <div class="row smooth-scroll">

                    <!--First column-->
                    <div class="col-lg-6 col-md-12 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                        <!--Title-->
                        <h4 class="mb-3 text-center">All European cuisine in one place</h4>

                        <!--Description-->
                        <p class="grey-text" align="justify">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>

                        <!--Menu button-->
                        <div class="text-center mb-2 mt-2">
                            <a href="#menu" data-offset="100" class="btn btn-lg btn btn-outline-black waves-effect"> <strong>See full menu</strong></a>
                        </div>

                    </div>
                        <!--/First column-->

                        <!--Second column-->
                        <div class="col-lg-5 offset-lg-1 col-md-12 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                            <!--Image-->
                            <img src="https://mdbootstrap.com/img/Others/food.jpg" alt="" class="z-depth-0">

                        </div>
                        <!--/Second column-->

                 </div>
                 <!--/First row-->

              </section>
         <!--/Section: Menu intro-->

        </div>

            <hr class="between-sections">


        <!--Section: Products-->
         <div class="container">

            <section class="section" id="specials">

             <!--Secion heading-->
             <div class="row">
                <div class="col-md-12 div-color-2">
                  <div class="divider-new">
                     <h3 class="text-center font-up font-bold mr-3 ml-3 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">our specials</h3>
                  </div>
                </div>

                <p class="grey-text text-center ml-3 mr-3 mt-1">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique.</p>


                <!--First row-->
                <div class="row text-center mr-2 ml-2 mt-3">

                    <!--First column-->
                    <div class="col-lg-4 col-md-12 mb-r wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                         <!--Card-->
                        <div class="card card-cascade wider">

                            <!--Card image-->
                            <div class="view overlay hm-zoom hm-white-slight">
                                <img src="https://mdbootstrap.com/img/Others/food6.jpg" class="img-fluid">
                                <a href="#!">
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-block text-center">
                                <!--Title-->
                                <h4 class="card-title"><strong>Breakfast</strong></h4>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--/First column-->


                    <!--Second column-->
                    <div class="col-lg-4 col-md-6 mb-r wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                         <!--Card-->
                        <div class="card card-cascade wider">

                            <!--Card image-->
                            <div class="view overlay hm-zoom hm-white-slight">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg" class="img-fluid">
                                <a href="#!">
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-block text-center">
                                <!--Title-->
                                <h4 class="card-title"><strong>Launches</strong></h4>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--/Second column-->

                    <!--Third column-->
                    <div class="col-lg-4 col-md-6 mb-r wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                         <!--Card-->
                        <div class="card card-cascade wider">

                            <!--Card image-->
                            <div class="view overlay hm-zoom hm-white-slight">
                                <img src="https://mdbootstrap.com/img/Others/food7.jpg" class="img-fluid">
                                <a href="#!">
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-block text-center">
                                <!--Title-->
                                <h4 class="card-title"><strong>Desserts</strong></h4>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--/Third column-->

                </div>

                <!--/First row-->
            </div></section>

          </div>

         <!--Streak-->
		<div class="streak streak-photo view hm-black-strong streak-large mt-5" style="background-image:url('https://mdbootstrap.com/img/Others/restaurant5.jpg')">
			<div class="mask flex-center">
				<div class="container">

                    <h3 class="text-center text-white font-up font-bold mb-2 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Great people trusted our services</h3>

                    <!--First row-->
				    <div class="row text-white text-center wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

				        <!--First column-->
				        <div class="col-md-3 mt-2">
				            <h1 class="green-text font-bold">+950</h1>
				            <p>Lorem ipsum dolor</p>
				        </div>
				        <!--/First column-->

				        <!--Second column-->
				        <div class="col-md-3 mt-2">
				            <h1 class="green-text">+150</h1>
				            <p>Lorem ipsum dolor</p>
				        </div>
				        <!--/Second column-->

				        <!--Third column-->
				        <div class="col-md-3 mt-2">
				            <h1 class="green-text">+85</h1>
				            <p>Lorem ipsum dolor</p>
				        </div>
				        <!--/Third column-->

				        <!--Fourth column-->
				        <div class="col-md-3 mt-2">
				            <h1 class="green-text">+6K</h1>
				            <p>Lorem ipsum dolor</p>
				        </div>
				        <!--/Fourth column-->

				    </div>
				    <!--/First row-->
				</div>
			</div>
		</div>
		<!--/Streak-->

        <!--Section: Menu-->
            <div class="container">
            <section class="section mt-4" id="products">

               <!--Secion heading-->
                <div class="row">
                <div class="col-md-12 div-color-2">
                  <div class="divider-new">
                     <h3 class="text-center font-up font-bold mr-3 ml-3 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">The menu</h3>
                    </div>
                </div>


        <!--Third container-->
        <div class="container">

            <!--Section: Menu-->
            <section id="menu" class="section mt-2 mb-4">

                <!--Section description-->
                <p class="section-description wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!--First row-->
                <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                    <!--First column-->
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">

                        <!--Menu-->
                        <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr class="table-success">
                              <th>#</th>
                              <th>Name</th>
                              <th>Quantity</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Tomato soup</td>
                              <td>400 ml</td>
                              <td>5 $</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Caesar salad</td>
                              <td>150 g</td>
                              <td>10 $</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Beef steak</td>
                              <td>200 g</td>
                              <td>15 $</td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>Dumplings</td>
                              <td>6 pieces</td>
                              <td>8 $</td>
                            </tr>
                            <tr>
                              <th scope="row">5</th>
                              <td>Apple cake</td>
                              <td>80 g</td>
                              <td>6 $</td>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                        <!--Menu-->

                    </div>
                    <!--/First column-->
                </div>
                <!--/First row-->
                </section></div>
            </div></section>
            <!--/Section: Menu-->
         </div>


         <!--First container-->
	       <div class="container-fluid">
               <!--Section: Main portfolio-->
               <section id="portfolio" class="section">

                <!--First row-->
                <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                    <!--First column-->
                    <div class="col-md-12">

                        <div id="mdb-lightbox-ui"></div>

                        <!--Full width lightbox-->
                        <div class="mdb-lightbox" data-pswp-uid="1">

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" class="img-fluid">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(48).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(48).jpg" class="img-fluid">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" class="img-fluid">
                                </a>

                            </figure>
                                <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(44).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(44).jpg" class="img-fluid">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(41).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(41).jpg" class="img-fluid">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(47).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(47).jpg" class="img-fluid">
                                </a>
                            </figure>

                        </div>
                        <!--/Full width lightbox-->

                    </div>
                    <!--/First column-->

                  </div>
                 <!--/First row-->

               </section>
             <!--/Section: Main portfolio-->

             </div>
	        <!--/First container-->


            <hr class="between-sections mt-3">

            <!--Section: Testimonials v.3-->
            <section id="testimonials" class="section team-section mt-2 mb-6">
                 <div class="container">
                <!--Secion heading-->
                <div class="row">
                <div class="col-md-12 div-color-2">
                  <div class="divider-new">
                     <h3 class="text-center font-up font-bold mr-3 ml-3 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Our Guests opinions</h3>
                    </div>
                </div>
                <!--/Secion heading-->

                <!--Section description-->
                <p class="section-description wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!--First row-->
                <div class="row text-center">

                    <!--First column-->
                    <div class="col-md-4 mb-r wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                        <div class="testimonial">
                            <!--Avatar-->
                            <div class="avatar">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%285%29.jpg" class="rounded-circle img-fluid">
                            </div>

                            <!--Content-->
                            <h4>Anna Deynah</h4>
                            <p><i class="fa fa-quote-left "></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab.</p>

                            <!--Review-->
                            <div class="green-text">
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star-half-full"> </i>
                            </div>
                        </div>
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-md-4 mb-r wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="testimonial">
                            <!--Avatar-->
                            <div class="avatar">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%289%29.jpg" class="rounded-circle img-fluid">
                            </div>

                            <!--Content-->
                            <h4>John Doe</h4>
                            <p><i class="fa fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>

                            <!--Review-->
                            <div class="green-text">
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                            </div>
                        </div>
                    </div>
                    <!--/Second column-->

                    <!--Third column-->
                    <div class="col-md-4 mb-r wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="testimonial">
                            <!--Avatar-->
                            <div class="avatar">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%288%29.jpg" class="rounded-circle img-fluid">
                            </div>
                            <!--Content-->
                            <h4>Tom Smith</h4>
                            <p><i class="fa fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>

                            <!--Review-->
                            <div class="green-text">
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star-o"> </i>
                            </div>

                        </div>
                    </div>
                    <!--/Third column-->

                </div>
                <!--/First row-->

            </div></div></section>
            <!--/Section: Testimonials v.3-->


        <!--/Third container-->

    </main>

    <footer class="page-footer footer-tiles center-on-small-only pt-4">

        <!--Footer Links-->
        <div class="container mb-4">

            <!--First row-->
            <div class="row">


                <!--First column-->
                <div class="col-xl-4 col-lg-4 pt-1 pb-1 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <!--About-->
                    <h5 class="title mb-1"><strong>ABOUT RESTAURANT</strong></h5>

                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>

                    <p class="mb-1-half"> Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p>
                    <!--/About -->

                    <div class="footer-socials">

                        <!--Facebook-->
                        <a type="button" class="btn-floating btn-small green waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                        <!--Dribbble-->
                        <a type="button" class="btn-floating btn-small green waves-effect waves-light"><i class="fa fa-dribbble"></i></a>
                        <!--Twitter-->
                        <a type="button" class="btn-floating btn-small green waves-effect waves-light"><i class="fa fa-twitter"></i></a>
                        <!--Google +-->
                        <a type="button" class="btn-floating btn-small green waves-effect waves-light"><i class="fa fa-google-plus"></i></a>
                        <!--Linkedin-->

                    </div>
                </div>
                <!--/First column-->

                <hr class="w-100 hidden-lg-up">

                <!--Second column-->
                <div class="col-xl-3 offset-xl-1 col-lg-4 pt-1 pb-1 col-md-6 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <!--Search-->
                    <h5 class="title"><strong>Search something</strong></h5>

                    <ul class="footer-search">
                        <li>
                            <form class="search-form" role="search">
                                <div class="form-group waves-light waves-effect waves-light">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </li>
                    </ul>

                    <!--Info-->
                    <p><i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

                </div>
                <!--/Second column-->

                <hr class="w-100 hidden-md-up">

                <!--First column-->
                <div class="col-xl-3 offset-xl-1 col-md-4 pt-1 pb-1 col-md-6 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">

                    <!--Title-->
                    <h5 class="title mb-2"><strong>Opening hours</strong></h5>

                    <!--Opening hours table-->
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Mon - Thu:</td>
                          <td>8am - 9pm</td>
                        </tr>
                        <tr>
                          <td>Fri - Sat:</td>
                          <td>8am - 1am</td>
                        </tr>
                        <tr>
                          <td>Sunday:</td>
                          <td>9am - 10pm</td>
                        </tr>
                      </tbody>
                    </table>

                </div>
                <!--/First column-->

            </div>
            <!--/First row-->

        </div>
        <!--/Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
            <div class="container-fluid">
                © 2017 Copyright: <a href="https://www.MDBootstrap.com" rel="nofollow"> MDBootstrap.com </a>
            </div>
        </div>
        <!--/Copyright-->

    </footer>
  </div>
</template>
