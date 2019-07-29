<template>
  <div class="modal fade modal-ext" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <!--Content-->
          <div class="modal-content">
              <!--Header-->
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title w-100" id="myModalLabel">Write to us</h4>
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
                      <button class="btn btn-lg btn-primary waves-effect">Submit</button>

                      <div class="call">
                          <p>Or would you prefer to call? <span class="cf-phone"><i class="fa fa-phone"></i>+01 234 565 280</span></p>
                      </div>
                  </div>
              </div>
              <!--Footer-->
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
              </div>
          </div>
          <!--/Content-->
      </div>
  </div>

</template>

<script>
export default {
  name: 'ModalContact'
}
</script>

<style lang="css" scoped>
</style>
