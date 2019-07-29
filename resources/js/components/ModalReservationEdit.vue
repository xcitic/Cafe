<template>
          <!--Content-->
          <div class="dialog-content" style="margin: 2rem;">

              <!--Header-->
              <div class="dialog-c-title">
                  <button type="button" class="close" @click="$emit('close')">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="w-100 mt-1 mb-3">Update Your Reservation</h4>
              </div>
              <!--Body-->
              <div class="dialog-c-text">
                  <div class="md-form">
                      <input v-model="data.name" v-validate="'required|alpha_spaces|max:50'" type="text" id="name" name="name" class="form-control">
                      <label for="name" class="active">Name</label>
                      <div v-if="submitted && errors.has('name')" class="invalid-feedback">
                        {{ errors.first('name') }}
                      </div>
                  </div>

                  <div class="md-form">
                      <input disabled v-model="data.email" v-validate="'required|email|max:50'" type="email" name="email" id="email" class="form-control">
                      <label for="email" class="active">Email</label>
                      <div v-if="submitted && errors.has('email')" class="invalid-feedback">
                        {{ errors.first('email') }}
                      </div>
                  </div>

                  <div class="md-form">
                      <input v-model="data.phone" v-validate="'required|numeric'" type="text" name="phone" id="phone" class="form-control">
                      <label for="phone" class="active">Phone Number</label>
                      <div v-if="submitted && errors.has('phone')" class="invalid-feedback">
                        {{ errors.first('phone') }}
                      </div>
                  </div>

                  <div class="mt-2 mb-1 md-form">
                    <input type="number" v-model="data.seats" name="seats" v-validate="'required|numeric|max_value:250'" />
                    <label for="seats" class="active">Number of seats</label>
                    <range-slider
                      class="slider mt-1"
                      min="1"
                      max="250"
                      step="1"
                      v-model="data.seats"
                      ></range-slider>
                      <div v-if="submitted && errors.has('seats')" class="invalid-feedback">
                        {{ errors.first('seats') }}
                      </div>

                  </div>

                  <div class='col-md-12 mb-2'>
                    <div class="">
                        <label for="datepicker" class="mb-1">Choose date and time </label>
                    </div>

                    <DatePicker format="DD-MM-YYYY H:i:s" width="auto" v-validate="'required|max:50'" name="date" class="date-imbedded" v-model="data.date"/>
                    <div v-if="submitted && errors.has('date')" class="invalid-feedback">
                      {{ errors.first('date') }}
                    </div>
                </div>

              </div>


              <!--Footer-->
              <div class="vue-dialog-buttons">
                  <button type="button" class="btn btn-light-green" @click="update">Update</button>
              </div>
          <!--/Content-->
      </div>

</template>

<script>
import DatePicker from 'vuejs-datetimepicker';
import RangeSlider from 'vue-range-slider';
import 'vue-range-slider/dist/vue-range-slider.css';



export default {

  props: {data: Object},

  components: {
    DatePicker,
    RangeSlider
  },

  data() {
    return {
      submitted: false,
      complete: false,
    }
  },

  methods: {

    async update() {
      this.submitted = true;
      let payload = this.data;

      this.$validator.validate().then(
        valid => {
          if (valid) {
            this.complete = true;

            axios.post(`/reservation/${payload.id}/update`, payload)
              .then((response) => {
                this.$emit('close');
                this.flash(response.data, 'success');
              })
              .catch((err) => {
                this.flash(err, 'error');
              });
          }
      });



    }
  }
}
</script>

<style>
.slider {
  width: 100%
}

/* .date-imbedded {
  left: auto;
  position: fixed !important;
  z-index: 9998;
  top: auto;
} */
</style>
