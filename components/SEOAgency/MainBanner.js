import React from 'react';
import Link from 'next/link';

const MainBanner = () => {
    return (
        <div id="home" className="seo-banner-area">
			<div className="d-table">
				<div className="d-table-cell">
					<div className="container-fluid">
						<div className="row align-items-center">
							<div className="col-lg-6">
								<div className="seo-banner-content">
									<h1>We are the leading SEO agency. We provide <span>international SEO</span></h1>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dignissimos distinctio non incidunt dolorum qui aspernatur, repellat mollitia maiores</p>

                                    <Link href="#">
                                        <a className="default-btn seo-btn">
                                            Contact us
                                        </a>
                                    </Link>
								</div>
                            </div>
                            
                            <div className="col-lg-6">
								<div className="consulting-banner-img">
									<img src="/images/seo/seo-banner-img.png" alt="Image" />
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
		</div>
    )
}

export default MainBanner;