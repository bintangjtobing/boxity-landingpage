import React from 'react';
import Link from 'next/link';

const Pricing = () => {
    return (
        <div id="pricing" className="pricing-area pt-100 pb-70">
			<div className="container">
				<div className="section-title">
					<span>Pricing plan</span>
					<h2>Effective and flexible pricing</h2>
				</div>

				<div className="row">
					<div className="col-lg-4 col-sm-6">
						<div className="single-pricing">
							<h3>Basic plan</h3>

							<div className="price">
								<h2>$29</h2>
								<span>Per Month</span>
							</div>

							<ul>
								<li>10 Pages responsive website</li>
								<li>50 SEO keywords</li>
								<li>24x7 Great support</li>
								<li>Customer service</li>
							</ul>

                            <Link href="#">
                                <a className="default-btn">
                                    Read more
                                </a>
                            </Link>
						</div>
					</div>

					<div className="col-lg-4 col-sm-6">
						<div className="single-pricing active">
							<h3>Ultra plan</h3>

							<div className="price">
								<h2>$49</h2>
								<span>Per Month</span>
							</div>

							<ul>
								<li>30 Pages responsive website</li>
								<li>50 SEO keywords</li>
								<li>24x7 Great support</li>
								<li>Customer service</li>
							</ul>

                            <Link href="#">
                                <a className="default-btn">
                                    Read more
                                </a>
                            </Link>

							<p>Popular</p>
						</div>
					</div>

					<div className="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
						<div className="single-pricing">
							<h3>Enterprise plan</h3>

							<div className="price">
								<h2>$79</h2>
								<span>Per Month</span>
							</div>

							<ul>
								<li>50 Pages responsive website</li>
								<li>50 SEO keywords</li>
								<li>24x7 Great support</li>
								<li>Customer service</li>
							</ul>

                            <Link href="#">
                                <a className="default-btn">
                                    Read more
                                </a>
                            </Link>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default Pricing;