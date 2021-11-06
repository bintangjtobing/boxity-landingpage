import React from 'react';
import Link from 'next/link';
import dynamic from 'next/dynamic';
const ModalVideo = dynamic(() => import('react-modal-video'), {
    ssr: false
});

const MainBanner = () => {
    // Popup Video
	const [isOpen, setIsOpen] = React.useState(true);
    const openModal = () => {
        setIsOpen(!isOpen);
    }
    return (
        <div id="home" className="consulting-banner-area">
            {/* If you want to change the video need to update videoID */}
            <ModalVideo 
                channel='youtube' 
                isOpen={!isOpen} 
                videoId='bk7McNUjWgw' 
                onClose={() => setIsOpen(!isOpen)} 
            />

			<div className="d-table">
				<div className="d-table-cell">
					<div className="container-fluid">
						<div className="row align-items-center">
							<div className="col-lg-6">
								<div className="consulting-banner-content">
									<h1>We are always as your service for any business Consulting</h1>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dignissimos distinctio non incidunt dolorum qui aspernatur, repellat mollitia maiores</p>
		
									<div className="social-link">
										<span>Follow us:</span>
										<ul>
											<li>
												<a href="https://twitter.com/" target="_blank">
													<i className="bx bxl-twitter"></i>
												</a>
											</li>
											<li>
												<a href="https://instagram.com/" target="_blank">
													<i className="bx bxl-instagram"></i>
												</a>
											</li>
											<li>
												<a href="https://facebook.com/" target="_blank">
													<i className="bx bxl-facebook"></i>
												</a>
											</li>
											<li>
												<a href="https://linkedin.com/" target="_blank">
													<i className="bx bxl-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
		
							<div className="col-lg-6">
								<div className="consulting-banner-img">
									<img src="/images/consulting/consulting-banner-img.jpg" alt="Image" />

									<div className="video-button">
                                        <Link href="#play-video">
                                            <a
                                                onClick={e => {e.preventDefault(); openModal()}}
                                                className="video-btn popup-youtube"
                                            > 
                                                <i className="bx bx-play"></i>
                                            </a>
                                        </Link>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div className="shape-1">
				<img src="/images/consulting/consulting-shape.png" alt="Image" />
			</div>
			<div className="shape-2">
				<img src="/images/consulting/consulting-shape-2.png" alt="Image" />
			</div>
		</div>
    )
}

export default MainBanner;