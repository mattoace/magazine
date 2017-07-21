						<!-- BEGIN .main-sidebar -->
						<div class="main-sidebar right">
							
							<!-- BEGIN .widget -->
							<div class="widget">
								<a href="#" target="_blank"><img src="{{asset('/images/no-banner-300x250.jpg')}}" alt=""></a>
								<a href="#" class="ad-link" vks692p="" hidden=""><span class="icon-text">▴</span>Advertisement<span class="icon-text">▴</span></a>
							<!-- END .widget -->
							</div>
							
							<!-- BEGIN .widget -->
							<div class="widget">
								<h3>Socialize</h3>
								<div class="widget-social">
									<div class="social-bar">
										<a href="#" class="social-icon"><i class="number">1.2m</i><span class="facebook">Facebook</span></a>
										<a href="#" class="social-icon"><i class="number">2.6k</i><span class="twitter">Twitter</span></a>
										<a href="#" class="social-icon"><i class="number">1.4k</i><span class="google">Google+</span></a>
										<a href="#" class="social-icon"><i class="number">823</i><span class="linkedin">Linkedin</span></a>
									</div>
									<p>Socialize and contact us on social media</p>
								</div>
							<!-- END .widget -->
							</div>							
							<!-- BEGIN .widget -->
							<div class="widget">
								<h3>Latest Articles</h3>
								<div class="widget-articles">
									<ul>

							            @foreach ($latestnews[0]->getNews as $latestnews)   
                                         <li>
											<div class="article-photo">
												<a href="{{url($latestnews->slug)}}" class="hover-effect delegate"><span class="cover" style="font-size:20px;"><i></i><img src="{{asset($latestnews->image)}}" alt=""></span></a>
											</div>
											<div class="article-content">
												<h4><a href="{{url($latestnews->slug)}}">{{$latestnews->article}}</a><a href="{{url($latestnews->slug)}}#comments" class="h-comment">201</a></h4>
												<span class="meta">
													<a href="{{url($latestnews->slug)}}"><span class="icon-text">🕔</span>11:20, 7.Oct 2013</a>
												</span>
											</div>
										</li>
	                                    @endforeach 
									</ul>
								</div>
							<!-- END .widget -->
							</div>
							
							<!-- BEGIN .widget -->
							<div class="widget">
								<h3>Recent Comments</h3>
								<div class="widget-comments">
									<ul>
                                      @foreach ($comments as $comments) 
                                        <li>
											<div class="comment-photo">
												<span class="hover-effect delegate"><span class="cover" style="font-size:20px;"><i></i><img src="{{asset($comments->image)}}" alt=""></span></span>
											</div>
											<div class="comment-content">
												<h3>{{$comments->fullnames}}</h3>
												<p>{{$comments->comments}}</p>
												<span class="meta">
													<a href="/post/{{$comments->post_id}}"><span class="icon-text"></span>View Article</a>
												</span>
											</div>
										</li>

                                       @endforeach 
									</ul>
								</div>
							<!-- END .widget -->
							</div>
							
							<!-- BEGIN .widget -->
							<div class="widget">
								<h3>Tag Cloud</h3>
								<div class="tag-cloud">
									<a href="#">Breaking News</a>
									<a href="#">Sports</a>
									<a href="#">Entertainment</a>
									<a href="#">Latest News</a>
									<a href="#">Kenyan</a>
									<a href="#">Politics</a>
									<a href="#">Social</a>
								</div>
							<!-- END .widget -->
							</div>
							
							<!-- BEGIN .widget -->
							<div class="widget">
								<h3>Subscribe Mailing List</h3>
								<div class="mailing-list">
									<p>By subscribing You will recieve our latest news. Your information will not be shared with anyone.</p>
									<hr>
									<div class="info-message success">
										<span class="icon-text">👍</span>
										<b>Gear Success !</b>
										<p>Everything went well, You are now subscribed !</p>
									</div>
									<!-- <div class="info-message fail">
										<span class="icon-text">&#9888;</span>
										<b>Whooooops !</b>
										<p>You made a little error here !</p>
									</div> -->
									<!-- <div class="info-message">
										<span class="icon-text">&#10227;</span>
										<b>Loading!</b>
										<p>This may take a few seconds !</p>
									</div> -->
									<div class="subscribe-block">
										<form action="#">
											<p><input placeholder="Your name" type="text"></p>
											<p><input placeholder="Your e-mail" type="text"></p>
											<p><input value="Subscribe" class="button" type="submit"></p>
										</form>
									</div>
								</div>
							<!-- END .widget -->
							</div>
							
							<!-- BEGIN .widget -->
							<div class="widget">
								<h3>Calendar</h3>
								<div id="calendar_wrap">
									<table id="wp-calendar">
										<caption>October 2013</caption>
										<thead>
											<tr>
												<th scope="col" title="Monday">M</th>
												<th scope="col" title="Tuesday">T</th>
												<th scope="col" title="Wednesday">W</th>
												<th scope="col" title="Thursday">T</th>
												<th scope="col" title="Friday">F</th>
												<th scope="col" title="Saturday">S</th>
												<th scope="col" title="Sunday">S</th>
											</tr>
										</thead>

										<tfoot>
											<tr>
												<td colspan="3" id="prev"><a href="#" title="View posts for September 2013">« Sep</a></td>
												<td class="pad">&nbsp;</td>
												<td colspan="3" id="next" class="pad">&nbsp;</td>
											</tr>
										</tfoot>

										<tbody>
											<tr>
												<td colspan="1" class="pad">&nbsp;</td><td>1</td><td>2</td><td>3</td><td><a href="#">4</a></td><td>5</td><td><a href="#">6</a></td>
											</tr>
											<tr>
												<td>7</td><td><a href="#">8</a></td><td><a href="#">9</a></td><td><a href="#">10</a></td><td>11</td><td>12</td><td>13</td>
											</tr>
											<tr>
												<td>14</td><td><a href="#">15</a></td><td>16</td><td><a href="#">17</a></td><td><a href="#">18</a></td><td>19</td><td><a href="#">20</a></td>
											</tr>
											<tr>
												<td><a href="#">21</a></td><td>22</td><td id="today"><a href="#">23</a></td><td>24</td><td>25</td><td>26</td><td>27</td>
											</tr>
											<tr>
												<td>28</td><td>29</td><td>30</td><td>31</td>
												<td class="pad" colspan="3">&nbsp;</td>
											</tr>
										</tbody>
									</table>
								</div>
							<!-- END .widget -->
							</div>
							
							<!-- BEGIN .widget -->
							<div class="widget">
								<h3>Latest Photo Galleries</h3>
								<div class="latest-galleries">
									
									<div class="gallery-widget">
										<div class="gallery-photo" rel="hover-parent">
											<a href="#" class="slide-left icon-text"></a>
											<a href="#" class="slide-right icon-text"></a>
											<ul rel="2">
											
									            @foreach ($gallerypolitics[0]->getFiles as $gallerypolitics)                     
			                                         <li><a href="#" class="hover-effect delegate"><span class="cover" style="font-size:31.666666666666668px;"><i></i><img src="{{asset($gallerypolitics->path) }}" alt=""></span></a></li>
			                                    @endforeach 												
											</ul>
										</div>
										<div class="gallery-content">
											<h4><a href="#">Policical Images Gallery</a></h4>
											<span class="meta">
												<span class="right">23 photos</span>
												<a href="#"><span class="icon-text"></span>View all photos</a>
											</span>
										</div>
									</div>									
									<div class="gallery-widget">
										<div class="gallery-photo" rel="hover-parent">
											<a href="#" class="slide-left icon-text"></a>
											<a href="#" class="slide-right icon-text"></a>
											<ul rel="2">
							                    @foreach ($gallerysports[0]->getFiles as $gallerysports)                     
			                                         <li><a href="#" class="hover-effect delegate"><span class="cover" style="font-size:31.666666666666668px;"><i></i><img src="{{asset($gallerysports->path) }}" alt=""></span></a></li>
			                                    @endforeach  												
											</ul>
										</div>
										<div class="gallery-content">
											<h4><a href="#">Sports Images Gallery</a></h4>
											<span class="meta">
												<span class="right">35 photos</span>
												<a href="#"><span class="icon-text"></span>View all photos</a>
											</span>
										</div>
									</div>
									
								</div>
							<!-- END .widget -->
							</div>

						<!-- END .main-sidebar -->
						</div>