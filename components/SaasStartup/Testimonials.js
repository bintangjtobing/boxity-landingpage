import React from 'react';
import dynamic from 'next/dynamic';
const OwlCarousel = dynamic(import('react-owl-carousel3'));

const options = {
    items:1,
    loop:true,
	nav: true,
	mouseDrag: false,
    touchDrag: false,
	dots: false,
	autoplay: true,
	smartSpeed:1500,
	autoplayHoverPause: true,
	navText: [
		"<i class='bx bx-chevron-left'></i>",
		"<i class='bx bx-chevron-right'></i>",
	],
};

const Testimonials = () => {
    const [display, setDisplay] = React.useState(false);
    React.useEffect(() => {
        setDisplay(true);
    }, [])
    return (
        <div className="saas-testimonial-area ptb-100">
			<div className="container">
				<div className="row">
					<div className="col-lg-6">
						<div className="testimonial-title">
							<span>Testimonials</span>
							<h2>Check what’s our client say about our ERP startup</h2>
						</div>

                        {display ? <OwlCarousel 
                            className="saas-testimonial-slider owl-carousel owl-theme"
                            {...options}
                        >
							<div className="testimonial-content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor aspernatur incidunt omnis veritatis ipsa fuga labore excepturi iste illum quos, consequatur sed aliquam, quasi delectus magnam ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor.</p>
	
								<h3>Richard Miles</h3>
								<span>Chairman</span>

								<i className="flaticon-quotation quotes-icon"></i>
							</div>

							<div className="testimonial-content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor aspernatur incidunt omnis veritatis ipsa fuga labore excepturi iste illum quos, consequatur sed aliquam, quasi delectus magnam ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor.</p>
	
								<h3>Richard Miles</h3>
								<span>Chairman</span>
								<i className="flaticon-quotation quotes-icon"></i>
							</div>

							<div className="testimonial-content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor aspernatur incidunt omnis veritatis ipsa fuga labore excepturi iste illum quos, consequatur sed aliquam, quasi delectus magnam ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor.</p>
	
								<h3>Richard Miles</h3>
								<span>Chairman</span>

								<i className="flaticon-quotation quotes-icon"></i>
							</div>

							<div className="testimonial-content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor aspernatur incidunt omnis veritatis ipsa fuga labore excepturi iste illum quos, consequatur sed aliquam, quasi delectus magnam ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor.</p>
	
								<h3>Richard Miles</h3>
								<span>Chairman</span>

								<i className="flaticon-quotation quotes-icon"></i>
							</div>

							<div className="testimonial-content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor aspernatur incidunt omnis veritatis ipsa fuga labore excepturi iste illum quos, consequatur sed aliquam, quasi delectus magnam ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor.</p>
	
								<h3>Richard Miles</h3>
								<span>Chairman</span>

								<i className="flaticon-quotation quotes-icon"></i>
							</div>

							<div className="testimonial-content">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor aspernatur incidunt omnis veritatis ipsa fuga labore excepturi iste illum quos, consequatur sed aliquam, quasi delectus magnam ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor.</p>
	
								<h3>Richard Miles</h3>
								<span>Chairman</span>

								<i className="flaticon-quotation quotes-icon"></i>
							</div>
                        </OwlCarousel> : ''}
					</div>
	 
					<div className="col-lg-6">
						<div className="saas-client-images">
							<ul>
								<li>
									<img src="/images/boxity/client1.jpg" alt="Image" />
								</li>
								<li>
									<img src="/images/boxity/client2.jpg" alt="Image" />
								</li>
								<li>
									<img src="/images/boxity/client3.jpg" alt="Image" />
								</li>
								<li>
									<img src="/images/boxity/client4.jpg" alt="Image" />
								</li>
								<li>
									<img src="/images/boxity/client5.jpg" alt="Image" />
								</li>
								<li>
									<img src="/images/boxity/client6.jpg" alt="Image" />
								</li>
							</ul>
						</div>
					</div>
				 
				</div>
			</div>

			<div className="testimonial-bg">
				<img src="/images/boxity/saas-testimonial-bg.png" alt="Image" />
			</div>
		</div>
    )
}

export default Testimonials;