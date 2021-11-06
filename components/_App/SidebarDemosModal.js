import React, { Component } from 'react'

export default class SidebarDemosModal extends Component {
    state = {
        modal: false
    };
 
    closeModal = () => {
        this.props.onClick(this.state.modal);
    }

    render() {
        return (
            <>
                <div className={`demos-side-content ${this.props.active}`}>
                    <div className="modal-header">
                        <h2>View Demo</h2>
                        <button type="button" className="close" onClick={this.closeModal}>
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div className="modal-body">
                        <ul>
                            <li>
                                <div className="demo-item">
                                    <a href="/it-agency" target="_blank">
                                        <span>IT Agency</span>
                                        <img src="/images/demos/it-agency.jpg" alt="Demos" />
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div className="demo-item">
                                    <a href="/saas-startup" target="_blank">
                                        <span>SaaS Startup</span>
                                        <img src="/images/demos/saas-startup.jpg" alt="Demos" />
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div className="demo-item">
                                    <a href="/consulting" target="_blank">
                                        <span>Consulting</span>
                                        <img src="/images/demos/consulting.jpg" alt="Demos" />
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div className="demo-item">
                                    <a href="/seo-agency" target="_blank">
                                        <span>SEO Agency</span>
                                        <img src="/images/demos/seo-agency.jpg" alt="Demos" />
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div className="demo-item">
                                    <a href="/personal-portfolio" target="_blank">
                                        <span>Personal Portfolio</span>
                                        <img src="/images/demos/personal-portfolio.jpg" alt="Demos" />
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </>
        )
    }
}
