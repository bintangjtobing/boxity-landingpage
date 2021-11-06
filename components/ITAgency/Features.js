import React from 'react';

const Features = () => {
    return (
        <div className="feature-area pt-100">
			<div className="container">
				<div className="feature-content">
					<div className="row">
						<div className="col-lg-4 col-md-6">
							<div className="single-feature">
								<i className="flaticon-web"></i>
								<span>Web applications</span>
							</div>
						</div>

						<div className="col-lg-4 col-md-6">
							<div className="single-feature">
								<i className="flaticon-application"></i>
								<span>Mobile applications</span>
							</div>
						</div>

						<div className="col-lg-4 col-md-6">
							<div className="single-feature">
								<i className="flaticon-digital-marketing"></i>
								<span>Digital marketing</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default Features;