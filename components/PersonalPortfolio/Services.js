import React from 'react';

const Services = () => {
    return (
        <div id="services" className="personal-services-area pt-100 pb-70">
			<div className="container">
				<div className="row">
					<div className="col-lg-4">
						<div className="services-content">
							<span>Our services</span>
							<h2>Graphic design services may be just what you're looking for. All the serveces that we provied.</h2>
							<h3>Talk with a professional.</h3>
							<a href="tel:400-747-8899">400-747-8899</a>
							<ul>
								<li>Monday through friday</li>
								<li>8 am to 8pm</li>
							</ul>
						</div>
					</div>

					<div className="col-lg-8">
						<div className="row">
							<div className="col-lg-6 col-sm-6">
								<div className="single-personal-services">
									<i className="flaticon-product-design"></i>
									<h3>Product design</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore sit amet, consectetur adipiscing ipsum dolor sit amet</p>
								</div>
							</div>

							<div className="col-lg-6 col-sm-6">
								<div className="single-personal-services">
									<i className="flaticon-web"></i>
									<h3>Print design</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore sit amet, consectetur adipiscing ipsum dolor sit amet</p>
								</div>
							</div>

							<div className="col-lg-6 col-sm-6">
								<div className="single-personal-services">
									<i className="flaticon-printer"></i>
									<h3>Web design</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore sit amet, consectetur adipiscing ipsum dolor sit amet</p>
								</div>
							</div>

							<div className="col-lg-6 col-sm-6">
								<div className="single-personal-services">
									<i className="flaticon-smartphone"></i>
									<h3>App design</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore sit amet, consectetur adipiscing ipsum dolor sit amet</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default Services;