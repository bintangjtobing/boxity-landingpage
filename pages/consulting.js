import React from 'react';
import NavbarConsulting from '../components/_App/NavbarConsulting';
import MainBanner from '../components/Consulting/MainBanner';
import Features from '../components/Consulting/Features';
import AboutUs from '../components/Consulting/AboutUs';
import Partner from '../components/Consulting/Partner';
import Services from '../components/Consulting/Services';
import Counter from '../components/Consulting/Counter';
import OurWorks from '../components/Consulting/OurWorks';
import Testimonials from '../components/Consulting/Testimonials';
import TeamMember from '../components/Consulting/TeamMember';
import Pricing from '../components/Consulting/Pricing';
import GetInTouch from '../components/Consulting/GetInTouch';
import LatestNews from '../components/Consulting/LatestNews';
import ContactUs from '../components/Consulting/ContactUs';
import FooterConsulting from '../components/_App/FooterConsulting';

const Consulting = () => {
    return (
        <>
            <NavbarConsulting />
            <MainBanner />
            <Features />
            <AboutUs />
            <Partner />
            <Services />
            <Counter />
            <OurWorks />
            <Testimonials />
            <TeamMember />
            <Pricing />
            <GetInTouch />
            <LatestNews />
            <ContactUs />
            <FooterConsulting />
        </>
    )
}

export default Consulting;