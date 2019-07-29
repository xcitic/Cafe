<template>
  <div class="col-md-12">

    <modals-container height="auto"/>

    <div class="row">

        <div class="col-md-12 mb-1 mt-2">
            <!-- Tabs -->
            <!-- Nav tabs -->

            <div class="tabs-wrapper ">
                <ul class="nav classic-tabs tabs-primary primary-color" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link waves-light active waves-effect waves-light" data-toggle="tab" href="#panel83" role="tab">Reservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-light waves-effect waves-light" data-toggle="tab" href="#panel84" role="tab">Messages</a>
                    </li>

                </ul>

            </div>
            <!-- Tab panels -->
            <div class="tab-content card">
                <!--Panel 1-->
                <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Seats</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr v-for="(item, index) in reservations">

                                    <th scope="row">{{item.id}}</th>
                                    <td>{{item.name}}</td>
                                    <td>{{item.email}}</td>
                                    <td>{{item.updated_at}}</td>
                                    <td>{{item.seats}}</td>
                                    <td>{{item.date}}</td>
                                    <td>
                                        <a class="teal-text" data-toggle="modal" data-placement="top" title="Edit" data-original-title="Edit" @click="modalReservation(index)"><i class="fa fa-pencil"></i></a>
                                        <a @click="removeReservation(item.id)" class="red-text" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Remove"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/.Panel 1-->
                <!--Panel 2-->
                <div class="tab-pane fade" id="panel84" role="tabpanel">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>From</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Sent At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in messages">
                                    <th scope="row">{{item.id}}</th>
                                    <td>{{item.name}}</td>
                                    <td>{{item.email}}</td>
                                    <td>{{item.subject}}</td>
                                    <td>{{item.message}}</td>
                                    <td>{{item.created_at}}</td>
                                    <td>
                                        <a class="blue-text" data-toggle="tooltip" data-placement="top" title="" data-original-title="See Message" @click="modalMessageView(index)"><i class="fa fa-envelope"></i></a>
                                        <a class="teal-text" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" @click="modalMessage(index)"><i class="fa fa-pencil"></i></a>
                                        <a @click="removeMessage(item.id)" class="red-text" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/.Panel 2-->
            </div>
            <!-- /.Tabs -->
        </div>
    </div>
</div>
</template>

<script>
import editReservation from './ModalReservationEdit.vue';
import editMessage from './ModalMessageEdit.vue';
import viewMessage from './ModalMessageView.vue';

export default {

  components: {
    editReservation
  },

  data() {
    return {
      reservations: [],
      messages: [],
      search: '',
    }
  },

  mounted() {
    this.fetchReservations();
    this.fetchMessages();
  },

  methods: {
    fetchReservations() {
      axios.get('/reservations/get')
            .then(({data}) => {
              this.reservations = data;
            });
    },

    fetchMessages() {
      axios.get('/messages/get')
          .then(({data}) => {
            this.messages = data;
          });
    },

    removeReservation(id) {
      axios.post(`/reservation/${id}/delete`)
            .then((response) => {
              this.flash(response.data, 'success');
              this.fetchReservations();
            })
            .catch((err) => {
              this.flash(err, 'error');
            });
    },

    removeMessage(id) {
      axios.post(`/message/${id}/delete`)
            .then((response) => {
              this.flash(response.data, 'success');
              this.fetchMessages();
            })
            .catch((err) => {
              this.flash(err, 'error');
            });
    },

    modalReservation(i) {
      let payload = this.reservations[i];
      console.log(payload)
      this.$modal.show(editReservation, {
          data: payload
      }, {
        height: 'auto'
      })

    },

    modalMessage(i) {
      let payload = this.messages[i];
      this.$modal.show(editMessage, {
          data: payload
      }, {
        height: 'auto'
      })
    },

    modalMessageView(i) {
      let payload = this.messages[i];
      this.$modal.show(viewMessage, {
          data: payload
      }, {
        height: 'auto'
      })
    }

  }
}
</script>

<style>
</style>
