@extends('frontend.Frontend-master')

@section('main')
  	<div class="p-5">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-6">
				<h1 class="text-center">{{$blog_single_cat}}
					<div class="heading" style="width:120px;"></div>
				</h1>
				<div class="p-3"></div>

				<div class="row">
					@forelse ($blog as $item)
                        <div class="col-lg-3 col-md-4">
                            <a href="{{url('blog')}}/{{$item->slug}}/{{$item->id}}" style="color:#464646">
                            <div class="box blog-box">
                                <img src='{{asset("$item->feature_image")}}' width="100%" alt="">
                            </div>
                            <h5>{{$item->title}}</h5>
                        </a>
                        </div>
					@empty 
						 <h2 class="text-center">Sorry! There is no post :)</h2>
					@endforelse
				</div>



			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 p-2">
				<aside class="blog-aside">
					<div class="box">
						@foreach ($sol_ad as $item)
							
						<a href="{{url('/solution')}}/{{$item->name}}-{{$item->id}}">
							<img src={{asset("$item->img")}} width="100%" alt="">
						</a>
						@endforeach
					</div>
					<h2 class="cat-title">Categories</h2>

					@foreach ($blog_cat as $item)	
					<a href="{{url('category/blog')}}/{{$item->name}}">
						<p>{{$item->name}}</p>
					</a>
					@endforeach
					<a href="{{url('blog/category')}}">
						<p class="text-danger">All category</p>
					</a>

					<div class="box">
						@foreach ($train_ad as $item)
							<a href="{{url('details-course')}}-{{$item->id}}">
								<img src={{asset("$item->feature_image")}} width="100%" alt="">
							</a>
						@endforeach
					</div>
					<div class="p-2"></div>
					<div class="writer">
						<h3 class="sub-head cat-title">Article by writer</h3>
						@foreach ($auth as $item)
							<p><a href="{{url('blog/writer')}}/{{$item->name}}-{{$item->id}}">{{$item->name}}</a></p>
						@endforeach
						<p><a  class="text-danger" href="{{url('/blog/writers')}}">All writers</a></p>

					</div>
				</aside>

			</div>
			<div class="col-lg-9">
				<div class="p-3"></div>
				<nav aria-label="Page navigation example">
				  <ul class="pagination justify-content-end">
				    <li class="page-item disabled">
				      <a class="page-link" href="#" tabindex="-1">Previous</a>
				    </li>
				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#">Next</a>
				    </li>
				  </ul>
				</nav>
			</div>	
		</div>
	</div>
	</div>
@endsection