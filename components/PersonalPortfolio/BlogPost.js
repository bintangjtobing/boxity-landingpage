import React from 'react';
import Link from 'next/link';

const BlogPost = () => {
    return (
        <div id="blog" className="blog-area personal-blog-area pt-100 pb-70">
			<div className="container">
				<div className="section-title personal-title">
					<span>Our blog</span>
					<h2>Check our latest blog posts</h2>
					<p>Lorem ipsum dolor sit amet, coansectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				
				<div className="row">
					<div className="col-lg-4 col-md-6">
						<div className="single-blog-post">
							<div className="blog-img">
								<a href="/blog-details" target="_blank">
									<img src="/images/portfolio/portfolio-blog1.jpg" alt="Image" />
								</a>
							</div>

							<div className="news-content">
								<ul className="admin-content">
									<li>
										<i className='bx bxs-user'></i>
										<a href="#" className="admin">Andrew Lawson</a>
									</li>
									<li className="date">
										<i className='bx bx-time'></i>
										<span>August 27, 2020</span>
									</li>
								</ul>

								<a href="/blog-details" target="_blank">
									<h3>Top 5 tips to create an eye-catching website</h3>
								</a>

								<a href="/blog-details" className="read-more">
									Read more
								</a>
							</div>
						</div>
					</div>

					<div className="col-lg-4 col-md-6">
						<div className="single-blog-post">
                            <div className="blog-img">
								<a href="/blog-details" target="_blank">
									<img src="/images/portfolio/portfolio-blog2.jpg" alt="Image" />
								</a>
							</div>

							<div className="news-content">
								<ul className="admin-content">
									<li>
										<i className='bx bxs-user'></i>
										<a href="#" className="admin">Gabriel Marini</a>
									</li>
									<li className="date">
										<i className='bx bx-time'></i>
										<span>August 28, 2020</span>
									</li>
								</ul>

								<a href="/blog-details" target="_blank">
									<h3>Esit and a case for successful fast delivery</h3>
								</a>

								<a href="/blog-details" className="read-more">
									Read more
								</a>
							</div>
						</div>
					</div>

					<div className="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div className="single-blog-post">
							<div className="blog-img">
								<a href="/blog-details" target="_blank">
									<img src="/images/portfolio/portfolio-blog3.jpg" alt="Image" />
								</a>
							</div>

							<div className="news-content">
								<ul className="admin-content">
									<li>
										<i className='bx bxs-user'></i>
										<a href="#" className="admin">Aniket Patil</a>
									</li>
									<li className="date">
										<i className='bx bx-time'></i>
										<span>August 29, 2020</span>
									</li>
								</ul>

								<a href="/blog-details" target="_blank">
									<h3>Improve marketing techniques for lead generation</h3>
								</a>

								<a href="/blog-details" className="read-more">
									Read more
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default BlogPost;