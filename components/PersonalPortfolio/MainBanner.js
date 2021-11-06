import React from 'react';
import Link from 'next/link';

const MainBanner = () => {
    return (
        <div id="home" className="personal-banner-area">
			<div className="d-table">
				<div className="d-table-cell">
					<div className="container-fluid">
						<div className="row align-items-center">
							<div className="col-lg-6">
								<div className="consulting-banner-img">
									<img src="/images/portfolio/portfolio-banner-img.jpg" alt="Image" />
								</div>
							</div>

							<div className="col-lg-6">
								<div className="personal-banner-content">
									<span>Hello I'm</span>
									<h1>Patricia Davis</h1>
									<h3>Freelance Designer</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dignissimos distinctio non incidunt dolorum qui aspernatur, repellat mollitia maiores</p>

                                    <Link href="#our-works">
                                        <a className="personal-btn scroll-btn">
                                            See my work
                                        </a>
                                    </Link>

									<div className="shape-1">
										<img src="/images/portfolio/portfolio-shape-1.png" alt="Image" />
									</div>
									<div className="shape-2">
										<img src="/images/portfolio/portfolio-shape-2.png" alt="Image" />
									</div>
									<div className="shape-3">
										<img src="/images/portfolio/portfolio-shape-3.png" alt="Image" />
									</div>
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