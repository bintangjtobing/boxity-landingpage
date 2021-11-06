import React from 'react';
import Link from 'next/link';

const BlogSidebar = () => {
    return (
        <div className="widget-sidebar">
            <div className="sidebar-widget search">
                <form className="search-form">
                    <input className="form-control" name="search" placeholder="Search here" type="text" />
                    <button className="search-button" type="submit">
                        <i className="bx bx-search"></i>
                    </button>
                </form>	
            </div>

            <div className="sidebar-widget categories">
                <h3>Categories</h3>

                <ul>
                    <li>
                        <Link href="#">
                            <a>Business</a>
                        </Link>
                    </li>
                    <li>
                        <Link href="#">
                            <a>Privacy</a>
                        </Link>
                    </li>
                    <li>
                        <Link href="#">
                            <a>Technology</a>
                        </Link>
                    </li>
                    <li>
                        <Link href="#">
                            <a>Tips</a>
                        </Link>
                    </li>
                    <li>
                        <Link href="#">
                            <a>Uncategorized</a>
                        </Link>
                    </li>
                </ul>
            </div>

            <div className="sidebar-widget latest-news">
                <h3 className="widget-title">Latest news</h3>
                
                <ul>
                    <li>
                        <Link href="#">
                            <a>
                                Making peace with the feast or famine of freelancing
                            </a>
                        </Link>
                        <span>August 29,2020</span>
                    </li>
                    <li>
                        <Link href="#">
                            <a>
                                I used the web for a day on a 50 mb budget
                            </a>
                        </Link>
                        <span>August 30,2020</span>
                    </li>
                    <li>
                        <Link href="#">
                            <a>
                                How to create a responsive popup gallery?
                            </a>
                        </Link>
                        <span>August 31,2020</span>
                    </li>
                </ul>
            </div>

            <div className="sidebar-widget tags">
                <h3>Tags</h3>

                <ul>
                    <li>
                        <Link href="#">
                            <a>Business</a>
                        </Link>
                    </li>
                    <li>
                        <Link href="#">
                            <a>Privacy</a>
                        </Link>
                    </li>
                    <li>
                        <Link href="#">
                            <a>Technology</a>
                        </Link>
                    </li>
                    <li>
                        <Link href="#">
                            <a>Tips</a>
                        </Link>
                    </li>
                    <li>
                        <Link href="#">
                            <a>Uncategorized</a>
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    )
}

export default BlogSidebar;