<template>
  <div>
    <NavBar />

    <!-- Flash messaging -->
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="offset-md-4">
          <flash-message style="position:fixed; z-index:999999; top:0;" class="text-center"></flash-message>
        </div>
      </div>
    </div>
    <!--/Flash Messaging -->

    <div class="container mt-4">

      <ModalReservation />
      <ModalMessage />
      <div class="col-md-12">
        <DashboardList />
      </div>

    </div>

  </div>
</template>
<script>
import NavBar from '@/components/NavBarDash.vue';
import ModalReservation from '@/components/ModalReservation.vue';
import ModalMessage from '@/components/ModalMessage.vue';
import DashboardList from '@/components/DashboardList.vue';

  export default {
    components: {
      NavBar,
      ModalReservation,
      ModalMessage,
      DashboardList
    },

  }
</script>
