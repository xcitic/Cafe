<template>
  <div class="modal fade modal-ext" id="modal-reservation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <!--Content-->
          <div class="modal-content">
              <!--Header-->
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title w-100">Reservation Form</h4>
              </div>
              <!--Body-->
              <div class="modal-body">
                  <div class="md-form">
                      <input type="text" v-model="name" id="form22" class="form-control">
                      <label for="form42">Your Full Name</label>
                  </div>

                  <div class="md-form">
                      <input type="text" v-model="email" id="form32" class="form-control">
                      <label for="form34">Your Email</label>
                  </div>

                  <div class="md-form">
                      <input type="text" v-model="phone" id="form32" class="form-control">
                      <label for="form34">Your Phone Number</label>
                  </div>

                  <div class="md-form">
                    <select v-model="people" class="mdb-select colorful-select dropdown-default">
                      <option disabled value="">Number of people</option>
                      <option v-model="people">One Person</option>
                      <option>Two Persons</option>
                      <option>Three Persons</option>
                      <option>More</option>
                  </select>
                  </div>

                  <span>Selected: {{people}} </span>

                  <div class="text-center">
                      <button class="btn btn-lg btn-rounded btn-primary waves-effect waves-light" @click="submit">Send Information</button>
                      <p class="text-muted">*Some dummy text goes here.</p>

                      <div class="call">
                          <p>Or you prefer book a table by phone? <span class="cf-phone"><i class="fa fa-phone"></i>+01 234 565 280</span></p>
                      </div>
                  </div>
              </div>
              <!--Footer-->
              <div class="modal-footer">
                  <button type="button" class="btn btn-rounded btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
              </div>
          </div>
          <!--/Content-->
      </div>
  </div>

</template>

<script>

export default {
  name: 'ModalReservation',

  data() {
    return {
      name: '',
      email: '',
      phone: '',
      people: '',
    }
  },

  methods: {
    async submit() {
      let data = {
        name: this.name,
        email: this.email,
        phone: this.phone,
        people: this.people
      };
      console.log(data)
    }
  }
}
</script>

<style lang="css" scoped>
</style>
