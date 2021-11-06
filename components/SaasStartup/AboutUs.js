import React from 'react';

const AboutUs = () => {
    return (
        <div id="about-us" className="new-services-area ptb-100">
			<div className="container">
				<div className="row align-items-center">
					<div className="col-lg-6">
						<div className="new-services-img">
							<img src="/images/boxity/saas-services-img.png" alt="Image" />

							<div className="new-services-shape">
								<img src="/images/boxity/saas-shape.png" alt="Image" />
							</div>
						</div>
					</div>

					<div className="col-lg-6">
						<div className="new-services-content">
							<h2>Add a new service to better meet customer needs</h2>
							<p> Provide a more effective business system in various industries from manufacturing, retails, education, health - care, professional services, and many other industries. </p>

							<p><b>Optimizing your business operational system:</b> simplifying various operational activities that takes time and effort such as checking inventory, monitoring working hours, payroll, and making financial reports.
							<b> Reducing operational costs:</b> by reducing time and resources, you can avoid disruptions, obstacles and breakdowns through the process of automation.
							<b> A more effective collaboration process:</b> our system helps with centralizing all data.Which means more effective time and more flexible access to data collaboration between each department </p>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default AboutUs;