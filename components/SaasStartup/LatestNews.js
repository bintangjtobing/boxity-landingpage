import React from 'react';
import Link from 'next/link';

const LatestNews = () => {
    return (
        <div id="blog" className="blog-area saas-blog-area pt-100 pb-70">
			<div className="container">
				<div className="section-title sass-title">
					<h2>Read the latest news</h2>
					<p>Lorem ipsum dolor sit amet, coansectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				
				<div className="row">
					<div className="col-lg-4 col-md-6">
						<div className="single-blog-post">
							<div className="blog-img">
								<a href="/blog-details" target="_blank">
									<img src="/images/boxity/saas-blog1.jpg" alt="Image" />
								</a>
							</div>

							<div className="news-content">
								<a href="#" className="product">
									Product
								</a>

								<a href="/blog-details" target="_blank">
									<h3>What are the challenges of selling software to enterprises?</h3>
								</a>

								<ul className="admin-content">
									<li>
										<img src="/images/boxity/saas-user1.jpg" alt="Image" />
										<a href="#" className="admin">Andrew Lawson</a>
									</li>
									<li className="date">
										<span>August 27, 2020</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div className="col-lg-4 col-md-6">
						<div className="single-blog-post">
							<div className="blog-img">
								<a href="/blog-details" target="_blank">
									<img src="/images/boxity/saas-blog2.jpg" alt="Image" />
								</a>
							</div>

							<div className="news-content">
								<a href="#" className="product">
									Product
								</a>

								<a href="/blog-details" target="_blank">
									<h3>How to sell software services to enterprise accounts</h3>
								</a>

								<ul className="admin-content">
									<li>
										<img src="/images/boxity/saas-user2.jpg" alt="Image" />
										<a href="#" className="admin">Gabriel Marini</a>
									</li>
									<li className="date">
										<span>August 28, 2020</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div className="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div className="single-blog-post">
							<div className="blog-img">
								<a href="/blog-details" target="_blank">
									<img src="/images/boxity/saas-blog3.jpg" alt="Image" />
								</a>
							</div>

							<div className="news-content">
								<a href="#" className="product">
									Business
								</a>

								<a href="/blog-details" target="_blank">
									<h3>What is the best accounting software for small businesses?</h3>
								</a>

								<ul className="admin-content">
									<li>
										<img src="/images/boxity/saas-user3.jpg" alt="Image" />
										<a href="#" className="admin">Aniket Patil</a>
									</li>
									<li className="date">
										<span>August 29, 2020</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default LatestNews;