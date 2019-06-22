@extends('layout.main')

@section('content')

  @include('includes.top-nav')

    <!-- Services -->
  @include('includes.about-us')

    <!-- Portfolio Grid -->
  @include('includes.projects')

    <!-- About -->
  @include('includes.gallery')

    <!-- Team -->
  @include('includes.certificate') 

    <!-- Clients -->
    <!--<section class="py-5">-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <div class="col-md-3 col-sm-6">-->
    <!--        <a href="#">-->
    <!--          <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">-->
    <!--        </a>-->
    <!--      </div>-->
    <!--      <div class="col-md-3 col-sm-6">-->
    <!--        <a href="#">-->
    <!--          <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">-->
    <!--        </a>-->
    <!--      </div>-->
    <!--      <div class="col-md-3 col-sm-6">-->
    <!--        <a href="#">-->
    <!--          <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">-->
    <!--        </a>-->
    <!--      </div>-->
    <!--      <div class="col-md-3 col-sm-6">-->
    <!--        <a href="#">-->
    <!--          <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">-->
    <!--        </a>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

    <!-- Contact -->
  @include('includes.contact')
  
  @include('includes.address')
    <!-- Footer -->
    <!--<footer>-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <div class="col-md-4">-->
    <!--        <span class="copyright">Copyright &copy; Your Website 2017</span>-->
    <!--      </div>-->
    <!--      <div class="col-md-4">-->
    <!--        <ul class="list-inline social-buttons">-->
    <!--          <li class="list-inline-item">-->
    <!--            <a href="#">-->
    <!--              <i class="fa fa-twitter"></i>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--          <li class="list-inline-item">-->
    <!--            <a href="#">-->
    <!--              <i class="fa fa-facebook"></i>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--          <li class="list-inline-item">-->
    <!--            <a href="#">-->
    <!--              <i class="fa fa-linkedin"></i>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--        </ul>-->
    <!--      </div>-->
    <!--      <div class="col-md-4">-->
    <!--        <ul class="list-inline quicklinks">-->
    <!--          <li class="list-inline-item">-->
    <!--            <a href="#">Privacy Policy</a>-->
    <!--          </li>-->
    <!--          <li class="list-inline-item">-->
    <!--            <a href="#">Terms of Use</a>-->
    <!--          </li>-->
    <!--        </ul>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</footer>-->
<footer style="direction:rtl;background-color:#212529;color:#FEC810">
			<div class="container" >
				<div class="col-md-12 text-center">
					<span>
						© 
						تمامی حقوق این وبسایت متعلق به شرکت سورن صنعت نوتاش می باشد
						</span>
				</div>
				<!--<div class="col-md-2 right-side col-xs-12">-->
				<!--	<span id="to-top">-->
				<!--	<i class="fa fa-arrow-up"></i>-->
				<!--	</span>-->
				<!--</div>-->
			</div>
		</footer>
    <!-- Portfolio Modals -->
  
    <!-- Modal 1 -->
    @foreach($projects as $project)
    <div class="portfolio-modal modal fade" id="portfolioModal{{$project->id}}" tabindex="-1" role="dialog" aria-hidden="true" >
      <div class="modal-dialog" style="direction:rtl">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">{{$project->title}}</h2>
                  <p class="item-intro text-muted">
                  شرکت سورن صنعت نوتاش
                  </p>
                  <img class="img-fluid d-block mx-auto" src="/photo/projects/{{$project->photo}}" alt="">
                  <p>
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                  </p>
                  <ul class="list-inline">
                    <li>
                    23 آبان 95
                    </li>
                    <li>
                      سفارش دهنده:
                      </li>
                    <!--<li>Category: Illustration</li>-->
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    بستن پروژه
                    </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
    <!-- Modal 2 -->
    

@include('includes.fixed-message')

@endsection