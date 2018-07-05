@extends('layouts.app')

@section('content')

<section id="title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{pagetitle('Contactez ')}}</h1>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <h2>Nous contacter</h2>
                
                <form action="{{route('contact')}}" method="POST">
                    {{csrf_field()}}

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <input type="text" id="name" name="name" placeholder="Votre nom " class="form-control" required>
                        {!!$errors->first('name' , '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <input type="text" id="mail" name="email" placeholder="Votre email " class="form-control" required>
                        {!!$errors->first('email' , '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group {{$errors->has('msg') ? 'has-error' : ''}}">
                        <textarea name="msg" id="msg" cols="30" rows="10" class="form-control" placeholder="Votre message" required></textarea>
                        {!!$errors->first('msg' , '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group">
                        <input class="form-control btn btn-default" type="submit" value="Envoyer" >
                    </div>
                </form>

            </div>
            <div class="col-md-4">
                <img src="img/img2.jpg" class="demo">
                <h1>Lorem Ipsum</h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad beatae error id maxime minima nihil non optio reprehenderit similique sint? Aliquam cupiditate doloribus ipsa iste quas sapiente tenetur, voluptas voluptate. </p>
                <a href="#" class="btn btn-default">Lire plus</a>
            </div>
        </div>
    </div>
</section>


@endsection
