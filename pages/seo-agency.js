import React from 'react';
import NavbarSEOAgency from '../components/_App/NavbarSEOAgency';
import MainBanner from '../components/SEOAgency/MainBanner';
import Features from '../components/SEOAgency/Features';
import AboutUs from '../components/SEOAgency/AboutUs';
import Process from '../components/SEOAgency/Process';
import FunFacts from '../components/SEOAgency/FunFacts';
import Services from '../components/SEOAgency/Services';
import OurWorks from '../components/SEOAgency/OurWorks';
import WhatMakesUsDifferent from '../components/SEOAgency/WhatMakesUsDifferent';
import Pricing from '../components/SEOAgency/Pricing';
import Testimonials from '../components/SEOAgency/Testimonials';
import BlogPost from '../components/SEOAgency/BlogPost';
import ContactUs from '../components/SEOAgency/ContactUs';
import Partner from '../components/SEOAgency/Partner';
import FooterSEOAgency from '../components/_App/FooterSEOAgency';

const SEOAgency = () => {
    return (
        <>
            <div className="bg-fafafa">
                <NavbarSEOAgency />
                <MainBanner />
                <Features />
                <AboutUs />
                <Process />
                <FunFacts />
                <Services />
                <OurWorks />
                <WhatMakesUsDifferent />
                <Pricing />
                <Testimonials />
                <BlogPost />
                <ContactUs />
                <Partner />
                <FooterSEOAgency />
            </div>
        </>
    )
}

export default SEOAgency;