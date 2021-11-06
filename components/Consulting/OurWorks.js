import React from 'react';
import dynamic from 'next/dynamic';
const OwlCarousel = dynamic(import('react-owl-carousel3'));

const options = {
    loop:true,
	nav: true,
	mouseDrag: false,
    touchDrag: false,
	dots: false,
	margin: 30,
	autoplay: true,
	smartSpeed:1500,
	autoplayHoverPause: true,
	navText: [
		"<i class='bx bx-chevron-left'></i>",
		"<i class='bx bx-chevron-right'></i>",
	],
	responsive:{
		0:{
			items:1,
		},
		576:{
			items:1,
		},
		768:{
			items:2,
		},
		992:{
			items:3,
		}
	}
};

const OurWorks = () => {
	const [display, setDisplay] = React.useState(false);
    React.useEffect(() => {
        setDisplay(true);
    }, [])
    return (
        <div id="our-works" className="consultancy-area ptb-100">
			<div className="container">
				<div className="section-title white-title">
					<h2>See what we do</h2>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla facere quae placeat fuga cupiditate iusto nobis consectetur eius deserunt. Molestias architecto culpa officia exercitationem</p>
				</div>
 
				{display ? <OwlCarousel 
                    className="project-slider owl-carousel owl-theme"
                    {...options}
                >
					<div className="project-item">
						<a href="#" target="_blank">
							<img src="/images/consulting/consulting-project1.jpg" alt="Image" />
						</a>
						
						<div className="project-content">
							<span>Consulting</span>
							<a href="#" target="_blank">
								<h3>Business planing</h3>
							</a>
						</div>
					</div>

					<div className="project-item">
						<a href="#" target="_blank">
							<img src="/images/consulting/consulting-project2.jpg" alt="Image" />
						</a>
						
						<div className="project-content">
							<span>Consulting</span>
							<a href="#" target="_blank">
								<h3>Software planing</h3>
							</a>
						</div>
					</div>

					<div className="project-item">
						<a href="#" target="_blank">
							<img src="/images/consulting/consulting-project3.jpg" alt="Image" />
						</a>
						
						<div className="project-content">
							<span>Consulting</span>
							<a href="#" target="_blank">
								<h3>IT planing</h3>
							</a>
						</div>
					</div>

					<div className="project-item">
						<a href="#" target="_blank">
							<img src="/images/consulting/consulting-project4.jpg" alt="Image" />
						</a>
						
						<div className="project-content">
							<span>Consulting</span>
							<a href="#" target="_blank">
								<h3>App planing</h3>
							</a>
						</div>
					</div>
				</OwlCarousel> : ''}
			</div>
		</div>
    )
}

export default OurWorks;