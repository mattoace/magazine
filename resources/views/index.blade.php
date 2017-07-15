<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('front.header')			
			<!-- BEGIN .content -->
			<div class="content">				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">
					
					<div class="ad-banner" vks692p="" hidden="">
						<a href="http://allegro.orange-themes.com/html/contact-us.html" class="ad-link top" vks692p="" hidden=""><span class="icon-text">▾</span>Advertisement<span class="icon-text">▾</span></a>
						<a href="#" target="_blank"><img src="images/no-banner-728x90.jpg" alt="" style="display: none !important;" hidden=""></a>
					</div> 

					<div class="breaking-news">
						<span class="the-title">Breaking News</span>
						<div class="slide_container" style="position: relative; overflow: hidden; height: 18px;">
								<ul style="height: 24px; width: 3360px; position: absolute; left: 0px;">
									@foreach ($breakingnews[0]->getNews as $breakingnews)
                                         <li><a href="{{url($breakingnews->slug)}}">{{$breakingnews->article}}</a></li>
                                    @endforeach 	
								 </ul>
				   </div>		
					</div>
					<div class="main-content">

						<!-- BEGIN .main-page -->
						<div class="main-page left">

							<!-- BEGIN .double-block -->
							<div class="double-block">
								
								<!-- BEGIN .content-block -->
								<div class="content-block main right">									
                                   @include('front.slider')
									<div class="block">
										<div class="block-title">
											<a href="#" class="right">View blog</a>
											<h2>Highlights</h2>
										</div>
										<div class="block-content">
											<ul class="article-block-big">

									            @foreach ($highlights[0]->getNews as $highlights) 									
		                                                <li>
															<div class="article-photo">
																<a href="{{$highlights->slug}}" class="hover-effect delegate"><span class="cover" style="font-size:20.5px;"><i></i><img src="{{$highlights->image}}" alt=""></span></a>
															</div>
															<div class="article-content">
																<h4><a href="{{$highlights->slug}}">{{$highlights->article}}</a><a href="{{$highlights->slug}}#comments" class="h-comment">201</a></h4>
																<span class="meta">
																	<a href="{{$highlights->slug}}"><span class="icon-text">🕔</span>11:20, 7.Oct 2013</a>
																</span>
															</div>
														</li>

			                                    @endforeach 
											</ul>
										</div>
									</div>									
									<div class="block">
										<div class="block-title">
											<a href="#" class="right">Latest News From World</a>
											<h2>View Archive from World</h2>
										</div>
										<div class="block-content">

											<div class="wide-article">

                                          @foreach ($featuredblock2[0]->getNews as $featuredblock2) 											
		                                       <div class="article-photo">
													<a href="{{$featuredblock2->slug}}" class="hover-effect delegate"><span class="cover" style="font-size:20px;"><i></i><img src="{{$featuredblock2->image}}" alt=""></span></a>
												</div>
												<div class="article-content">
													<h2><a href="{{$featuredblock2->slug}}">{{$featuredblock2->article}}</a><a href="{{$featuredblock2->slug}}#comments" class="h-comment">94</a></h2>
													<span class="meta">
														<a href="{{$featuredblock2->slug}}"><span class="icon-text">🕔</span>11:20, 7.Oct 2013</a>
														<span class="tag">Updated</span>
													</span>
													<p>{{$featuredblock2->body}}</p>
												</div>												
										 @endforeach
											</div>
											<div class="paragraph-row">
												
												<!-- BEGIN .column6 -->
												<div class="column6">
													<ul class="article-block">

											            @foreach ($fromworld1[0]->topFiveWorldNews as $fromworld1) 
																<li>
																	<div class="article-photo">
																		<a href="{{$fromworld1->slug}}" class="hover-effect delegate"><span class="cover" style="font-size:20px;"><i></i><img src="{{$fromworld1->image}}" alt=""></span></a>
																	</div>
																	<div class="article-content">
																		<h4><a href="{{$fromworld1->slug}}">{{$fromworld1->article}}</a><a href="{{$fromworld1->slug}}#comments" class="h-comment">201</a></h4>
																		<span class="meta">
																			<a href="{{$fromworld1->slug}}"><span class="icon-text">🕔</span>11:20, 7.Oct 2013</a>
																		</span>
																	</div>
																</li>
																	
					                                    @endforeach 
													</ul>
												<!-- END .column6 -->
												</div>												
												<!-- BEGIN .column6 -->
												<div class="column6">
													<ul class="article-block">
												      @foreach ($fromworld2[0]->bottomFiveWorldNews as $fromworld2) 
																<li>
																	<div class="article-photo">
																		<a href="{{$fromworld2->slug}}" class="hover-effect delegate"><span class="cover" style="font-size:20px;"><i></i><img src="{{$fromworld2->image}}" alt=""></span></a>
																	</div>
																	<div class="article-content">
																		<h4><a href="{{$fromworld2->slug}}">{{$fromworld2->article}}</a><a href="{{$fromworld2->slug}}#comments" class="h-comment">201</a></h4>
																		<span class="meta">
																			<a href="{{$fromworld2->slug}}"><span class="icon-text">🕔</span>11:20, 7.Oct 2013</a>
																		</span>
																	</div>
																</li>																	
					                                    @endforeach 
													</ul>
												<!-- END .column6 -->
												</div>

											</div>

										</div>
									</div>
									
									<div class="block">
										<div class="block-title" style="background: #2182b4;">
											<a href="#" class="right">Latest News From Worl Sports</a>
											<h2>View World Sports</h2>
										</div>
										<div class="block-content">
											<div class="wide-article">
							           @foreach ($featuredblock3[0]->getNews as $featuredblock3) 											
		                                       <div class="article-photo">
													<a href="{{$featuredblock3->slug}}" class="hover-effect delegate"><span class="cover" style="font-size:20px;"><i></i><img src="{{$featuredblock3->image}}" alt=""></span></a>
												</div>
												<div class="article-content">
													<h2><a href="{{$featuredblock3->slug}}">{{$featuredblock3->article}}</a><a href="{{$featuredblock3->slug}}#comments" class="h-comment">94</a></h2>
													<span class="meta">
														<a href="{{$featuredblock3->slug}}"><span class="icon-text">🕔</span>11:20, 7.Oct 2017</a>
														<span class="tag">Updated</span>
													</span>
													<p>{{$featuredblock3->body}}</p>
												</div>												
										 @endforeach	
											</div>
											<div class="paragraph-row">												
												<!-- BEGIN .column6 -->
												<div class="column6">
													<ul class="article-block">

											            @foreach ($worldsport1[0]->topFiveWorldNews as $worldsport1) 
																<li>
																	<div class="article-photo">
																		<a href="{{$worldsport1->slug}}" class="hover-effect delegate"><span class="cover" style="font-size:20px;"><i></i><img src="{{$worldsport1->image}}" alt=""></span></a>
																	</div>
																	<div class="article-content">
																		<h4><a href="{{$worldsport1->slug}}">{{$worldsport1->article}}</a><a href="{{$worldsport1->slug}}#comments" class="h-comment">201</a></h4>
																		<span class="meta">
																			<a href="{{$worldsport1->slug}}"><span class="icon-text">🕔</span>11:20, 7.Oct 2013</a>
																		</span>
																	</div>
																</li>
																	
					                                    @endforeach 
													</ul>
												<!-- END .column6 -->
												</div>			
												<!-- BEGIN .column6 -->
												<div class="column6">
													<ul class="article-block">
											            @foreach ($worldsport2[0]->bottomFiveWorldSportNews as $worldsport2) 
																<li>
																	<div class="article-photo">
																		<a href="{{$worldsport2->slug}}" class="hover-effect delegate"><span class="cover" style="font-size:20px;"><i></i><img src="{{$worldsport2->image}}" alt=""></span></a>
																	</div>
																	<div class="article-content">
																		<h4><a href="{{$worldsport2->slug}}">{{$worldsport2->article}}</a><a href="{{$worldsport2->slug}}#comments" class="h-comment">201</a></h4>
																		<span class="meta">
																			<a href="{{$worldsport2->slug}}"><span class="icon-text">🕔</span>11:20, 7.Oct 2013</a>
																		</span>
																	</div>
																</li>																	
					                                    @endforeach 
													</ul>
												<!-- END .column6 -->
												</div>
											</div>
										</div>
									</div>									
									<div class="block">
										<div class="banner">
											<a href="#" target="_blank"><img src="images/no-banner-468x60.jpg" alt="" style="display: none !important;" hidden=""></a>
											<a href="#" class="ad-link" vks692p="" hidden=""><span class="icon-text">▴</span>Advertisement<span class="icon-text">▴</span></a>
										</div>
									</div>									
									<div class="block">
										<div class="block-title" style="background: #dd8229;">
											<a href="#" class="right">View all travel news</a>
											<h2>Local Sports News</h2>
										</div>
										<div class="block-content">
											<ul class="article-block-big">
							                @foreach ($localsportsnews[0]->getNews as $localsportsnews) 
												<li>
													<div class="article-photo">
														<a href="{{$localsportsnews->slug}}" class="hover-effect delegate"><span class="cover" style="font-size:20.5px;"><i></i><img src="{{$localsportsnews->image}}" alt=""></span></a>
													</div>
													<div class="article-content">
														<h4><a href="{{$localsportsnews->slug}}">{{$localsportsnews->article}}</a><a href="{{$localsportsnews->slug}}#comments" class="h-comment">201</a></h4>
														<span class="meta">
															<a href="{{$localsportsnews->slug}}"><span class="icon-text">🕔</span>11:20, 7.Oct 2013</a>
														</span>
													</div>
												</li>												
	                                           @endforeach 
											</ul>
										</div>
									</div>
								<!-- END .content-block -->
								</div>								
                                   @include('front.left')
							<!-- END .double-block -->
							</div>
						<!-- END .main-page -->
						</div>						
                                   @include('front.right')
						<div class="clear-float"></div>
					</div>					
				<!-- END .wrapper -->
				</div>				
			<!-- BEGIN .content -->
			</div>
 @include('front.footer')
