@extends('frontend.Frontend-master')
@section('main')
    	<hr>
	<div class="p-5">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-6">
				<div class="row">
					<div class="col-lg-3 d-lg-block d-none">
						@foreach ($sol_ad as $item)
						<div class="box blog-box">
							
                            <a href="{{url('/solution')}}/{{$item->name}}-{{$item->id}}">
                                <img src={{asset("$item->img")}} width="100%" alt="">
                            </a>
                        </div>
                        @endforeach
                        @foreach ($train_ad as $item)
                            <div class="box blog-box">
                                <a href="{{url('details-course')}}-{{$item->id}}">
                                    <img src={{asset("$item->feature_image")}} width="100%" alt="">
                                </a>
                            </div>
						@endforeach

					</div>
                    @foreach ($blog as $item)
					<div class="col-lg-9 article">
                            
						<div class="p-3"></div>
						<h1>{{$item->title}}</h1>
						<div class="p-2"></div>
						<img src='{{asset("$item->feature_image")}}' width="100%" alt="">
						<div class="p-2"></div>

						<div class="row">
							<span class="profile-img m-2">
								<a href="{{url('blog/writer')}}/{{$item->post_by}}/{{$item->user_id}}">
									<img src='{{asset("$item->photo_url")}}' alt="">
								</a>
							</span>
							<h5 class="pt-1 pl-2 profile-name">
								<a href="{{url('blog/writer')}}/{{$item->post_by}}/{{$item->user_id}}">
									{{$item->post_by}}
								</a>
								<div class="category"><small><b>Category</b></small> : <small><a href="{{url('category/blog')}}/{{$item->cat_id}}">{{$item->cat_id}}</a></small></div>
								<div class="post"><small><b>Publish :</b></small><small> {{$item->publish}}</small></div>
							</h5>
						</div>
						<article>
							<p style="max-width: 100%;">{!!$item->blog!!}</p>
						</article>
						<div class="p-2">
						
						{{-- tags --}}
						<span class="tags h4"><strong>Tags : </strong></span>
							@php
								$tag_arr = explode(',',$item->tag);
							@endphp

							@for ($i = 0; $i < count($tag_arr); $i++)
								<a href="{{url('blog/tags/all')}}/{{$tag_arr[$i]}}" class="p-2">#{{$tag_arr[$i]}} </a>
							@endfor
						</div>
						{{-- / tags --}}
						
						{{-- pagination --}}
						<div class="single-paginate pt-4 tb-4">
							@forelse ($blog_prev as $pagi_item)
								<div class="prev float-left"><a href="{{url('blog')}}/{{$pagi_item->slug}}/{{$pagi_item->id}}" class="btn btn-primary" >Previous</a></div>
							@empty
								<div class="prev float-left"><a  class="btn btn-danger disabled">Previous</a></div>
							@endforelse
							@forelse ($blog_next as $pagi_item)
								<div class="next float-right btn"><a href="{{url('blog')}}/{{$pagi_item->slug}}/{{$pagi_item->id}}" class="btn btn-primary" >Next</a></div>
							@empty
								<div class="next float-right btn"><a  class="btn btn-danger  disabled" >Next</a></div>
							@endforelse

						</div>
						{{-- / pagination --}}
                    </div>
                    @php
                        $sol_id  = $item->solution_ad;
                        $trn_id  = $item->training_ad;
                    @endphp
                	@endforeach
					
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 p-2">
				<aside class="blog-aside">
					<div class="box">
						@foreach ($adright as $itemad)
							
                            <a href="{{url('/solution')}}/{{$itemad->name}}-{{$sol_id}}">
                                <img src={{asset("$itemad->img")}} width="100%" alt="">
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
						@foreach ($adright as $itemad)
							
                            <a href="{{url('details-course')}}-{{$trn_id}}">
                                <img src={{asset("$itemad->feature_image")}} width="100%" alt="">
                            </a>
                        @endforeach
					</div>
					<div class="p-2"></div>
					<div class="writer">
						<h3 class="sub-head cat-title">Article by writer</h3>
						@foreach ($auth as $item)
							<p><a href="{{url('blog/writer')}}/{{$item->name}}/{{$item->id}}">{{$item->name}}</a></p>
						@endforeach
						<p><a  class="text-danger" href="{{url('/blog/writers')}}">All writers</a></p>

					</div>
				</aside>

			</div>
			
		</div>
	</div>
	</div>
	<hr>
@endsection