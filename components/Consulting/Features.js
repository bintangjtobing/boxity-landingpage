import React from 'react';

const Features = () => {
    return (
        <div className="consulting-feature-area">
			<div className="container">
				<div className="row">
					<div className="col-lg-4 col-sm-6">
						<div className="single-consulting-feature bg-1">
							<h3>Advanced analytics</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
						</div>
					</div>

					<div className="col-lg-4 col-sm-6">
						<div className="single-consulting-feature bg-2">
							<h3>Business innovation</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
						</div>
					</div>

					<div className="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
						<div className="single-consulting-feature bg-3">
							<h3>Enterprise technology</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default Features;