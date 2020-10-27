<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 21:05:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/feather/feather.css" />
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css" />
    <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css" />

    <!-- Map -->
    <link href="../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet" />

    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>
      body {
        display: none;
      }

    </style>
    
    <!-- Title -->
    <title>Dashkit</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-1"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "UA-156446909-1");</script>

  </head>
  <body>

    <div id="app_viaje">


<div class="modal fade" tabindex="-1" id="ver_pasajeros" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lista de pasajeros</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <button class="btn btn-info" @click="GET_MANIFIESTO()">Generar reporte</button>
      total ventas :  Bs. {{ total_sales }}
      <div class="table-responsive mb-0">
        <table class="table table-sm table-nowrap card-table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Documento</th>
              <th>Tipo documento</th>
              <th>Codigo Pasaje</th>
              <th>Asiento Nro</th>
            </tr>
          </thead>
          <tbody>
          <tr v-for="person in pasajeros">
                    <td>{{ person.name }}</td>
                    <td>{{ person.lastname }}</td>
                    <td>{{ person.document }}</td>
                    <td>{{ person.type_doc }}</td>
                     <td>
                       <h3>
                         <span class="badge badge-primary ml-auto">{{ person.codigo_ticket }}</span>
                        </h3>
                     </td>
                     <td>
                       <h3>
                         <span class="badge badge-success ml-auto">{{ person.nro_seat }}</span>
                        </h3>
                     </td>
                 
        
                </tr>
                
          </tbody>
        </table>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
        <!-- MODALS
    ================================================== -->
    <div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <!-- Title -->
            <h4 class="modal-title">
              Notifications
            </h4>

            <!-- Navs -->
            <ul class="nav nav-tabs nav-tabs-sm modal-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#modalActivityAction">Action</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#modalActivityUser">User</a>
              </li>
            </ul>

          </div>
          <div class="modal-body">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="modalActivityAction">

                <!-- List group -->
                <div class="list-group list-group-flush list-group-activity my-n3">
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-mail"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Launchday 1.4.0 update email sent
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Sent to all 1,851 subscribers over a 24 hour period
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-archive"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          New project "Goodkit" created
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Looks like there might be a new theme soon.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-code"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Dashkit 1.5.0 was deployed.
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          A successful to deploy to production was executed.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-git-branch"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          "Update Dependencies" branch was created.
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          This branch was created off of the "master" branch.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-mail"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Launchday 1.4.0 update email sent
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Sent to all 1,851 subscribers over a 24 hour period
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-archive"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          New project "Goodkit" created
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Looks like there might be a new theme soon.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-code"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Dashkit 1.5.0 was deployed.
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          A successful to deploy to production was executed.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-git-branch"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          "Update Dependencies" branch was created.
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          This branch was created off of the "master" branch.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-mail"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Launchday 1.4.0 update email sent
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Sent to all 1,851 subscribers over a 24 hour period
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-archive"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          New project "Goodkit" created
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Looks like there might be a new theme soon.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-code"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Dashkit 1.5.0 was deployed.
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          A successful to deploy to production was executed.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                            <i class="fe fe-git-branch"></i>
                          </div>
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          "Update Dependencies" branch was created.
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          This branch was created off of the "master" branch.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                </div>

              </div>
              <div class="tab-pane fade" id="modalActivityUser">

                <!-- List group -->
                <div class="list-group list-group-flush list-group-activity my-n3">
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-online">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-1.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Dianna Smiley
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Uploaded the files "Launchday Logo" and "New Design".
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-online">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-2.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Ab Hadley
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Shared the "Why Dashkit?" post with 124 subscribers.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          1h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-offline">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-3.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Adolfo Hess
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Exported sales data from Launchday's subscriber data.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          3h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-online">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-1.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Dianna Smiley
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Uploaded the files "Launchday Logo" and "New Design".
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-online">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-2.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Ab Hadley
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Shared the "Why Dashkit?" post with 124 subscribers.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          1h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-offline">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-3.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Adolfo Hess
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Exported sales data from Launchday's subscriber data.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          3h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-online">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-1.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Dianna Smiley
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Uploaded the files "Launchday Logo" and "New Design".
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-online">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-2.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Ab Hadley
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Shared the "Why Dashkit?" post with 124 subscribers.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          1h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-offline">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-3.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Adolfo Hess
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Exported sales data from Launchday's subscriber data.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          3h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-online">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-1.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Dianna Smiley
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Uploaded the files "Launchday Logo" and "New Design".
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-online">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-2.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Ab Hadley
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Shared the "Why Dashkit?" post with 124 subscribers.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          1h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-offline">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-3.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Adolfo Hess
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Exported sales data from Launchday's subscriber data.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          3h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal: Kanban task -->
    <div class="modal fade" id="modalKanbanTask" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-lighter">
          <div class="modal-body">

            <!-- Header -->
            <div class="row">
              <div class="col">

                <!-- Prettitle -->
                <h6 class="text-uppercase text-muted mb-3">
                  <a href="#!" class="text-reset">How to Use Kanban</a>
                </h6>

                <!-- Title -->
                <h2 class="mb-2">
                  Update Dashkit to include new components!
                </h2>

                <!-- Subtitle -->
                <p class="text-muted mb-0">
                  This is a description of this task. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum magna nisi, ultrices ut pharetra eget.
                </p>

              </div>
              <div class="col-auto">

                <!-- Close -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    &times;
                  </span>
                </button>

              </div>
            </div> <!-- / .row -->

            <!-- Divider -->
            <hr class="my-4">

            <!-- Buttons -->
            <div class="mb-4">
              <div class="row">
                <div class="col">

                  <!-- Reaction -->
                  <a href="#!" class="btn btn-sm btn-white">
                    😬 1
                  </a>
                  <a href="#!" class="btn btn-sm btn-white">
                    👍 2
                  </a>
                  <a href="#!" class="btn btn-sm btn-white">
                    Add Reaction
                  </a>

                </div>
                <div class="col-auto mr-n3">

                  <!-- Avatar group -->
                  <div class="avatar-group d-none d-sm-flex">
                    <a href="../profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                      <img src="../assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <a href="../profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Adolfo Hess">
                      <img src="../assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <a href="../profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                      <img src="../assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <a href="../profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Miyah Myles">
                      <img src="../assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                  </div>

                </div>
                <div class="col-auto">

                  <!-- Button -->
                  <a href="#!" class="btn btn-sm btn-white">
                    Share
                  </a>

                </div>
              </div> <!-- / .row -->
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Files
                </h4>

                <!-- Button -->
                <a href="#!" class="btn btn-sm btn-white">
                  Add files
                </a>

              </div>
              <div class="card-body">
                <div class="list-group list-group-flush my-n3">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <a href="../project-overview.html" class="avatar">
                          <img src="../assets/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                        </a>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="mb-1">
                          <a href="../project-overview.html">Launchday logo</a>
                        </h4>

                        <!-- Time -->
                        <p class="card-text small text-muted">
                          1.5mb PNG Dave
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <a href="../project-overview.html" class="avatar">
                          <img src="../assets/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                        </a>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="mb-1">
                          <a href="../project-overview.html">Launchday logo</a>
                        </h4>

                        <!-- Time -->
                        <p class="card-text small text-muted">
                          1.5mb PNG Dave
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                </div>

              </div>
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ml-n2">

                    <!-- Form -->
                    <form class="mt-1">
                      <textarea class="form-control form-control-flush form-control" data-toggle="autosize" rows="1" placeholder="Leave a comment"></textarea>
                    </form>

                  </div>
                  <div class="col-auto align-self-end">

                    <!-- Icons -->
                    <div class="text-muted mb-2">
                      <a href="#!" class="text-reset mr-3">
                        <i class="fe fe-camera"></i>
                      </a>
                      <a href="#!" class="text-reset mr-3">
                        <i class="fe fe-paperclip"></i>
                      </a>
                      <a href="#!" class="text-reset">
                        <i class="fe fe-mic"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card-body">

                <!-- Comments -->
                <div class="comment mb-3">
                  <div class="row">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a class="avatar avatar-sm" href="../profile-posts.html">
                        <img src="../assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml-n2">

                      <!-- Body -->
                      <div class="comment-body">

                        <div class="row">
                          <div class="col">

                            <!-- Title -->
                            <h5 class="comment-title">
                              Ab Hadley
                            </h5>

                          </div>
                          <div class="col-auto">

                            <!-- Time -->
                            <time class="comment-time">
                              11:12
                            </time>

                          </div>
                        </div> <!-- / .row -->

                        <!-- Text -->
                        <p class="comment-text">
                          Looking good Dianna! I like the image grid on the left, but it feels like a lot to process and doesn't really <em>show</em> me what the product does? I think using a short looping video or something similar demo'ing the product might be better?
                        </p>

                      </div>

                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="comment">
                  <div class="row">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a class="avatar avatar-sm" href="../profile-posts.html">
                        <img src="../assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml-n2">

                      <!-- Body -->
                      <div class="comment-body">

                        <div class="row">
                          <div class="col">

                            <!-- Title -->
                            <h5 class="comment-title">
                              Adolfo Hess
                            </h5>

                          </div>
                          <div class="col-auto">

                            <!-- Time -->
                            <time class="comment-time">
                              11:12
                            </time>

                          </div>
                        </div> <!-- / .row -->

                        <!-- Text -->
                        <p class="comment-text">
                          Any chance you're going to link the grid up to a public gallery of sites built with Launchday?
                        </p>

                      </div>

                    </div>
                  </div> <!-- / .row -->
                </div>

              </div>
            </div>

            <!-- Card -->
            <div class="card mb-0">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Activity
                </h4>

              </div>
              <div class="card-body">
                <div class="list-group list-group-flush list-group-activity my-n3">
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Johnathan Goldstein
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Uploaded the files “Launchday Logo” and “Revisiting the Past”.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Johnathan Goldstein
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Uploaded the files “Launchday Logo” and “Revisiting the Past”.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Johnathan Goldstein
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Uploaded the files “Launchday Logo” and “Revisiting the Past”.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    <!-- Modal: Kanban task -->
    <div class="modal fade" id="modalKanbanTaskEmpty" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-lighter">
          <div class="modal-body">

            <!-- Header -->
            <div class="row">
              <div class="col">

                <!-- Prettitle -->
                <h6 class="text-uppercase text-muted mb-3">
                  <a href="#!" class="text-reset">How to Use Kanban</a>
                </h6>

                <!-- Title -->
                <h2 class="mb-2">
                  Update Dashkit to include new components!
                </h2>

                <!-- Subtitle -->
                <textarea class="form-control form-control-flush form-control-auto" data-toggle="autosize" rows="1" placeholder="Add a description..."></textarea>

              </div>
              <div class="col-auto">

                <!-- Close -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    &times;
                  </span>
                </button>

              </div>
            </div> <!-- / .row -->

            <!-- Divider -->
            <hr class="my-4">

            <!-- Buttons -->
            <div class="mb-4">
              <div class="row">
                <div class="col">

                  <!-- Button -->
                  <a href="#!" class="btn btn-sm btn-white">
                    Add Reaction
                  </a>

                </div>
                <div class="col-auto">

                  <!-- Button -->
                  <a href="#!" class="btn btn-sm btn-white">
                    Share
                  </a>

                </div>
              </div> <!-- / .row -->
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-options='{"url": "https://"}'>

                  <!-- Fallback -->
                  <div class="fallback">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFileUpload" multiple>
                      <label class="custom-file-label" for="customFileUpload">Choose file</label>
                    </div>
                  </div>

                  <!-- Preview -->
                  <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                    <li class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Image -->
                          <div class="avatar">
                            <img class="avatar-img rounded" src="data:image/svg+xml,%3csvg3c/svg%3e" alt="..." data-dz-thumbnail>
                          </div>

                        </div>
                        <div class="col ml-n3">

                          <!-- Heading -->
                          <h4 class="mb-1" data-dz-name>...</h4>

                          <!-- Text -->
                          <small class="text-muted" data-dz-size></small>

                        </div>
                        <div class="col-auto">

                          <!-- Dropdown -->
                          <div class="dropdown">
                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item" data-dz-remove>
                                Remove
                              </a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img class="avatar-img rounded-circle" src="../assets/img/avatars/profiles/avatar-1.jpg" alt="...">
                    </div>

                  </div>
                  <div class="col ml-n2">

                    <!-- Form -->
                    <form class="mt-1">
                      <textarea class="form-control form-control-flush" data-toggle="autosize" rows="1" placeholder="Leave a comment"></textarea>
                    </form>

                  </div>
                  <div class="col-auto align-self-end">

                    <!-- Icons -->
                    <div class="text-muted mb-2">
                      <a href="#!" class="text-reset mr-3">
                        <i class="fe fe-camera"></i>
                      </a>
                      <a href="#!" class="text-reset mr-3">
                        <i class="fe fe-paperclip"></i>
                      </a>
                      <a href="#!" class="text-reset">
                        <i class="fe fe-mic"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Modal: Demo -->
    <div class="modal fade fixed-right" id="modalDemo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <form class="modal-content" v->
          <div class="modal-body">

            <!-- Close -->
            <a class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>

            <!-- Image -->
            <!-- <div class="text-center">
              <img src="assets/img/illustrations/designer-life.svg" alt="..." class="img-fluid mb-3" >
            </div> -->

            <!-- Heading -->
            <h2 class="text-center mb-2">
              Programar nuevo viaje
            </h2>

            <!-- Text -->
            <p class="text-center mb-4">
        
            </p>

            <!-- Divider -->
            <hr class="mb-4">
            <!-- Heading -->
            <!-- <h4 class="mb-1">
              Color Scheme
            </h4> -->
      
                    <div class="form-group">
                      <label for="exampleInputEmail1">Origen</label>
                      <select class="form-control" v-model="add.idOrigin">
                         <option selected disabled="true">-Seleccione Origen-</option>
                         <option v-for="item in routes"  v-bind:value="item.idRoute">
                            {{ item.city }}
                        </option>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Destino</label>
                      <select class="form-control" v-model="add.idDestination">
                         <option selected disabled="true">-Seleccione Destino</option>
                         <option v-for="item in routes"  v-bind:value="item.idRoute">
                            {{ item.city }}
                        </option>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Bus</label>
                     <select class="form-control" v-model="add.idBus">
                         <option selected disabled="true">-Seleccione Bus-</option>
                        
                         <option v-for="item in buses" v-bind:value="item.idBus">
                            {{ item.plate_number + " | " + item.driver.staff.person.name + " " + item.driver.staff.person.lastname }}
                        </option>
                     </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Fecha Salida</label>
                      <vuejs-datepicker :bootstrap-styling="true" v-model="add.departure_date"></vuejs-datepicker>
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" >Hora Salida</label>
                      <input type="text" class="form-control" v-model="add.departure_time"  placeholder="Ejemplo 08:00">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" >Duracion de viaje</label>
                      <input type="text" class="form-control" v-model="add.duration"  placeholder="Ejemplo 12:00 hrs">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Hora Llegada</label>
                      <input type="text" class="form-control" v-model="add.arrival_time"  placeholder="Ejemplo 08:00">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Precio de venta online en Bs:</label>
                      <input type="number" class="form-control" v-model="add.price_online" placeholder="Ejemplo 50">
                    </div>
             
                    <div class="form-group">
                      <label for="exampleInputPassword1">Carril</label>
                      <input type="text" class="form-control" v-model="add.carril"  placeholder="Ejemplo 5">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" v-model="add.mode" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label"  for="customSwitch1">Protocolo Sanitario</label>
                        </div>
          
                    </div>
                             


                  

                 
          </div>
          <div class="modal-footer border-0">

            <!-- Button -->
            <button type="button"  @click="NUEVO_VIAJE()" class="btn btn-block btn-primary mt-auto">
              Programar
            </button>

          </div>
        </form>
      </div>
    </div>

    




    <!-- NAVIGATION
    ================================================== -->
    
    
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md " id="sidebar">
      <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="index.html">
          <img src="assets/img/sob/logo.png" class="navbar-brand-img 
          mx-auto" alt="...">
        </a>

    

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

         
        <h6 class="navbar-heading">
            Menu Principal
          </h6>
          <!-- Navigation -->

          <ul class="navbar-nav">
          <!-- <li class="nav-item">
              <a class="nav-link " href="venta.php">
                <i class="fe fe-shopping-cart"></i> Ventas 
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link " href="bus.php">
                <i class="fe fe-truck"></i> Buses 
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link " href="cliente.php">
                <i class="fe fe-users"></i> Clientes
              </a>
            </li> -->
            <li class="nav-item active">
              <a class="nav-link active" href="viaje.php">
                <i class="fe fe-globe"></i> Viajes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="ruta.php">
                <i class="fe fe-map"></i> Rutas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="socio.php">
                <i class="fe fe-users"></i> Socios
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link " href="tripulacion.php">
                <i class="fe fe-git-merge"></i> Tripulacion
              </a>
            </li> -->
          </ul> 
          <!-- Divider -->
          <hr class="navbar-divider my-3">


          <!-- Heading -->
          <!-- <h6 class="navbar-heading">
            Otros
          </h6> -->

          <!-- Navigation -->
          <ul class="navbar-nav mb-md-4">
          
          </ul>

          <!-- Push content down -->
          <div class="mt-auto"></div>

          
          <!-- Customize -->
          <!-- <div id="popoverDemo" data-toggle="popover" data-trigger="manual" title="Make Dashkit Your Own!" data-content="Switch the demo to Dark Mode or adjust the navigation layout, icons, and colors!">
            <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
              <i class="fe fe-sliders mr-2"></i> Customize
            </a>
          </div>
           -->

          
          <!-- User (md) -->
          <div class="navbar-user d-none d-md-flex" id="sidebarUser">

            <!-- Icon -->
            <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-bell"></i>
              </span>
            </a>

            <!-- Dropup -->
            <div class="dropup">

              <!-- Toggle -->
              <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                <a href="#" class="dropdown-item">Mi perfil</a>
                <hr class="dropdown-divider">
                <a href="#"  @click="logout()" class="dropdown-item">Cerrar sesion</a>
              </div>
             

            </div>

            <!-- Icon -->
            <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-search"></i>
              </span>
            </a>

          </div>
          

        </div> <!-- / .navbar-collapse -->

      </div>
    </nav>

    
    
    <nav class="navbar navbar-vertical navbar-vertical-sm fixed-left navbar-expand-md " id="sidebarSmall">
      <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarSmallCollapse" aria-controls="sidebarSmallCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="index.html">
          <img src="assets/img/logo.svg" class="navbar-brand-img 
          mx-auto" alt="...">
        </a>

     
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarSmallCollapse">

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
              <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fe fe-search"></span>
                </div>
              </div>
            </div>
          </form>

          <!-- Divider -->
          <hr class="navbar-divider d-none d-md-block mt-0 mb-3">

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item dropright">
              <a class="nav-link dropdown-toggle active" id="sidebarSmallDashboards" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Dashboards">
                <i class="fe fe-home"></i> <span class="d-md-none">Dashboards</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="sidebarSmallDashboards">
                <li class="dropdown-header d-none d-md-block">
                  <h6 class="text-uppercase mb-0">Dashboards</h6>
                </li>
                <li>
                  <a href="index.html" class="dropdown-item active">
                    Default
                  </a>
                </li>
                <li>
                  <a href="dashboard-project-management.html" class="dropdown-item ">
                    Project Management
                  </a>
                </li>
                <li>
                  <a href="dashboard-ecommerce.html" class="dropdown-item ">
                    E-Commerce
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropright">
              <a class="nav-link dropdown-toggle " id="sidebarSmallPages" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fe fe-file"></i> <span class="d-md-none">Pages</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="sidebarSmallPages">
                <li class="dropdown-header d-none d-md-block">
                  <h6 class="text-uppercase mb-0">Pages</h6>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallProfile">
                    <a class="dropdown-item " href="profile-posts.html">
                      Posts
                    </a>
                    <a class="dropdown-item " href="profile-groups.html">
                      Groups
                    </a>
                    <a class="dropdown-item " href="profile-projects.html">
                      Projects
                    </a>
                    <a class="dropdown-item " href="profile-files.html">
                      Files
                    </a>
                    <a class="dropdown-item " href="profile-subscribers.html">
                      Subscribers
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Project
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallProject">
                    <a class="dropdown-item " href="project-overview.html">
                      Overview
                    </a>
                    <a class="dropdown-item " href="project-files.html">
                      Files
                    </a>
                    <a class="dropdown-item " href="project-reports.html">
                      Reports
                    </a>
                    <a class="dropdown-item " href="project-new.html">
                      New project
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Team
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallTeam">
                    <a class="dropdown-item " href="team-overview.html">
                      Overview
                    </a>
                    <a class="dropdown-item " href="team-projects.html">
                      Projects
                    </a>
                    <a class="dropdown-item " href="team-members.html">
                      Members
                    </a>
                    <a class="dropdown-item " href="team-new.html">
                      New team
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallFeed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Feed
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallFeed">
                    <a class="dropdown-item " href="feed.html">
                      Platform
                    </a>
                    <a class="dropdown-item " href="social-feed.html">
                      Social
                    </a>
                  </div>
                </li>
                <li>
                  <a class="dropdown-item " href="wizard.html">
                    Wizard
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="kanban.html">
                    Kanban
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="orders.html">
                    Orders
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="settings.html">
                    Settings
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="invoice.html">
                    Invoice
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="pricing.html">
                    Pricing
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Widgets">
              <a class="nav-link " href="widgets.html">
                <i class="fe fe-grid"></i> <span class="d-md-none">Widgets</span>
              </a>
            </li>
            <li class="nav-item dropright">
              <a class="nav-link dropdown-toggle" id="sidebarSmallAuth" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fe fe-user"></i> <span class="d-md-none">Auth</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="sidebarSmallAuth">
                <li class="dropdown-header d-none d-md-block">
                  <h6 class="text-uppercase mb-0">Authentication</h6>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign in
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallSignIn">
                    <a class="dropdown-item" href="sign-in-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="sign-in-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="sign-in-basics.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign up
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallSignUp">
                    <a class="dropdown-item" href="sign-up-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="sign-up-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="sign-up.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Password reset
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallPassword">
                    <a class="dropdown-item" href="password-reset-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="password-reset-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="password-reset.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Error
                  </a>
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallError">
                    <a class="dropdown-item" href="error-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="error.html">
                      Basic
                    </a>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item d-md-none">
              <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                <span class="fe fe-bell"></span> Notifications
              </a>
            </li>
          </ul>

          <!-- Divider -->
          <hr class="navbar-divider my-3">

          <!-- Navigation -->
          <ul class="navbar-nav mb-md-4">
            <li class="nav-item dropright">
              <a class="nav-link dropdown-toggle " id="sidebarSmallBasics" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Basics">
                <i class="fe fe-clipboard"></i> <span class="d-md-none">Basics</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="sidebarSmallBasics">
                <li class="dropdown-header d-none d-md-block">
                  <h6 class="text-uppercase mb-0">Basics</h6>
                </li>
                <li>
                  <a href="docs/getting-started.html" class="dropdown-item ">
                    Getting Started
                  </a>
                </li>
                <li>
                  <a href="docs/design-file.html" class="dropdown-item ">
                    Design File
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="docs/components.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Components">
                <i class="fe fe-book-open"></i> <span class="d-md-none">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="docs/changelog.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Changelog">
                <i class="fe fe-git-branch"></i> <span class="d-md-none">Changelog</span> <span class="badge badge-primary ml-auto d-md-none">v1.5.1</span>
              </a>
            </li>
          </ul>

          <!-- Push content down -->
          <div class="mt-auto"></div>

          
          <!-- Customize -->
          <div class="mb-4" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Customize">
            <a href="#modalDemo" class="btn btn-block btn-primary" data-toggle="modal">
              <i class="fe fe-sliders"></i> <span class="d-md-none ml-2">Customize</span>
            </a>
          </div>
          

          
          <!-- User (md) -->
          <div class="navbar-user d-none d-md-flex flex-column" id="sidebarSmallUser">

            <!-- Icon -->
            <a href="#sidebarModalSearch" class="navbar-user-link mb-3" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-search"></i>
              </span>
            </a>

            <!-- Icon -->
            <a href="#sidebarModalActivity" class="navbar-user-link mb-3" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-bell"></i>
              </span>
            </a>

            <!-- Dropup -->
            <div class="dropright">

              <!-- Toggle -->
              <a href="#" id="sidebarSmallIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu" aria-labelledby="sidebarSmallIconCopy">
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>
          

        </div> <!-- / .navbar-collapse -->

      </div>
    </nav>

    
    <nav class="navbar navbar-expand-lg " id="topnav">
      <div class="container">

        <!-- Toggler -->
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand mr-auto" href="index.html">
          <img src="assets/img/logo.svg" alt="..." class="navbar-brand-img">
        </a>

        <!-- Form -->
        <form class="form-inline mr-4 d-none d-lg-flex">
          <div class="input-group input-group-rounded input-group-merge" data-toggle="lists" data-options='{"valueNames": ["name"]}'>

            <!-- Input -->
            <input type="search" class="form-control form-control-prepended  dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fe fe-search"></i>
              </div>
            </div>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-card">
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush list my-n3">
                  <a class="list-group-item" href="team-overview.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Airbnb
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="team-overview.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Medium Corporation
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="project-overview.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-4by3">
                          <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Homepage Redesign
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="project-overview.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-4by3">
                          <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Travels & Time
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="project-overview.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-4by3">
                          <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Safari Exploration
                        </h4>

                        <!-- Time -->
                        <p class="small text-muted mb-0">
                          <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="profile-posts.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Dianna Smiley
                        </h4>

                        <!-- Status -->
                        <p class="text-body small mb-0">
                          <span class="text-success">●</span> Online
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item" href="profile-posts.html">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar">
                          <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="text-body mb-1 name">
                          Ab Hadley
                        </h4>

                        <!-- Status -->
                        <p class="text-body small mb-0">
                          <span class="text-danger">●</span> Offline
                        </p>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                </div>

              </div>
            </div> <!-- / .dropdown-menu -->

          </div>
        </form>

        <!-- User -->
        <div class="navbar-user">

          <!-- Dropdown -->
          <div class="dropdown mr-4 d-none d-lg-flex">

            <!-- Toggle -->
            <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="icon active">
                <i class="fe fe-bell"></i>
              </span>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
              <div class="card-header">

                <!-- Title -->
                <h5 class="card-header-title">
                  Notifications
                </h5>

                <!-- Link -->
                <a href="#!" class="small">
                  View all
                </a>

              </div> <!-- / .card-header -->
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush list-group-activity my-n3">
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess, and 3 others.
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Ab Hadley</strong> reacted to your post with a 😍
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Adolfo Hess</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Daniela Dewitt</strong> subscribed to you.
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Ryu Duke</strong> reacted to your post with a 😍
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Glen Rouse</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                  <a class="list-group-item text-reset" href="#!">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Content -->
                        <div class="small">
                          <strong>Grace Gross</strong> subscribed to you.
                        </div>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </a>
                </div>

              </div>
            </div> <!-- / .dropdown-menu -->

          </div>

          <!-- Dropdown -->
          <div class="dropdown">

            <!-- Toggle -->
            <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile-posts.html" class="dropdown-item">Profile</a>
              <a href="settings.html" class="dropdown-item">Settings</a>
              <hr class="dropdown-divider">
              <a href="sign-in.html" class="dropdown-item">Logout</a>
            </div>

          </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
          </form>

          <!-- Navigation -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="topnavDashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dashboards
              </a>
              <ul class="dropdown-menu" aria-labelledby="topnavDashboards">
                <li>
                  <a class="dropdown-item active" href="index.html">
                    Default
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="dashboard-project-management.html">
                    Project Management
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="dashboard-ecommerce.html">
                    E-Commerce
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" id="topnavPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <ul class="dropdown-menu" aria-labelledby="topnavPages">
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="topnavProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavProfile">
                    <a class="dropdown-item " href="profile-posts.html">
                      Posts
                    </a>
                    <a class="dropdown-item " href="profile-groups.html">
                      Groups
                    </a>
                    <a class="dropdown-item " href="profile-projects.html">
                      Projects
                    </a>
                    <a class="dropdown-item " href="profile-files.html">
                      Files
                    </a>
                    <a class="dropdown-item " href="profile-subscribers.html">
                      Subscribers
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="topnavProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Project
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavProject">
                    <a class="dropdown-item " href="project-overview.html">
                      Overview
                    </a>
                    <a class="dropdown-item " href="project-files.html">
                      Files
                    </a>
                    <a class="dropdown-item " href="project-reports.html">
                      Reports
                    </a>
                    <a class="dropdown-item " href="project-new.html">
                      New project
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="topnavTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Team
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavTeam">
                    <a class="dropdown-item " href="team-overview.html">
                      Overview
                    </a>
                    <a class="dropdown-item " href="team-projects.html">
                      Projects
                    </a>
                    <a class="dropdown-item " href="team-members.html">
                      Members
                    </a>
                    <a class="dropdown-item " href="team-new.html">
                      New team
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="topnavFeed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Feed
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavFeed">
                    <a class="dropdown-item " href="feed.html">
                      Platform
                    </a>
                    <a class="dropdown-item " href="social-feed.html">
                      Social
                    </a>
                  </div>
                </li>
                <li>
                  <a class="dropdown-item " href="wizard.html">
                    Wizard
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="kanban.html">
                    Kanban
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="orders.html">
                    Orders
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="settings.html">
                    Settings
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="invoice.html">
                    Invoice
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="pricing.html">
                    Pricing
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="widgets.html">
                    Widgets
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="topnavAuth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Auth
              </a>
              <ul class="dropdown-menu" aria-labelledby="topnavAuth">
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign in
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavSignIn">
                    <a class="dropdown-item" href="sign-in-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="sign-in-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="sign-in-basics.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign up
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavSignUp">
                    <a class="dropdown-item" href="sign-up-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="sign-up-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="sign-up.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="topnavPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Password reset
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavPassword">
                    <a class="dropdown-item" href="password-reset-cover.html">
                      Cover
                    </a>
                    <a class="dropdown-item" href="password-reset-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="password-reset.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="topnavError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Error
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavError">
                    <a class="dropdown-item" href="error-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="error.html">
                      Basic
                    </a>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" id="topnavDocumentation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Docs
              </a>
              <ul class="dropdown-menu" aria-labelledby="topnavDocumentation">
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle " href="#" id="topnavBasics" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Basics
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnavBasics">
                    <a class="dropdown-item " href="getting-started.html">
                      Getting Started
                    </a>
                    <a class="dropdown-item " href="docs/design-file.html">
                      Design File
                    </a>
                  </div>
                </li>
                <li>
                  <a class="dropdown-item " href="docs/components.html">
                    Components
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="docs/changelog.html">
                    Changelog
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#modalDemo" data-toggle="modal">
                Customize
              </a>
            </li>
          </ul>

        </div>

      </div> <!-- / .container -->
    </nav>

    

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">
      
      <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
        <div class="container-fluid">

          <!-- Form -->
          <form class="form-inline mr-4 d-none d-md-flex">
            <div class="input-group input-group-flush input-group-merge" data-toggle="lists" data-options='{"valueNames": ["name"]}'>

              <!-- Input -->
              <input type="search" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search" />

              <!-- Prepend -->
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fe fe-search"></i>
                </div>
              </div>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-card">
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list my-n3">
                    <a class="list-group-item" href="team-overview.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Airbnb
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="team-overview.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Medium Corporation
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="project-overview.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Homepage Redesign
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="project-overview.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Travels & Time
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="project-overview.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-4by3">
                            <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Safari Exploration
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24">Updated 4hr ago</time>
                          </p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="profile-posts.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Dianna Smiley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0"><span class="text-success">●</span> Online</p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item" href="profile-posts.html">
                      <div class="row align-items-center">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Ab Hadley
                          </h4>

                          <!-- Status -->
                          <p class="text-body small mb-0"><span class="text-danger">●</span> Offline</p>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                  </div>
                </div>
              </div> <!-- / .dropdown-menu -->

            </div>
          </form>

          <!-- User -->
          <div class="navbar-user">

            <!-- Dropdown -->
            <div class="dropdown mr-4 d-none d-md-flex">

              <!-- Toggle -->
              <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon active">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                <div class="card-header">

                  <!-- Title -->
                  <h5 class="card-header-title">
                    Notifications
                  </h5>

                  <!-- Link -->
                  <a href="#!" class="small">
                    View all
                  </a>

                </div> <!-- / .card-header -->
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list-group-activity my-n3">
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess,
                            and 3 others.
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Ab Hadley</strong> reacted to your post with a 😍
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Adolfo Hess</strong> commented
                            <blockquote class="mb-0">
                              “I don’t think this really makes sense to do without approval from Johnathan
                              since he’s the one...”
                            </blockquote>
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small"><strong>Daniela Dewitt</strong> subscribed to you.</div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Ryu Duke</strong> reacted to your post with a 😍
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small">
                            <strong>Glen Rouse</strong> commented
                            <blockquote class="mb-0">
                              “I don’t think this really makes sense to do without approval from Johnathan
                              since he’s the one...”
                            </blockquote>
                          </div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a class="list-group-item text-reset" href="#!">
                      <div class="row">
                        <div class="col-auto">

                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>

                        </div>
                        <div class="col ml-n2">

                          <!-- Content -->
                          <div class="small"><strong>Grace Gross</strong> subscribed to you.</div>

                          <!-- Time -->
                          <small class="text-muted">
                            2m ago
                          </small>

                        </div>
                      </div> <!-- / .row -->
                    </a>
                  </div>
                </div>
              </div> <!-- / .dropdown-menu -->
            </div>

            <!-- Dropdown -->
            <div class="dropdown">

              <!-- Toggle -->
              <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle" />
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right">
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider" />
                <a href="sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>

        </div>
      </nav>

      

      <!-- HEADER -->
      <div class="header">
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Overview
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Programacion de viajes
                </h1>

              </div>
              <div class="col-auto">

                <!-- Button -->
                <!-- <a href="#!" class="btn btn-primary lift">
                  Create Report
                </a> -->

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->

      <!-- CARDS -->
      <div class="container-fluid pt-5">

