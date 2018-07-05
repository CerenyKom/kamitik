@extends('layouts.app')

@section('content')
<section id="title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{pagetitle('Blog ')}}</h1>
            </div>
        </div>
    </div>
</section>
<div class="container container-main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/img0.jpg">
                <div class="carousel-caption">
                    <h4><a href="post.html"> Slide Story One </a></h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem dicta dolores dolorum eius est, excepturi impedit maxime, nihil nobis omnis optio placeat quos saepe similique sunt tenetur vero.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem dicta dolores dolorum eius est, excepturi impedit maxime, nihil nobis omnis optio placeat quos saepe similique sunt tenetur vero.
                    </p>
                </div>
            </div>

            <div class="item">
                <img src="img/img5.png">
                <div class="carousel-caption">
                    <h4><a href="post.html"> Slide Story One </a></h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem dicta dolores dolorum eius est, excepturi impedit maxime, nihil nobis omnis optio placeat quos saepe similique sunt tenetur vero.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem dicta dolores dolorum eius est, excepturi impedit maxime, nihil nobis omnis optio placeat quos saepe similique sunt tenetur vero.
                    </p>
                </div>
            </div>

            <div class="item">
                <img src="img/img6.jpg">
                <div class="carousel-caption">
                    <h4><a href="post.html"> Slide Story One </a></h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem dicta dolores dolorum eius est, excepturi impedit maxime, nihil nobis omnis optio placeat quos saepe similique sunt tenetur vero.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem dicta dolores dolorum eius est, excepturi impedit maxime, nihil nobis omnis optio placeat quos saepe similique sunt tenetur vero.
                    </p>
                </div>
            </div>

            <div class="item">
                <img src="img/img8.jpg">
                <div class="carousel-caption">
                    <h4><a href="post.html"> Slide Story One </a></h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem dicta dolores dolorum eius est, excepturi impedit maxime, nihil nobis omnis optio placeat quos saepe similique sunt tenetur vero.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem dicta dolores dolorum eius est, excepturi impedit maxime, nihil nobis omnis optio placeat quos saepe similique sunt tenetur vero.
                    </p>
                </div>
            </div>

            <div class="item">
                <img src="img/img9.jpg">
                <div class="carousel-caption">
                    <h4><a href="post.html"> Slide Story One </a></h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem dicta dolores dolorum eius est, excepturi impedit maxime, nihil nobis omnis optio placeat quos saepe similique sunt tenetur vero.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem dicta dolores dolorum eius est, excepturi impedit maxime, nihil nobis omnis optio placeat quos saepe similique sunt tenetur vero.
                    </p>
                </div>
            </div>
        </div>
       

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


<div class="row contenue">
   <div class="col-md-8">
       <div class="well blog-post">
           <h3><a href="post.html"> Blog Post One </a> </h3>
           <p class="post-info"> <i class="fa fa-clock-o"></i> Posted by Brad Traversy on August
              21, 2014 at 10:00 Pm
           </p>
           <hr>
           <img src="img/img10.jpg" class="img-responsive">
           <hr>
           <p>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad architecto aspernatur corporis cupiditate eligendi eveniet molestias nesciunt, nihil nulla obcaecati pariatur perferendis possimus quae quis, quod quos rem ullam!
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad architecto aspernatur corporis cupiditate eligendi eveniet molestias nesciunt, nihil nulla obcaecati pariatur perferendis possimus quae quis, quod quos rem ullam!
           </p>
           <a href="post.html" class="btn btn-primary"> Read More <span class="fa fa-chevron-circle-right"></span> </a>
       </div>
       <div class="well blog-post">
           <h3><a href="post.html"> Blog Post One </a> </h3>
           <p class="post-info"> <i class="fa fa-clock-o"></i> Posted by Brad Traversy on August
              21, 2014 at 10:00 Pm
           </p>
           <hr>
           <img src="img/img13.jpg" class="img-responsive">
           <hr>
           <p>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad architecto aspernatur corporis cupiditate eligendi eveniet molestias nesciunt, nihil nulla obcaecati pariatur perferendis possimus quae quis, quod quos rem ullam!
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad architecto aspernatur corporis cupiditate eligendi eveniet molestias nesciunt, nihil nulla obcaecati pariatur perferendis possimus quae quis, quod quos rem ullam!
           </p>
           <a href="post.html" class="btn btn-primary"> Read More <span class="fa fa-chevron-circle-right"></span> </a>
       </div>
       <div class="well blog-post">
           <h3><a href="post.html"> Blog Post One </a> </h3>
           <p class="post-info"> <i class="fa fa-clock-o"></i> Posted by Brad Traversy on August
              21, 2014 at 10:00 Pm
           </p>
           <hr>
           <img src="img/img12.jpg" class="img-responsive">
           <hr>
           <p>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad architecto aspernatur corporis cupiditate eligendi eveniet molestias nesciunt, nihil nulla obcaecati pariatur perferendis possimus quae quis, quod quos rem ullam!
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad architecto aspernatur corporis cupiditate eligendi eveniet molestias nesciunt, nihil nulla obcaecati pariatur perferendis possimus quae quis, quod quos rem ullam!
           </p>
           <a href="post.html" class="btn btn-primary"> Read More <span class="fa fa-chevron-circle-right"></span> </a>
       </div>
   </div>
    <div class="col-md-4">
        <div class="well">
            <h4>Blog Search</h4>
            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-primary">Search <span class="fa fa-search"></span> </button>
                </span>
            </div>
        </div>
        <div class="well">
            <h4>Categories</h4>
            <div class="row">

            </div>
        </div>
    </div>
</div>
</div>
<style>

.container-main{

    background: #f4f4f4;
    overflow: auto;
    border-radius:10px;
}

.navbar{
    margin-bottom: 20px;
    border-radius: 0;
    border:0;
    background: #f4f4f4;
}

/* carousel*/

#myCarousel{
    margin-bottom: 20px;
}

#myCarousel .carousel-caption{
    left: 0;
    right:0;
    bottom:0;
    text-align: left;
    padding: 10px;
    background: rgba(0,0,0,0.6);
    text-shadow:none;
}

#myCarousel .carousel-caption h4{
    color: #fff;
}

#myCarousel .carousel-caption p{
    margin:0;
    padding:0;
}

#myCarousel .list-group{
    position: absolute;
    top:0;
    right: 0;
}


#myCarousel .list-group-item{
    border-radius: 0;
    cursor: pointer;
}

#myCarousel .list-group .active{
    background: #eee;
    border:0;
    color: #666;
}

#myCarousel .list-group h4{
    font-size:17px;
    padding:0 !important;
    margin:0 !important;
    padding-top:5px;
}

#myCarousel .img-slider{
    width: 80px;
    height:100%;
    float: left;
    margin-right: 5px;
}

@media (min-width: 992px) {
    #myCarousel{
        padding-right:33.333%;
    }

    #myCarousel .carousel-control{
        display: none;
    }
}

@media (max-width: 991px) {
  .carousel-caption p, #myCarousel .list-group{
      display: none;
  }
}

.contenue{
    background-color: #f5f5f5;
}
</style>
@endsection