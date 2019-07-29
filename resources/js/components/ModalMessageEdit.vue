<template>
          <!--Content-->
          <div class="dialog-content" style="margin: 2rem;">

              <!--Header-->
              <div class="dialog-c-title">
                  <button type="button" class="close" @click="$emit('close')">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="w-100 mt-1 mb-3">Update Your Message</h4>
              </div>
              <!--Body-->
              <div class="dialog-c-text">
                <div class="md-form">
                    <i class="fa fa-user prefix"></i>
                    <input v-model="data.name" v-validate="'required|alpha_spaces|min:4|max:50'" type="text" name="name" id="name" class="form-control">
                    <label class="active" for="name">Your name</label>
                    <div v-if="submitted && errors.has('name')" class="invalid-feedback">
                      {{ errors.first('name') }}
                    </div>
                </div>

                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input disabled v-model="data.email" v-validate="'required|email|max:50'" type="email" name="email" id="email" class="form-control">
                    <label class="active" for="email">Your email</label>
                    <div v-if="submitted && errors.has('email')" class="invalid-feedback">
                      {{ errors.first('email') }}
                    </div>
                </div>

                <div class="md-form">
                    <i class="fa fa-tag prefix"></i>
                    <input v-model="data.subject" v-validate="{required: true, regex: /^[A-Za-z0-9.,!' -]*$/ , max:100}" type="text" name="subject" id="subject" class="form-control">
                    <label class="active" for="subject">Subject</label>
                    <div v-if="submitted && errors.has('subject')" class="invalid-feedback">
                      {{ errors.first('subject') }}
                    </div>
                </div>

                <div class="md-form">
                    <i class="fa fa-pencil prefix"></i>
                    <textarea v-model="data.message" v-validate="{required: true, regex: /^[A-Za-z0-9.,!' -]*$/ , max:255}" type="text" name="message" id="message" class="md-textarea"></textarea>
                    <label class="active" for="message">Message</label>
                    <div v-if="submitted && errors.has('message')" class="invalid-feedback">
                      {{ errors.first('message') }}
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

export default {

  props: {data: Object},

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
            axios.post(`/message/${payload.id}/update`, payload)
              .then((response) => {
                this.$emit('close');
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
</style>
