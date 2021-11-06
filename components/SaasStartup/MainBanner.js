import React from 'react';
import Link from 'next/link';

const MainBanner = () => {
    return (
        <div id="home" className="saas-banner-area">
			<div className="d-table">
				<div className="d-table-cell">
					<div className="container">
						<div className="saas-banner-content">
							<h1>Boxity is here to provide <span>ERP</span> solution</h1>
							<p> Boxity provides a way
							for you to manage and integrate various activities and operations of anything that your business needs such as productions, assets, financial management, and human resources management through a software application.</p>

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