<x-app-layout>


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
                          <h1>Imprimer une facture</h1>
                        </div>
                        <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Liste facture</li>
                          </ol>
                        </div>
                      </div>
                    </div><!-- /.container-fluid -->
                </section>


                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        @if (session('succes'))
                            <div class="alert alert-success">
                                {{ session('succes') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-4">
                                <a href="{{route('facture.creer')}}" class="btn btn-block btn-info btn-lg">Enregistrer une nouvelle facture</a>
                            </div>
                            <div class="col-4">
                                <a href="{{route('patient.enregistrer')}}" class="btn btn-block btn-info btn-lg">Liste des consultations</a>
                            </div>
                            <div class="col-4">
                                <a href="{{route('patient.enregistrer')}}" class="btn btn-block btn-info btn-lg">Demarrer une consultations</a>
                            </div>
                        </div>

                        <div class="row mt-6">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                    <h3 class="card-title">Tableau affichant la liste des factures</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="facture" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <tr>
                                                                    <td>{{$factureAImprimer->nomPrenom}} </td>
                                                                    <td>{{$factureAImprimer->numeroDossier}} </td>
                                                                    <td></td>
                                                                </tr>
                                                            </td>

                                                            <td> <tr><td>{{$factureAImprimer->montantTotal}} </td> <td></td> <td></td></tr> </td>

                                                            <td>
                                                                <tr>
                                                                    <td><a class="btn btn-outline-success" href="{{route('facture.modifier', ['id' => $factureAImprimer->id]) }}" role="button">Modifier</a></td>
                                                                    <td><a class="btn btn-outline-success" href="{{route('facture.imprimer', ['id' => $factureAImprimer->id]) }}" role="button">Imprimer</a></td>
                                                                    <td></td>
                                                                </tr>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </tr>
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>

                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

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
                $("#facture").DataTable({
                        "responsive": false,
                        "lengthChange": false,
                        "autoWidth": false,
                        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                        "language": {
                                "sProcessing":     "Traitement en cours...",
                                "sSearch":         "Rechercher&nbsp;:",
                                "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                                "sInfo":           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                                "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                                "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                                "sInfoPostFix":    "",
                                "sLoadingRecords": "Chargement en cours...",
                                "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                                "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                                "oPaginate": {
                                    "sFirst":      "Premier",
                                    "sPrevious":   "Pr&eacute;c&eacute;dent",
                                    "sNext":       "Suivant",
                                    "sLast":       "Dernier"
                                },
                                "oAria": {
                                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                                },
                                "buttons": {
                                    "collection": "Collection <span class='ui-button-icon-primary ui-icon ui-icon-triangle-1-s'\/>",
                                    "colvis": "Colonne Visible",
                                    "colvisRestore": "Restore visibility",
                                    "copy": "Copier",
                                    "copyKeys": "Press ctrl or u2318 + C to copy the table data to your system clipboard.<br><br>To cancel, click this message or press escape.",
                                    "copySuccess": {
                                        "1": "Copied 1 row to clipboard",
                                        "_": "Copied %d rows to clipboard"
                                    },
                                    "copyTitle": "Copy to Clipboard",
                                    "csv": "CSV",
                                    "excel": "Excel",
                                    "pageLength": {
                                        "-1": "Show all rows",
                                        "_": "Show %d rows"
                                    },
                                    "pdf": "PDF",
                                    "print": "Imprimer",
                                    "updateState": "Update",
                                    "stateRestore": "State %d",
                                    "savedStates": "Saved States",
                                    "renameState": "Rename",
                                    "removeState": "Remove",
                                    "removeAllStates": "Remove All States",
                                    "createState": "Create State"
                                }, }
                    }).buttons().container().appendTo('#facture_wrapper .col-md-6:eq(0)');

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
