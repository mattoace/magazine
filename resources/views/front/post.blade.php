<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="commentApp" ng-controller="mainController">
<head>
    @include('front.header')


			<!-- BEGIN .content --> 
			<div class="content" >				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">					
					<div class="ad-banner">
						<a href="contact-us.html" class="ad-link top"><span class="icon-text">&#9662;</span>Advertisement<span class="icon-text">&#9662;</span></a>
						<a href="#" target="_blank"><img src="{{asset('/images/no-banner-728x90.jpg')}}" alt="" /></a> <!--  images/no-banner-728x90.jpg -->
					</div> 

					<div class="main-content">

						<div class="full-width">
							
							<div class="article-title">
								<div class="share-block right">
									<div>
										<div class="share-article left">
											<span>Social media</span>
											<strong>Share this article</strong>
										</div>
										<div class="left">
											<a href="#" class="custom-soc icon-text">&#62217;</a>
											<a href="#" class="custom-soc icon-text">&#62220;</a>
											<a href="#" class="custom-soc icon-text">&#62223;</a>
											<a href="#" class="custom-soc icon-text">&#62226;</a>
											<a href="#" class="custom-soc icon-text">&#62232;</a>
										</div>
										<div class="clear-float"></div>
									</div>
									<div>
										<a href="javascript:printArticle();" class="small-button"><span class="icon-text">&#59158;</span>&nbsp;&nbsp;Print this article</a>
										<a href="#" class="small-button"><span class="icon-text">&#9993;</span>&nbsp;&nbsp;Send e-mail</a>
									</div>
								</div>

								<h1>{{$postbody[0]->article}}</h1>
								<div class="author">
									<span class="hover-effect left"><img src="{{asset('/images/avatar-1.jpg') }}" alt="" /></span>
									<div class="a-content">
										<span>By <b>Martin Mundia</b></span>
										<span class="meta">{{  date_format($postbody[0]->updated_at,"D  j  M   Y ,G:i:s ")   }}<!--  <span class="tag" style="background-color: #2a8ece;">Custom Tag</span> -->
									</span>
									</div>
								</div>
							</div>
						</div>
						<!-- BEGIN .main-page -->
						<div class="main-page left">

							<!-- BEGIN .single-block -->
							<div class="single-block">
								
								<!-- BEGIN .content-block -->
								<div class="content-block main left">
									
									<div class="block">
										<div class="block-content">
												
											<p><span class="hover-effect"><img src="{{asset($postbody[0]->slugimage)}}" alt="" /></span></p>  <!-- images/photos/image-35.jpg -->
											
											<div class="shortcode-content">

												<div class="paragraph-row">
													<div class="column3">
														<h3 class="highlight-title">Story Highlights</h3>
														<ul>
															  @foreach ($highlights[0]->topHighlights as $highlights) 	
                                                                    <li>{{$highlights->article}}</li>
															   @endforeach 
														</ul>
														<h3 class="highlight-title">Related Articles</h3>
														<ul>
															  @foreach ($relatedarticles[0]->relatedArticles as $relatedarticles) 
                                                                     <li><a href="{{url($relatedarticles->slug)}}">{{$relatedarticles->article}}</a><a href="{{url($relatedarticles->slug)}}#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
                                                              @endforeach 
														</ul>
													</div>
													<div class="column9">
														{{$postbody[0]->body}}
													</div>
												</div>
												<div class="article-title">
													<div class="share-block right">
														<div>
															<div class="share-article left">
																<span>Social media</span>
																<strong>Share this article</strong>
															</div>
															<div class="left">
																<a href="#" class="custom-soc icon-text">&#62217;</a>
																<a href="#" class="custom-soc icon-text">&#62220;</a>
																<a href="#" class="custom-soc icon-text">&#62223;</a>
																<a href="#" class="custom-soc icon-text">&#62226;</a>
																<a href="#" class="custom-soc icon-text">&#62232;</a>
															</div>
															<div class="clear-float"></div>
														</div>
														<div>
															<a href="#" class="small-button"><span class="icon-text">&#59158;</span>&nbsp;&nbsp;Print this article</a>
															<a href="#" class="small-button"><span class="icon-text">&#9993;</span>&nbsp;&nbsp;Send e-mail</a>
														</div>
													</div>

													<div class="author">
														<span class="hover-effect left"><img src="{{asset('/images/avatar-1.jpg')}}" alt="" /></span>
														<div class="a-content">
															<span>By <b>Martin Mundia</b></span>
															<span class="meta">{{  date_format($postbody[0]->updated_at,"D  j  M   Y ,G:i:s ")   }}<!-- <span class="tag" style="background-color: #2a8ece;">Custom Tag</span> -->
														</span>
														</div>
													</div>

													<div class="article-tags tag-cloud">
														<strong>TAGS:</strong><a href="#">Politics</a><a href="#">Entertainment</a><a href="#">Sports</a>
													</div>
												</div>
											</div>
										</div>
										<div class="block-title">
											<a href="#writecomment" class="right">Write a comment</a>
											<h2>4 Comments</h2>
										</div>
										<div class="block-content">

											<div class="comment-block">
										
												<ol class="comments" >			                
					 
                                                    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
					 								<li ng-hide="loading" ng-repeat="comment in comments"> 
														<div class="commment-content">
															<div class="user-avatar">
																<span class="hover-effect"><img src="@{{comment.image}}" class="setborder" alt="" title="" /></span> 
															</div>
															<strong class="user">@{{ comment.fullnames }}</strong>
															<span class="time-stamp">@{{ comment.updated_at}}</span>
															<div class="comment-text">
																<p>@{{ comment.comments}}</p>
															</div>
															<a href="#" class="icon-link"><span class="icon-text">&#59154;</span><span>Reply to this comment</span></a>
														</div>
													</li>
												</ol>

											</div>

										</div>

										<div class="block-title">
											<a href="#writecomment" class="right">View all comments</a>
											<h2>Write a comment</h2>
										</div>
										<div class="block-content">
											<div id="writecomment">

												<form ng-submit="submitComment()" id="commentform" name="commentform">
												<!-- 	<div class="coloralert" style="background: #a12717;">
														<p>Error Occurred!</p>
														<a href="#close-alert" class="icon-text">&#10006;</a>
													</div> -->
													<!-- <div class="coloralert" style="background: #68a117;">
														<p>Success!</p>
														<a href="#close-alert" class="icon-text">&#10006;</a>
													</div> -->
													<p>Your e-mail address will not be published.<br/>Required fields are marked<span class="required">*</span></p>
													<p class="contact-form-user">
														<label for="c_name">Nickname<span class="required">*</span></label>														
														<input type="text" class="error" placeholder="Nickname" name="author" ng-model="commentData.author" id="author" />
														<!-- <span class="error-msg"><span class="icon-text">&#9888;</span>&nbsp;&nbsp;This is an error message</span> -->                                                        
													 	<input type="hidden" placeholder=""  name="posturl" ng-model="commentData.posturl" id="posturl" ng-init="commentData.posturl='{{ app('request')->url() }}'" />
													</p>
													<p class="contact-form-email">
														<label for="c_email">E-mail<span class="required">*</span></label>
														<input type="text" placeholder="E-mail" name="email" ng-model="commentData.email" id="email" />
													</p>
													<p class="contact-form-webside">
														<label for="c_webside">Website</label>
														<input type="text" placeholder="Website" name="website" ng-model="commentData.website"  id="website" />
													</p>
													<p class="contact-form-message">
														<label for="c_message">Comment<span class="required">*</span></label>
														<textarea name="comment" ng-model="commentData.comment"  placeholder="Your message.." id="comment"></textarea>
													</p>
													<p>
                                                       <!--  <button type="submit" class="styled-button">Post a Comment</button> -->
														<input type="submit"  class="styled-button" value="Post a Comment" /> 

													</p>
												</form>
												
											</div>
										</div>
									</div>
								<!-- END .content-block -->
								</div>

							<!-- END .single-block -->
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
<script type="text/javascript" src="{{ asset('/js/angular.min.js') }}"></script>  
<script type="text/javascript" src="{{ asset('/js/controllers/MainCtrl.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/services/commentService.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/comment.js') }}"></script> 
 @include('front.footer')


