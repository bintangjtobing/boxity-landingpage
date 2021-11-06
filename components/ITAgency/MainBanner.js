import React from 'react';

const MainBanner = () => {
    return (
        <div id="home" className="agency-banner-area jarallax">
			<div className="container-fluid">
				<div className="row align-items-center">
					<div className="col-lg-6">
						<div className="agency-banner-content">
							<h1>Our Agency Managed IT Support Solves Your Business Challenges</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dignissimos distinctio non incidunt dolorum qui aspernatur, repellat mollitia maiores</p>

							<div className="social-link">
								<span>Follow us:</span>
								<ul>
									<li>
										<a href="#" target="_blank">
											<i className="bx bxl-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i className="bx bxl-instagram"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i className="bx bxl-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i className="bx bxl-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div className="col-lg-6">
						<div className="agency-banner-img">
							<img src="/images/agency/banner/agency-banner-img.png" alt="Image" />
							<div className="banner-img-shape">
								<img src="/images/agency/banner/agency-banner-img-shape.png" alt="Image" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div className="banner-bottom-shape">
				<img src="/images/agency/banner/agency-banner-bottom-shape.png" alt="Image" />
			</div>
		</div>
    )
}

export default MainBanner;