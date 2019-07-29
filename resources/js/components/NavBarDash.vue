<template>
  <nav class="navbar fixed-top navbar-toggleable-md navbar-dark top-nav-collapse">

      <div class="container">

          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <a class="navbar-brand" href="/">
              <strong>C&B Cafe</strong>
          </a>

          <div class="collapse navbar-collapse" id="navbarNav">

              <!--Links-->
              <ul class="navbar-nav mr-auto smooth-scroll">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="/#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="/#features" data-offset="100">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="/#about" data-offset="100">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="/#products" data-offset="100">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="/#testimonials" data-offset="100">Opinions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#modal-contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#modal-reservation">Reservation</a>
                </li>
              </ul>

              <!--Social Icons-->
              <ul class="navbar-nav nav-flex-icons">
                  <li class="nav-item">
                      <a class="nav-link" @click="logout">Logout</a>
                  </li>
              </ul>

          </div>
      </div>
  </nav>
</template>

<script>
    export default {
      methods: {
        async logout() {
          axios.post('/logout')
                .then(response => {
                  window.location.assign('/');
                })
                .catch(err => {
                  console.log(err)
                });
        }
      }
    }
</script>
