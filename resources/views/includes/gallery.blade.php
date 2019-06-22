<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">
            گالری تصاویر
            </h2>
            <h3 class="section-subheading text-muted">
            شرکت سورن صنعت نوتاش
            </h3>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($galleries as $gallery)
                <div class="item">
                    <div class="container1">
                    <a href="/photo/projects/{{$gallery->photo}}" data-lightbox="image-1" data-title="{{$gallery->title}}">
                      <img class="keep-aspect" src="/photo/projects/{{$gallery->photo}}"></img>
                      
                     </a>
                     </div>
                     <a href="/photo/projects/{{$gallery->photo}}" data-lightbox="image-2" data-title="{{$gallery->title}}">
                        <div class="caption text-center" style="margin-top:20px;font-size:120% ">
                              <p>{{$gallery->title}}</p>
                        </div> 
                    </a>
                </div>
                
            @endforeach
        </div>
      </div>
    </section>