<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('front.header')			
			<!-- BEGIN .content --> 
			<div class="content">
				
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
									</span
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
															<li>Ex facer detraxit conseqtur sea, graece graeci sit no cum quodsi omnium.</li>
															<li>Pro an docendi quaestio. vel adhuc lorem habemus, epicuri explicari dignissim.</li>
															<li>Id sententiae eloquentiam. Mei eius lorem ei, stet nostr signiferumque mel.</li>
														</ul>
														<h3 class="highlight-title">Related Articles</h3>
														<ul>
															<li><a href="post.html">Solet percipit euod tractatos percipit tractatos</a><a href="post.html#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
															<li><a href="post.html">Lus eleifend hom pertinacia hom pertinacia</a><a href="post.html#comments" class="h-comment">72</a><span class="meta-date">6.Oct</span></li>
															<li><a href="post.html">Ocurr comprehensam recteq comprehensam</a><a href="post.html#comments" class="h-comment">8</a><span class="meta-date">6.Oct</span></li>
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
												
												<ol class="comments">
													<li>
														<div class="commment-content">
															<div class="user-avatar">
																<a href="#" class="hover-effect"><img src="images/photos/avatar-4.jpg" class="setborder" alt="" title="" /></a>
															</div>
															<strong class="user-nick"><a href="#">Ignasi Cleto</a></strong>
															<span class="time-stamp">April 25, 12:53</span>
															<div class="comment-text">
																<p>Usu inani perfecto quaestio in, id usu paulo eruditi salutandi. In eros prompta dolores nec, ut pro causae conclusionemque. In pro elit mundi dicunt. No odio diam interpretaris pri.</p>
															</div>
															<a href="#" class="icon-link"><span class="icon-text">&#59154;</span><span>Reply to this comment</span></a>
														</div>
														<ul>
															<li>
																<div class="commment-content">
																	<div class="user-avatar">
																		<a href="#" class="hover-effect"><img src="images/photos/avatar-5.jpg" class="setborder" alt="" title="" /></a>
																	</div>
																	<strong class="user-nick"><a href="#">Orange-Themes</a><span class="marker">Author</span></strong>
																	<span class="time-stamp">April 25, 12:53</span>
																	<div class="comment-text">
																		<p>Ad est audire imperdiet. Cum an docendi assentior. Usu inani perfecto quaestio in, id usu paulo eruditi salutandi. In eros prompta dolores nec, ut pro causae conclusionemque. In pro elit mundi dicunt. No odio diam interpretaris pri.</p>
																	</div>
																	<a href="#" class="icon-link"><span class="icon-text">&#59154;</span><span>Reply to this comment</span></a>
																</div>
															</li>
															<li>
																<div class="commment-content">
																	<div class="user-avatar">
																		<a href="#" class="hover-effect"><img src="images/photos/avatar-6.jpg" class="setborder" alt="" title="" /></a>
																	</div>
																	<strong class="user-nick"><a href="#">Tatius Eugenio</a></strong>
																	<span class="time-stamp">April 25, 12:53</span>
																	<div class="comment-text">
																		<p>Has possit definiebas ne. Sed dico consul ut. Eu labore efficiantur pro. Sed legimus probatus pericula ea, cum oratio labitur concludaturque ne. Mei cu viris moderatius.</p>
																	</div>
																	<a href="#" class="icon-link"><span class="icon-text">&#59154;</span><span>Reply to this comment</span></a>
																</div>
															</li>
														</ul>
													</li>
													<li>
														<div class="commment-content">
															<div class="user-avatar">
																<span class="hover-effect"><img src="images/photos/avatar-7.jpg" class="setborder" alt="" title="" /></span>
															</div>
															<strong class="user-nick">Ignasi Cleto</strong>
															<span class="time-stamp">April 25, 12:53</span>
															<div class="comment-text">
																<p>Usu inani perfecto quaestio in, id usu paulo eruditi salutandi. In eros prompta dolores nec, ut pro causae conclusionemque. In pro elit mundi dicunt. No odio diam interpretaris pri.</p>
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

												<form action="#" method="get">

													<div class="coloralert" style="background: #a12717;">
														<p>Error Occurred!</p>
														<a href="#close-alert" class="icon-text">&#10006;</a>
													</div>
													<!-- <div class="coloralert" style="background: #68a117;">
														<p>Success!</p>
														<a href="#close-alert" class="icon-text">&#10006;</a>
													</div> -->

													<p>Your e-mail address will not be published.<br/>Required fields are marked<span class="required">*</span></p>

													<p class="contact-form-user">
														<label for="c_name">Nickname<span class="required">*</span></label>
														<input type="text" class="error" placeholder="Nickname" name="c_name" id="c_name" />
														<span class="error-msg"><span class="icon-text">&#9888;</span>&nbsp;&nbsp;This is an error message</span>
													</p>
													<p class="contact-form-email">
														<label for="c_email">E-mail<span class="required">*</span></label>
														<input type="text" placeholder="E-mail" name="c_email" id="c_email" />
													</p>
													<p class="contact-form-webside">
														<label for="c_webside">Website</label>
														<input type="text" placeholder="Website" name="c_webside" id="c_webside" />
													</p>
													<p class="contact-form-message">
														<label for="c_message">Comment<span class="required">*</span></label>
														<textarea name="c_message" placeholder="Your message.." id="c_message"></textarea>
													</p>
													<p><input type="submit" class="styled-button" value="Post a Comment" /></p>
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
 @include('front.footer')