<div class="row justify-content-center">
            




  <div class="">
  <div class="card">
     
      <div class="card-header">

        <!-- Title -->
        <h4 class="card-header-title">
          Viajes Programados 
        </h4>


        <!-- Button -->
        <a href="#modalDemo" data-toggle="modal" class="btn btn-sm btn-primary">
          Nuevo
          <i class="fe fe-plus mr-2"></i>
        </a>
        

      </div>
      
      <div class="table-responsive mb-0">
        <table class="table table-sm table-nowrap card-table">
          <thead>
            <tr>
              <th>Ruta</th>
              <th>Fecha Salida</th>
              <th>Hora Salida</th>
              <th>Bus</th>
              <th>Chofer</th>
              <th>Carril de salida</th>
              <th>Precio</th>
              <th>Estado de viaje</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
          <tr v-for="item in viajes">

                    <td>{{ item.origin.city + " - " + item.destination.city }}</td>
                    <td>{{ item.departure_date }}</td>
                    <td>{{ item.departure_time }}</td>
                    <td>{{ item.bus.plate_number}}</td>
                    <td>{{ item.bus.driver.staff.person.name +" "+item.bus.driver.staff.person.lastname }}</td>
                    <td>{{ item.carril }}</td>
                    <td>{{ item.price_online +" Bs" }}</td>
                    <td>
                    <span class="badge badge-primary ml-auto">  {{ item.status == 'ON_HOLD' ? ' EN ESPERA' : item.status == 'FINISHED' ? 'FINALIZADA': 'EN CURSO'}}</span>
                      </td>
                    <td>
                    <!-- <button
                            @click="
                                OnClickEdit(item.idRoute)
                            "
                            type="button"
                            class="btn btn-primary btn-sm"
                        > Editar
                            <i class="fe fe-edit"></i>
                        </button> -->
                        <!-- <div id="popoverDemo" data-toggle="popover" data-trigger="manual" title="Make Dashkit Your Own!" data-content="Switch the demo to Dark Mode or adjust the navigation layout, icons, and colors!">
            <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
              <i class="fe fe-sliders mr-2"></i> Customize
            </a>
          </div> -->
                        <button
                        data-toggle="modal" data-target="#ver_pasajeros"
                        @click="GET_PASAJEROS(item.idTrip)"
                            type="button"
                            class="btn btn-info btn-sm"
                        >Pasajeros
                            <i class="fe fe-users"></i>
                        </button>
                        
