<template>
  <div>
    <header>

          <!--Navbar-->
          <NavBar />
          <!--/Navbar-->

          <!--Section: Header Image and Text-->
  		     <SectionTop />
           <!--/Section: Header Image and Text -->

           <!-- Flash messaging -->
           <div class="container-fluid">
             <div class="col-md-12">
               <div class="offset-md-4">
                 <flash-message style="position:fixed; z-index:999999; top:0;" class="text-center"></flash-message>
               </div>
             </div>
           </div>
             <!--/Flash Messaging -->


           <ModalReservation />
           <ModalMessage />

      </header>
    <main>

        <!--First container-->
        <div class="container">

            <!--Section: Features -->
            <SectionFeatures />
            <!--/Section: Features -->

            <hr class="between-sections wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

             <!--Section: About-->
            <SectionAbout />
            <!--/Section: About-->

        </div>
        <!--/First container-->

        <!--Streak-->
        <Streak />
	      <!--/Streak-->

        <!--Second container-->
        <div class="container">

            <!--Section: Products-->
            <SectionProducts />
            <!--Section: Products-->

            <hr class="between-sections wow fadeIn" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">

            <!--Section: Testimonials -->
            <SectionTestimonials />
            <!--/Section: Testimonials -->

        </div>
        <!--/Second container-->

    </main>
    <Footer />

  </div>

</template>

<script>
// @ is an alias to /src
import NavBar from '@/components/NavBar.vue';
import SectionTop from '@/components/SectionTop.vue';
import ModalReservation from '@/components/ModalReservation.vue';
import ModalMessage from '@/components/ModalMessage.vue';
import SectionFeatures from '@/components/SectionFeatures.vue';
import SectionAbout from '@/components/SectionAbout.vue';
import Streak from '@/components/Streak.vue';
import SectionProducts from '@/components/SectionProducts.vue';
import SectionTestimonials from '@/components/SectionTestimonials.vue';
import Footer from '@/components/Footer.vue';

export default {
  name: 'home',
  components: {
    NavBar,
    SectionTop,
    ModalReservation,
    ModalMessage,
    SectionFeatures,
    SectionAbout,
    Streak,
    SectionProducts,
    SectionTestimonials,
    Footer
  }
}
</script>

<style>
  .full-bg-img {
    position: relative !important;
  }
</style>
