import React from 'react';
import Link from 'next/link';

const GetInTouch = () => {
    return (
        <div className="get-in-touch-area consulting-get-in-touch-area ptb-100">
			<div className="container">
				<div className="row align-items-center">
					<div className="col-lg-9">
						<div className="get-in-touch-content">
							<h2>We smithy open, long-lasting partnerships with our customers.</h2>
						</div>
					</div>

					<div className="col-lg-3">
						<div className="get-in-touch-btn">
                            <Link href="#">
                                <a className="default-btn">
                                    Get in touch
                                </a>
                            </Link>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default GetInTouch;