<!--                      
                        <button
                            @click="
                                CANCEL_TRIP(item.idTrip)
                            "
                            type="button"
                            class="btn btn-danger btn-sm"
                        >Cancelar
                            <i class="fe fe-delete"></i>
                        </button> -->
                        <button
                            @click="
                                LIQUIDACION(item.idTrip)
                            "
                            type="button"
                            class="btn btn-warning btn-sm"
                        >Liquidacion
                            <i class="fe fe-delete"></i>
                        </button>
                        

                    </td>
                </tr>
                
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div> <!-- / .row -->
</div>

    </div><!-- / .main-content -->

    </div>
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
    <script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>
    <script src="assets/js/dashkit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vuejs-datepicker"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment-with-locales.min.js"></script>
    <script>
      const app = new Vue({
        el: "#app_viaje",
        components :{
            vuejsDatepicker
        },
        data: {
          idTrip_manifiesto:0,
          add:{
            idOrigin:null,
            idDestination:null,
            duration:null,
            departure_date: new Date(),
            departure_time:null,
            price_online:0,
            idBus:null,
            arrival_time:null,
            carril:null,
            mode:false,
          },
          viajes : [],
          pasajeros:[],
          manifiesto:{},
          routes:[],
          buses:[],
          total_sales : 0,
        
        },
        methods: {
          logout(){
            location.href="./login.php";
          },
          LIQUIDACION(id){
            const token = localStorage.getItem('token')
            axios
              .get(
                "http://192.168.0.13:3000/api/driver/reporte_liquidacion/"+id, { headers: { 'Authorization': `Bearer ${token}`,'Content-Type': 'application/json' }})
              .then((resp) => {
                let to = resp.data;
                let tr = '<tr><td class="service">'+to.code+'<td class="unit">'+to.date+'</td><td class="qty">'+to.price+'</td><td class="total">'+to.seats+'</td>';
            
                location.href = './reportes/liquidacion.php?ruta='+to.ruta+'&placa='+to.bus+'&socio='+to.socio+'&fecha='+new Date()+'&total1='+to.total1+'&total2='+to.total2+'&pro_adm='+to.pro_adm+'&prevision='+to.prevision+'&seguro='+to.seguro+'&iva='+to.iva+'&ganancias='+tr;
          
              })
              .catch((e) => {
                location.href = "./login.php";
              })
               
          },
          GET_MANIFIESTO(){
            const token = localStorage.getItem('token')
            axios
              .get(
                "http://192.168.0.13:3000/api/trip/manifiesto/"+this.idTrip_manifiesto, { headers: { 'Authorization': `Bearer ${token}`,'Content-Type': 'application/json' }})
              .then((resp) => {
                this.manifiesto = resp.data.manifiesto;
                let tr = '';
                
            this.manifiesto.passengers.forEach((pass)=>{
                tr += '<tr><td class="service">'+pass.name+'</td><td class="desc">'+pass.lastname+'</td><td class="unit">'+pass.document+'</td><td class="qty">'+pass.type_doc+'</td><td class="total">'+pass.codigo_ticket+'</td><td class="total">'+pass.nro_seat+'</td></tr>'
            });
   
  location.href = './reportes/pasajeros.php?nro_placa='+this.manifiesto.nro_plate+'&socio='+this.manifiesto.socio+'&fecha='+this.manifiesto.departure_date+'&hora='+this.manifiesto.departure_time+'&codigo='+this.manifiesto.code_trip+'&ruta='+this.manifiesto.ruta+'&nro_pasajeros='+this.manifiesto.passengers.length+'&pasajeros='+tr;
          
              })
              .catch((e) => {
                location.href = "./login.php";
              })
               
          }, 
          CANCEL_TRIP(id){
              const token = localStorage.getItem('token')
            axios
              .post(
                "http://192.168.0.13:3000/api/trip/cancel_trip/"+id,null,{
                headers: { 'Authorization': `Bearer ${token}`,'Content-Type': 'application/json' }
            })
              .then((resp) => {
                location.reload();
              })
              .catch((e) => {
                location.href = "./login.php";
              });
            },
          GET_VIAJES() {
            axios
              .get(
                "http://192.168.0.13:3000/api/trip")
              .then((resp) => {
                this.viajes = resp.data;
                //  localStorage.setItem('token',resp.data.token);
                //  localStorage.setItem('user',resp.data.username);
                //  localStorage.setItem('role',resp.data.role);
                //  location.href='./home.php';
                //location.href = `./home.php?token${resp.data.token}&user=${resp.data.username}&role=${resp.data.role}`;
              })
              .catch((e) => {
                location.href = "./login.php";
              });
          },
          NUEVO_VIAJE(){
            const token = localStorage.getItem('token')
            this.add.price_online = parseInt(this.add.price_online);
            this.add.departure_date = moment(this.add.departure_date).format("YYYY-MM-DD");
            axios
              .post(
                "http://192.168.0.13:3000/api/trip/register",this.add,{
                headers: { 'Authorization': `Bearer ${token}`,'Content-Type': 'application/json' }
            })
              .then((resp) => {
              location.reload();
                //  localStorage.setItem('token',resp.data.token);
                //  localStorage.setItem('user',resp.data.username);
                //  localStorage.setItem('role',resp.data.role);
                //  location.href='./home.php';
                //location.href = `./home.php?token${resp.data.token}&user=${resp.data.username}&role=${resp.data.role}`;
              })
              .catch((e) => {
                console.log('ERORRRRRRR',e);
                //location.href = "./login.php";
              });
          },
          GET_PASAJEROS(id){
            this.idTrip_manifiesto = id;
            this.total_sales = 0;
            const token = localStorage.getItem('token')
            axios
              .get(
                "http://192.168.0.13:3000/api/trip/passengers/"+id, { headers: { 'Authorization': `Bearer ${token}`,'Content-Type': 'application/json' }})
              .then((resp) => {
                this.pasajeros = resp.data.passengers;
                this.pasajeros.forEach(e => {
                    this.total_sales = this.total_sales + e.price_ticket;
                });
              })
              .catch((e) => {
                location.href = "./login.php";
              });
          },
          GET_ROUTES(){
            const token = localStorage.getItem('token')
              axios
              .get(
                "http://192.168.0.13:3000/api/route/get_routes/", { headers: { 'Authorization': `Bearer ${token}`,'Content-Type': 'application/json' }})
              .then((resp) => {
                this.routes = resp.data.results;
              })
              .catch((e) => {
                location.href = "./login.php";
              });
          },
          GET_BUSES(){
            const token = localStorage.getItem('token')
              axios
              .get(
                "http://192.168.0.13:3000/api/bus/getbuses",{ headers: { 'Authorization': `Bearer ${token}`,'Content-Type': 'application/json' }})
              .then((resp) => {

                this.buses = resp.data.buses;
              })
              .catch((e) => {
                location.href = "./login.php";
              });
          }
         
        },

        created() {
            this.GET_VIAJES();
            this.GET_ROUTES();
            this.GET_BUSES();
        },
      });
    </script>

  </body>

<!-- Mirrored from dashkit.goodthemes.co/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 21:05:58 GMT -->
</html>