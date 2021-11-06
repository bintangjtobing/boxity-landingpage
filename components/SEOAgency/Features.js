import React from 'react';

const Features = () => {
    return (
        <div className="feature-area pt-100">
			<div className="container">
				<div className="feature-content pb-100">
					<div className="row">
						<div className="col-lg-4 col-md-6">
							<div className="single-feature">
								<i className="flaticon-sales"></i>
								<span>Increase enquiries & sales</span>
							</div>
						</div>

						<div className="col-lg-4 col-md-6">
							<div className="single-feature">
								<i className="flaticon-license"></i>
								<span>Improve website usability</span>
							</div>
						</div>

						<div className="col-lg-4 col-md-6">
							<div className="single-feature">
								<i className="flaticon-seo-1"></i>
								<span>Increase website traffic</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default Features;