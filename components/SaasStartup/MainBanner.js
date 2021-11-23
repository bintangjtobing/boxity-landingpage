import React from 'react';
import Link from 'next/link';

const MainBanner = () => {
    return (
        <div id="home" className="saas-banner-area">
			<div className="d-table">
				<div className="d-table-cell">
					<div className="container">
						<div className="saas-banner-content">
							<h1>Integrate Every Works You Have</h1>
							<p>A cloud-based system that helps companies to run their businesses as efficiently as possible. We provide a way for you to manage and integrate various activities and operations of anything that your business needs such as productions, assets, financial management, and human resources management through a software application.</p>

                            <Link href="#">
                                <a className="default-btn saas-btn scroll-btn">
                                    Get started
                                </a>
                            </Link>
						</div>

						<div className="saas-banner-img">
							<img src="/images/boxity/saas-banner-img-copy.png" alt="Image" />

							<div className="banner-shape-1">
								<img src="/images/boxity/saas-shape.png" alt="Image" />
							</div>
							<div className="banner-shape-2">
								<img src="/images/boxity/saas-shape.png" alt="Image" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default MainBanner;