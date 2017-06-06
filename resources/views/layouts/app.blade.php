<!DOCTYPE html>
<html>
<head>
    <title>GSB - @yield('title')</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.14/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
</head>
<body>
    @if(Auth::check())
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container nav-container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown {{ Request::path() == 'formation*' ? 'active' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Formations <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('formation/coming') }}">Mes formations</a></li>
                            <li><a href="{{ url('formation/add') }}">Ajouter une formation</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('formation/list') }}">Tout voir</a></li>
                        </ul>
                    </li>
					
					<li class="{{ Request::path() == 'special*' ? 'active' : '' }}"><a href="{{ url('session') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Sessions</a></li>

					
					
                    <li class="{{ Request::path() == 'special*' ? 'active' : '' }}"><a href="{{ url('specialty') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Spécialités</a></li>
                    <li class="dropdown {{ Request::path() == 'user*' ? 'active' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Utilisateurs <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('user/add') }}">Ajouter un utilisateur</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('user') }}">Tout voir</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('profil') }}"><i class="fa fa-user" aria-hidden="true"></i> Profil</a></li>
                    <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    @endif
    <div class="container content">
        <!--
        <div class="jumbotron col-lg-12">
        <div class="col-md-3">
        <img src="{{ asset('img/logo.png') }}" alt="Logo GSB">
    </div>
    <h2>{{ config('app.name') }}</h2>
</div>-->
@yield('content')
</div>

<footer>
    <script>
    $(document).ready(function(){
        $('table').DataTable({
            "order": [[ 0, "asc" ]],
            "language": {
                "lengthMenu": "Voir _MENU_ entrées par page",
                "zeroRecords": "Nothing found - sorry",
                "info": "Page _PAGE_ sur _PAGES_",
                "infoEmpty": "Aucun résultat",
                "infoFiltered": "(filtré sur _MAX_ entrées au total)",
                "sSearch": "Recherche :",
                "oPaginate": {
                    "sNext":    "Suivant",
                    "sPrevious": "Précédent"
                }
            }
        });
        $('div.dataTables_filter input').addClass('form-control');
    });
    @yield('script')
    </script>
</footer>
</body>
</html>
