<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Google Font: Source Sans Pro -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
                <!-- Font Awesome -->
                <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/fontawesome-free/css/all.min.css")}}">
                <!-- DataTables -->
                <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
                <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
                <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
                <!-- Theme style -->
                <link rel="stylesheet" href="{{asset("theme/adminlte/dist/css/adminlte.min.css")}}">

                <section class="content-header">
                    <div class="container-fluid">
                      <div class="row mb-2">
                        <div class="col-sm-6">
                          <h1>Tableau de bord</h1>
                        </div>
                        <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
                            <li class="breadcrumb-item active">Enregistrer une Facture</li>
                          </ol>
                        </div>
                      </div>
                    </div><!-- /.container-fluid -->
                </section>


                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                              <!-- Google Font: Source Sans Pro -->
                            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
                            <!-- Font Awesome -->
                            <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/fontawesome-free/css/all.min.css")}}">
                            <!-- daterange picker -->
                            <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/daterangepicker/daterangepicker.css")}}">
                            <!-- iCheck for checkboxes and radio inputs -->
                            <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
                            <!-- Bootstrap Color Picker -->
                            <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")}}">
                            <!-- Tempusdominus Bootstrap 4 -->
                            <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
                            <!-- Select2 -->
                            <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/select2/css/select2.min.css")}}">
                            <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
                            <!-- Bootstrap4 Duallistbox -->
                            <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css")}}">
                            <!-- BS Stepper -->
                            <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/bs-stepper/css/bs-stepper.min.css")}}">
                            <!-- dropzonejs -->
                            <link rel="stylesheet" href="{{asset("theme/adminlte/plugins/dropzone/min/dropzone.min.css")}}">
                            <!-- Theme style -->
                            <link rel="stylesheet" href="{{asset("theme/adminlte/dist/css/adminlte.min.css")}}">


                            <div class="row">
                                <div class="col-md-3">
                                    <a href="{{route('dashboard')}}" class="btn btn-block btn-info btn-lg">Liste des factures</a>
                                </div>
                                <!-- left column -->
                                <div class="col-md-8">

                                  <!-- general form elements -->
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Formulaire pour enregistrement une nouvelle facture</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form action="{{route('facture.enregistrer')}}" method="POST" >
                                            @csrf

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="nomPrenom">NOM ET PRENOM <code> @error('nomPrenom') <div class="alert alert-danger">{{ $message }}</div> @enderror </code> </label>
                                                            <input type="text" class="form-control form-control-border border-width-2 @error('nomPrenom') is-invalid @enderror" id="nomPrenom" name="nomPrenom" >
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="numeroDossier">DOSSIER N° : <code></code></label>
                                                            <input type="text" class="form-control form-control-border border-width-2" id="numeroDossier" name="numeroDossier" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col"></div>
                                                    <div class="col"></div>
                                                </div>


                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                            <label for="matricule">MATRICULE : <code></code></label>
                                                            <input type="text" class="form-control form-control-border border-width-2" id="matricule" name="matricule" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                        <div class="form-group">
                                                            <label for="objet">OBJET : <code></code></label>
                                                            <input type="text" class="form-control form-control-border border-width-2" id="objet" name="objet" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                            <label for="consultation">CONSULTATION <code></code></label>
                                                            <input type="number" class="form-control form-control-border border-width-2" id="consultation" name="consultation" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                            <label for="sejour">SEJOUR <code></code></label>
                                                            <input type="number" class="form-control form-control-border border-width-2" id="sejour" name="sejour" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                            <label for="ami">AMI <code></code></label>
                                                            <input type="number" class="form-control form-control-border border-width-2" id="ami" name="ami" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                            <label for="pharmacie">PHARMACIE <code></code></label>
                                                            <input type="number" class="form-control form-control-border border-width-2" id="pharmacie" name="pharmacie" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                            <label for="examinBiologique">EXAMIN BIOLOGIQUE <code></code></label>
                                                            <input type="number" class="form-control form-control-border border-width-2" id="examinBiologique" name="examinBiologique" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                            <label for="pocheDeSang">POCHE DE SANG <code></code></label>
                                                            <input type="number" class="form-control form-control-border border-width-2" id="pocheDeSang" name="pocheDeSang" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                            <label for="acteDeTransfusion">ACTE DE TRANSFUSION <code></code></label>
                                                            <input type="number" class="form-control form-control-border border-width-2" id="acteDeTransfusion" name="acteDeTransfusion" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <div class="form-group">
                                                            <label for="aavancePayee">AVANCE PAYEE <code></code></label>
                                                            <input type="number" class="form-control form-control-border border-width-2" id="aavancePayee" name="aavancePayee" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4"></div>
                                                </div>


                                            </div>
                                            <!-- /.card-body -->

                                        <button type="submit" class="btn btn-block btn-info btn-lg">Enregistrer la facture</button>

                                        </form>
                                    </div>
                                  <!-- /.card -->

                                </div>
                                  <!-- /.card -->

                            </div>




                            <!-- jQuery -->
                            <script src="{{asset("theme/adminlte/plugins/jquery/jquery.min.js")}}"></script>
                            <!-- Bootstrap 4 -->
                            <script src="{{asset("theme/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
                            <!-- Select2 -->
                            <script src="{{asset("theme/adminlte/plugins/select2/js/select2.full.min.js")}}"></script>
                            <!-- Bootstrap4 Duallistbox -->
                            <script src="{{asset("theme/adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js")}}"></script>
                            <!-- InputMask -->
                            <script src="{{asset("theme/adminlte/plugins/moment/moment.min.js")}}"></script>
                            <script src="{{asset("theme/adminlte/plugins/inputmask/jquery.inputmask.min.js")}}"></script>
                            <!-- date-range-picker -->
                            <script src="{{asset("theme/adminlte/plugins/daterangepicker/daterangepicker.js")}}"></script>
                            <!-- bootstrap color picker -->
                            <script src="{{asset("theme/adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js")}}"></script>
                            <!-- Tempusdominus Bootstrap 4 -->
                            <script src="{{asset("theme/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
                            <!-- Bootstrap Switch -->
                            <script src="{{asset("theme/adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js")}}"></script>
                            <!-- BS-Stepper -->
                            <script src="{{asset("theme/adminlte/plugins/bs-stepper/js/bs-stepper.min.js")}}"></script>
                            <!-- dropzonejs -->
                            <script src="{{asset("theme/adminlte/plugins/dropzone/min/dropzone.min.js")}}"></script>
                            <!-- AdminLTE App -->
                            <script src="{{asset("theme/adminlte/dist/js/adminlte.min.js")}}"></script>
                            <!-- Page specific script -->

                            <script>
                                $(function () {
                                    //Initialize Select2 Elements
                                    $('.select2').select2()

                                    //Initialize Select2 Elements
                                    $('.select2bs4').select2({
                                    theme: 'bootstrap4'
                                    })

                                    //Datemask dd/mm/yyyy
                                    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
                                    //Datemask2 mm/dd/yyyy
                                    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
                                    //Money Euro
                                    $('[data-mask]').inputmask()

                                    //Date picker
                                    $('#reservationdate').datetimepicker({
                                        format: 'L'
                                    });

                                    //Date and time picker
                                    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

                                    //Date range picker
                                    $('#reservation').daterangepicker()
                                    //Date range picker with time picker
                                    $('#reservationtime').daterangepicker({
                                    timePicker: true,
                                    timePickerIncrement: 30,
                                    locale: {
                                        format: 'MM/DD/YYYY hh:mm A'
                                    }
                                    })
                                    //Date range as a button
                                    $('#daterange-btn').daterangepicker(
                                    {
                                        ranges   : {
                                        'Today'       : [moment(), moment()],
                                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                                        },
                                        startDate: moment().subtract(29, 'days'),
                                        endDate  : moment()
                                    },
                                    function (start, end) {
                                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                                    }
                                    )

                                    //Timepicker
                                    $('#timepicker').datetimepicker({
                                    format: 'LT'
                                    })

                                    //Bootstrap Duallistbox
                                    $('.duallistbox').bootstrapDualListbox()

                                    //Colorpicker
                                    $('.my-colorpicker1').colorpicker()
                                    //color picker with addon
                                    $('.my-colorpicker2').colorpicker()

                                    $('.my-colorpicker2').on('colorpickerChange', function(event) {
                                    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                                    })

                                    $("input[data-bootstrap-switch]").each(function(){
                                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                                    })

                                })
                                // BS-Stepper Init
                                document.addEventListener('DOMContentLoaded', function () {
                                    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
                                })

                                // DropzoneJS Demo Code Start
                                Dropzone.autoDiscover = false

                                // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
                                var previewNode = document.querySelector("#template")
                                previewNode.id = ""
                                var previewTemplate = previewNode.parentNode.innerHTML
                                previewNode.parentNode.removeChild(previewNode)

                                var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
                                    url: "/target-url", // Set the url
                                    thumbnailWidth: 80,
                                    thumbnailHeight: 80,
                                    parallelUploads: 20,
                                    previewTemplate: previewTemplate,
                                    autoQueue: false, // Make sure the files aren't queued until manually added
                                    previewsContainer: "#previews", // Define the container to display the previews
                                    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
                                })

                                myDropzone.on("addedfile", function(file) {
                                    // Hookup the start button
                                    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
                                })

                                // Update the total progress bar
                                myDropzone.on("totaluploadprogress", function(progress) {
                                    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
                                })

                                myDropzone.on("sending", function(file) {
                                    // Show the total progress bar when upload starts
                                    document.querySelector("#total-progress").style.opacity = "1"
                                    // And disable the start button
                                    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
                                })

                                // Hide the total progress bar when nothing's uploading anymore
                                myDropzone.on("queuecomplete", function(progress) {
                                    document.querySelector("#total-progress").style.opacity = "0"
                                })

                                // Setup the buttons for all transfers
                                // The "add files" button doesn't need to be setup because the config
                                // `clickable` has already been specified.
                                document.querySelector("#actions .start").onclick = function() {
                                    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
                                }
                                document.querySelector("#actions .cancel").onclick = function() {
                                    myDropzone.removeAllFiles(true)
                                }
                                // DropzoneJS Demo Code End
                            </script>


                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

            </div>

        </div>

        <!-- jQuery -->
        <script src="{{asset("theme/adminlte/plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset("theme/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{asset("theme/adminlte/plugins/datatables/jquery.dataTables.min.js")}}"></script>
        <script src="{{asset("theme/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
        <script src="{{asset("theme/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
        <script src="{{asset("theme/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
        <script src="{{asset("theme/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
        <script src="{{asset("theme/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
        <script src="{{asset("theme/adminlte/plugins/jszip/jszip.min.js")}}"></script>
        <script src="{{asset("theme/adminlte/plugins/pdfmake/pdfmake.min.js")}}"></script>
        <script src="{{asset("theme/adminlte/plugins/pdfmake/vfs_fonts.js")}}"></script>
        <script src="{{asset("theme/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
        <script src="{{asset("theme/adminlte/plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
        <script src="{{asset("theme/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("theme/adminlte/dist/js/adminlte.min.js")}}"></script>
        <!-- Page specific script -->
        <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });
        </script>


    </div>
</x-app-layout>
