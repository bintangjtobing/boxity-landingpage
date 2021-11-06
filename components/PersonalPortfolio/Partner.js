import React from 'react';
import dynamic from 'next/dynamic';
const OwlCarousel = dynamic(import('react-owl-carousel3'));

const options = {
    loop: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 2,
        },
        576:{
            items: 3,
        },
        768:{
            items: 4,
        },
        1200:{
            items: 5,
        }
    }
};

const Partner = () => {
    const [display, setDisplay] = React.useState(false);

    React.useEffect(() => {
        setDisplay(true);
    }, [])
    return (
        <div className="partner-area personal-partner-area pb-100">
			<div className="container">
                {display ? <OwlCarousel 
                    className="partner-slider owl-carousel owl-theme"
                    {...options}
                >
					<div className="partner-item">
						<a href="#" target="_blank">
							<img src="/images/partner/partner-logo-1.png" alt="Image" />
						</a>
					</div>

					<div className="partner-item">
						<a href="#" target="_blank">
							<img src="/images/partner/partner-logo-2.png" alt="Image" />
						</a>
					</div>

					<div className="partner-item">
						<a href="#" target="_blank">
							<img src="/images/partner/partner-logo-3.png" alt="Image" />
						</a>
					</div>

					<div className="partner-item">
						<a href="#" target="_blank">
							<img src="/images/partner/partner-logo-4.png" alt="Image" />
						</a>
					</div>

					<div className="partner-item">
						<a href="#" target="_blank">
							<img src="/images/partner/partner-logo-5.png" alt="Image" />
						</a>
					</div>
                </OwlCarousel> : ''}
			</div>
		</div>
    )
}

export default Partner;