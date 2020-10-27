<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from dashkit.goodthemes.co/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 21:06:08 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=utf-8"
  /><!-- /Added by HTTrack -->
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="A fully featured admin theme which can be used to build CRM, CMS, etc."
    />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/feather/feather.css" />
    <link
      rel="stylesheet"
      href="assets/libs/flatpickr/dist/flatpickr.min.css"
    />
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css" />
    <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css" />

    
    <!-- Theme CSS -->

    <link
      rel="stylesheet"
      href="assets/css/theme.min.css"
      id="stylesheetLight"
    />
    <link
      rel="stylesheet"
      href="assets/css/theme-dark.min.css"
      id="stylesheetDark"
    />

    <style>
      body {
        display: none;
      }
    </style>

    <!-- Title -->
    <title>Dashkit</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-1"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-156446909-1");
    </script>
  </head>
  <body
    class="d-flex align-items-center bg-auth border-top border-top-2 border-primary"
  >
    <!-- CONTENT
    ================================================== -->

    <div id="app_login" class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">
          <!-- Heading -->
          <img src="assets/img/sob/logo.png" class="" alt="..." width="400px" height="190px">
          <h3 class="display-6 text-center mb-3 text-muted">
            Inicio de sesion
          </h3>
          <!-- Subheading -->
          <p class="text-muted text-center mb-5"></p>

          <!-- Form -->
          <form>
            <!-- Email address -->
            <div class="form-group">
              <!-- Label -->
              <label>Usuario</label>

              <!-- Input -->
              <input
                v-model="credentials.username"
                type="text"
                class="form-control"
                placeholder="Introduzca su usuario"
              />
            </div>

            <!-- Password -->
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <!-- Label -->
                  <label>Contraseña</label>
                </div>
                <div class="col-auto">
                  <!-- Help text -->
                  <a href="#" class="form-text small text-muted"
                    >¿ Ha olvidado su contraseña ?</a
                  >
                </div>
              </div>
              <!-- / .row -->

              <!-- Input group -->
              <div class="input-group input-group-merge">
                <!-- Input -->
                <input
                  v-model="credentials.password"
                  type="password"
                  class="form-control form-control-appended"
                  placeholder="Introduzca su contraseña"
                />

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>
              </div>
            </div>

            <!-- Submit -->
            <button
              type="button"
              @click="test"
              class="btn btn-lg btn-block btn-primary mb-3"
            >
              Iniciar sesion
            </button>
          </form>
        </div>
      </div>
      <!-- / .row -->
    </div>

    <!-- / .container -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/%40shopify/draggable/lib/es5/draggable.bundle.legacy.js"></script>
    <script src="assets/libs/autosize/dist/autosize.min.js"></script>
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/chart.js/Chart.extension.js"></script>
    <!-- Map -->
    <script src="../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>
    <script src="assets/js/dashkit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      const app = new Vue({
        el: "#app_login",
        data: {
          rutas : ['asdasd'],
          credentials: {
            username: "",
            password: "",
          },
        },
        methods: {
          
          test() {
            axios
              .post(
                "http://192.168.0.13:3000/api/auth/staff/signin",
                this.credentials
              )
              .then((resp) => {
                console.log("holaaaa", resp.data);
                // window.location.href = 'some url'
                 localStorage.setItem('token',resp.data.token);
                 localStorage.setItem('user',resp.data.username);
                 localStorage.setItem('role',resp.data.role);
                 location.href='./viaje.php';
                //location.href = `./home.php?token${resp.data.token}&user=${resp.data.username}&role=${resp.data.role}`;
              })
              .catch((e) => {
                console.log(e);
                location.href = "./login.php";
              });
          },
        },
      });
    </script>
  </body>

  <!-- Mirrored from dashkit.goodthemes.co/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 21:06:08 GMT -->
</html>
