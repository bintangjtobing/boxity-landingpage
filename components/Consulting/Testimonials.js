import React from 'react';
import dynamic from 'next/dynamic';
const OwlCarousel = dynamic(import('react-owl-carousel3'));

const options = {
    items: 1,
    loop: true,
    margin: 0,
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

const Testimonials = () => {
    const [display, setDisplay] = React.useState(false);

    React.useEffect(() => {
        setDisplay(true);
    }, [])
    return (
        <div className="consulting-testimonial-area ptb-100">
			<div className="container">
				<div className="row">
					<div className="col-lg-12">
						<div className="testimonial-title">
							<span>Testimonials</span>
							<h2>Check what’s our client say about our Consulting agency</h2>
						</div>

                        {display ? <OwlCarousel 
                            className="consulting-testimonial-slider owl-carousel owl-theme"
                            {...options}
                        >
							<div className="row align-items-center">
								<div className="col-lg-6">
									<div className="testimonial-img">
										<img src="/images/consulting/consulting-testimonial-1.png" alt="Image" />
									</div>
								</div>

								<div className="col-lg-6">
									<div className="testimonial-content">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor aspernatur incidunt omnis veritatis ipsa fuga labore excepturi iste illum quos, consequatur sed aliquam, quasi delectus magnam ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor.</p>
			
										<h3>Richard Miles</h3>
										<span>Chairman</span>
									</div>
								</div>
							</div>

							<div className="row align-items-center">
								<div className="col-lg-6">
									<div className="testimonial-img">
										<img src="/images/consulting/consulting-testimonial-1.png" alt="Image" />
									</div>
								</div>

								<div className="col-lg-6">
									<div className="testimonial-content">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor aspernatur incidunt omnis veritatis ipsa fuga labore excepturi iste illum quos, consequatur sed aliquam, quasi delectus magnam ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor.</p>
			
										<h3>Richard Miles</h3>
										<span>Chairman</span>
									</div>
								</div>
							</div>
                        </OwlCarousel> : ''}
					</div>
				</div>
			</div>
		</div>
    )
}

export default Testimonials;