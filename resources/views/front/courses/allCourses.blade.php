@extends('front.layout')

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb_iner text-center">
                      <div class="breadcrumb_iner_item">
                          <h2>Our Courses</h2>
                          <p>HomePage<span>/</span>Courses</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- breadcrumb start-->

  <!--::review_part start::-->
  <section class="special_cource padding_top">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-5">
                  <div class="section_tittle text-center">
                      <p>popular courses</p>
                      <h2>Special Courses</h2>

                    <div class="form-group">
                        <div class="input-group my-5">
                            <input style="height: 49.8px" type="text" id="keyword" name="keyword" class="form-control " placeholder='Enter course name'
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter course name'">
                            <div class="input-group-append">
                                <button class="btn btn_1" style="margin-top: 0;" type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>

                  </div>
              </div>
          </div>
          <div id="allcourses" class="row">
            @foreach ($allcourses as $c)
            <div class="col-sm-6 col-lg-4">
              <div class="single_special_cource">
                  <img src="{{asset('uploads/courses/' . $c->img)}}" class="special_img" alt="">
                  <div class="special_cource_text">
                      <a href="{{route('front.cat' , $c->category->id)}}" class="btn_4">{{$c->category->name}}</a>
                      <h4>${{$c->price}}</h4>
                      <a href="{{route('front.show' , [$c->category->id , $c->id])}}"><h3>{{$c->name}}</h3></a>
                      <p>{{$c->small_desc}}</p>
                      <div class="author_info">
                          <div class="author_img">
                              <img src="{{asset('uploads/trainers/' . $c->trainer->img)}}" alt="">
                              <div class="author_info_text">
                                  <p>Conduct by:</p>
                                  <h5>{{$c->trainer->name}}</h5>
                              </div>
                          </div>
                          <div class="author_rating">
                              <div class="rating">
                                  <a href="#"><img src="{{asset('front/img')}}/icon/color_star.svg" alt=""></a>
                                  <a href="#"><img src="{{asset('front/img')}}/icon/color_star.svg" alt=""></a>
                                  <a href="#"><img src="{{asset('front/img')}}/icon/color_star.svg" alt=""></a>
                                  <a href="#"><img src="{{asset('front/img')}}/icon/color_star.svg" alt=""></a>
                                  <a href="#"><img src="{{asset('front/img')}}/icon/star.svg" alt=""></a>
                              </div>
                              <p>3.8 Ratings</p>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
            @endforeach



          </div>
      </div>
  </section>
  <!--::blog_part end::-->
@endsection

@section('scripts')

  <script>

    #('keyword').keyup(function(){

      let keyup = $(this).val()
      $('#allcourses').empty()

      $.ajax({
        type:"GET",
        url:"{{route('front.search')}}" + "?keyword" + keyword,
        contentType: false,
        processData: false,
        success: function (data)
        {
            $('#allcourses').empty()

            for (course of data)
            {
                $('#allcourses').append(`

                    <div class="col-sm-6 col-lg-4 mb-5">
                        <div class="single_special_cource">
                        <img src="{{asset('assets/uploads/courses/${course.img}') }}" class="special_img" alt="">
                            <div class="special_cource_text">
                                <a href="{{url('/user/courses/')}}/cat/${course.category_id}" class="btn_4">${course.category.name}</a>
                                <h4>${course.price}</h4>
                                <a href="{{url('/user/courses/')}}/cat/${course.category_id}/course/${course.id}"><h3>${course.name}</h3></a>
                                <p>${course.desc}</p>
                            </div>

                        </div>
                    </div>

                `)
            }
        }

      })

    })

  </script>

@endsection
