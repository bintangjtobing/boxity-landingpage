import '../styles/bootstrap.min.css'
import '../styles/animate.css'
import '../styles/boxicons.min.css'
import '../styles/flaticon.css'
import '../node_modules/react-modal-video/css/modal-video.min.css'
import 'react-accessible-accordion/dist/fancy-example.css'
import '../styles/style.css'
import '../styles/responsive.css'
// For RTL style comment out the below rtl.css
// import '../styles/rtl.css'

import Layout from '../components/_App/Layout';

const MyApp =  ({ Component, pageProps }) => {
    return (
        <Layout>
            <Component {...pageProps} />
        </Layout>
    )
}

export default MyApp