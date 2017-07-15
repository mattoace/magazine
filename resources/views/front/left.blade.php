								<!-- BEGIN .content-block -->
								<div class="content-block left">

									<div class="block">
										<div class="featured-block">
									       @foreach ($featuredblock1[0]->getNews as $featuredblock1) 
											<div class="article-content">
												<h3><a href="{{$featuredblock1->slug}}">{{$featuredblock1->article}}</a><a href="{{$featuredblock1->slug}}#comments" class="h-comment">43</a></h3>
												<span class="meta">
													<a href="{{$featuredblock1->slug}}"><span class="icon-text">🕔 </span>11:20, 7.Oct 2013</a>
												</span>
											</div>
											<div class="article-photo">
												<a href="{{$featuredblock1->slug}}" class="hover-effect delegate"><span class="cover" style="font-size:41.666666666666664px;"><i></i><img src="{{$featuredblock1->image}}" alt=""></span></a>
											</div>
											 @endforeach
										</div>
									</div>
									
									<div class="block">
										<h2 class="list-title">Kenyan Politics</h2>
										<ul class="article-list">

									            @foreach ($kenyanpolitics[0]->getNews as $kenyanpolitics)                                        
			                                         <li><a href="{{$kenyanpolitics->slug}}">{{$kenyanpolitics->article}}</a><a href="#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
			                                    @endforeach 
										</ul>
										<a href="#" class="more">Read More</a>
									</div>
									
									<div class="block">
										<h2 class="list-title" style="color: #c42b20;border-bottom: 2px solid #c42b20;">Entertainment News</h2>
										<ul class="article-list">
						                        @foreach ($entertainmentnews[0]->getNews as $entertainmentnews)                                        
			                                         <li><a href="{{$entertainmentnews->slug}}">{{$entertainmentnews->article}}</a><a href="#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
			                                    @endforeach 
										</ul>
										<a href="#" class="more">Read More</a>
									</div>
									
									<div class="block">
										<h2 class="list-title" style="color: #2277c6;border-bottom: 2px solid #2277c6;">County News</h2>
										<ul class="article-list">
							                    @foreach ($countynews[0]->getNews as $countynews)                                        
			                                         <li><a href="{{$countynews->slug}}">{{$countynews->article}}</a><a href="#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
			                                    @endforeach 
										</ul>
										<a href="#" class="more">Read More</a>
									</div>									
									<div class="block">
										<div class="banner">
											<a href="#" target="_blank"><img src="images/no-banner-200x200.jpg" alt=""></a>
											<a href="#" class="ad-link" vks692p="" hidden=""><span class="icon-text">▴</span>Advertisement<span class="icon-text">▴</span></a>
										</div>
									</div>									
									<div class="block">
										<h2 class="list-title" style="color: #dd8229;border-bottom: 2px solid #dd8229;">Sports News</h2>
										<ul class="article-block">	
							                    @foreach ($sportsnews[0]->getNews as $sportsnews)  
													<li>
														<div class="article-photo">
															<a href="{{$sportsnews->slug}}" class="hover-effect delegate"><span class="cover" style="font-size:20px;"><i></i><img src="{{$sportsnews->image}}" alt=""></span></a>
														</div>
														<div class="article-content">
															<h4><a href="{{$sportsnews->slug}}">{{$sportsnews->article}}</a><a href="{{$sportsnews->slug}}#comments" class="h-comment">201</a></h4>
															<span class="meta">
																<a href="{{$sportsnews->slug}}"><span class="icon-text">🕔</span>11:20, 7.Oct 2013</a>
															</span>
														</div>
													</li>
			                                    @endforeach 
										</ul>
										<a href="#" class="more">Read More</a>
									</div>
								<!-- END .content-block -->
								</div>