<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand em-text" href="{{route('acceuil')}}"> <i class="fa fa-tag"></i>  {{config('app.name')}}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav  navbar-right">
                <li class="{{setactive('acceuil')}}"><a href="{{route('acceuil')}}">Acceuil</a></li>
                <li class="{{setactive('galerie')}}"><a href="{{route('galerie')}}">Galerie</a></li>
                <li class="{{setactive('forum')}}"><a href="{{route('forum')}}">Bog</a></li>
                <li class="{{setactive('about')}}"><a href="{{route('about')}}">A propos</a></li>
                <li class="{{setactive('contact')}}"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>