import React from 'react';

const FunFacts = () => {
    return (
        <div className="counter-area saas-counter-area pt-100 pb-70">
			<div className="container">
				<div className="row">
					<div className="col-lg-3 col-sm-6">
						<div className="single-counter">
							<i className="flaticon-increase"></i>

							<h2>
                                6 <span className="target">+</span>
							</h2>
	
							<p>Years IT development</p>
						</div>
					</div>

					<div className="col-lg-3 col-sm-6">
						<div className="single-counter">
							<i className="flaticon-success-1"></i>
	
							<h2>
                                100 <span className="target">+</span>
							</h2>
	
							<p>Successful projects</p>
						</div>
					</div>

					<div className="col-lg-3 col-sm-6">
						<div className="single-counter">
							<i className="flaticon-customer"></i>
	
							<h2>
                                75 <span className="target">+</span>
							</h2>
	
							<p>Clients served globally</p>
						</div>
					</div>

					<div className="col-lg-3 col-sm-6">
						<div className="single-counter">
							<i className="flaticon-success"></i>
	
							<h2>
                                95 <span className="target">%</span>
							</h2>

							<p>Success rate</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default FunFacts;