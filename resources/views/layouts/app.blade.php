<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}} - @yield('title')</title>
    <!--Bootstrap CSS CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            @php $locale = session()->get('locale')
            @endphp
            <a class="navbar-brand" href="#">Hello {{Auth::user() ? Auth::user()->name : 'Guest'}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @guest
                        <a class="nav-link" href="{{route('user.create')}}">Registration</a>
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    @else
                        <!-- <a class="nav-link" href="#">User List</a> -->
                    
                        <a class="nav-link" href="{{route('etudiant.index')}}">Liste des étudiants</a>
                        <a class="nav-link" href="{{route('etudiant.index')}}">Forum</a>
                        <a class="nav-link" href="{{route('etudiant.index')}}">Documents</a>
                        <a class="nav-link" href="{{route('logout')}}">Logout</a>
                    @endguest

                    <a class="nav-link @if($locale=='en') bg-secondary @endif"  href="{{route('lang', 'en')}}" >English</a>
                    <a class="nav-link @if($locale=='fr') bg-secondary @endif"  href="{{route('lang', 'fr')}}" >Francais</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-4">
                <div class="d-flex justify-content-center">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 500" style="enable-background:new 0 0 1366 500;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <g>
                            <g>
                                <path class="st0" d="M119.2,126.8c-35.9,0.8-69.5,22.3-86.9,53.5c-4.2,7.5-7.6,15.8-9.6,24.2c-2.2,9.1-4.3,20.3-1.2,29.4
                                c4,12.2,16.7,17.7,28.8,15.3c10.8-2.1,19.6-10.4,28.2-16.7c21.5-16,43.1-31.9,64.6-47.9c-5.8-2.4-11.7-4.7-17.5-7.1
                                c3.5,9,2.3,18.4,1.8,28c-0.5,11.1,0.4,21.7,5.5,31.7c2.9,5.7,11,7.4,16.3,4.3c5.8-3.4,7.2-10.6,4.3-16.3c-3.8-7.3-2.4-16.4-2-24.5
                                c0.6-9.9,0.7-20.2-3-29.5c-2.5-6.4-10.7-12.2-17.5-7.1c-15.9,11.8-31.9,23.7-47.8,35.5c-8.2,6.1-16.5,12.2-24.7,18.3
                                c-3.3,2.4-6.6,5.3-10.4,7.1c-0.5,0.2-3,1.2-2.4,1.1c-1,0.2-2.1-0.1-2.1,0c0.2,0.4,0.3-4.2,0.4-5.3c0.3-3.5,0.6-5.4,1.5-9.3
                                c1.6-6.8,3.7-12.2,6.7-17.9c6.2-11.6,15.3-21.9,25.9-29.2c12.6-8.6,26.4-13.5,41.1-13.8C134.5,150.2,134.6,126.4,119.2,126.8
                                L119.2,126.8z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M185.7,154.8c0,20.9,0,41.8,0,62.7c0,8.8-1.4,19,1.8,27.4c4.1,10.7,15.4,15.3,25.9,10.7
                                c8.9-3.9,16.1-12.5,23.1-19c7.8-7.2,15.6-14.4,23.5-21.6c15.6-14.4,31.3-28.9,46.9-43.3c-6.6-3.9-13.3-7.7-19.9-11.6
                                c-6,26.2-5.7,53-5,79.6c0.4,15.3,24.2,15.4,23.8,0c-0.6-24.5-1.4-49.3,4.1-73.3c2.7-11.7-11-19.7-19.9-11.6
                                c-26.6,24.6-53.3,49.1-79.9,73.7c-0.9,0.8-5.9,4.6-5.9,5.2c1.6-0.1,3,0.4,4.4,1.4c1.2,2.5,1.6,3.1,1.2,1.7
                                c-0.2-0.6-0.3-1.2-0.4-1.8c0.2,1.1,0.2,0.8,0.1-0.6c-0.3-8.6,0-17.2,0-25.7c0-18,0-35.9,0-53.9
                                C209.5,139.4,185.7,139.4,185.7,154.8L185.7,154.8z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M377.4,170.5c-18-5.2-34.1,6.2-46.5,17.9c-12,11.3-21.1,26.9-14,43.4c7.2,16.8,27.9,20.1,40.7,7.4
                                c5.9-5.9,9.2-13.6,10.2-21.8c1.1-8.6-0.9-17.3,0.3-25.8c0.9-6.4-1.6-12.8-8.3-14.6c-5.6-1.5-13.7,1.9-14.6,8.3
                                c-0.9,6.3-1,12.3-0.8,18.7c0.2,4.8,0.8,10.1-1,14.6c-0.9,2.3-3,4.8-4.7,5c2.2-0.2-1.1-0.8,0.8,0c-0.3-0.1-0.7-0.9-0.8-1.3
                                c-0.8-1.9-0.7-1.5-0.5-3.8c-0.1,1.6,0.2-0.9,0.4-1.4c0.5-1.5-0.1-0.1,0.9-2.2c2.1-4,5.5-7.2,8.8-10.2c5.8-5.4,14.3-13.7,22.8-11.2
                                C385.8,197.7,392.1,174.7,377.4,170.5L377.4,170.5z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M402.8,169.3c2.4,3.5,4.2,7,5.2,11.1c1.1,4.3,0.5,8.7,1.4,13c2.5,11.6,15.3,16.8,25.7,11.5
                                c8.9-4.6,10.9-14,14.9-22.3c3.7-7.5,8.2-14.5,13.8-20.6c1.2-1.3,8.2-7.1,8.1-7.9c0-0.2-5.7,0.2-5.6-1.7c0,1.2,1.2,2.3,1.4,3
                                c2.2,7.5,2.7,14.3,3.6,21.8c2.1,17.1,5,33.8,17.1,47c4.4,4.7,12.4,4.4,16.8,0c4.7-4.7,4.4-12.1,0-16.8c-4.4-4.8-6.4-10.4-8-17.3
                                c-1.7-7.5-2.2-14-3.2-21.8c-1.1-8.2-2-16.8-5.4-24.4c-4.1-9-13.1-15.6-23.4-12.7c-8.6,2.4-16,11.1-21.5,17.8
                                c-5.5,6.7-10.5,13.9-14.3,21.7c-1.8,3.7-4,7.8-5,11.9c-1.1,4.4-0.7,0,0.3,1.1c4.1-0.5,6.7,1.3,8,5.4c0-1,0-2.1-0.1-3.1
                                c-0.5-10.2-3.6-20-9.3-28.4c-3.6-5.3-10.5-7.7-16.3-4.3C401.7,156.1,399.1,164,402.8,169.3L402.8,169.3z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M552.6,154.8c-1,16.9-3.3,54.9,23.7,50.6c10.4-1.6,17.9-10.3,24.3-18c6.6-7.9,12.5-16.3,17.5-25.2
                                c-7.3-0.9-14.5-1.9-21.8-2.8c3.4,10.5-0.8,21.1-4.6,31c-4.6,12.2-9.2,24.4-13.3,36.7c-8.3,24.6-15.2,49.6-21,75
                                c-1.1,4.7,0.3,9.6,4.3,12.5c3.5,2.6,9.4,3.8,13.2,0.9c5-3.7,8.8-8.1,10-14.3c1.1-6.3-1.7-12.8-8.3-14.6c-5.8-1.6-13.5,2-14.6,8.3
                                c-0.4,2.4-0.5,1.2,1,0.1c5.8,4.5,11.7,9,17.5,13.4c6.1-26.6,13.5-52.8,22.2-78.6c4.3-12.5,9.2-24.8,13.7-37.3
                                c4.5-12.6,7.2-26.3,3-39.4c-3-9.4-16.6-12.1-21.8-2.8c-6.4,11.6-14.4,20.8-23.1,30.5c-0.4,0.5-1.5,0.4-1.4,1.1
                                c1.2,0.6,2.4,1.2,3.6,1.7c0.3,0.6,0.7,1.2,1,1.9c-0.2,0.1-1.1-6.9-1.1-7.9c-0.5-7.5-0.5-15.1-0.1-22.6c0.4-6.4-5.7-11.9-11.9-11.9
                                C557.8,142.9,553,148.3,552.6,154.8L552.6,154.8z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M677,181.6c-2-23.2,4-45.6,17.3-64.8c-7.3-0.9-14.5-1.9-21.8-2.8c4.3,21,5.9,42.3,5.1,63.7
                                c-0.2,5.3,3.9,10,8.7,11.5c15.4,4.8,23.9-10.7,26.7-23.2c2.9-13,7.4-25.6,13.6-37.4c1.6-3.1,3.4-6.2,5.2-9.1
                                c0.8-1.2,1.5-2.5,2.3-3.7c1.2-1.9,2.8-2.6-0.5-1.5c-0.8,0.3-6.3,0.8-5.7-0.5c0.1-0.1,0.9,1.5,1.1,2.1c0.4,1.1,1.3,5.5,1.9,7.9
                                c3.6,15.3,7.1,30.6,10.7,45.9c1.5,6.3,8.6,10,14.6,8.3c6.4-1.8,9.8-8.4,8.3-14.6c-3.8-16.3-7.6-32.5-11.4-48.8
                                c-1.6-6.7-4-13.5-9.2-18.3c-6.8-6.4-17.2-6.8-24.2-0.5c-5.3,4.8-9.1,12.3-12.5,18.5c-3.7,6.8-6.9,13.9-9.8,21.1
                                c-2.8,7.1-5.1,14.3-6.9,21.7c-0.7,2.9-1.1,6-2.2,8.8c0.6-1.6-1.1,1.9-1.1,1.9c-0.3-1.2,4.4-1.9,5.2-1.6c2.9,3.8,5.8,7.7,8.7,11.5
                                c0.9-23.5-1.2-47-5.9-70c-0.9-4.5-5.5-8-9.9-8.5c-5-0.6-9,1.6-11.9,5.7c-15.4,22.2-22.8,49.9-20.5,76.8
                                c0.5,6.4,5.1,11.9,11.9,11.9C671.2,193.5,677.6,188,677,181.6L677,181.6z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M822.4,103.4c-17-6-34.3,6-41.1,21.2c-3.7,8.2-5.6,17.1-7,26c-1.4,9.5-1.6,19.1,3.2,27.7
                                c4.3,7.7,12.5,13.7,21.6,13.9c8.9,0.2,16.7-4.6,22.1-11.5c10.9-13.8,15.4-33.6,16.6-50.8c0.6-9.7-3-21-13.3-24
                                c-10.8-3.1-22,4-22.3,15.5c-0.4,15.3,23.4,15.3,23.8,0c-0.2,6.2-5.5,9.1-9.8,6.7c-0.2-0.1-2.4-2.1-2.2-2.1c0,0-0.3,6.5-0.4,7.6
                                c-0.7,6.1-2.2,12.2-4.2,18.1c-1.6,5-3.5,10.7-7,14.8c-0.7,0.8-2.3,2-2.7,2.1c1.7-0.5-0.3,0.3-0.6-0.1c-0.3-0.3,1.2,0.5,1,0.4
                                c-0.5-0.4-1.8-1.9-1.8-1.9c0.4,0.6-0.9-1.9-0.5-0.9c-1.1-2.7-0.8-5.8-0.6-8.7c0.6-5.7,1.9-11.7,3.5-17.2c1.3-4.4,3-9,6.7-12
                                c3.1-2.5,5.3-2.9,8.6-1.7c6.1,2.1,13-2.4,14.6-8.3C832.5,111.5,828.5,105.6,822.4,103.4L822.4,103.4z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M893.8,111.7c-7.2,17-11.3,35.1-12.7,53.5c-0.7,9-0.6,18,0.2,26.9c1,10.1,3.1,22.4,15.5,23.7
                                c10.4,1,17.4-7.6,23.7-14.6c5.9-6.6,11.4-13.6,16.6-20.8c10.3-14.4,18.4-29.9,25.2-46.3c-7.7-2.1-15.3-4.2-23-6.3
                                c-7,28.5-9.2,58.1-5.8,87.3c0.7,6.4,4.9,11.9,11.9,11.9c5.9,0,12.6-5.5,11.9-11.9c-3.1-27.1-1.6-54.4,4.9-80.9
                                c1.5-6.2-2-12.9-8.3-14.6c-6.8-1.9-12.2,2.3-14.6,8.3c-5,12-11.3,23.5-18.5,34.3c-3.5,5.2-7.2,10.3-11.1,15.2
                                c-2.1,2.6-4.3,5.2-6.6,7.7c-2.3,2.6-5.5,5-7.5,7.9c-3.3,2.8,0.1,4.2,10.1,4c-0.2-1.3-0.3-1.7-0.3-1.2c0.1-1.1-0.3-3-0.5-4.4
                                c-0.3-3.6-0.5-7.2-0.6-10.8c-0.1-7.2,0.2-14.4,1-21.5c1.7-14.1,5.8-27.9,11.3-40.9c2.5-5.9-2.7-13.1-8.3-14.6
                                C901.5,101.5,896.3,105.8,893.8,111.7L893.8,111.7z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M1024.9,94.8c-25,1.5-43.4,27.9-35.2,52c3.8,11.3,12,20.9,22.5,26.5c5.5,2.9,11.1,4.6,17.2,5.5
                                c1.1,0.2,2.1,0.3,3.1,0.5c0.8,0.1,1.5,0.3,2.3,0.6c1.3,0.5,1,0.2-0.7-0.7c-0.1-0.2-0.3-0.4-0.4-0.6c-1.5-2.8,0-5.6,4.4-8.2
                                c-0.4-0.7,3.8,0.5-0.5-0.6c-14.9-3.8-21.2,19.1-6.3,23c7.4,1.9,15.4,1.8,21.1-4c5.8-5.9,5.8-15,1.9-21.8
                                c-6.9-12.2-21.8-9-31.5-14.6c-7.4-4.3-12.4-11.7-11.3-19.9c-0.2,1.8,0.7-2.2,0.6-2.1c0.4-1.4,0.2-0.8,0.5-1.6c1-2.2,2-3.7,3-4.9
                                c3-3.3,6.2-4.9,9.1-5c6.4-0.4,11.9-5.2,11.9-11.9C1036.8,100.5,1031.3,94.4,1024.9,94.8L1024.9,94.8z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M645.4,343.8c3.5,24,7,48,10.4,71.9c1.7,11.5,21.1,11.3,23,0c2.9-17.5,5.5-35.1,8.8-52.5
                                c0.3-1.4,0.6-2.8,1-4.2c-0.1,0.3-1.5,1.4-0.4,0.4c0.7-0.4,0.7-0.4-0.1,0c0.8-0.3,1.6-0.5,2.4-0.6c3.8-0.8-2,0.2,1.9-0.3
                                c8.3-1,14.6-2.1,21.3-7.4c5.1-4,4.2-12.7,0-16.8c-5-5-11.8-4-16.8,0c1.8-1.4,0-0.3-1.3,0c-1.4,0.2-1.7,0.3-0.6,0.2
                                c-0.6,0.1-1.3,0.1-1.9,0.2c-3.7,0.4-7.6,0.6-11.2,1.8c-8.5,2.7-14.2,9.1-16.5,17.7c-2.3,8.4-3,17.3-4.5,25.9
                                c-1.6,9.8-3.3,19.7-4.9,29.5c7.7,0,15.3,0,23,0c-3.5-24-7-48-10.4-71.9c-0.9-6.4-9-9.9-14.6-8.3
                                C646.9,331,644.5,337.4,645.4,343.8L645.4,343.8z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M780.9,400.5c8.1-7,15.3-14.9,21.8-23.4c6.2-8.1,12.3-16.9,13.2-27.3c1.1-12.2-7.5-22.5-19.7-23.7
                                c-9.4-0.9-19.1,3.6-25.1,10.8c-11.1,13.4-12.4,32.6-11.8,49.3c0.6,17.4,4.7,36.8,20.7,46.5c11.2,6.8,24.8,5.8,36.9,2.5
                                c11.2-3,26.5-8.8,25.3-23.2c-0.5-6.4-5.1-11.9-11.9-11.9c-6,0-12.5,5.5-11.9,11.9c-0.1-0.6,1.6-3.5,2.1-3.4c-0.1,0-3,1.6-2,1.2
                                c-3.6,1.5-7.7,2.4-11.5,3.3c-5.3,1.2-10.9,1.7-15.6-1.3c0,0-2.6-2.5-2.6-2.4c-0.7-1-1.3-2.1-1.9-3.1c-0.3-0.5-0.6-1.1-0.8-1.7
                                c0.5,1.1-0.1-0.3-0.2-0.7c-0.9-2.7-1.6-5.4-2.1-8.2c-0.3-1.6-0.3-1.6-0.3-2.1c-0.2-1.6-0.3-3.1-0.4-4.7c-0.3-5.5-0.3-11,0.1-16.4
                                c0.3-4.9,0.9-9.2,2.9-14.9c0.4-1.3,0.1-0.3,0-0.1c0.2-0.6,0.5-1.1,0.8-1.7c0.6-1.1,1.1-2.1,1.8-3.1c0.8-1.1,0.1-0.1-0.1,0.1
                                c0.4-0.4,0.8-0.9,1.2-1.3c1-0.9,0-0.2-0.2,0c0.6-0.5,1.3-0.9,2-1.3c1.6-0.9-0.2-0.1,1.8-0.6c1.4-0.4,1.3,0.9,0.1-0.4
                                c-0.5-0.5-0.9-1.4-1.4-1.8c-0.5-0.5,0.2,0.4,0,0.9c0.5-1.1-0.1,0.5-0.2,0.8c-1.5,5.3-6.2,11.3-10.1,16.1
                                c-5.4,6.7-11.4,12.7-17.8,18.4c-4.9,4.2-4.3,12.5,0,16.8C768.9,405.3,776,404.7,780.9,400.5L780.9,400.5z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M914.6,316.8c-15.9-5.8-33.6,5.5-46.7,13.8c-12.9,8.1-24.4,18.5-29.9,33c-11.9,31.5,16.9,70.7,48,77.1
                                c17.4,3.6,37.2-2.2,46.2-18.5c7.5-13.4-13.1-25.4-20.6-12c-1.2,2.2-2.7,3.8-4.2,4.8c-2.7,1.7-4.3,2.3-7.8,2.9
                                c1.7-0.3-2.4,0.2-2.3,0.2c-0.9,0-1.8,0-2.7,0c-1.5-0.2-1.8-0.2-0.9,0c-2.9-0.4-6-1.3-8.6-2.5c-12.2-5.6-22.2-18.2-25.3-31.2
                                c-2.9-12.2,4.2-21.3,13-28.2c5.3-4.2,11.3-7.6,17.2-10.8c5.3-2.9,12.2-7.7,18.3-5.5c6,2.2,13-2.5,14.6-8.3
                                C924.7,324.9,920.6,319,914.6,316.8L914.6,316.8z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M967.4,337.4c-3.2,13.3-5.1,27-5.7,40.7c-0.3,6.5-0.7,13.2,2.4,19.1c3.1,6.1,9.3,10.7,16.4,9.8
                                c3.7-0.5,7-2.5,9.3-5.5c2.6-3.5,2.4-6.7,2.2-10.8c-0.2-5,0.3-8.3,2-13.1c2.8-7.9,8.8-14.4,16.6-18.4c5.7-2.9,7.4-11,4.3-16.3
                                c-3.4-5.8-10.5-7.2-16.3-4.3c-19.9,10.2-32.7,33.3-30.2,55.7c1.2-2.8,2.3-5.6,3.5-8.4c-0.2,0.2-0.5,0.5-0.7,0.7
                                c1.8-1,3.5-2,5.3-3.1c0.5-0.1,1-0.1,1.5-0.2c2,0.5,4,1.1,6,1.6c0.1,0.1,2.1,2.3,1.3,2.6c0.2-0.1,0-5.4,0-5.7
                                c0.1-4.4,0.3-8.9,0.7-13.3c0.7-8.4,2.3-16.7,4.2-24.9C993.9,328.8,971,322.4,967.4,337.4L967.4,337.4z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M1035.7,340.4c-0.1,15.1-0.2,30.2-0.4,45.2c-0.1,7.4-0.5,15.1,3.4,21.7c3.8,6.5,11,9.9,18.3,9.9
                                c15.3,0.1,23.5-13.2,28-25.9c4.9-13.8,9.5-27.8,14.2-41.7c-7.7,0-15.3,0-23,0c2.4,16.9,2.7,34.1,1.4,51.1
                                c-0.5,6.4,5.8,11.9,11.9,11.9c6.8,0,11.4-5.5,11.9-11.9c1.5-19.2,0.5-38.3-2.3-57.4c-0.7-5.1-6.7-8.7-11.5-8.7
                                c-5.4,0-9.8,3.8-11.5,8.7c-3.6,10.7-7.3,21.3-10.9,32c-1.4,4.1-2.7,8.7-4.3,12.4c-0.7,1.6-1.6,3.4-2.5,4.5c-0.8,1-0.8,1-2.1,1.3
                                c0.1,0,1.3-0.2,1.3,0.1c-0.4-0.1-0.8-0.2-1.2-0.3c0.7,0.4,1.4,0.8,2.1,1.2c1.1,0.7,0.4,3.3,0.4,0.2c0-0.7,0-1.6,0-2.3
                                c0-5.5,0.1-11,0.1-16.5c0.1-11.8,0.2-23.6,0.3-35.4C1059.6,325.1,1035.8,325,1035.7,340.4L1035.7,340.4z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M1134.1,340.4c-1,23.8-2,47.7-3,71.5c-0.3,6.4,5.7,11.9,11.9,11.9c6.7,0,11.6-5.5,11.9-11.9
                                c1-23.8,2-47.7,3-71.5c0.3-6.4-5.7-11.9-11.9-11.9C1139.4,328.5,1134.4,333.9,1134.1,340.4L1134.1,340.4z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M1141.4,307.6c15.3,0,15.3-23.8,0-23.8C1126.1,283.8,1126.1,307.6,1141.4,307.6L1141.4,307.6z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M1249.1,222.9c-9.4,66.3-12.8,133.3-9.5,200.2c0.3,6.4,5.2,11.9,11.9,11.9c6.2,0,12.2-5.5,11.9-11.9
                                c-3.2-64.7-0.5-129.7,8.7-193.9c0.9-6.4-1.6-12.8-8.3-14.6C1258.2,213.1,1250,216.5,1249.1,222.9L1249.1,222.9z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st0" d="M1235.3,347.9c37.9,1.5,76-2.4,112.8-11.4c14.9-3.6,8.6-26.6-6.3-23c-34.9,8.6-70.6,12-106.5,10.6
                                c-6.4-0.3-11.9,5.7-11.9,11.9C1223.4,342.6,1228.9,347.6,1235.3,347.9L1235.3,347.9z" />
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg>
                </div>

                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
    <footer>
        <p class="m-5 text-center">&copy; 2023 Anonymous recruit. Tous droits réservés.</p>
    </footer>
</body>
<!--Bootstrap JS CDN-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>