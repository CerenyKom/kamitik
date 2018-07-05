@extends('layouts.app')

@section('content')

<section id="title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{pagetitle('Galerie ')}}</h1>
            </div>
        </div>
    </div>
</section>

<section>

    <div class="container">
        <div class="row">
             <div class="col-md-6 col-md-offset-3">
                 <div id="carousel-example-generic" data-interval="2000" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                         <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                         <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                         <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner" role="listbox">
                         <div class="item active">
                             <img src="img/images8.jpg" alt="" class="img-thumbnail">
                         </div>
                         <div class="item">
                             <img src="img/images3.jpg" alt="" class="img-thumbnail">
                         </div>
                         <div class="item">
                             <img src="img/images8.jpg" alt="" class="img-thumbnail">
                         </div>
                         <div class="item">
                             <img src="img/images3.jpg" alt="" class="img-thumbnail">
                         </div>
                         <div class="item">
                             <img src="img/images8.jpg" alt="" class="img-thumbnail">
                         </div>
                     </div>

                     <!-- Controls -->
                     <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>

             </div>
        </div>
    </div>

</section>

<section>
    <div class="container">

        <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All Photos</a></li>
                <li role="presentation"><a href="#one" aria-controls="one" role="tab" data-toggle="tab">Category One</a></li>
                <li role="presentation"><a href="#two" aria-controls="two" role="tab" data-toggle="tab">Category two</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="all">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="img/images8.jpg" data-footer=" Lorem  Ipsum " data-title="Image one" data-lightbox="gallery"><img src="img/images8.jpg"  class="img-thumbnail"></a>
                            <div class="title"> Sample Image One</div>
                        </div>
                        <div class="col-md-4">
                            <a href="img/images8.jpg" data-footer=" Lorem  Ipsum " data-title="Image one" data-lightbox="gallery"><img src="img/images8.jpg"  class="img-thumbnail"></a>
                            <div class="title"> Sample Image One</div>
                        </div>
                        <div class="col-md-4">
                            <a href="img/images8.jpg" data-footer=" Lorem  Ipsum " data-title="Image one" data-lightbox="gallery"><img src="img/images8.jpg"  class="img-thumbnail"></a>
                            <div class="title"> Sample Image One</div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="one">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="img/images3.jpg" data-footer=" Lorem  Ipsum " data-title="Image one" data-lightbox="gallery"><img src="img/images3.jpg"  class="img-thumbnail"></a>
                            <div class="title"> Sample Image One</div>
                        </div>
                        <div class="col-md-4">
                            <a href="img/images3.jpg" data-footer=" Lorem  Ipsum " data-title="Image one" data-lightbox="gallery"><img src="img/images3.jpg"  class="img-thumbnail"></a>
                            <div class="title"> Sample Image One</div>
                        </div>
                        <div class="col-md-4">
                            <a href="img/images3.jpg" data-footer=" Lorem  Ipsum " data-title="Image one" data-lightbox="gallery"><img src="img/images3.jpg"  class="img-thumbnail"></a>
                            <div class="title"> Sample Image One</div>
                        </div>
                    </div>
                </div>


                    <div role="tabpanel" class="tab-pane" id="two">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="img/images4.jpg" data-footer=" Lorem  Ipsum " data-title="Image one" data-lightbox="gallery"><img src="img/images4.jpg"  class="img-thumbnail"></a>
                                <div class="title"> Sample Image One</div>
                            </div>
                            <div class="col-md-4">
                                <a href="img/images4.jpg" data-footer=" Lorem  Ipsum " data-title="Image one" data-lightbox="gallery"><img src="img/images4.jpg"  class="img-thumbnail"></a>
                                <div class="title"> Sample Image One</div>
                            </div>
                            <div class="col-md-4">
                                <a href="img/images4.jpg" data-footer=" Lorem  Ipsum " data-title="Image one" data-lightbox="gallery"><img src="img/images4.jpg"  class="img-thumbnail"></a>
                                <div class="title"> Sample Image One</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection