<template>
  <div class="modal fade modal-ext" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <!--Content-->
          <div class="modal-content">
              <!--Header-->
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="w-100" id="myModalLabel">Write to us</h4>
              </div>
              <!--Body-->
              <div class="modal-body">
                  <p>Tell us what is on your mind</p>
                  <br>


                  <div class="md-form">
                      <i class="fa fa-user prefix"></i>
                      <input v-model.trim="input.name" v-validate="'required|alpha_spaces|min:4|max:50'" id="contact-name" name="name" type="text" class="form-control">
                      <label for="contact-name">Your name</label>
                      <div v-if="submitted && errors.has('name')" class="invalid-feedback">
                        {{ errors.first('name') }}
                      </div>
                  </div>

                  <div class="md-form">
                      <i class="fa fa-envelope prefix"></i>
                      <input v-model.trim="input.email" v-validate="'required|email|max:50'" name="email" id="contact-email" type="email" class="form-control">
                      <label for="contact-email">Your email</label>
                      <div v-if="submitted && errors.has('email')" class="invalid-feedback">
                        {{ errors.first('email') }}
                      </div>
                  </div>

                  <div class="md-form">
                      <i class="fa fa-tag prefix"></i>
                      <input v-model.trim="input.subject" v-validate="{required: true, regex: /^[A-Za-z0-9.,!' -]*$/ , max:100}" name="subject" type="text" id="contact-subject" class="form-control">
                      <label for="contact-subject">Subject</label>
                      <div v-if="submitted && errors.has('subject')" class="invalid-feedback">
                        {{ errors.first('subject') }}
                      </div>
                  </div>

                  <div class="md-form">
                      <i class="fa fa-pencil prefix"></i>
                      <textarea v-model.trim="input.message" v-validate="{required: true, regex: /^[A-Za-z0-9.,!' -]*$/ , max:255}" name="message" type="text" id="contact-message" class="md-textarea"></textarea>
                      <label for="contact-message">Textarea</label>
                      <div v-if="submitted && errors.has('message')" class="invalid-feedback">
                        {{ errors.first('message') }}
                      </div>
                  </div>

                  <div class="text-center">
                      <button @click="submit" :data-dismiss="complete ? 'modal' : ''" class="btn btn-lg btn-info waves-effect">Submit</button>

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

</template>

<script>

export default {

  data() {
    return {
      input: {
        name: '',
        email: '',
        subject: '',
        message: ''
      },
      complete: false,
      submitted: false,
    }
  },

  methods: {
    async submit() {
      this.submitted = true;
      this.$validator.validate().then(
        valid => {
          if (valid) {
            let payload = this.input;
            this.complete = true;

            axios.post('/message', payload)
                  .then((response) => {
                    this.flash(response.data, 'success');
                  })
                  .catch((err) => {
                    this.flash(err, 'error');
                  });
          }
        }
      )

    },

  }
}
</script>

<style scoped>
</style>
