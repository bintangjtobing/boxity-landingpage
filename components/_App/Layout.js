import React from 'react'
import Head from "next/head"
import GoTop from './GoTop'
import Preloader from './Preloader'

const Layout = ({ children }) => {

    // Preloader
    const [loader, setLoader] = React.useState(true);
    React.useEffect(() => {
        setTimeout(() => setLoader(false), 1500);
    }, [])

    return(
        <>
            <Head>
                <title>Boxity Central Indonesia</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                <meta name = "description"
                content = "A cloud-based system that helps companies to run their businesses as efficiently as possible. We provide a way for you to manage and integrate various activities and operations of anything that your business needs such as productions, assets, financial management, and human resources management through a software application." />
                <meta name="keywords" content="boxity, boxityerp, realizeboxity, boxity central indonesia, erp boxity, warehouse management, human resources management, financial management, boxity warehouse, boxity WMS, boxity financial, boxity indonesia"/>
                
                {/* facebook */}
                <meta name="og:title" property="og:title" content="Boxity Central Indonesia"></meta>
                <meta name="og:url" property="og:url" content="https://boxity.id"></meta>
                <meta name="og:type" property="og:type" content="website"></meta>
                <meta name="og:image" property="og:image" content="https://res.cloudinary.com/boxity-id/image/upload/v1637316265/assets/site%20needs/parts_m9hpuu.png"></meta>
                <meta name="og:description" property="og:description" content="A cloud-based system that helps companies to run their businesses as efficiently as possible. We provide a way for you to manage and integrate various activities and operations of anything that your business needs such as productions, assets, financial management, and human resources management through a software application."></meta>
                
                {/* twitter */}
                <meta name="twitter:card" content="Boxity Central Indonesia"></meta>
                <meta name="twitter:title" property="og:title" content="Boxity Central Indonesia"></meta>
                <meta name="twitter:url" property="og:url" content="https://boxity.id"></meta>
                <meta name="twitter:type" property="og:type" content="website"></meta>
                <meta name="twitter:image" property="og:image" content="https://res.cloudinary.com/boxity-id/image/upload/v1637316265/assets/site%20needs/parts_m9hpuu.png"></meta>
                <meta name="twitter:description" property="og:description" content="A cloud-based system that helps companies to run their businesses as efficiently as possible. We provide a way for you to manage and integrate various activities and operations of anything that your business needs such as productions, assets, financial management, and human resources management through a software application."></meta>
                <link rel="canonical" href="https://boxity.id/"></link>
                <link rel="shortcut icon" href="https://res.cloudinary.com/boxity-id/image/upload/v1634800361/assets/site%20needs/icon_za3vme.png" type="image/png" sizes="64x64" ></link>
            </Head>

            {children}

            {loader ? <Preloader /> : null}
        
            <GoTop scrollStepInPx="100" delayInMs="10.50" />
        </>
    );
}

export default Layout;