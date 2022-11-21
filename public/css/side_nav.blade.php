<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <center>
                        {{-- <img alt="image" class="rounded-circle m-b-md" src="{{asset('inspinia/img/profile_small.jpg')}}"> --}}
                        <img alt="image" class="rounded-circle m-b-md" src="{{asset('image/nup_pacol.png')}}">

                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->getRankLastname()}}</strong></span>
                            <span class="text-muted text-xs block">{{Auth::user()->role->description}}<b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </center>
                </div>
                <div class="logo-element">
                    PNPA CRIGS
                </div>
            </li>
            <li>
                <a href="{{route('profile')}}"><i class="fa fa-user-o"></i> <span class="nav-label">&nbsp;&nbsp;My Profile</span></a>
            </li>
            <li>
                @if (Auth::user()->isSuperUser())
                    <a href="#"><i class="fa fa-male"></i> <span class="nav-label">&nbsp;&nbsp;Dashboard</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Cadet</a>
                        </li>
                        <li>
                            <a href="#">Command Group</a>
                        </li>
                        <li>
                            <a href="#">Registrar</a>
                        </li>
                        <li>
                            <a href="#">ACADG</a>
                        </li>
                        <li>
                            <a href="#">TACG</a>
                        </li>
                        <li>
                            <a href="#">IIMD</a>
                        </li>
                        <li>
                            <a href="#">PRMD</a>
                        </li>
                        <li>
                            <a href="#">RAO</a>
                        </li>
                        <li>
                            <a href="#">AHS</a>
                        </li>
                        <li>
                            <a href="#">LRMD</a>
                        </li>
                        <li>
                            <a href="#">ICTMD</a>
                        </li>
                    </ul>
                @else
                    @if(Auth::user()->isCadet())
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;Cadet Dashboard</a>
                        </li>
                    @endif
                    @if(Auth::user()->isCommandGroup())
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;Command Group Dashboard</a>
                        </li>
                    @endif
                    @if(Auth::user()->hasAccessRegistrar())
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;Registrar Dashboard</a>
                        </li>
                    @endif
                    @if(Auth::user()->hasAccessAcademicGroup())
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;ACADG Dashboard</a>
                        </li>
                    @endif
                    @if(Auth::user()->hasAccessTacticalGroup())
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;TACG Dashboard</a>
                        </li>
                    @endif
                    @if(Auth::user()->hasAccessIntelligenceInvestigation())
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;IIMD Dashboard</a>
                        </li>
                    @endif
                    @if(Auth::user()->hasAccessPersonnelRecord())
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;PRMD Dashboard</a>
                        </li>
                    @endif
                    @if(Auth::user()->hasAccessReligiousAffair())
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;RAO Dashboard</a>
                        </li>
                    @endif
                    @if(Auth::user()->hasAccessAcademyHealth())
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;AHS Dashboard</a>
                        </li>
                    @endif
                    @if(Auth::user()->hasAccessLogisticResource())
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;LRMD Dashboard</a>
                        </li>
                    @endif
                    @if(Auth::user()->hasAccessInformationCommunication())
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i>&nbsp;&nbsp;ICTMD Dashboard</a>
                        </li>
                    @endif
                @endif
            </li>
            <li>
                @if (Auth::user()->isSuperUser())
                    <a href="#"><i class="fa fa-info-circle"></i> <span class="nav-label">&nbsp;&nbsp;Informations</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Cadets<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Cadet 1</a>
                                </li>
                                <li>
                                    <a href="#">Cadet 2</a>
                                </li>
                                <li>
                                    <a href="#">Cadet 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Registrar<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ route('showCadets') }}">Cadets</a>
                                </li>

                                <li>
                                    <a href="{{ route('showInstructors') }}">Instructors</a>
                                </li>
                                <li>
                                    <a href="#">Registrar 2</a>
                                </li>
                                <li>
                                    <a href="#">Registrar 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">ACADG<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ route('showCadets') }}">Cadets</a>
                                </li>
                                <li>
                                    <a href="{{ route('showInstructors') }}">Cadets</a>
                                </li>
                                <li>
                                    <a href="#">ACADG 2</a>
                                </li>
                                <li>
                                    <a href="#">ACADG 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">TACG<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">TACG 1</a>
                                </li>
                                <li>
                                    <a href="#">TACG 2</a>
                                </li>
                                <li>
                                    <a href="#">TACG 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">IIMD<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">IIMD 1</a>
                                </li>
                                <li>
                                    <a href="#">IIMD 2</a>
                                </li>
                                <li>
                                    <a href="#">IIMD 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">PRMD<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">PRMD 1</a>
                                </li>
                                <li>
                                    <a href="#">PRMD 2</a>
                                </li>
                                <li>
                                    <a href="#">PRMD 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">RAO<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">RAO 1</a>
                                </li>
                                <li>
                                    <a href="#">RAO 2</a>
                                </li>
                                <li>
                                    <a href="#">RAO 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">AHS<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">AHS 1</a>
                                </li>
                                <li>
                                    <a href="#">AHS 2</a>
                                </li>
                                <li>
                                    <a href="#">AHS 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">LRMD<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">LRMD 1</a>
                                </li>
                                <li>
                                    <a href="#">LRMD 2</a>
                                </li>
                                <li>
                                    <a href="#">LRMD 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">ICTMD<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">ICTMD 1</a>
                                </li>
                                <li>
                                    <a href="#">ICTMD 2</a>
                                </li>
                                <li>
                                    <a href="#">ICTMD 3</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @else
                    @if(Auth::user()->isCadet())
                        <a href="#"><i class="fa fa-slideshare"></i> <span class="nav-label">&nbsp;&nbsp;Cadet Infos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Cadet 1</a>
                            </li>
                            <li>
                                <a href="#">Cadet 2</a>
                            </li>
                            <li>
                                <a href="#">Cadet 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessRegistrar())
                        <a href="#"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Registrar Infos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Registrar 1</a>
                            </li>
                            <li>
                                <a href="#">Registrar 2</a>
                            </li>
                            <li>
                                <a href="#">Registrar 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessAcademicGroup())
                        <a href=""><i class="fa fa-university"></i> <span class="nav-label">&nbsp;&nbsp;ACADG Infos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="{{ route('showCadets') }}">Cadets</a>
                            </li>
                            <li>
                                <a href="{{ route('showInstructors') }}">Cadets</a>
                            </li>
                            <li>
                                <a href="#">ACADG 2</a>
                            </li>
                            <li>
                                <a href="#">ACADG 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessTacticalGroup())
                        <a href=""><i class="fa fa-flag-o"></i> <span class="nav-label">&nbsp;&nbsp;TACG Infos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">TACG 1</a>
                            </li>
                            <li>
                                <a href="#">TACG 2</a>
                            </li>
                            <li>
                                <a href="#">TACG 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessIntelligenceInvestigation())
                        <a href=""><i class="fa fa-search"></i> <span class="nav-label">&nbsp;&nbsp;IIMD Infos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">IIMD 1</a>
                            </li>
                            <li>
                                <a href="#">IIMD 2</a>
                            </li>
                            <li>
                                <a href="#">IIMD 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessPersonnelRecord())
                        <a href=""><i class="fa fa-users"></i> <span class="nav-label">&nbsp;&nbsp;PRMD Infos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">PRMD 1</a>
                            </li>
                            <li>
                                <a href="#">PRMD 2</a>
                            </li>
                            <li>
                                <a href="#">PRMD 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessReligiousAffair())
                        <a href=""><i class="fa fa-arrows"></i> <span class="nav-label">&nbsp;&nbsp;RAO Infos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">RAO 1</a>
                            </li>
                            <li>
                                <a href="#">RAO 2</a>
                            </li>
                            <li>
                                <a href="#">RAO 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessAcademyHealth())
                        <a href=""><i class="fa fa-user-md"></i> <span class="nav-label">&nbsp;&nbsp;AHS Infos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">AHS 1</a>
                            </li>
                            <li>
                                <a href="#">AHS 2</a>
                            </li>
                            <li>
                                <a href="#">AHS 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessLogisticResource())
                        <a href=""><i class="fa fa-cogs"></i> <span class="nav-label">&nbsp;&nbsp;LRMD Infos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">LRMD 1</a>
                            </li>
                            <li>
                                <a href="#">LRMD 2</a>
                            </li>
                            <li>
                                <a href="#">LRMD 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessInformationCommunication())
                        <a href=""><i class="fa fa-bug"></i> <span class="nav-label">&nbsp;&nbsp;ICTMD Infos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">ICTMD 1</a>
                            </li>
                            <li>
                                <a href="#">ICTMD 2</a>
                            </li>
                            <li>
                                <a href="#">ICTMD 3</a>
                            </li>
                        </ul>
                    @endif
                @endif
            </li>
            <li>
                @if (Auth::user()->isSuperUser())
                    <a href="#"><i class="fa fa-file-o"></i> <span class="nav-label">&nbsp;&nbsp;Reports</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Cadets<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Cadet 1</a>
                                </li>
                                <li>
                                    <a href="#">Cadet 2</a>
                                </li>
                                <li>
                                    <a href="#">Cadet 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Registrar<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Registrar 1</a>
                                </li>
                                <li>
                                    <a href="#">Registrar 2</a>
                                </li>
                                <li>
                                    <a href="#">Registrar 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">ACADG<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">ACADG 1</a>
                                </li>
                                <li>
                                    <a href="#">ACADG 2</a>
                                </li>
                                <li>
                                    <a href="#">ACADG 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">TACG<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">TACG 1</a>
                                </li>
                                <li>
                                    <a href="#">TACG 2</a>
                                </li>
                                <li>
                                    <a href="#">TACG 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">IIMD<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">IIMD 1</a>
                                </li>
                                <li>
                                    <a href="#">IIMD 2</a>
                                </li>
                                <li>
                                    <a href="#">IIMD 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">PRMD<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">PRMD 1</a>
                                </li>
                                <li>
                                    <a href="#">PRMD 2</a>
                                </li>
                                <li>
                                    <a href="#">PRMD 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">RAO<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">RAO 1</a>
                                </li>
                                <li>
                                    <a href="#">RAO 2</a>
                                </li>
                                <li>
                                    <a href="#">RAO 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">AHS<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">AHS 1</a>
                                </li>
                                <li>
                                    <a href="#">AHS 2</a>
                                </li>
                                <li>
                                    <a href="#">AHS 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">LRMD<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">LRMD 1</a>
                                </li>
                                <li>
                                    <a href="#">LRMD 2</a>
                                </li>
                                <li>
                                    <a href="#">LRMD 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">ICTMD<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">ICTMD 1</a>
                                </li>
                                <li>
                                    <a href="#">ICTMD 2</a>
                                </li>
                                <li>
                                    <a href="#">ICTMD 3</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @else
                    @if(Auth::user()->isCadet())
                        <a href="#"><i class="fa fa-file-o"></i> <span class="nav-label">&nbsp;&nbsp;Cadet Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Cadet 1</a>
                            </li>
                            <li>
                                <a href="#">Cadet 2</a>
                            </li>
                            <li>
                                <a href="#">Cadet 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessRegistrar())
                        <a href="#"><i class="fa fa-file-o"></i> <span class="nav-label">&nbsp;&nbsp;Registrar Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Registrar 1</a>
                            </li>
                            <li>
                                <a href="#">Registrar 2</a>
                            </li>
                            <li>
                                <a href="#">Registrar 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessAcademicGroup())
                        <a href=""><i class="fa fa-file-o"></i> <span class="nav-label">&nbsp;&nbsp;ACADG Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">ACADG 1</a>
                            </li>
                            <li>
                                <a href="#">ACADG 2</a>
                            </li>
                            <li>
                                <a href="#">ACADG 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessTacticalGroup())
                        <a href=""><i class="fa fa-file-o"></i> <span class="nav-label">&nbsp;&nbsp;TACG Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">TACG 1</a>
                            </li>
                            <li>
                                <a href="#">TACG 2</a>
                            </li>
                            <li>
                                <a href="#">TACG 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessIntelligenceInvestigation())
                        <a href=""><i class="fa fa-file-o"></i> <span class="nav-label">&nbsp;&nbsp;IIMD Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">IIMD 1</a>
                            </li>
                            <li>
                                <a href="#">IIMD 2</a>
                            </li>
                            <li>
                                <a href="#">IIMD 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessPersonnelRecord())
                        <a href=""><i class="fa fa-file-o"></i> <span class="nav-label">&nbsp;&nbsp;PRMD Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">PRMD 1</a>
                            </li>
                            <li>
                                <a href="#">PRMD 2</a>
                            </li>
                            <li>
                                <a href="#">PRMD 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessReligiousAffair())
                        <a href=""><i class="fa fa-file-o"></i> <span class="nav-label">&nbsp;&nbsp;RAO Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">RAO 1</a>
                            </li>
                            <li>
                                <a href="#">RAO 2</a>
                            </li>
                            <li>
                                <a href="#">RAO 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessAcademyHealth())
                        <a href=""><i class="fa fa-file-o"></i> <span class="nav-label">&nbsp;&nbsp;AHS Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">AHS 1</a>
                            </li>
                            <li>
                                <a href="#">AHS 2</a>
                            </li>
                            <li>
                                <a href="#">AHS 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessLogisticResource())
                        <a href=""><i class="fa fa-file-o"></i> <span class="nav-label">&nbsp;&nbsp;LRMD Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">LRMD 1</a>
                            </li>
                            <li>
                                <a href="#">LRMD 2</a>
                            </li>
                            <li>
                                <a href="#">LRMD 3</a>
                            </li>
                        </ul>
                    @endif
                    @if(Auth::user()->hasAccessInformationCommunication())
                        <a href=""><i class="fa fa-file-o"></i> <span class="nav-label">&nbsp;&nbsp;ICTMD Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">ICTMD 1</a>
                            </li>
                            <li>
                                <a href="#">ICTMD 2</a>
                            </li>
                            <li>
                                <a href="#">ICTMD 3</a>
                            </li>
                        </ul>
                    @endif
                @endif
            </li>
            <li>
                {{-- <a href="{{route('showCadetTabs')}}"><i class="fa fa-street-view"></i>Cadet</a> --}}
            </li>
            <li>
                {{-- <a href="{{route('showCadetTabs')}}"><i class="fa fa-street-view"></i>ACAD-G</span><span class="fa arrow"></span></a> --}}
                <ul class="nav nav-second-level collapse">
                    {{-- <li><a href="{{route('showAttendanceReport')}}">Notifications</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Info</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Inq</a></li>
                    <li><a href="#">Curriculum Mgnt</a></li>
                    <li><a href="#">Subject Mgnt</a></li>
                    <li><a href="#">Section Mgnt</a></li>
                    <li><a href="#">Intructors Mgnt</a></li>
                    <li><a href="#">Grade Mngt</a></li>
                    <li><a href="#">Attendance Mngt</a></li>
                    <li><a href="#">Excuse Mngt</a></li>
                    <li><a href="#">Offense Mngt</a></li> --}}
                </ul>
            </li>
            <li>
                {{-- <a href="{{route('showCadetTabs')}}"><i class="fa fa-street-view"></i>TAC-G</span><span class="fa arrow"></span></a> --}}
                <ul class="nav nav-second-level collapse">
                    {{-- <li><a href="{{route('showAttendanceReport')}}">Notifications</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Info</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Inq</a></li>
                    <li><a href="#">Company Mgnt</a></li>
                    <li><a href="#">Intructors Mgnt</a></li>
                    <li><a href="#">Grade Mngt</a></li>
                    <li><a href="#">Attendance Mngt</a></li>
                    <li><a href="#">Excuse Mngt</a></li>
                    <li><a href="#">Offense Mngt</a></li>
                    <li><a href="#">Logistics Mngt</a></li> --}}
                </ul>
            </li>
            <li>
                {{-- <a href=""><i class="fa fa-slideshare"></i> <span class="nav-label">Registrar</span><span class="fa arrow"></span></a> --}}
                <ul class="nav nav-second-level collapse">
                    {{-- <li><a href="{{route('showAttendanceReport')}}">Notifications</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Info</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Inq</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">Print Mngt</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">References</a></li> --}}
                </ul>
            </li>
            <li>
                {{-- <a href=""><i class="fa fa-users"></i> <span class="nav-label">PMD</span><span class="fa arrow"></span></a> --}}
                <ul class="nav nav-second-level collapse">
                    {{-- <li><a href="{{route('showAttendanceReport')}}">Notifications</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Info</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Inq</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">Issued Orders/Memo</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">Print Mngt</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">References</a></li> --}}
                </ul>
            </li>
            <li>
                {{-- <a href=""><i class="fa fa-users"></i> <span class="nav-label">A HS</span><span class="fa arrow"></span></a> --}}
                <ul class="nav nav-second-level collapse">
                    {{-- <li><a href="{{route('showAttendanceReport')}}">Notifications</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Info</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Inq</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Medical Mngt</a></li>
                    <li><a href="#">Excuse Mngt</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">Issued Orders/Memo</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">Print Mngt</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">References</a></li> --}}
                </ul>
            </li>
            <li>
                {{-- <a href=""><i class="fa fa-pencil-square-o"></i> <span class="nav-label">IIS</span><span class="fa arrow"></span></a> --}}
                <ul class="nav nav-second-level collapse">
                    {{-- <li><a href="{{route('showAttendanceReport')}}">Notifications</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Info</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Inq</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Offense Inq</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">Issued Orders/Memo</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">Print Mngt</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">References</a></li> --}}
                </ul>
            </li>
            <li>
                {{-- <a href=""><i class="fa fa-pencil-square-o"></i> <span class="nav-label">Logistics</span><span class="fa arrow"></span></a> --}}
                <ul class="nav nav-second-level collapse">
                    {{-- <li><a href="{{route('showAttendanceReport')}}">Notifications</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Info</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Inq</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">SAO Inquiry</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">Issued Orders/Memo</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">Print Mngt</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">References</a></li> --}}
                </ul>
            </li>
            <li>
                {{-- <a href=""><i class="fa fa-university"></i> <span class="nav-label">RAO</span><span class="fa arrow"></span></a> --}}
                <ul class="nav nav-second-level collapse">
                    {{-- <li><a href="{{route('showAttendanceReport')}}">Notifications</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Info</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Cadet Inq</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Excuse Mngt</a></li>
                    <li><a href="{{route('showUploadAbsent')}}">Excuse Inq</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">Issued Orders/Memo</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">Print Mngt</a></li>
                    <li><a href="{{route('showAttendanceReport')}}">References</a></li> --}}
                </ul>
            </li>
            {{-- <li>
                <a href="#"><i class="fa fa-line-chart"></i> <span class="nav-label">Reports</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="#">Cadets</a>
                        <ul class="nav nav-third-level">
                            <li><a href="#">Cadet Info </a></li>
                            <li><a href="#">Cadet Course </a></li>
                            <li><a href="#">Cadet Raw Scores </a></li>
                            <li><a href="#">Cadet GPAs </a></li>
                            <li><a href="#">Cadet Absences </a></li>
                            <li><a href="#">Cadet Class </a></li>
                            <li><a href="#">Cadet Company </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">PGPA</a>
                        <ul class="nav nav-third-level">
                            <li><a href="#">Weekly </a></li>
                            <li><a href="#">Term </a></li>
                            <li><a href="#">Academic Year </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">MGPA</a>
                        <ul class="nav nav-third-level">
                            <li><a href="#">Weekly </a></li>
                            <li><a href="#">Term </a></li>
                            <li><a href="#">Academic Year </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">FGPA</a>
                        <ul class="nav nav-third-level">
                            <li><a href="#">Weekly </a></li>
                            <li><a href="#">Term </a></li>
                            <li><a href="#">Academic Year </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">OGPA</a>
                        <ul class="nav nav-third-level">
                            <li><a href="#">Weekly </a></li>
                            <li><a href="#">Term </a></li>
                            <li><a href="#">Academic Year </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Course</a>
                        <ul class="nav nav-third-level">
                            <li><a href="#">Cadet List </a></li>
                            <li><a href="#">Professor List </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Sections</a>
                        <ul class="nav nav-third-level">
                            <li><a href="#">Cadet List </a></li>
                            <li><a href="#">Professor List </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Absences</a>
                        <ul class="nav nav-third-level">
                            <li><a href="#">Academic Attendance</a></li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
            @if(Auth::user()->hasAccessSystemMaintenance())
                <li>
                    <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">System Maintenance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">References <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a href="#">Academic Year </a></li>
                                <li><a href="#">Academic Class </a></li>
                                {{-- <li><a href="{{route('showAbsentReason')}}">Absent Reasons </a></li>
                                <li><a href="{{route('showBureau')}}">Bureaus </a></li>
                                <li><a href="{{route('showCadetClass')}}">Cadet Classes </a></li>
                                <li><a href="{{route('showCadetCompany')}}">Cadet Companies </a></li>
                                <li><a href="{{route('showCoverage')}}">Test Coverages </a></li>
                                <li><a href="{{route('showDepartment')}}">Departments </a></li>
                                <li><a href="{{route('showExamination')}}">Examinations </a></li>
                                <li><a href="{{route('showGradePointAverage')}}">Grade Point Averages </a></li>
                                <li><a href="{{route('showTerm')}}">Terms </a></li> --}}
                                <li><a href="#">Courses</a></li>
                            </ul>
                        </li>
                        @if(Auth::user()->hasAccessUserManagement())
                            {{-- <li><a href="{{route('showUserManagement')}}">User Management</a></li> --}}
                        @endif
                        @if(Auth::user()->hasAccessTickets())
                            <li><a href="{{route('showTickets')}}">Tickets Management</a></li>
                        @endif
                        @if(Auth::user()->hasAccessAuditTrail())
                            <li>
                                <a href="#">Audit Trail <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    {{-- <li><a href="{{route('showLoginHistory')}}">Login History</a></li> --}}
                                    {{-- <li><a href="{{route('showEmailLogs')}}">Email Logs</a></li> --}}
                                    {{-- <li><a href="{{route('showUserLogs')}}">User Logs</a></li> --}}
                                </ul>
                            </li>
                            {{-- <li><a href="{{route('showDiskSpace')}}">Disk Space</a></li> --}}
                        @endif
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>
