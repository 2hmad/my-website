<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="{{ asset('images/favicon.png') }}" rel="icon"/>
    <title>Ahmed M. Ibrahim</title>
    <meta name="description" content="">
    @include('layout.links')
</head>

<body>

<!-- Preloader -->
<div class="preloader preloader-dark">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<div class="bg-dark-1" style="padding-bottom: 5%;">
    <a href="/" style="font-size: 34px;margin-left: 1%;margin-top: 1%;display: inline-block;">
        <i class="fas fa-arrow-circle-left"></i>
    </a>
    <div class="container px-lg-5" style="min-height: 100vh;text-align: center;">
        <div style="padding-top: 4%;">
            <h3 class="text-9 text-white font-weight-600  w-100 align-self-center line-height-4 mb-0"
                style="margin-bottom: 5% !important;">
                Portfolio
                <span
                    class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span>
            </h3>
            <div class="projects">
                @foreach($projects as $project)
                    <div class="work">
                        <a href="work/{{ $project->id }}">
                            <img src="{{ asset('images/projects/' . $project->pic_one) }}"
                                 alt="{{ $project->title }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@include('layout.scripts')
</body>
</html>
