import React from 'react';
import dynamic from 'next/dynamic';
const OwlCarousel = dynamic(import('react-owl-carousel3'));

const options = {
    items:1,
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: true,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    animateOut: "slideOutDown",
    mouseDrag: false,
    touchDrag: false,
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
        <div className="testimonial-area">
			<div className="container">
				<div className="section-title">
					<span>Testimonials</span>
					<h2>Check what’s our client say about our IT agency</h2>
				</div>

                {display ? <OwlCarousel 
                    className="testimonial-slider owl-carousel owl-theme"
                    {...options}
                >
					<div className="row align-items-center">
						<div className="col-lg-4">
							<div className="testimonial-img">
								<img src="/images/agency/agency-client1.jpg" alt="Image" />
							</div>
						</div>
						<div className="col-lg-8">
							<div className="testimonial-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum odio accusantium sunt voluptates veniam ea fuga nostrum deserunt expedita saepe enim deleniti earum, quibusdam magni quis nobis soluta at Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut eveniet ea vitae, recusandae magni nisi debitis molestiae eum ab accusamus alias nam distinctio fugit, dolorum, quod excepturi dolores laborum deserunt quibusdam magni quis nobis soluta at Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut eveniet.</p>
								<h3>Richard Miles</h3>
								<span>Chairman</span>
							</div>
						</div>
					</div>

					<div className="row align-items-center">
						<div className="col-lg-4">
							<div className="testimonial-img">
								<img src="/images/agency/agency-client2.jpg" alt="Image" />
							</div>
						</div>
						<div className="col-lg-8">
							<div className="testimonial-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum odio accusantium sunt voluptates veniam ea fuga nostrum deserunt expedita saepe enim deleniti earum, quibusdam magni quis nobis soluta at Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut eveniet ea vitae, recusandae magni nisi debitis molestiae eum ab accusamus alias nam distinctio fugit, dolorum, quod excepturi dolores laborum deserunt quibusdam magni quis nobis soluta at Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut eveniet.</p>
								<h3>Juhon Smith</h3>
								<span>Developer</span>
							</div>
						</div>
					</div>
                </OwlCarousel> : ''}
			</div>
		</div>
    )
}

export default Testimonials;