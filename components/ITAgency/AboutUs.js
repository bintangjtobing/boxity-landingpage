import React from 'react';
import Link from 'next/link';
import dynamic from 'next/dynamic';
const ModalVideo = dynamic(() => import('react-modal-video'), {
    ssr: false
});

const AboutUs = () => {
    // Popup Video
	const [isOpen, setIsOpen] = React.useState(true);
    const openModal = () => {
        setIsOpen(!isOpen);
    }
    return (
        <div id="about-us" className="about-area ptb-100">
            {/* If you want to change the video need to update videoID */}
            <ModalVideo 
                channel='youtube' 
                isOpen={!isOpen} 
                videoId='bk7McNUjWgw' 
                onClose={() => setIsOpen(!isOpen)} 
            />

			<div className="container-fluid">
				<div className="row align-items-center">
					<div className="col-lg-6">
						<div className="about-img">
							<img src="/images/agency/agency-about1.png" alt="Image" />

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

					<div className="col-lg-6">
						<div className="about-content">
							<span className="top-title">Our Story</span>
							<h2>By Using Technology, We Have Helped Many Different Companies to Grow Their Business Across The World.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida risus commodo viverra consectetur adipiscing elit, sed do eiusmod.</p>

							<p>maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis consectetur adipiscing elit, sed do.</p>

							<ul>
								<li>
									Dale L. Goldstone
									<span>CEO At Fast</span>
								</li>
								<li>
									<img src="/images/agency/agency-signature.png" alt="Image" />
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default AboutUs;