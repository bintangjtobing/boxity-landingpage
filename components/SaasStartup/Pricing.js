import React, { Component } from 'react'
import Link from 'next/link';

export default class Pricing extends Component {
    // Tab
    openTabSection = (evt, tabNmae) => {
        let i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabs_item");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.remove("fadeInUp");
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByTagName("li");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace("current", "");
        }

        document.getElementById(tabNmae).style.display = "block";
        document.getElementById(tabNmae).className += " fadeInUp animated";
        evt.currentTarget.className += "current";
    }
    render() {
        return (
            <div id="pricing" className="pricing-area saas-pricing-area pt-100 pb-70">
                <div className="container">
                    <div className="section-title saas-title">
                        <h2>Choose subscription plan</h2>
                        <p>We provide three types of subscription contract plan for our system. <br/>All benefits are available with one installation of our system in your company.</p>
                    </div>

                    <div className="tab">
                        <div className="row">
                            <div className="col-12">
                                <div className="price-tab">
                                    <ul className="tabs">
                                        <li className="current"
                                            onClick={(e) => this.openTabSection(e, 'tab2')}
                                        >
                                           Yearly
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                            <div className="col-12">
                                <div className="tab_content">
        
                                    <div id="tab2" className="tabs_item">
                                        <div className="row">
                                            <div className="col-lg-4 col-sm-6">
                                                <div className="single-pricing">
                                                    <h3>1 year plan</h3>
                        
                                                    <ul>
                                                        <li>15 days free trial</li>
                                                        <li>100% upfront payment</li>
                                                        <li>Monthly maintenance fee</li>
                                                        <li>24x7 Great support</li>
                                                        <li>Free 1 year website and domain subscription<span>*</span></li>
                                                        <li>32GB cloud storage</li>
                                                        <li>Report adjustments<span>*</span></li>
                                                    </ul>
                                                    <Link href = "https://api.whatsapp.com/send?phone=6281262845980&text=Hello%20Boxity%20Central%20Indonesia,%20I%20am%20really%20interest%20with%20your%201%20year%20plan%20subscription.%20Can%20we%20have%20a%20meeting%20about%20it?" >
                                                        <a className="default-btn">
                                                            Request for quotation
                                                        </a>
                                                    </Link>
                                                </div>
                                            </div>
                        
                                            <div className="col-lg-4 col-sm-6">
                                                <div className="single-pricing">
                                                    <h3>3 years plan</h3>
                        
                                                    <ul>
                                                        <li>20 days free trial</li>
                                                        <li>50% upfront payment and <br/>50% after 3 months of use</li>
                                                        <li>Monthly maintenance fee</li>
                                                        <li>24x7 Great support</li>
                                                        <li>Free 1 year website and domain subscription<span>*</span></li>
                                                        <li>64GB cloud storage</li>
                                                        <li>Report adjustments<span>*</span></li>
                                                    </ul>
                        
                                                    <Link href = "https://api.whatsapp.com/send?phone=6281262845980&text=Hello%20Boxity%20Central%20Indonesia,%20I%20am%20really%20interest%20with%20your%203%20years%20plan%20subscription.%20Can%20we%20have%20a%20meeting%20about%20it?" >
                                                        <a className="default-btn">
                                                            Request
                                                            for quotation
                                                        </a>
                                                    </Link>
                        
                                                </div>
                                            </div>
                        
                                            <div className="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                                <div className="single-pricing active">
                                                    <h3>5 years plan</h3>
                        
                                                    <ul>
                                                        <li>25 days free trial</li>
                                                        <li>50% upfront payment and <br/>50% after 6 months of use</li>
                                                        <li>1x3 months payment maintenance fee</li>
                                                        <li>24x7 Great support</li>
                                                        <li>Free 1 year website and domain subscription<span>*</span></li>
                                                        <li>128GB cloud storage</li>
                                                        <li>Report adjustments<span>*</span></li>
                                                    </ul>
                        
                                                    <Link href = "https://api.whatsapp.com/send?phone=6281262845980&text=Hello%20Boxity%20Central%20Indonesia,%20I%20am%20really%20interest%20with%20your%205%20years%20plan%20subscription.%20Can%20we%20have%20a%20meeting%20about%20it?" >
                                                        <a className="default-btn">                                               Request for quotation
                                                        </a>
                                                    </Link>
                                                    <p>Popular</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}
