<template>
  <div>
  <header>

        <!--Navbar-->
        <NavBar />
        <!--/Navbar-->

        <!--Mask-->
		     <SectionTop />

         <ModalReservation />
         <ModalContact />

    </header>
    <main>

        <!--First container-->
        <div class="container">

          <SectionFeatures />
            <!--/Section: Features v.4-->

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

            <!--Section: Testimonials v.3-->
            <SectionTestimonials />
            <!--/Section: Testimonials v.3-->

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
import ModalContact from '@/components/ModalContact.vue';
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
    ModalContact,
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
