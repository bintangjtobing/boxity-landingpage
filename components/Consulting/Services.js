import React from 'react';

const Services = () => {
    return (
        <div id="services" className="consulting-services-area pt-100 pb-70">
			<div className="container">
				<div className="section-title consulting-title">
					<h2>Consulting Services</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				
				<div className="row">
					<div className="col-lg-4 col-sm-6">
						<div className="single-consulting-services bg-1">
							<i className="flaticon-advertising"></i>
							<h3>Advanced analytics</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
						</div>
					</div>

					<div className="col-lg-4 col-sm-6">
						<div className="single-consulting-services bg-2">
							<i className="flaticon-competition"></i>
							<h3>Cost transformation</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
						</div>
					</div>

					<div className="col-lg-4 col-sm-6">
						<div className="single-consulting-services bg-3">
							<i className="flaticon-research-and-development"></i>
							<h3>Sustainability</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
						</div>
					</div>

					<div className="col-lg-4 col-sm-6">
						<div className="single-consulting-services bg-4">
							<i className="flaticon-user-experience"></i>
							<h3>Customer experience</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
						</div>
					</div>

					<div className="col-lg-4 col-sm-6">
						<div className="single-consulting-services bg-5">
							<i className="flaticon-strategy"></i>
							<h3>Strategy</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
						</div>
					</div>

					<div className="col-lg-4 col-sm-6">
						<div className="single-consulting-services bg-6">
							<i className="flaticon-sales"></i>
							<h3>Profit Planning</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
						</div>
					</div>
				</div>
			</div>

			<div className="shape">
				<img src="/images/consulting/consulting-shape-3.png" alt="Image" />
			</div>
		</div>
    )
}

export default Services;