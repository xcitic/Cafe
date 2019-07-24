<template>
  <footer class="page-footer footer-tiles center-on-small-only pt-4">

      <!--Footer Links-->
      <div class="container mb-4">

          <!--First row-->
          <div class="row">


              <!--First column-->
              <div class="col-xl-4 col-lg-4 pt-1 pb-1 wow fadeIn" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                  <!--About-->
                  <h5 class="title mb-1"><strong>ABOUT RESTAURANT</strong></h5>

                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>

                  <p class="mb-1-half"> Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p>
                  <!--/About -->

                  <div class="footer-socials">

                      <!--Facebook-->
                      <a type="button" class="btn-floating btn-small btn-primary waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                      <!--Dribbble-->
                      <a type="button" class="btn-floating btn-small btn-primary waves-effect waves-light"><i class="fa fa-dribbble"></i></a>
                      <!--Twitter-->
                      <a type="button" class="btn-floating btn-small btn-primary waves-effect waves-light"><i class="fa fa-twitter"></i></a>
                      <!--Google +-->
                      <a type="button" class="btn-floating btn-small btn-primary waves-effect waves-light"><i class="fa fa-google-plus"></i></a>

                  </div>
              </div>
              <!--/First column-->

              <hr class="w-100 hidden-lg-up">

              <!--Second column-->
              <div class="col-xl-3 offset-xl-1 col-lg-4 col-md-6 pt-1 pb-1 wow fadeIn" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                  <!--Search-->
                  <!-- <h5 class="title"><strong>Search something</strong></h5>

                  <ul class="footer-search">
                      <li>
                          <form class="search-form" role="search">
                              <div class="form-group waves-light waves-effect waves-light">
                                  <input type="text" class="form-control" placeholder="Search">
                              </div>
                          </form>
                      </li>
                  </ul> -->

                  <!--Info-->
                  <p><i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                  <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
                  <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                  <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

              </div>
              <!--/Second column-->

              <hr class="w-100 hidden-md-up">

              <!--First column-->
              <div class="col-xl-3 offset-xl-1 col-lg-4 col-md-6 t-1 pb-1 wow fadeIn" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">

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
                  <a class="btn btn-lg btn-rounded btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modal-reservation">Book a table</a>

              </div>
              <!--/First column-->

          </div>
          <!--/First row-->

      </div>
      <!--/Footer Links-->

      <!--Copyright-->
      <div class="footer-copyright wow fadeIn" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
          <div class="container-fluid">
              © MIT 2019 <a href="http://samilazreg.com"> Sami Lazreg</a>
          </div>
      </div>
      <!--/Copyright-->

  </footer>

</template>

<script>
export default {
  name: 'Footer'
}
</script>

<style scoped>
</style>
