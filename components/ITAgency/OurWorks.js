import React from 'react';
import dynamic from 'next/dynamic';
const OwlCarousel = dynamic(import('react-owl-carousel3'));

const options = {
    loop: true,
    margin: 60,
    nav: true,
    dots: false,
    autoplay: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    mouseDrag: false,
    touchDrag: false,
    navText: [
        "<i class='flaticon-left-arrow'></i>",
        "<i class='flaticon-right-arrow'></i>",
    ],
    responsive:{
        0:{
			items: 1,
			margin: 0,
        },
        414:{
			items: 1,
			margin: 0,
        },
        576:{
			items: 2,
			margin: 30,
        },
        768:{
			items: 2,
			margin: 30,
        },
        1200:{
            items: 3,
        }
    }
};

const OurWorks = () => {
    const [display, setDisplay] = React.useState(false);

    React.useEffect(() => {
        setDisplay(true);
    }, [])
    return (
        <div id="our-works" className="case-area pt-70 pb-100">
			<div className="container-fluid">
				<div className="section-title">
					<span>Case study</span>
					<h2>We develop technology solutions</h2>
				</div>

                {display ? <OwlCarousel 
                    className="case-slider owl-carousel owl-theme"
                    {...options}
                >
					<div className="single-case">
						<a href="#" target="_blank">
							<img src="/images/agency/agency-work1.jpg" alt="Image" />
						</a>

						<div className="case-content">
							<a href="#" target="_blank">
								<h3>Web development</h3>
							</a>
						</div>
					</div>

					<div className="single-case">
						<a href="#" target="_blank">
							<img src="/images/agency/agency-work2.jpg" alt="Image" />
						</a>
						
						<div className="case-content">
							<a href="#" target="_blank">
								<h3>Business analytics</h3>
							</a>
						</div>
					</div>

					<div className="single-case">
						<a href="#" target="_blank">
							<img src="/images/agency/agency-work3.jpg" alt="Image" />
						</a>
						
						<div className="case-content">
							<a href="#" target="_blank">
								<h3>Mobile app development</h3>
							</a>
						</div>
					</div>

					<div className="single-case">
						<a href="#" target="_blank">
							<img src="/images/agency/agency-work4.jpg" alt="Image" />
						</a>

						<div className="case-content">
							<a href="#" target="_blank">
								<h3>Mobile data development</h3>
							</a>
						</div>
					</div>
                </OwlCarousel> : ''}
			</div>

			<div className="case-shape">
				<img src="/images/agency/agency-work-shape.png" alt="Image" />
			</div>
		</div>
    )
}

export default OurWorks;