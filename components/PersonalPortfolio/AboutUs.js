import React from 'react';

const AboutUs = () => {
    return (
        <div id="about-us" className="skill-area pt-100">
			<div className="container">
				<div className="introduction">
					<h3>A brief introduction</h3>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				</div>

				<div className="skill-content">
					<div className="row align-items-center">
						<div className="col-lg-6">
							<div className="all-skill-bar">
								<div className="skill-title">
									<span>Our skill</span>
									<h3>In all those cases i have skills</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis labore et dolore magna aliqua labore.</p>
								</div>

								<div className="skill-bar">
									<h4>
										Development <span>90%</span>
									</h4>
									<div className="progress">
										<div className="progress-bar" role="progressbar" style={{width: "90%"}} aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
		
								<div className="skill-bar">
									<h4>
										Design <span>95%</span>
									</h4>
		
									<div className="progress">
										<div className="progress-bar" role="progressbar" style={{width: "92%"}} aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
		
								<div className="skill-bar mb-0">
									<h4>
										Branding <span>99%</span>
									</h4>
									<div className="progress">
										<div className="progress-bar" role="progressbar" style={{width: "92%"}} aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div> 
							</div>
						</div>

						<div className="col-lg-6">
							<div className="skill-img">
								<img src="/images/portfolio/portfolio-skill-img.png" alt="Image" />
								
								<div className="skill-shape">
									<img src="/images/portfolio/portfolio-skill-shape.png" alt="Image" />
								</div>
							</div>
						</div>
					</div>

					<div className="shape-1">
						<img src="/images/portfolio/portfolio-shape-4.png" alt="Image" />
					</div>
					<div className="shape-2">
						<img src="/images/portfolio/portfolio-shape-5.png" alt="Image" />
					</div>
				</div>
			</div>

			<div className="shape-3">
				<img src="/images/portfolio/portfolio-shape-6.png" alt="Image" />
			</div>
		</div>
    )
}

export default AboutUs;