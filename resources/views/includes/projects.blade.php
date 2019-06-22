<section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">
            پروژه‌ها
            </h2>
            <h3 class="section-subheading text-muted">
            شرکت سورن صنعت نوتاش
            </h3>
          </div>
        </div>
        <div class="row projectanime">
            @foreach($projects as $project)
              <div class="col-md-4 col-sm-6 portfolio-item">
                <a class=" " data-toggle="modal" href="#portfolioModal{{$project->id}}">
                    <div class="container1">
                    <img class="img-fluid   keep-aspect" src="/photo/projects/{{$project->photo}}" alt="">
                  <div class="overlay">
                      
                     
                    <div class="text">
                      <i class="fa fa-plus fa-3x"></i>
                    </div>
                  </div>
                  </div>
                  
                  
                </a>
                <div class="portfolio-caption" style="height:110px;overflow: hidden;">
                  <!--<h4>-->
                  <!--عنوان پروژه-->
                  <!--</h4>-->
                  <p class="text-muted" style="direction:rtl" style="">
                  {{$project->title}}
                  </p>
                </div>
              </div>
          @endforeach
        </div>
      </div>
    </section>