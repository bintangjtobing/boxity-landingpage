import React from 'react';
import Link from 'next/link';

const FooterSaasStartup = () => {
    const currentYear = new Date().getFullYear();
    return (
        <>
            <div className="footer-area saas-footer-area pt-100 pb-70">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-6 col-md-6">
                            <div className="single-footer-widget">
                                <Link href="/saas-startup">
                                    <a>
                                        <img src="/images/boxity/saas-logo.png" alt="Image" />
                                    </a>
                                </Link>

                                <p>Boxity provides a way for you to manage and integrate various activities and operations of anything that your business needs such as productions, assets, financial management, and human resources management through a software application.</p>
                            </div>
                        </div>

                        <div className="col-lg-3 col-md-6">
                            <div className="single-footer-widget">
                                <h3>Contact us</h3>
                                
                                <ul className="address">
                                    <li>
                                        Perum Grand Regency 
                                        Jl.Grand Regency V Blok C2 No .21
                                        Bekasi - Indonesia
                                    </li>
                                    <li>
                                        <a href="mailto:info@boxity.id">info@boxity.id</a>
                                    </li>
                                    <li>
                                        <a href="tel:+62 812 6284 5980">+62 812 6284 5980</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {/* <div className="col-lg-3 col-md-6">
                            <div className="single-footer-widget">
                                <h3>Twitter</h3>
                                <p className="twitter-text">Lorem ipsum dolor sittem amet ngcing elit sed eiusmoad <a href="#">www.boxity.id</a> </p>

                                <div className="twitter">
                                    <i className="flaticon-twitter"></i>
                                    <span>Twitter</span>
                                    <span>5 days ago</span>
                                </div>
                            </div>
                        </div> */}

                        <div className="col-lg-3 col-md-6">
                            <div className="single-footer-widget">
                                <h3>Sign up</h3>
                                <p>Follow our newsletter to stay updated about agency.</p>

                                <form className="newsletter-form" data-toggle="validator">
                                    <input type="email" className="form-control" placeholder="Enter email address" name="EMAIL" required />
        
                                    <button className="send-btn" type="submit">
                                        <i className="bx bx-chevron-right"></i>
                                    </button>
                                </form>	

                                <div className="social-area">
                                    <ul>
                                        <li>
                                            <a href="https://instagram.com/realizeboxity" target="_blank">
                                                <i className="bx bxl-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://facebook.com/boxitycentralindonesia" target="_blank">
                                                <i className="bx bxl-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://linkedin.com/company/boxity-central-indonesia" target="_blank">
                                                <i className="bx bxl-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div className="copy-right saas-copy-right">
                <div className="container">
                    <p>Copyright &copy; {currentYear} Boxity Central indonesia.</p>
                </div>
            </div>
        </>
    )
}

export default FooterSaasStartup;