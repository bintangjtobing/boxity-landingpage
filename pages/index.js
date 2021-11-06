import React from 'react';
import NavbarSaasStartup from '../components/_App/NavbarSaasStartup';
import MainBanner from '../components/SaasStartup/MainBanner';
import Partner from '../components/SaasStartup/Partner';
import AboutUs from '../components/SaasStartup/AboutUs';
import Services from '../components/SaasStartup/Services';
import OurWorks from '../components/SaasStartup/OurWorks';
import Pricing from '../components/SaasStartup/Pricing';
import FunFacts from '../components/SaasStartup/FunFacts';
// import ContactUs from '../components/SaasStartup/ContactUs';
import FooterSaasStartup from '../components/_App/FooterSaasStartup';

const SaasStartup = () => {
    return (
        <>
            <div className="bg-fafafa">
                <NavbarSaasStartup />
                <MainBanner />
                <Partner />
                <AboutUs />
                <Services />
                <OurWorks />
                <Pricing />
                <FunFacts />
                {/* <ContactUs /> */}
                <FooterSaasStartup />
            </div>
        </>
    )
}

export default SaasStartup;