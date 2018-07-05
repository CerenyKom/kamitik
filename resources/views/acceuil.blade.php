@extends('layouts.app')

@section('content')
   
<div class="jumbotron">
    <div class="container">
     <div class="row">
         <div class="col-md-6">
             <h1>Capture <span class="em-text">Life</span> </h1>
             <p>A fun and easy may way to capture & share the moments you live for</p>
         </div>
         <div class="col-md-6">
             
         </div>
     </div>

    </div>
</div>

<section id="middle">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="img/img1.jpg" class="demo">
                <h1>Lorem ipsum</h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut esse facere odit placeat quia recusandae reprehenderit. Eos expedita harum in iste iure nisi possimus quas quia, sequi voluptas voluptatibus! </p>
                <a href="#" class="btn btn-default">Read more</a>
            </div>
            <div class="col-md-4">
                <img src="img/img2.jpg" class="demo">
                <h1>Lorem ipsum</h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut esse facere odit placeat quia recusandae reprehenderit. Eos expedita harum in iste iure nisi possimus quas quia, sequi voluptas voluptatibus! </p>
                <a href="#" class="btn btn-default">Read more</a>
            </div>
            <div class="col-md-4">
                <img src="img/img4.jpg" class="demo">
                <h1>Lorem ipsum</h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut esse facere odit placeat quia recusandae reprehenderit. Eos expedita harum in iste iure nisi possimus quas quia, sequi voluptas voluptatibus! </p>
                <a href="#" class="btn btn-default">Read more</a>
            </div>
        </div>
    </div>

</section>

<section id="feature">
  <div class="row">
      <div class="col-md-7">
          <h1>Activite {{config('app.name')}}</h1>
          <ul>
              <li> <span class="glyphicon glyphicon-ok"></span> Donec pulvinar</li>
              <li> <span class="glyphicon glyphicon-ok"></span> Sit amet euismod mauris rutr</li>
              <li> <span class="glyphicon glyphicon-ok"></span> Pulvinar ante</li>
              <li> <span class="glyphicon glyphicon-ok"></span> Euismod mauris rutrum</li>
          </ul>
      </div>
      <div class="col-md-3">
          
      </div>
  </div>
</section>

@endsection