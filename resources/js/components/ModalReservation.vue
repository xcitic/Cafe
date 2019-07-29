<template>
  <div class="modal fade modal-ext" id="modal-reservation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <!--Content-->
          <div class="modal-content">
              <!--Header-->
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="w-100 mt-1 mb-1">Reservation Form</h4>
              </div>
              <!--Body-->
              <div class="modal-body">
                  <div class="md-form">
                      <input v-model="input.name" v-validate="'required|alpha_spaces|max:50'" type="text" name="name" id="name" class="form-control">
                      <label for="name">Your Name</label>
                      <div v-if="submitted && errors.has('name')" class="invalid-feedback">
                        {{ errors.first('name') }}
                      </div>
                  </div>

                  <div class="md-form">
                      <input v-model="input.email" type="email" v-validate="'required|email|max:50'" name="email" id="email" class="form-control">
                      <label for="email">Your Email</label>
                      <div v-if="submitted && errors.has('email')" class="invalid-feedback">
                        {{ errors.first('email') }}
                      </div>
                  </div>

                  <div class="md-form">
                      <input v-model="input.phone" v-validate="'required|numeric'" type="text" name="phone" id="phone" class="form-control">
                      <label for="phone">Your Phone Number</label>
                      <div v-if="submitted && errors.has('phone')" class="invalid-feedback">
                        {{ errors.first('phone') }}
                      </div>
                  </div>

                  <div class="mt-2 mb-1 md-form">
                    <input type="number" v-model="input.seats" name="seats" v-validate="'required|numeric|max_value:250'" />
                    <label for="seats">Number of seats</label>
                    <range-slider
                      class="slider mt-1"
                      min="1"
                      max="250"
                      step="1"
                      v-model="input.seats"
                      ></range-slider>
                      <div v-if="submitted && errors.has('seats')" class="invalid-feedback">
                        {{ errors.first('seats') }}
                      </div>

                  </div>

                  <div class='col-md-12 mb-2'>
                    <div class="">
                        <label for="datepicker" class="mb-1">Choose date and time </label>
                    </div>

                    <Datepicker format="DD-MM-YYYY H:i:s" width="100%" v-model="input.date" />
                    <div v-if="submitted && errors.has('date')" class="invalid-feedback">
                      {{ errors.first('date') }}
                    </div>

                </div>

                  <div class="text-center">
                      <button @click="submit" :data-dismiss="complete ? 'modal' : ''" class="btn btn-lg btn-info waves-effect">Send Information</button>


                      <div class="call">
                          <p>Or you prefer book a table by phone? <span class="cf-phone"><i class="fa fa-phone"></i>+01 234 565 280</span></p>
                      </div>
                  </div>
              </div>
              <!--Footer-->
              <div class="modal-footer">
                  <button type="button" class="btn btn-light-green" data-dismiss="modal">Close</button>
              </div>
          </div>
          <!--/Content-->
      </div>
  </div>

</template>

<script>
import Datepicker from 'vuejs-datetimepicker';
import RangeSlider from 'vue-range-slider';
import 'vue-range-slider/dist/vue-range-slider.css';


export default {

  components: {
    Datepicker,
    RangeSlider
  },

  data() {
    return {
      input: {
        name: '',
        email: '',
        phone: '',
        seats: 1,
        date: ''
      },
      submitted: false,
      complete: false,
    }
  },

  methods: {
    async submit() {
      this.submitted = true;
      let payload = this.input;

      this.$validator.validate().then(
        valid => {
          if (valid) {
            this.complete = true;

            axios.post('/reservation', payload)
              .then((response) => {
                this.flash(response.data, 'success');
              })
              .catch((err) => {
                this.flash(err, 'error');
              });
          }
        }
      )


    }
  }
}
</script>

<style scoped>
.slider {
  width: 100%;
}
</style>
