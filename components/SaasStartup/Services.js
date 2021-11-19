import React from 'react';

const Services = () => {
    return (
        <div id="services" className="sass-services-area pt-100 pb-70">
			<div className="container">
				<div className="row align-items-center">
					<div className="col-lg-6">
						<div className="services-contents">
							<span className="top-title">Our Products</span>
							<h2>Powerfull services offered in one package application development</h2>

							<p> Boxity ERP system provides several modules within our software system including Warehouse Management System, HR Management System, E - commerce System, Hotel Reservation System and Payroll System.All benefits are available with one installation of our system in your company. </p>

							<img src="/images/boxity/saas-service1.png" alt="Image" />
						</div>
					</div>

					<div className="col-lg-6">
						<div className="row">
							<div className="col-lg-6 col-sm-6">
								<div className="sass-single-services-box">
									<i className="flaticon-data-storage"></i>
									<h3>Warehouse Management System</h3>
									<p>Complete control on the operational process including how you maintain your inventory</p>
								</div>
							</div>

							<div className="col-lg-6 col-sm-6">
								<div className="sass-single-services-box">
									<i className="flaticon-digital-marketing-1"></i>
									<h3>Human Resources Management</h3>
									<p>Provide help to reduce a lot of time on manage employee and optimize all the administrative functions</p>
								</div>
							</div>

							<div className="col-lg-6 col-sm-6">
								<div className="sass-single-services-box">
									<i className="flaticon-ecommerce"></i>
									<h3>E-commerce System</h3>
									<p>Helps you with the best experience in the sales and also monitoring of every data reached to customers</p>
								</div>
							</div>

							<div className="col-lg-6 col-sm-6">
								<div className="sass-single-services-box">
									<i className="flaticon-product"></i>
									<h3>Hotel Reservation System</h3>
									<p>helps you to manage your business through the easiest way possible. We provide better management system for hotel</p>
								</div>
							</div>
							<div className="col-lg-6 col-sm-6">
								<div className="sass-single-services-box">
									<i className="flaticon-implement"></i>
									<h3>Payroll System</h3>
									<p>Paying a lot of employees now can be done with a simple process using Boxity ERP</p>
								</div>
							</div>
							<div className="col-lg-6 col-sm-6">
								<div className="sass-single-services-box">
									<i className="flaticon-success"></i>
									<h3>Issue Center System</h3>
									<p>Any critic, complaint and inquiry you have can be directly sent through our Issue Center System</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    )
}

export default Services;