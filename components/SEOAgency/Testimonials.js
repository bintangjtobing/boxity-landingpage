import React from 'react';
import dynamic from 'next/dynamic';
const OwlCarousel = dynamic(import('react-owl-carousel3'));

const options = {
    items: 1,
    loop: true,
    margin: 0,
    nav: false,
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
        <div className="seo-testimonial-area">
			<div className="container">
                {display ? <OwlCarousel 
                    className="seo-testimonial-slider owl-carousel owl-theme"
                    {...options}
                >
					<div className="single-testimonial">
						<i className="quotes bx bxs-quote-alt-left"></i>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate repellendus minus possimus quam cum nam, aspernatur, nobis laboriosam alias nesciunt consequuntur voluptatem sit placeat quasi, itaque praesentium dolores nisi deleniti Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non animi cum veniam ipsum illum deserunt quos! Iste labore laudantium, reiciendis ullam vitae non atque dolor, similique rem unde dicta ea!</p>

						<ul>
							<li><i className="bx bxs-star"></i></li>
							<li><i className="bx bxs-star"></i></li>
							<li><i className="bx bxs-star"></i></li>
							<li><i className="bx bxs-star"></i></li>
							<li><i className="bx bxs-star"></i></li>
						</ul>

						<div className="testimonial-img">
							<img src="/images/seo/seo-client1.jpg" alt="Image" />
							<h3>Alen Meair</h3>
							<span>Developer</span>
						</div>
					</div>

					<div className="single-testimonial">
						<i className="quotes bx bxs-quote-alt-left"></i>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate repellendus minus possimus quam cum nam, aspernatur, nobis laboriosam alias nesciunt consequuntur voluptatem sit placeat quasi, itaque praesentium dolores nisi deleniti Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non animi cum veniam ipsum illum deserunt quos! Iste labore laudantium, reiciendis ullam vitae non atque dolor, similique rem unde dicta ea!</p>

						<ul>
							<li><i className="bx bxs-star"></i></li>
							<li><i className="bx bxs-star"></i></li>
							<li><i className="bx bxs-star"></i></li>
							<li><i className="bx bxs-star"></i></li>
							<li><i className="bx bxs-star"></i></li>
						</ul>

						<div className="testimonial-img">
							<img src="/images/seo/seo-client2.jpg" alt="Image" />
							<h3>Juhon Smith</h3>
							<span>Developer</span>
						</div>
					</div>
                </OwlCarousel> : ''}
			</div>
		</div>
    )
}

export default Testimonials;