import React from 'react';
import dynamic from 'next/dynamic';
const OwlCarousel = dynamic(import('react-owl-carousel3'));

const options = {
    items: 1,
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 1,
        },
        414:{
            items: 1,
        },
        576:{
            items: 2,
        },
        768:{
            items: 2,
        },
        1200:{
            items: 3,
        }
    }
};

const Works = () => {
    const [display, setDisplay] = React.useState(false);

    React.useEffect(() => {
        setDisplay(true);
    }, [])
    return (
        <div id="our-works" className="portfolio-area ptb-100">
			<div className="container-fluid">
				<div className="section-title personal-title">
					<span>Our portfolio</span>
					<h2>Introduce our projects</h2>
				</div>

                {display ? <OwlCarousel 
                    className="portfolio-slider owl-carousel owl-theme"
                    {...options}
                >
					<div className="portfolio-item">
						<a href="#" target="_blank">
							<img src="/images/portfolio/portfolio-work1.jpg" alt="Image" />
						</a>
						<div className="portfolio-content">
							<a href="#" target="_blank">
								<h3>App Design</h3>
							</a>
						</div>
					</div>

					<div className="portfolio-item">
                        <a href="#" target="_blank">
							<img src="/images/portfolio/portfolio-work2.jpg" alt="Image" />
						</a>
						<div className="portfolio-content">
							<a href="#" target="_blank">
								<h3>Website Design</h3>
							</a>
						</div>
					</div>

					<div className="portfolio-item">
                        <a href="#" target="_blank">
							<img src="/images/portfolio/portfolio-work3.jpg" alt="Image" />
						</a>
						<div className="portfolio-content">
							<a href="#" target="_blank">
								<h3>Dashboard Design</h3>
							</a>
						</div>
					</div>

					<div className="portfolio-item">
                        <a href="#" target="_blank">
							<img src="/images/portfolio/portfolio-work4.jpg" alt="Image" />
						</a>
						<div className="portfolio-content">
							<a href="#" target="_blank">
								<h3>Dashboard Design</h3>
							</a>
						</div>
					</div>
                </OwlCarousel> : ''}
			</div>
		</div>
    )
}

export default Works;