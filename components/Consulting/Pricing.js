import React from 'react';
import Link from 'next/link';

const Pricing = () => {
    return (
        <div id="pricing" className="pricing-area consulting-pricing-area pt-100 pb-70">
			<div className="container">
				<div className="section-title consulting-title">
					<h2>Transparent pricing</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>

				<div className="row">
					<div className="col-lg-4 col-sm-6">
						<div className="single-pricing">
							<div className="price">
								<i className="flaticon-send"></i>
								<span>Basic</span>
							</div>

							<ul>
								<li>10 Pages responsive website</li>
								<li>50 SEO keywords</li>
								<li>24x7 Great support</li>
								<li>Customer service</li>
							</ul>

							<div className="prices">
								<h2>$29</h2>
								<span>Per Month</span>
							</div>

                            <Link href="#">
                                <a className="default-btn">
                                    Read more
                                </a>
                            </Link>
						</div>
					</div>

					<div className="col-lg-4 col-sm-6">
						<div className="single-pricing active">
							<div className="price">
								<i className="flaticon-airplane"></i>
								<span>Ultra</span>
							</div>

							<ul>
								<li>30 Pages responsive website</li>
								<li>50 SEO keywords</li>
								<li>24x7 Great support</li>
								<li>Customer service</li>
							</ul>

							<div className="prices">
								<h2>$49</h2>
								<span>Per Month</span>
							</div>

							<Link href="#">
                                <a className="default-btn">
                                    Read more
                                </a>
                            </Link>
						</div>
					</div>

					<div className="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
						<div className="single-pricing">

							<div className="price">
								<i className="flaticon-launch"></i>
								<span>Gold</span>
							</div>

							<ul>
								<li>50 Pages responsive website</li>
								<li>50 SEO keywords</li>
								<li>24x7 Great support</li>
								<li>Customer service</li>
							</ul>

							<div className="prices">
								<h2>$79</h2>
								<span>Per Month</span>
							</div>

							<Link href="#">
                                <a className="default-btn">
                                    Read more
                                </a>
                            </Link>
						</div>
					</div>
				</div>
			</div>

			<div className="shape">
				<img src="/images/consulting/consulting-shape.png" alt="Image" />
			</div>
		</div>
    )
}

export default Pricing;