@extends('layouts.app')

@section('content')

<section id="title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{pagetitle('A propos de ')}}</h1>
            </div>
        </div>
    </div>
</section>

<section id="about">
  <div class="container">
      <div class="row">
          <div class="col-md-8">
              <h1>Lorem Ipsum</h1>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad beatae error id maxime minima nihil non optio reprehenderit similique sint? Aliquam cupiditate doloribus ipsa iste quas sapiente tenetur, voluptas voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi beatae consequatur cupiditate debitis deserunt doloribus eum eveniet expedita incidunt inventore, laboriosam molestiae nisi non nulla quis repellendus reprehenderit sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aliquid, animi architecto cupiditate dolorem ducimus earum expedita facilis harum iusto laboriosam libero magni molestias non placeat, quod ratione repellendus voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores, atque autem delectus dignissimos earum eos esse iste modi molestias nostrum officia, possimus quas ratione, repellendus reprehenderit soluta totam voluptatum. </p>
              <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
                          </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                          <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
                          </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                          <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
                          </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                          <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <img src="img/img2.jpg" class="demo">
              <h1>Lorem Ipsum</h1>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad beatae error id maxime minima nihil non optio reprehenderit similique sint? Aliquam cupiditate doloribus ipsa iste quas sapiente tenetur, voluptas voluptate. </p>
              <a href="#" class="btn btn-default">Reaf more</a>
          </div>
      </div>
  </div>
</section>


@endsection