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
                content = "Boxity provides a way for you to manage and integrate various activities and operations of anything that your business needs such as productions, assets, financial management, and human resources management through a software application." />
                <meta name="keywords" content="boxity, boxityerp, realizeboxity, boxity central indonesia, erp boxity, warehouse management, human resources management, financial management, boxity warehouse, boxity WMS, boxity financial"/>
                <meta name="og:title" property="og:title" content="Boxity Central Indonesia"></meta>
                <meta name="twitter:card" content="Boxity Central Indonesia"></meta>
                <link rel="canonical" href="https://boxity.id/"></link>
            </Head>

            {children}

            {loader ? <Preloader /> : null}
        
            <GoTop scrollStepInPx="100" delayInMs="10.50" />
        </>
    );
}

export default Layout;