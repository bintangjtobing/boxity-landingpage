import React from 'react';
import NavbarITAgency from '../components/_App/NavbarITAgency';
import MainBanner from '../components/ITAgency/MainBanner';
import Features from '../components/ITAgency/Features';
import AboutUs from '../components/ITAgency/AboutUs';
import FunFacts from '../components/ITAgency/FunFacts';
import Services from '../components/ITAgency/Services';
import OurWorks from '../components/ITAgency/OurWorks';
import Partner from '../components/ITAgency/Partner';
import Pricing from '../components/ITAgency/Pricing';
import GetInTouch from '../components/ITAgency/GetInTouch';
import TeamMember from '../components/ITAgency/TeamMember';
import Testimonials from '../components/ITAgency/Testimonials';
import LatestNews from '../components/ITAgency/LatestNews';
import ContactUs from '../components/ITAgency/ContactUs';
import FooterITAgency from '../components/_App/FooterITAgency';

const ITAgency = () => {
    return (
        <>
            <div className="bg-f3f3f4">
                <NavbarITAgency />
                <MainBanner />
                <Features />
                <AboutUs />
                <FunFacts />
                <Services />
                <OurWorks />
                <Partner />
                <Pricing />
                <GetInTouch />
                <TeamMember />
                <Testimonials />
                <LatestNews />
                <ContactUs />
                <FooterITAgency />
            </div>
        </>
    )
}

export default ITAgency;