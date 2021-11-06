import React from 'react';
import dynamic from 'next/dynamic';
const OwlCarousel = dynamic(import('react-owl-carousel3'));

const options = {
    items: 1,
    loop: true,
    margin: 60,
    nav: true,
    dots: false,
    autoplay: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    navText: [
        "<i class='flaticon-left-arrow'></i>",
        "<i class='flaticon-right-arrow'></i>",
    ],
};

const OurWorks = () => {
    const [display, setDisplay] = React.useState(false);

    React.useEffect(() => {
        setDisplay(true);
    }, [])
    return (
        <div id="our-works" className="our-work-area saas-our-work-area pt-100">
			<div className="container">
				<div className="section-title saas-title">
					<h2>Some shot of our products</h2>
					<p>There are a lot of advantages that you can gain if you choose us.</p>
				</div>
				
                {display ? <OwlCarousel 
                    className="our-work-slider owl-carousel owl-theme"
                    {...options}
                >
					<div className="work-item">
						<a href="#" target="_blank">
							<img src="/images/boxity/saas-work-img-1.png" alt="Dashboard Boxity Central Indonesia App" />
						</a>
					</div>
					<div className="work-item">
						<a href="#" target="_blank">
							<img src="/images/boxity/saas-work-img-2.png" alt="Report Stock Card Boxity Central Indonesia App" />
						</a>
					</div>
					<div className="work-item">
						<a href="#" target="_blank">
							<img src="/images/boxity/saas-work-img-3.png" alt="Issue Center Boxity Central Indonesia App" />
						</a>
					</div>
					<div className="work-item">
						<a href="#" target="_blank">
							<img src="/images/boxity/saas-work-img-4.png" alt="Inventory Item Boxity Central Indonesia App" />
						</a>
					</div>
					<div className="work-item">
						<a href="#" target="_blank">
							<img src="/images/boxity/saas-work-img-5.png" alt="Contact Lists Boxity Central Indonesia App" />
						</a>
					</div>
                </OwlCarousel> : ''}
			</div>
		</div>
    )
}

export default OurWorks;