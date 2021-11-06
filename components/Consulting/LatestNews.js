import React from 'react';
import Link from 'next/link';

const LatestNews = () => {
    return (
        <div id="blog" className="blog-area consulting-blog-area pt-100 pb-70">
			<div className="container">
				<div className="section-title consulting-title">
					<h2>Read the latest news</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				
				<div className="row">
					<div className="col-lg-4 col-md-6">
						<div className="single-blog-post">
							<div className="blog-img">
								<a href="/blog-details" target="_blank">
									<img src="/images/consulting/consulting-blog1.jpg" alt="Image" />
								</a>
							</div>

							<div className="news-content">
								<div className="admin">
									<img src="/images/consulting/consulting-admin1.jpg" alt="Image" />
									Post by: <a href="#">Andrew Lawson</a>
								</div>

								<a href="/blog-details" target="_blank">
									<h3>How to become a consultant</h3>
								</a>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua  consectetur adipiscing elit.</p>

								<span>August 29, 2020</span>
							</div>
						</div>
					</div>

					<div className="col-lg-4 col-md-6">
						<div className="single-blog-post">
                            <div className="blog-img">
								<a href="/blog-details" target="_blank">
									<img src="/images/consulting/consulting-blog2.jpg" alt="Image" />
								</a>
							</div>

							<div className="news-content">
								<div className="admin">
									<img src="/images/consulting/consulting-admin2.jpg" alt="Image" />
									Post by: <a href="#" className="admin">Gabriel Marini</a>
								</div>

								<a href="/blog-details" target="_blank">
									<h3>Marketing for consultants study</h3>
								</a>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua  consectetur adipiscing elit.</p>

								<span>August 28, 2020</span>
							</div>
						</div>
					</div>

					<div className="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div className="single-blog-post">
                            <div className="blog-img">
								<a href="/blog-details" target="_blank">
									<img src="/images/consulting/consulting-blog3.jpg" alt="Image" />
								</a>
							</div>

							<div className="news-content">
								<div className="admin">
									<img src="/images/consulting/consulting-admin3.jpg" alt="Image" />
									Post by: <a href="#" className="admin">Aniket Patil</a>
								</div>

								<a href="/blog-details" target="_blank">
									<h3>Grow your consulting business</h3>
								</a>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua  consectetur adipiscing elit.</p>

								<span>August 27, 2020</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default LatestNews;