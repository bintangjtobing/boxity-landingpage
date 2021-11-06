import React from 'react';

const AboutUs = () => {
    return (
        <div id="about-us" className="consulting-about-area pt-70 pb-70">
			<div className="container">
				<div className="row align-items-center">
					<div className="col-lg-6">
						<div className="consulting-about-content">
							<span>Who we are</span>
							<h3>Boxity Central Indonesia leading global consulting firm with more than 120+ people working in more than 15 countries. Our consutling farm helps our client in such a way that the client can reach his goal</h3>
				 
							<div className="row">
								<div className="col-lg-6 col-md-6">
									<div className="single-about">
										<i className="flaticon-analysis"></i>
										<h3>Business Analysis</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
									</div>
								</div>

								<div className="col-lg-6 col-md-6">
									<div className="single-about">
										<i className="flaticon-project-management"></i>
										<h3>Project Management</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div className="col-lg-6">
						<div className="consulting-about-img">
							<img src="/images/consulting/consulting-about1.jpg" alt="Image" />

							<div className="shape">
								<img src="/images/consulting/consulting-shape.png" alt="Image" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default AboutUs;